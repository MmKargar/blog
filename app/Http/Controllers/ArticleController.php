<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Faker\Factory;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        return view('index', [
            /* create a pagination */
            'data' => Article::paginate(3),
            /* get data from table articles */
            "articles" => Article::all()
        ]);
    }

    public function create()
    {
        return view('add-edit');
    }

    public function store(Request $request)
    {
        /* validation filelds */
        Validator::make(request()->all(), [
            'title' => 'required|max:150|min:3',
            'body' => "required|max:2500|min:5",
            'image' => 'required|image'
        ])->validated();

        /* apload all images in storage/images*/
        $path = $request->file('image')->store('images', 'public');

        /* insert data to table */
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path,
        ]);
        return redirect("posts");
    }

    public function edit(Request $request, $id)
    {
        /* check id exists or not */
        $article = Article::findOrFail($id);
        return view('add-edit', [
            /* send request method to the add_edit view */
            'requests' => $request->method(),
            'article' => $article
        ]);
    }

    public function update(Request $request,  $id)
    {
        /* validation fields */
        Validator::make(request()->all(), [
            'title' => 'required|max:150|min:3',
            'body' => "required|max:2500|min:5",
        ])->validated();

        /* if image exists get it and upload image in directory */
        if (isset($request->image)) {
            $path = $request->file('image')->store('images', 'public');
            $article = Article::findOrFail($id);

            /* update data */
            $article->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $path
            ]);
        }
        return redirect('posts');
    }

    public function delete($id)
    {
        /* check id exist or not */
        $article =  Article::findOrFail($id);

        /* delete data from articles */
        $article->delete();

        return redirect('posts');
    }

    public function show($id)
    {
        /* get id and show all information with this id in show view */
        $article =  Article::findOrFail($id);
        return view('show', [
            'article' => $article
        ]);
    }
}
