<?php
/**
 * Created by PhpStorm.
 * User: hamzeh
 * Date: 11/27/2019
 * Time: 3:33 PM
 */

namespace App\Http\Controllers;

use App\Repositories\ArticlesRepository;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // space that we can use the repository from
    protected $repo;

    public function __construct()
    {
        // set the model
        $this->repo = new ArticlesRepository();
    }

    public function create(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'user_id' => $request->input('user_id')
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