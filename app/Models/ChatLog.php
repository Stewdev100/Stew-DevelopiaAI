<?php

namespace App\Models;

use App\Models\Faq;
use App\Models\Order;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'user_message',
        'bot_response',
        'faq_id',
        'order_id'
    ];

    /**
     * Get the tenant that owns the chat log
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'slug');
    }

    /**
     * Get the FAQ that was referenced in this chat
     */
    public function faq(): BelongsTo
    {
        return $this->belongsTo(Faq::class);
    }

    /**
     * Get the order that was referenced in this chat
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
