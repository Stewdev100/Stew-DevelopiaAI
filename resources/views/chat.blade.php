{{-- 
    OpenWidget Chat Implementation
    This view contains the chat widget configuration for DevelopiaAI
    Last updated: {{ now()->format('Y-m-d') }}
--}}

{{-- Load OpenWidget from CDN --}}
<script src="https://unpkg.com/openwidget@latest"></script>

{{-- Chat Widget Container --}}
<div id="developiaai-chat"></div>

{{-- Initialize OpenWidget with Configuration --}}
<script>
    // Debug log for widget initialization
    console.log('Initializing DevelopiaAI Chat Widget...');

    // Widget Configuration
    const widgetConfig = {
        container: '#developiaai-chat',
        apiUrl: "{{ url('/api/chat') }}",
        placeholder: 'Ask me anything about Developia…',
        logoUrl: "{{ asset('images/logo.svg') }}", // Using Laravel's asset helper
        theme: { 
            primaryColor: '#4A48B0', 
            headerText: 'DevelopiaAI Support' 
        },
        position: { 
            bottom: '20px', 
            right: '20px' 
        }
    };

    // Initialize the widget
    OpenWidget.init(widgetConfig);

    // Debug log for successful initialization
    console.log('DevelopiaAI Chat Widget initialized successfully');
</script> 