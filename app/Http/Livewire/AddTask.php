<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddTask extends Component
{
    public $task;
    public $title;
    public $description;

    protected $listeners = ['openModalForEdit'];

    public function mount()
    {
        $this->task = null;
        $this->title = '';
        $this->description = '';
    }

    public function send()
    {
        if (!$this->task) {
            $task = Task::create([
                'title' => $this->title,
                'description' => $this->description,
                'user_id' => Auth::user()->id
            ]);
        } else {
            $this->task->title = $this->title;
            $this->task->description = $this->description;

            $this->task->save();
        }

        $this->task = null;
        $this->title = '';
        $this->description = '';

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('taskAdded');
        $this->emit('taskSaved');
    }

    public function openModalForEdit(Task $task)
    {
        $this->task = $task;

        $this->title = $task->title;
        $this->description = $task->description;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function render()
    {
        return view('livewire.add-task');
    }
}
