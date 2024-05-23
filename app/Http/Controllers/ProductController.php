<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\UpdateProductRequest;
use Intervention\Image\Laravel\Facades\Image;

class ProductController extends Controller
{
    public function index(){

        return view('admins.products.index', [
            'products' => Product::latest()->filter(request(['name']))->paginate(20)
        ]);
    }

    public function import_items(){
        return view('public.imports', [
            'import_items' => Product::where('trading', 1)->latest()->paginate(16)
        ]);
    }

    public function export_items(){
        return view('public.exports', [
            'export_items' => Product::where('trading', 2)->latest()->paginate(16)
        ]);
    }

    public function raw_medicine(){
        return view('public.raw_for_medicine', [
            'raw_medicines' => Product::where('category', 1)->latest()->paginate(2)
        ]);
    }

    public function herb_powder(){
        return view('public.herb_powder', [
            'herb_powders' => Product::where('category', 2)->latest()->paginate(2)
        ]);
    }

    public function herb_tablet(){
        // $a = Product::where('category', 3)->toSql();
        // dd($a);
        return view('public.herb_tablet', [
            'herb_tablets' => Product::where('category', 3)->latest()->paginate(2)
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
        $product->trading = request()->trading;

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

    public function update(UpdateProductRequest $request, Product $product){
        // dd(request()->trading);
        $product->name_en = request()->name_en;
        $product->name_mm = request()->name_mm;
        $product->category = request()->category;
        $product->trading = request()->trading;

        $product->save();
        // dd($product);

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
        return redirect('/dashboard/products')->with([
            'success' => 'Product is updated successfully'
        ]);
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
