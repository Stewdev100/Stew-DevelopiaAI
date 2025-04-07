<?php

namespace App\Models;

use App\Models\Tenant;
use App\Models\ChatLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'order_id',
        'status',
    ];

    /**
     * Get the tenant that owns the order
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'slug');
    }

    /**
     * Get the chat logs that referenced this order
     */
    public function chatLogs(): HasMany
    {
        return $this->hasMany(ChatLog::class, 'order_id');
    }
}
