@extends('layouts.master')

@section('content')
<ul>
    @foreach ($applies as $apply)
    <li>{{ $apply->id }}</li>
    @endforeach
</ul>
@endsection