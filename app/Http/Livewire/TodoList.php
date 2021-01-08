<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public $completedTasks;

    protected $listeners = [
        'taskAdded' => '$refresh',
        'taskRemoved' => '$refresh',
    ];

    public function click($id)
    {
        $task = Task::where('id', $id)->first();
        $task->status = 2;
        $task->save();

        $this->emit('taskRemoved');
    }

    public function render()
    {
        $this->todos = Auth::user()->tasks()->where('status', 1)->orderByDesc('id')->get();
        $this->completedTasks = Auth::user()->tasks()->where('status', 2)->orderByDesc('updated_at')->get();

        return view('livewire.todo-list');
    }
}
