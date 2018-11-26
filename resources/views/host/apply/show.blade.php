@extends('host.layouts.master')

@section('content')
<div>
    <div class="apply text-center pt-5 pb-5">
        <div class="d-inline-block col-md-3">
                <form action="/applies/{{ $apply->id }}/approvements" method="POST">
                    @csrf
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">apply: {{ $apply->id }}</h4>
                                <p class="card-text">
                                    From Tester
                                </p>
                                <p class="card-text mt-3 text-muted">
                                   12/25 13:00 ~ 14:00
                                </p>
                                <button type="submit" class="mt-3 btn btn-primary">Approve</button>
                            </div>
                        </div>
                </form>
        </div>
    </div>
</div>
@endsection