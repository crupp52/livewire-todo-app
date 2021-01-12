<div>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>
                    {{ $task->title }}
                </td>
                <td>
                    {{ $task->description }}
                </td>
                <td>
                    <button class="btn btn-warning" wire:click="edit({{ $task->id }})">Edit</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $tasks->links() }}
    </div>
</div>
