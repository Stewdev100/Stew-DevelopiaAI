<?php

namespace App\Models;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TenantDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'title',
        'type',
        'url',
        'file_path',
        'content',
        'is_processed',
    ];

    protected $casts = [
        'is_processed' => 'boolean',
    ];

    /**
     * Get the tenant that owns the document
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
