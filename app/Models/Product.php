<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\ActiveScope;
  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name', 'detail' ,'status'
    ];

    // public function scopeStatus($query)
    // {
    //     return $query->where('status',1);
    // }

    // public function scopeStatus($query,$status)
    // {
    //     // dd($status);
    //     return $query->where('status', $status);
    // }

    protected static function boot()
    {
        parent::boot();
  
        static::addGlobalScope(new ActiveScope);
    }
    
}