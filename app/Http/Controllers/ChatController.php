<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    /**
     * Handle incoming chat messages
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request)
    {
        dd(' admin ChatController');
        // Log the incoming message for debugging
        Log::info('Chat message received', [
            'message' => $request->input('message'),
            'user' => $request->input('user')
        ]);

        // TODO: Add your chat logic here
        // For now, we'll just echo back a simple response
        return response()->json([
            'message' => 'Thanks for your message! This is a placeholder response.',
            'timestamp' => now()->toIso8601String()
        ]);
    }
} 