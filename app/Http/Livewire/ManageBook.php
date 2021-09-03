<?php

namespace App\Http\Livewire;
use App\Models\Book;
use Livewire\Component;

class ManageBook extends Component
{
    public $search = '';
   
    public function delete($id){
        Book::find($id)->delete();
    }
   
    public function render()
    {
        return view('livewire.manage-book',["books"=> Book::where("title","LIKE","%$this->search%")->get()]);
    }
}
