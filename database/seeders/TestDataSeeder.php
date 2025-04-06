<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create test FAQs for tenant1
        Faq::create([
            'tenant_id' => 'tenant1',
            'question' => 'What is your return policy?',
            'answer' => 'You can return any item within 30 days of purchase for a full refund.'
        ]);

        Faq::create([
            'tenant_id' => 'tenant1',
            'question' => 'How do I track my order?',
            'answer' => 'You can track your order by providing your order ID in the chat.'
        ]);

        // Create test Orders for tenant1
        Order::create([
            'tenant_id' => 'tenant1',
            'order_id' => 'ORD123456',
            'status' => 'shipped'
        ]);

        Order::create([
            'tenant_id' => 'tenant1',
            'order_id' => 'ORD789012',
            'status' => 'processing'
        ]);

        // Create test FAQs for tenant2
        Faq::create([
            'tenant_id' => 'tenant2',
            'question' => 'Do you offer international shipping?',
            'answer' => 'Yes, we ship to most countries worldwide. Shipping costs vary by location.'
        ]);

        // Create test Orders for tenant2
        Order::create([
            'tenant_id' => 'tenant2',
            'order_id' => 'ORD345678',
            'status' => 'delivered'
        ]);
    }
}
