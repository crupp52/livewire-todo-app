<div>
    <h1>Actual Tasks</h1>
    <div style="max-height: 500px; overflow: auto">
        @foreach($todos as $task)
            <div class="p-3 mb-2 border border-primary rounded">
                <p style="cursor: pointer" wire:click="click({{ $task->id }})">
                    <strong>#{{ $task->id }} - {{ $task->title }}</strong>
                </p>
                <p>
                    <small>{{ $task->description }}</small>
                </p>
                <button class="btn btn-warning" wire:click="edit({{ $task->id }})">Edit</button>
            </div>
        @endforeach
    </div>

    <h1 class="mt-5">Completed Tasks</h1>
    <div style="max-height: 500px; overflow: auto">
        @foreach($completedTasks as $task)
            <div class="p-3 mb-2 border border-success rounded">
                <p>
                    <strong><s>#{{ $task->id }} - {{ $task->title }}</s></strong>
                </p>
                <p>
                    <small>{{ $task->description }}</small>
                </p>
                <button class="btn btn-warning" wire:click="edit({{ $task->id }})">Edit</button>
            </div>
        @endforeach
    </div>
</div>
