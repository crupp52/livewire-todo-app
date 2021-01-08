<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddTask extends Component
{
    public $title;
    public $description;

    public function send()
    {
        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => Auth::user()->id
        ]);

        $this->title = '';
        $this->description = '';

        $this->emit('taskAdded');
    }

    public function render()
    {
        return view('livewire.add-task');
    }
}
