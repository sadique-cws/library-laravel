<?php

namespace App\Http\Livewire;
use App\Models\Book;
use App\Models\User;
use Livewire\Component;

class AddEntry extends Component
{
    public $books, $students;

    public function mount(){
        $this->books = Book::all();
        $this->students = User::all();
    }
    public function render()
    {
        return view('livewire.add-entry');
    }
}
