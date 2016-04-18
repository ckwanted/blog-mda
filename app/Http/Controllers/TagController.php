<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller {

    public function __construct() {

        $this->authorize('editor');
    }

    public function index()
    {
        $tags = Tag::all();
        return view('tags.index',compact('tags'));
    }

    public function create() {
        return view('tags.create');
    }

    public function store(Request $request) {

        $existe = Tag::all()->where('name', $request->name)->count();

        if($existe) return redirect()->back()->withErrors("El Tag ya existe ....");

        $newTag = new Tag();
        $newTag->name = $request->name;
        $newTag->save();
        return redirect('admin/tags')->with('message', 'Tag añadido correctamente');

    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();
        return redirect('/admin/tags');
    }

    public function destroy($id)
    {
        Tag::destroy($id);

        return redirect('/admin/tags');
    }

}
