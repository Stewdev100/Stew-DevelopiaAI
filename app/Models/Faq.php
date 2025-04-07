<?php

namespace App\Models;

use App\Models\Tenant;
use App\Models\ChatLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'question',
        'answer',
    ];

    /**
     * Get the tenant that owns the FAQ
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'slug');
    }

    /**
     * Get the chat logs that referenced this FAQ
     */
    public function chatLogs(): HasMany
    {
        return $this->hasMany(ChatLog::class, 'faq_id');
    }
}
