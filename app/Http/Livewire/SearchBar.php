<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class SearchBar extends Component
{
    public $query;
    public $tasks;

    public function mount()
    {
        $this->tasks = [];
        $this->query = '';
    }

    public function updatedQuery()
    {
        $this->search();
    }

    public function hide()
    {
        ray('The hide() function was called.');
        $this->query = '';
    }

    public function search()
    {
        if ($this->query != null && !empty($this->query)) {
            ray()->showQueries();

            $this->tasks = Task::where('title', 'like', '%' . $this->query . '%')
                ->orWhere('description', 'like', '%' . $this->query . '%')
                ->get();

            ray($this->tasks);
        }
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
