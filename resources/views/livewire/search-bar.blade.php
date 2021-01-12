<div>
    <input type="text" class="form-control form-control-lg position-relative" id="title" placeholder="Search" wire:model="query" wire:keydown.escape="hide" wire:keydown.tab="hide">
    @if(!empty($tasks) && !empty($query))
        <div class="row position-absolute border rounded shadow-lg" style="z-index: 100; overflow: auto; max-height: 300px">
            <div class="col bg-light">
                <table class="table w-100">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
