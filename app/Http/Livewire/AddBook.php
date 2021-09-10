<?php

namespace App\Http\Livewire;
use App\Models\Book;
use Livewire\Component;

class AddBook extends Component
{
    public $title, $author, $isbn, $language, $edition, $rent_price, $no_of_page;
    
    protected $rules = [
        'title' => 'required',
        'author' => 'required',
        'isbn' => 'required',
        'language' => 'required',
        'edition' => 'required',
        'rent_price' => 'required',
        'no_of_page' => 'required',
    ];

    public function clear(){
        $this->reset();
    }

    public function save(){
        $data = $this->validate();
        Book::create($data);
        $this->clear();
    }
    public function render()
    {
        return view('livewire.add-book');
    }
}
