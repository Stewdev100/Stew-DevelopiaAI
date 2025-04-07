<?php

namespace App\Models;

use App\Models\Faq;
use App\Models\Order;
use App\Models\ChatLog;
use Illuminate\Support\Str;
use App\Models\TenantBranding;
use App\Models\TenantDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'email',
        'api_key',
        'system_prompt',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the tenant's branding settings
     */
    public function branding(): HasOne
    {
        return $this->hasOne(TenantBranding::class);
    }

    /**
     * Get the tenant's documents
     */
    public function documents(): HasMany
    {
        return $this->hasMany(TenantDocument::class);
    }

    /**
     * Get the tenant's FAQs
     */
    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class, 'tenant_id', 'slug');
    }

    /**
     * Get the tenant's orders
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'tenant_id', 'slug');
    }

    /**
     * Get the tenant's chat logs
     */
    public function chatLogs(): HasMany
    {
        return $this->hasMany(ChatLog::class, 'tenant_id', 'slug');
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tenant) {
            // Generate API key if not provided
            if (empty($tenant->api_key)) {
                $tenant->api_key = Str::random(32);
            }
        });
    }
}
