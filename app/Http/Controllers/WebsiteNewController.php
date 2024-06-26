<?php

namespace App\Http\Controllers;

use App\Models\WebsiteNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewRequest;
use App\Http\Requests\UpdateNewRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;


class WebsiteNewController extends Controller
{
    public function news(){
        return view('public.news', [
            'news' => WebSiteNew::latest()->get()
        ]);
    }
    public function index(){
        return view('admins.news.index', [
            'news' => WebsiteNew::latest()->get()
        ]);
    }

    public function detail(WebsiteNew $new){
        return view('public.news_detail', ['new'=> $new]);
    }

    public function create(){
        return view('admins.news.create');
    }

    public function store(StoreNewRequest $request){
        $new = new WebsiteNew;

        $new->title_en = request()->title_en;
        $new->title = request()->title_mm;
        $new->body_en = request()->body_en;
        $new->body = request()->body_mm;

        $image = request()->image;
        if ($image) {
            $this->create_path();
            $img = time() . '.' . $image->getClientOriginalExtension();
            $image = Image::read($image);
            // Resize image
            $image->save(public_path('storage/images/news/original/' . $img));
            $image->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/images/news/thumbnail/' . $img));
            $new->image = $img;
        }

        $new->save();
        return redirect('/dashboard/news');
    }

    public function edit(WebsiteNew $new){
        return view('admins.news.edit', [
            'new' => $new
        ]);
    }

    public function update(UpdateNewRequest $request, WebsiteNew $new){
        $new->title_en = request()->title_en;
        $new->title = request()->title_mm;
        $new->body_en = request()->body_en;
        $new->body = request()->body_mm;

        
        $image = request()->image;
        if ($image) {
            $this->create_path();
            $img = time() . '.' . $image->getClientOriginalExtension();
            $image = Image::read($image);
            // Resize image
            $image->save(public_path('storage/images/news/original/' . $img));
            $image->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/images/news/thumbnail/' . $img));
            $new->image = $img;
        }
        
        $new->save();
        return redirect('/dashboard/news')->with([
            'success' => 'New is updated successfully'
        ]);
    }

    public function destroy(WebsiteNew $new){
        $new->delete();

        return redirect('/dashboard/news')->with([
            'success' => 'New is deleted successfully'
        ]);
    }

    public function create_path(){
        $path_image = public_path('storage/images/news/original');
        $path_thumbnail = public_path('storage/images/news/thumbnail');

        if(!File::isDirectory($path_image)){
            File::makeDirectory($path_image, 0777, true, true);
        }

        if(!File::isDirectory($path_thumbnail)){
            File::makeDirectory($path_thumbnail, 0777, true, true);
        }
    }
}
