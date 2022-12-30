<?php

namespace torfeh\modules\products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="products";
    protected $fillable=['id','user_id','name','code','price','total'];

    public  function user(){
        return $this->belongsTo(\App\Models\User::class);
    }

}
