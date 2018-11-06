@if ($errors->has($name))
    <div class="alert alert-danger" role="alert">
        <style>
            li {
                list-style: none;
                margin: 0;
                padding: 0;
            }
        </style>
        <ul>
            @foreach ($errors->get($name) as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif