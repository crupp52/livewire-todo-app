@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col">
                <livewire:search-bar/>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">TODOs
                        <button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#addTaskModal">
                            Add Task
                        </button>
                    </div>

                    <div class="card-body">

                        <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @livewire('add-task')
                                    </div>
                                </div>
                            </div>
                        </div>

                        @livewire('todo-list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addTaskModal').modal('hide');
        })

        window.addEventListener('open-modal', event => {
            $('#addTaskModal').modal('show');
        })
    </script>
@endpush
