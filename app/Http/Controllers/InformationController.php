<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Information;
use App\Models\WebsiteNew;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function home(){
    //    $a = Product::where('trading', 1)->get();
    //     dd($a);
        return view('public.home', [
            'import_items' => Product::where('trading', 1)->take(10)->get(),
            'exports' => Product::where('trading', 2)->take(10)->get(),
            'news' => WebsiteNew::take(4)->get()
        ]);
    }
    public function company_profile(){
        return view('public.company_profile');
    }

    public function index(){
        $posts = Information::get();

        if(count($posts) >= 1){
            foreach ($posts as $post) {
                $post = $post;
            }
        }else{
            $post = [];
        }

        return view('admins.information', [
            'post' => $post
        ]);
    }

    public function store(){
        $posts = Information::all();

        $count = count($posts);

        if($count >= 1){
            $post = Information::find(request('id'));
            $post->phone = request('phone');
            $post->email = request('email');
            $post->address = request('address');
            $post->facebook = request('facebook');
            $post->youtube = request('youtube');
            $post->twitter = request('twitter');
            $post->footer_text = request('footer_text');

            $post->save();

        }else{
            $post = new Information;
            $post->page_title = 'Sadhi Brothers';
            $post->phone = request('phone');
            $post->email = request('email');
            $post->address = request('address');
            $post->facebook = request('facebook');
            $post->youtube = request('youtube');
            $post->twitter = request('twitter');
            $post->footer_text = request('footer_text');

            $post->save();
        }
        return redirect()->back()->with('success', 'Successfully Updated Page information.');
    }
}
