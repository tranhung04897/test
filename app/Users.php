<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Users extends Model
{
    protected $table ="users";
    protected $primaryKey = "id";
    public $timestamps = false;
    public function getCheck($email){
    	return User::where('email','=',$email)->count();
    }
}
