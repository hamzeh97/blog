<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category'
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
        return Categories::all();
    }

    /**
     * @param $data
     */
    public function createCategory($data)
    {
        $cat = new Categories();

        $cat->username = $data->category;
        $cat->save();
        return $cat;
    }

    public function removeCategory($data)
    {
        $user = Categories::destroy($data->id);
    }
}