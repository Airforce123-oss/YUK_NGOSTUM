<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('event.informasi-event', compact('articles'));
    }

    public function manajemen()
    {
        $articles = Article::orderBy('id','desc')->get();
        return view('admin.admin-manajemenArtikel', compact('articles'));
    }

    public function create()
    {
        return view('admin.admin-tambahArtikel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'article_image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $article_image = $request->file('article_image');

        if ($article_image) {
            $imageName = time() . '.' . $article_image->getClientOriginalExtension();
            $upload_path = 'gambar-event/';
            $article_image->move(public_path($upload_path), $imageName);

            $article = new Article();
            $article->title = $request->title;
            $article->content = $request->content;
            $article->article_image = $upload_path . $imageName;
            $article->save();
        }

        return redirect()->route('artikel-manajemen');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.admin-editArtikel', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'article_image' => 'mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('article_image')) {
            $oldImage = $article->article_image;

            if (Storage::exists($oldImage)) {
                Storage::delete($oldImage);
            }

            $article_image = $request->file('article_image');
            $imageName = time() . '.' . $article_image->getClientOriginalExtension();
            $upload_path = 'gambar-event/';
            $article_image->move(public_path($upload_path), $imageName);

            $article->article_image = $upload_path . $imageName;
        }

        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect()->route('artikel-manajemen');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->article_image && Storage::exists($article->article_image)) {
            Storage::delete($article->article_image);
        }

        $article->delete();

        return back();
    }
}
