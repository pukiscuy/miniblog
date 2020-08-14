<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Blog::select()->orderBy('created_at','desc')->get();

        return view('home',compact('data'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function postCreate(Request $req)
    {
        // dd($req->all());
        $insert = new Blog;
        $insert->title = $req['title'];
        $insert->description = $req['description'];
        $insert->save();

        return redirect(url('home'));

    }

    public function edit($id)
    {
        $data = Blog::find($id);

        return view('blog.edit',compact('data'));
    }

    public function postEdit(Request $req)
    {
        // dd($req->all());

        $data = Blog::find($req['id']);
        $data->title = $req['title'];
        $data->description = $req['description'];
        $data->save();

        return redirect(url('home'));

    }

    public function delete($id)
    {
        $data = Blog::find($id)->delete();

        return redirect(url('home'));
    }
}
