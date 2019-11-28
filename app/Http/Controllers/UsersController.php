<?php

namespace App\Http\Controllers;

use App\Repositories\UsersRepository;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // space that we can use the repository from
    protected $repo;

    public function __construct()
    {
        // set the model
        $this->repo = new UsersRepository();
    }

    public function create(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => app('hash')->make($request->input('password')),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')
        ];
        // create record and pass in only fields that are fillable;
        return response()->json($this->repo->create($data));
    }

    public function remove($id)
    {
        return $this->repo->delete($id);
    }

    public function all()
    {
        return response()->json($this->repo->all());
    }
}