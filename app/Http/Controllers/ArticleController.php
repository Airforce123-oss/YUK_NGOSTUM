<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('event.informasi-event', compact('articles'));
    }

    public function create()
    {
        return view('admin.tambah-event');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'article_image' => 'required|mimes:jpg,jpeg,png|max:2048' 
        ]);

        // Ambil file gambar
        $article_image = $request->file('article_image');

        if ($article_image) {
            // Buat nama file unik dengan ekstensi asli
            $imageName = time() . '.' . $article_image->getClientOriginalExtension();

            // Tentukan path penyimpanan
            $upload_path = 'gambar-event/';

            // Pindahkan file ke path penyimpanan
            $article_image->move($upload_path, $imageName);

            // Simpan informasi kostum ke dalam database
            $article = new Costume();
            $article->title = $request->title;
            $article->content = $request->content;
            $article->article_image = $upload_path . $imageName;
            $article->save();
        }
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.edit-event', compact('article'));
    }

    public function update(Request $request)
    {
        $article = findOrFail($request->id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'article_image' => 'required|mimes:jpg,jpeg,png|max:2048' 
        ]);

        if ($request->hasFile('article_image')) {
            $imageLama = $article->article_image;

            if (Storage::exists($imageLama)) {
                Storage::delete($imageLama);
            }

            $article_image = $request->file('image');
            $imageName = time() . '.' . $article_image->getClientOriginalExtension();
            $upload_path = 'gambar-kostum/';
            $article_image->move(public_path($upload_path), $imageName);

            // Update path gambar baru di database
            $article->article_image = $upload_path . $imageName;
        }

        $article->title = $request->title;
        $article->content = $request->content;
        $article->article_image = $upload_path . $imageName;
        $article->save();

        return view();
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return back();
    }

    //note hapus event controller
}
