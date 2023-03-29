<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(2);

        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(StoreArticleRequest $request)
    {
        $article = new Article();
        $data = $request->input();

        $article->fill($data);
        $article->save();
        
        $request->session()->flash('success', 'Article added!');
        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(StoreArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);       
        $data = $request->input();
        
        $article->fill($data);
        $article->save();
        
        $request->session()->flash('success', 'Article has been updated!');
        return redirect()->route('articles.index');
    }

    public function destroy(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
        }
        
        $request->session()->flash('success', 'Article has been deleted!');
        return redirect()->route('articles.index');
    }
}
