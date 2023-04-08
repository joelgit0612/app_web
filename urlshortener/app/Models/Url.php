<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['url', 'shortened'];

   public static function getUniqueShortener()
 {
    $shortened = Str::random(5);

    if(static::where('shortened')->count() > 0){
        return static::getUniqueShortener();
    }

    return  $shortened;
  }

    
}
