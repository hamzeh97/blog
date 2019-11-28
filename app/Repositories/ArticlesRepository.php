<?php
/**
 * Created by PhpStorm.
 * User: hamzeh
 * Date: 11/27/2019
 * Time: 3:36 PM
 */

namespace App\Repositories;

use App\Articles;

class ArticlesRepository
{
    public $model;

    // Constructor to bind model to repo
    public function __construct()
    {
        $this->model = new Articles();
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->model->create($data);
    }


    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}