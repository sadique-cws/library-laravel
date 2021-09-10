<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Alert;

class ManageStudents extends Component
{
    public $search = '';

    public function delete($id){
        User::find($id)->delete();
        toast("Record deleted Successfully","error");
        return redirect()->route("students.all");
    }
    public function render()
    {
        return view('livewire.manage-students',["students"=> User::where("name","LIKE","%$this->search%")->get()]);
    }
}
