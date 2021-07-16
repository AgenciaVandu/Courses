<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.instructor.courses-index', ['courses' => Course::where('user_id', auth()->user()->id)->where('title', 'like', '%' . $this->search . '%')->latest('id')->paginate(8)]);
    }
}
