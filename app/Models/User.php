<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
      protected $filllable=['name'];

   public function profile()
   {
       return $this->hasOne(Profile::class);
   }
}
