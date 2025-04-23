<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\TenantBranding;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create test tenant 1
        $tenant1 = Tenant::create([
            'name' => 'Test Store 1',
            'slug' => 'test-store-1',
            'email' => 'store1@example.com',
            'api_key' => 'test_api_key_1',
            'system_prompt' => 'You are a helpful assistant for Test Store 1.',
            'is_active' => true
        ]);

        TenantBranding::create([
            'tenant_id' => $tenant1->id,
            'primary_color' => '#4F46E5',
            'secondary_color' => '#10B981',
            'chatbot_title' => 'Test Store 1 Support',
            'welcome_message' => 'Hello! How can I help you today?'
        ]);

        // Create test tenant 2
        $tenant2 = Tenant::create([
            'name' => 'Test Store 2',
            'slug' => 'test-store-2',
            'email' => 'store2@example.com',
            'api_key' => 'test_api_key_2',
            'system_prompt' => 'You are a helpful assistant for Test Store 2.',
            'is_active' => true
        ]);

        TenantBranding::create([
            'tenant_id' => $tenant2->id,
            'primary_color' => '#EC4899',
            'secondary_color' => '#F59E0B',
            'chatbot_title' => 'Test Store 2 Support',
            'welcome_message' => 'Welcome! How may I assist you?'
        ]);
    }
} 