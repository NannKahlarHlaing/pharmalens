<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductStoreRequest;
use Intervention\Image\Laravel\Facades\Image;

class ProductController extends Controller
{
    public function index(){

        return view('admins.products.index', [
            'products' => Product::latest()->filter(request(['name']))->paginate(2)
        ]);
    }

    public function create(){
        return view('admins.products.create');
    }

    public function store(ProductStoreRequest $request){
        $product = new Product;

        $product->name_en = request()->name_en;
        $product->name_mm = request()->name_mm;
        $product->category = request()->category;
        $product->item = request()->item;

        $image = request()->image;
        if ($image) {
            $this->create_path();
            $img = time() . '.' . $image->getClientOriginalExtension();
            $image = Image::read($image);
            // Resize image
            $image->save(public_path('storage/images/products/original/' . $img));
            $image->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/images/products/thumbnail/' . $img));
            $product->image = $img;
        }

        $product->save();
        return redirect('/dashboard/products');
    }

    public function edit(Product $product){
        return view('admins.products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product){
        $product->name_en = request()->name_en;
        $product->name_mm = request()->name_mm;
        $product->category = request()->category;
        $product->item = request()->item;

        $image = request()->image;
        if ($image) {
            $this->create_path();
            $img = time() . '.' . $image->getClientOriginalExtension();
            $image = Image::read($image);
            // Resize image
            $image->save(public_path('storage/images/products/original/' . $img));
            $image->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/images/products/thumbnail/' . $img));
            $product->image = $img;
        }

        $product->save();
        return redirect('/dashboard/products');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect('/dashboard/products')->with([
            'success' => 'Product is deleted successfully'
        ]);
    }

    public function create_path(){
        $path_image = public_path('storage/images/products/original');
        $path_thumbnail = public_path('storage/images/products/thumbnail');

        if(!File::isDirectory($path_image)){
            File::makeDirectory($path_image, 0777, true, true);
        }

        if(!File::isDirectory($path_thumbnail)){
            File::makeDirectory($path_thumbnail, 0777, true, true);
        }
    }
}
