@if (session()->has('message'))
    <style>
        .message-container {
            border-radius: 20px; 
            margin: 0 auto;
            margin-bottom: 0!important;
            padding: 20px!important;
            text-align: center;
        }
    </style>
    <div class="alert alert-primary message-container" role="alert">
        <p>{{ session('message') }}</p>
    </div>
@endif