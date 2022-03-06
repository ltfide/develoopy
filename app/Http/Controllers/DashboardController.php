<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDashboardRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Path\To\DOMDocument;
use Intervention\Image\ImageManagerStatic;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view("dashboard.index", [
            "posts" => Post::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Dashboard.create", [
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashboardRequest $request)
    {
        // $save = $request->validate([
        //     "title" => "required|max:255",
        //     "image" => "image|file|max:2048",
        //     "body" => "required",
        //     "category_id" => "required"
        // ]);

        // $storage="storage/post-images";
        // $dom=new \DOMDocument();
        // libxml_use_internal_errors(true);
        // $dom->loadHTML($request->body,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        // libxml_clear_errors();
        // $images=$dom->getElementsByTagName('img');
        // foreach($images as $img){
        //     $src=$img->getAttribute('src');
        //     if(preg_match('/data:image/',$src)){
        //         preg_match('/data:image\/(?<mime>.*?)\;/',$src,$groups);
        //         $mimetype=$groups['mime'];
        //         $fileNameContent=uniqid();
        //         $fileNameContentRand=substr(md5($fileNameContent),6,6).'_'.time();
        //         $filepath=("$storage/$fileNameContentRand.$mimetype");
        //         $image= ImageManagerStatic::make($src)
        //             ->encode($mimetype,100)
        //             ->save(public_path($filepath));
        //         $new_src=asset($filepath);
        //         $img->removeAttribute('src');
        //         $img->setAttribute('src',$new_src);
        //     }
        // }

        // if($request->file('image')) {
        //     $save['image'] = $request->file('image')->store('post-images');
        // }

        // $save["slug"] = Str::slug($request->title, "-");
        // $save["excerpt"] = Str::limit(strip_tags($request->body), 150);
        // $save["body"] = $dom->saveHTML();
        // $save["user_id"] = 1;
        $request->validate();
        if($request->file('image')) {
            $validate['image'] = $request->file('image')->store('post-images');
        }

        $validate["slug"] = Str::slug($request->title, "-");
        $validate["excerpt"] = Str::limit(strip_tags($request->body), 150);
        
        $validate["user_id"] = '1';
        // Post::create($request->all());

        return $validate;
        
        Post::create($validate);
        return redirect("/dashboard/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("post", [
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("Dashboard.edit", [
            "post" => $post,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $edit = [
            "title" => "required|max:255",
            "image" => "image|file|max:1024",
            "body" => "required",
            "category_id" => "required"
        ];

        $storage="storage/post-images";
        $dom=new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->body,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();
        $images=$dom->getElementsByTagName('img');
        foreach($images as $img){
            $src=$img->getAttribute('src');
            if(preg_match('/data:image/',$src)){
                preg_match('/data:image\/(?<mime>.*?)\;/',$src,$groups);
                $mimetype=$groups['mime'];
                $fileNameContent=uniqid();
                $fileNameContentRand=substr(md5($fileNameContent),6,6).'_'.time();
                $filepath=("$storage/$fileNameContentRand.$mimetype");
                $image= ImageManagerStatic::make($src)
                    ->encode($mimetype,100)
                    ->save(public_path($filepath));
                $new_src=asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src',$new_src);
            }
        }

        
        $validateData = $request->validate($edit);
        if ($request->slug != $post->slug) {
            $validateData["slug"] = Str::slug($request->title, "-");
        }
        if ($request->file("image")) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            
            $validateData["image"] = $request->file("image")->store("post-images");
        }
        
        $validateData["user_id"] = 1;
        $validateData["excerpt"] = Str::limit(strip_tags($request->body), 100);
        $validateData["body"] = $dom->saveHTML();

        Post::where("id", $post->id)->update($validateData);

        return redirect("/dashboard/posts");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return back();
    }
}
