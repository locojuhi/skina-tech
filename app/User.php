<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'role_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password){
        if(!empty($password)){
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function updateuser($request, $id){
        $user = User::find($id);
        $user->first_name   = $request['first_name'];
        $user->last_name    = $request['last_name'];
        $user->email        = $request['email'];
        $user->username     = $request['username'];
        $user->role_id      = $request['role_id'];
        $user->password     = $request['password'];

        $user->save();
        //Session::flash('message', 'User updated Successfully');
    }
}
