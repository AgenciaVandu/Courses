<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesStudents extends Component
{
    use WithPagination, AuthorizesRequests;

    public $course, $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount(Course $course)
    {
        $this->course = $course;
        $this->authorize('dicatated', $course);
    }

    public function render()
    {
        return view('livewire.instructor.courses-students', ['students' => $this->course->students()->where('name', 'like', '%' . $this->search . '%')->paginate(2)])->layout('layouts.instructor', ['course' => $this->course]);
    }
}
