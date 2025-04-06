<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ChatLog;
use App\Models\Faq;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
      
        // Debug log for incoming request
        Log::debug('Chat request received', [
            'message' => $request->message,
            'tenant_id' => $request->header('X-Tenant-ID')
        ]);

        // Get tenant ID from header
        $tenantId = $request->header('X-Tenant-ID');
       
        if (!$tenantId) {
            return response()->json(['error' => 'Tenant ID is required'], 400);
        }

        $userMessage = $request->message;

        // Simple response logic (to be enhanced with AI later)
        $response = $this->generateResponse($userMessage, $tenantId);

        // Log the chat interaction
        ChatLog::create([
            'tenant_id' => $tenantId,
            'user_message' => $userMessage,
            'bot_response' => $response,
        ]);

        return response()->json([
            'response' => $response
        ]);
    }

    private function generateResponse($message, $tenantId)
    {
        // Check if message contains order tracking keywords
        if (stripos($message, 'track') !== false || stripos($message, 'order') !== false) {
            // Extract order ID from message (basic implementation)
            preg_match('/\b[A-Z0-9]{6,}\b/', $message, $matches);
            if (!empty($matches)) {
                $orderId = $matches[0];
                $order = Order::where('tenant_id', $tenantId)
                    ->where('order_id', $orderId)
                    ->first();
                
                if ($order) {
                    return "Order #{$orderId} status: {$order->status}";
                }
                return "Sorry, I couldn't find order #{$orderId}";
            }
            return "Please provide an order ID to track";
        }

        // Check FAQs
        $faq = Faq::where('tenant_id', $tenantId)
            ->where('question', 'like', "%{$message}%")
            ->first();

        if ($faq) {
            return $faq->answer;
        }

        // Default response
        return "I'm sorry, I don't understand. Please try rephrasing your question.";
    }
}
