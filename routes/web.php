<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;

//dashboard

Route::middleware('auth')->group(function () {
    

Route::get('/', function () {
    return view('core.home');
})->name('dashboard.home');

//manage books page
Route::get("/manage-books",function(){
    return view("core.manage_books");
})->name('manage.books');

//add book page
Route::get("/add-books",function(){
    return view("core.add_book");
})->name('add.book');

//add entry/order page
Route::get("/add-entry",function(){
    return view("core.add_entry");
})->name('add.entry');

//add active order page
Route::get("/orders/active",function(){
    return view("core.active_order");
})->name('orders.active');

//add all order page
Route::get("/orders/all",function(){
    return view("core.orders");
})->name('orders.all');

//manage students page
Route::get("/students/all",function(){
    return view("core.students");
})->name('students.all');

//add student page
Route::get("/students/add",function(){
    return view("core.add_student");
})->name('students.add');


Route::put("/finish/order/{id}",function(Request $req,$id){
    $o = Order::where("id",$id)->first();
    $o->ordered = false;
    $o->save();  

    $oi = OrderItem::where("order_id",$o->id)->where("ordered",true)->get();
    foreach($oi as $item){
        $item->ordered = false;
        $item->save();
    }
    return redirect()->back();
})->name('finish');
// ---------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



});

require __DIR__.'/auth.php';
