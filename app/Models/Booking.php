<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table ="booking";
    protected $fillable=['room_id','customers_id','from_date','to_date'];

    public function customer(){
        return $this->belongsTo(Customer::class,'customers_id','id');
    }
    public function room(){
        return $this->belongsTo(Room::class,'room_id','id');
    }
}
