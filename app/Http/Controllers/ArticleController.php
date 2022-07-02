<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        return view('index', [
            "articles" => Article::all() ,
            'data' => Article::paginate(5)
        ]);
    }
    public function create()    
    {
        return view('add-edit');
    }
}
