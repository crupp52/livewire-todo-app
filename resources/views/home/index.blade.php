@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">TODOs</div>

                    <div class="card-body">
                        @livewire('add-task')
                        @livewire('todo-list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
