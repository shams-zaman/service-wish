<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $items = Blog::query()
            ->search($this->search)
            ->paginate(5);
        return view('livewire.show-posts', ['items' => $items]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
