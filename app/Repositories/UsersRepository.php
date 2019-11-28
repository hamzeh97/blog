<?php

namespace App\Repositories;

use App\Users;

class UsersRepository
{
    public $model;

    // Constructor to bind model to repo
    public function __construct()
    {
        $this->model = new Users();
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