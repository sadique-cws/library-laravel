<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    
    public function user()
    {
        return $this->hasOne(User::class,"id","user_id");
    }

   
    public function orderItem()
    {
        return $this->hasMany(orderItem::class, 'order_id', 'id');
    }

    
}
