<?php

namespace App\Http\Livewire;
use App\Models\Book;
use App\Models\User;
use Livewire\Component;

class AddEntry extends Component
{
    public $books, $students,$rfcode,$isbn,$qty,$total_amount;

    public function mount(){
        $this->books = NULL;
        $this->students = NULL;
        $this->qty = 1;
    }

    public function find(){
        $this->students = User::where("rfcode",$this->rfcode)->first();
    }

    public function isbnFind(){
        $this->books = Book::where("isbn",$this->isbn)->first();
        $this->total_amount = $this->books->rent_price;

    }

    public function qtyUp(){
        $this->total_amount = $this->qty * $this->books->rent_price;
    }
    public function render()
    {
        return view('livewire.add-entry',["total"=>$this->total_amount]);
    }

}
