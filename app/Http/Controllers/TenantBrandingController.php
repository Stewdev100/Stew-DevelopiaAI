<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\TenantBranding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TenantBrandingController extends Controller
{
    /**
     * Show the form for editing the tenant's branding.
     */
    public function edit(Tenant $tenant)
    {
        return view('tenants.branding.edit', compact('tenant'));
    }

    /**
     * Update the tenant's branding in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        $validated = $request->validate([
            'primary_color' => 'required|string|max:7',
            'secondary_color' => 'required|string|max:7',
            'logo' => 'nullable|image|max:1024',
            'chatbot_title' => 'required|string|max:255',
            'chatbot_subtitle' => 'nullable|string|max:255',
            'welcome_message' => 'required|string|max:255',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($tenant->branding && $tenant->branding->logo_url) {
                Storage::delete($tenant->branding->logo_url);
            }

            // Store new logo
            $path = $request->file('logo')->store('logos', 'public');
            $validated['logo_url'] = $path;
        }

        // Update or create branding
        $tenant->branding()->updateOrCreate(
            ['tenant_id' => $tenant->id],
            $validated
        );

        Log::info('Tenant branding updated', ['tenant_id' => $tenant->id]);

        return redirect()->route('tenants.show', $tenant)
            ->with('success', 'Branding updated successfully.');
    }

    /**
     * Reset the tenant's branding to defaults.
     */
    public function reset(Tenant $tenant)
    {
        // Delete logo if exists
        if ($tenant->branding && $tenant->branding->logo_url) {
            Storage::delete($tenant->branding->logo_url);
        }

        // Reset to defaults
        $tenant->branding()->updateOrCreate(
            ['tenant_id' => $tenant->id],
            [
                'primary_color' => '#4F46E5',
                'secondary_color' => '#10B981',
                'logo_url' => null,
                'chatbot_title' => 'Chat with ' . $tenant->name,
                'chatbot_subtitle' => null,
                'welcome_message' => 'Hello! How can I help you today?',
            ]
        );

        Log::info('Tenant branding reset', ['tenant_id' => $tenant->id]);

        return redirect()->route('tenants.show', $tenant)
            ->with('success', 'Branding reset to defaults.');
    }
}