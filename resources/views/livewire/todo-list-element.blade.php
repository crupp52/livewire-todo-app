<div class="p-3 mb-2 border border-primary rounded" wire:click="click">
    <p>
        <strong>#{{ $task->id }} - {{ $task->title }}</strong>
    </p>
    <p>
        <small>{{ $task->description }}</small>
    </p>
</div>
