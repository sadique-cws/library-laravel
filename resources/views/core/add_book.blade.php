@extends('core.base')


@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header"><h5>Insert Book</h5></div>
            <div class="card-body">
                @livewire('add-book')
            </div>
        </div>
    </div>
@endsection