<?php

namespace App\Http\Livewire;
use App\Models\Book;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;

class AddEntry extends Component
{
    public $books, $students,$rfcode,$isbn,$qty,$total_amount,$payable_amount, $membership,$user_id,$book_id;

    public function mount(){
        $this->books = NULL;
        $this->students = NULL;
        $this->qty = 1;
        $this->payable_amount  = 0;
        $this->membership  = 500;
        $this->user_id = 0;
    }

    public function find(){
        $this->students = User::where("rfcode",$this->rfcode)->first();
        $this->user_id = $this->students->id;
    }

    public function isbnFind(){
        $this->books = Book::where("isbn",$this->isbn)->first();
        $this->total_amount = $this->books->rent_price;
        $this->book_id = $this->books->id;

    }

    public function qtyUp(){
        $this->total_amount = $this->qty * $this->books->rent_price;
        $this->payable_amount = $this->membership + $this->total_amount;
    }

    public function create_order(){
        $order = new Order();
        $order->user_id = $this->user_id;
        $order->ordered = false;
        $order->save();
        $id = $order->id;

        $oi = new OrderItem();
        $oi->user_id = $this->user_id;
        $oi->order_id = $id;
        $oi->book_id = $this->book_id;
        $oi->ordered = false;
        $oi->qty = $this->qty;
        $oi->save();

    }

    public function render()
    {
        return view('livewire.add-entry',["total"=>$this->total_amount]);
    }

}
