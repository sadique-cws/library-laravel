<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class ManageOrders extends Component
{
    public $search = "";
 
    
    public function render()
    {
        return view('livewire.manage-orders',["orders"=>Order::where("ordered",false)->Where("id","LIKE","%$this->search%")->get()]);
    }
}
