<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TodoListElement extends Component
{
    public Task $task;

    public function click()
    {
        $task = Task::where('id', $this->task->id)->first();
        $task->status = 2;
        $task->save();

        $this->emitUp('taskDeleted');
    }

    public function render()
    {
        return view('livewire.todo-list-element');
    }
}
