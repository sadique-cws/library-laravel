<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class AddStudent extends Component
{
    public $name, $aadhaar, $email, $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'aadhaar' => 'required',
        'password' => 'required',
    ];

    public function clear(){
        $this->name = $this->aadhaar = $this->email = $this->password = "";
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
