@extends('core.base')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header"><h5>Add Student</h5></div>
            <div class="card-body">
                @livewire('add-student')
            </div>
        </div>
    </div>
@endsection