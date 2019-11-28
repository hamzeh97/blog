<?php

namespace App\Repositories;

use App\Categories;

class CategoriesRepository
{
    public $model;

    // Constructor to bind model to repo

    /**
     * UsersRepository constructor.
     */
    public function __construct()
    {
        $this->model = new Categories;
    }

    // Get all instances of model

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database

    /**
     * @param array $data
     * @return Categories
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }


    // remove record from the database

    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}