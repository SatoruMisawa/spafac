@extends('host.layouts.master')

@section('content')
<ul>
    @foreach ($applies as $apply)
    <li>apply: {{ $apply->id }}</li>
    @endforeach
</ul>
@endsection