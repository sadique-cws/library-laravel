@extends('core.base')


@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header"><h5>Manage Students</h5></div>
            <div class="card-body">
                @livewire('manage-students')
            </div>
        </div>
    </div>
@endsection