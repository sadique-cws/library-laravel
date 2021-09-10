<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class AddStudent extends Component
{
    public $name, $aadhaar, $email, $password,$rfcode,$membership_fee;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'aadhaar' => 'required',
        'password' => 'required',
        'rfcode' => 'required',
        'membership_fee' => 'required'
    ];

    public function mount(){
        $this->membership_fee = 500;
    }
    public function clear(){
        $this->reset();
    }

    public function save(){
        $data = $this->validate();
        User::create($data);
        $this->clear();
    }

    public function render(){
        return view('livewire.add-student');
    }
}
