<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Basekt extends Model
{
    use HasFactory;
    protected $table = "tab_baskets";
    protected $fillable = ['user_id', 'product_id'];

}
