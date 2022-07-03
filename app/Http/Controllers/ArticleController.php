<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Faker\Factory;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        return view('index', [
            "articles" => Article::all(),
            'data' => Article::paginate(3)
        ]);
    }
    public function create()
    {
        return view('add-edit');
    }

    public function store()
    {
        $validate = Validator::make(request()->all(), [
            'title' => 'required|max:150|min:3',
            'body' => "required|max:2500|min:5",
            'image' => "required"
        ])->validated();
        Article::create($validate);
        return redirect("posts");
    }
    public function edit(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        return view('add-edit', [
            'requests' => $request->method(),
            'article' => $article
        ]);
    }

    public function update($id)
    {
        $validate = Validator::make(request()->all(), [
            'title' => 'required|max:150|min:3',
            'body' => "required|max:2500|min:5",
            'image' => "required"
        ])->validated();
        $article = Article::findOrFail($id);
        $article->update($validate);
        return redirect('posts');
    }

    public function delete($id)
    {
        $article =  Article::findOrFail($id);
        $article->delete();
        return redirect('posts');
    }

    public function show($id)
    {
        $article =  Article::findOrFail($id); 
        return view('show' , [
            'article' => $article 
        ]);
    }
}
