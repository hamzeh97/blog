<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'firs_name', 'last_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @return \Illuminate\Database\Eloquent\Collection|mixed|static[]
     */
    public function showAll()
    {
        return Users::all();
    }

    /**
     * @param $data
     */
    public function createUser($data)
    {
        $user = new Users;

        $user->username = $data->username;
        $user->password = $data->password;
        $user->email = $data->email;
        $user->first_name = $data->first_name;
        $user->last_name = $data->last_name;
        $user->save();
        return $user;
    }

    public function removeUser($data)
    {
        $user = Users::destroy($data->id);
    }
}