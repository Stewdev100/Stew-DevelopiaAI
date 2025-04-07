<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenant_brandings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->onDelete('cascade');
            $table->string('primary_color')->default('#4F46E5');
            $table->string('secondary_color')->default('#10B981');
            $table->string('logo_url')->nullable();
            $table->string('chatbot_title')->default('Chat with us');
            $table->string('chatbot_subtitle')->nullable();
            $table->string('welcome_message')->default('Hello! How can I help you today?');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_brandings');
    }
};
