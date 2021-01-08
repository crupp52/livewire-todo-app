<div class="card mb-3">
    <div class="card-header">Add Task</div>

    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input wire:model="title" type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea wire:model="description" class="form-control"  id="description" placeholder="Description"></textarea>
        </div>
        <button wire:click="send" class="btn btn-success btn-block">Send</button>
    </div>
</div>
