@extends('core.base')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header"><h5>Add Entry</h5></div>
            <div class="card-body">
                <h2>Add entry page</h2>

               @livewire('add-entry')
            </div>
        </div>
    </div>
@endsection