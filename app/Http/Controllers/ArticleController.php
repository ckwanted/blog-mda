<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Tag;
use Illuminate\Cache\TagSet;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('editor');
        
        $articles = Article::all()->where('user_id', auth()->user()->id);

        return view('articles.index', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('editor');

        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('editor');


        $article = Article::create($request->all());

        if($request->tag_list) $article->tags()->sync($request->input('tag_list'));

        $article->update(['user_id' => auth()->user()->id]);

        /* Imagen*/

        $file = $request->file('file');
        $nombre = $file->getClientOriginalName();

        \Storage::disk('local')->put($nombre,  \File::get($file));

        $article->image = $nombre;
        $article->save();
        return view('articles.show', compact('article'))->with('message', 'Artículo añadido correctamente');
    }

    public function addComment($id, Request $request)
    {

        $article = Article::findOrFail($id);

        return $article->assignComment($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($article_id)
    {
        Comment::where('article_id', $article_id)->delete();
        Article::destroy($article_id);
        return redirect('/admin/articles');
    }



    /*public function search(Request $request)
    {
        // Gets the query string from our form submission
        $query = Request::input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);

        // returns a view and passes the view the list of articles and the original query.
        return view('articles.search', compact('articles', 'query'));
    }*/

    public function search (Request $request){
        //dd($request->all());
         $tag = Tag::where('name', $request->tag)->get()->first();
         return view('articles.search', compact('tag'));
     }
}
