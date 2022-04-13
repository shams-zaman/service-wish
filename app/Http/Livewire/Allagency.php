<?php

namespace App\Http\Livewire;

use App\Models\Sp;
use Livewire\Component;
use Livewire\WithPagination;

class Allagency extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $results = Sp::query()->paginate(7);
        // ->search($this->search);

        return view('livewire.allagency', compact('results'));
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
