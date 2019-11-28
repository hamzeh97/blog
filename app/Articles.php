<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'category', 'user_id'
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
        return Articles::all();
    }

    /**
     * @param $data
     */
    public function createArticle($data)
    {
        $art = new Articles();

        $art->title = $data->title;
        $art->content = $data->content;
        $art->category = $data->category;
        $art->user_id = $data->user_id;
        $art->save();
        return $art;
    }

    public function removeArticle($data)
    {
        $user = Articles::destroy($data->id);
    }
}