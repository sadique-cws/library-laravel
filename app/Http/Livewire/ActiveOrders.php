<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class ActiveOrders extends Component
{

    public $orders,$search = "", $count;
 
    public function mount(){
        $this->orders = Order::where("ordered",true)->get();
        $this->count = 0;
    }
    public function render()
    {
        return view('livewire.active-orders');
    }
}
