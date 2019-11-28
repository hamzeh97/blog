<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriesRepository;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // space that we can use the repository from
    protected $repo;

    public function __construct()
    {
        // set the model
        $this->repo = new CategoriesRepository();
    }

    public function create(Request $request)
    {
        $data = [
            'category' => $request->input('category')
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