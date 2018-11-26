@extends('host.layouts.master')

@section('content')
<ul>
    @foreach ($reservations as $reservation)
    <li>reservation: {{ $reservation->id }}</li>
    @endforeach
</ul>
@endsection