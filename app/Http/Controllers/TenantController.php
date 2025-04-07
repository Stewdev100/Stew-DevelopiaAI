<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class TenantController extends Controller
{
    /**
     * Display a listing of the tenants.
     */
    public function index()
    {
        $tenants = Tenant::all();
        return view('tenants.index', compact('tenants'));
    }

    /**
     * Show the form for creating a new tenant.
     */
    public function create()
    {
        return view('tenants.create');
    }

    /**
     * Store a newly created tenant in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tenants',
            'system_prompt' => 'nullable|string',
        ]);

        // Generate slug from name
        $validated['slug'] = Str::slug($validated['name']);

        // Create tenant
        $tenant = Tenant::create($validated);

        // Create default branding
        $tenant->branding()->create([
            'primary_color' => '#4F46E5',
            'secondary_color' => '#10B981',
            'chatbot_title' => 'Chat with ' . $tenant->name,
            'welcome_message' => 'Hello! How can I help you today?',
        ]);

        Log::info('Tenant created', ['tenant_id' => $tenant->id]);

        return redirect()->route('tenants.show', $tenant)
            ->with('success', 'Tenant created successfully.');
    }

    /**
     * Display the specified tenant.
     */
    public function show(Tenant $tenant)
    {
        return view('tenants.show', compact('tenant'));
    }

    /**
     * Show the form for editing the specified tenant.
     */
    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', compact('tenant'));
    }

    /**
     * Update the specified tenant in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tenants,email,' . $tenant->id,
            'system_prompt' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        // Update slug if name changed
        if ($validated['name'] !== $tenant->name) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $tenant->update($validated);

        Log::info('Tenant updated', ['tenant_id' => $tenant->id]);

        return redirect()->route('tenants.show', $tenant)
            ->with('success', 'Tenant updated successfully.');
    }

    /**
     * Remove the specified tenant from storage.
     */
    public function destroy(Tenant $tenant)
    {
        $tenant->delete();

        Log::info('Tenant deleted', ['tenant_id' => $tenant->id]);

        return redirect()->route('tenants.index')
            ->with('success', 'Tenant deleted successfully.');
    }

    /**
     * Regenerate API key for the tenant.
     */
    public function regenerateApiKey(Tenant $tenant)
    {
        $tenant->update(['api_key' => Str::random(32)]);

        Log::info('API key regenerated', ['tenant_id' => $tenant->id]);

        return redirect()->route('tenants.show', $tenant)
            ->with('success', 'API key regenerated successfully.');
    }
}
