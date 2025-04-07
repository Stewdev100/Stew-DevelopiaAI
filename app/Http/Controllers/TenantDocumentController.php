<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\TenantDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TenantDocumentController extends Controller
{
    /**
     * Display a listing of the tenant's documents.
     */
    public function index(Tenant $tenant)
    {
        $documents = $tenant->documents()->latest()->get();
        return view('tenants.documents.index', compact('tenant', 'documents'));
    }

    /**
     * Show the form for creating a new document.
     */
    public function create(Tenant $tenant)
    {
        return view('tenants.documents.create', compact('tenant'));
    }

    /**
     * Store a newly created document in storage.
     */
    public function store(Request $request, Tenant $tenant)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:pdf,markdown,url',
            'url' => 'required_if:type,url|nullable|url',
            'file' => 'required_if:type,pdf|nullable|file|mimes:pdf|max:10240',
            'content' => 'required_if:type,markdown|nullable|string',
        ]);

        // Handle file upload for PDF
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('documents', 'public');
            $validated['file_path'] = $path;
        }

        // Create document
        $document = $tenant->documents()->create($validated);

        Log::info('Tenant document created', [
            'tenant_id' => $tenant->id,
            'document_id' => $document->id
        ]);

        return redirect()->route('tenants.documents.index', $tenant)
            ->with('success', 'Document added successfully.');
    }

    /**
     * Remove the specified document from storage.
     */
    public function destroy(Tenant $tenant, TenantDocument $document)
    {
        // Delete file if exists
        if ($document->file_path) {
            Storage::delete($document->file_path);
        }

        $document->delete();

        Log::info('Tenant document deleted', [
            'tenant_id' => $tenant->id,
            'document_id' => $document->id
        ]);

        return redirect()->route('tenants.documents.index', $tenant)
            ->with('success', 'Document deleted successfully.');
    }

    /**
     * Process the document for AI training.
     */
    public function process(Tenant $tenant, TenantDocument $document)
    {
        // TODO: Implement document processing logic
        // This will be implemented when we add OpenAI integration
        // It will:
        // 1. Extract text from PDFs
        // 2. Process markdown/text
        // 3. Fetch and process URL content
        // 4. Generate embeddings
        // 5. Store in vector database

        $document->update(['is_processed' => true]);

        Log::info('Tenant document processed', [
            'tenant_id' => $tenant->id,
            'document_id' => $document->id
        ]);

        return redirect()->route('tenants.documents.index', $tenant)
            ->with('success', 'Document processed successfully.');
    }
}
