<?php

namespace App\Models;

use App\Models\ChatLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
     * Get the chat logs that referenced this FAQ
     */
    public function chatLogs(): HasMany
    {
        return $this->hasMany(ChatLog::class, 'faq_id');
    }
}
