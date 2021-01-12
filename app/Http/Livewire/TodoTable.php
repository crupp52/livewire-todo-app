<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class TodoTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['taskSaved' => '$refresh'];

    public function edit($id)
    {
        $task = Task::find($id);

        $this->emit('openModalForEdit', $task);
    }

    public function render()
    {
        return view('livewire.todo-table', [
            'tasks' => Task::paginate(10)
        ]);
    }
}
