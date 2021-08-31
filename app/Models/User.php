<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function mypointcheck(){
      $id = Auth::id();
      $point = User::select('point')
      ->where('id',$id)
      ->get();

      return $point;
    }

    public static function pointupdate($point){
      $id = Auth::id();
      $update = User::where('id',$id)
      ->update(['point' => $point]);

      $select = User::where('id',$id)
      ->select('point')
      ->get();
      return $select;
    }

    public static function ranking(){
      $ranking = User::select('name','point')
      ->orderBy('point','desc')
      ->get();
      return $ranking;
    }
    
}
