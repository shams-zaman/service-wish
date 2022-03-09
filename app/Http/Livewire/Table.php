<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Model;

class Table extends Component
{
    use WithPagination;
    public $search;



    public function render()
    {
        $items = User::query()
            ->search($this->search)
            ->paginate(2);
        return view('livewire.table', ['items' => $items]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
