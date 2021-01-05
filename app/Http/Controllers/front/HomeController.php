<?php

namespace App\Http\Controllers\front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\front\HomeController;

class HomeController extends Controller
{

    public function index() {
        //dd('jjjjj');
                $category = \DB::table('site_category')->first();
                //dd($category);
                $products = \DB::table('siteproducts')->where('categoris_id',$category->id)
                           // ->leftJoin('videos', 'siteproducts.id', '=', 'videos.product_id')
                            ->get();
                   // dd($products,$category->slug);
            //$videos=array();
                foreach ($products as  $value) {
                
                    $product_id=$value->id;
                $videos1= \DB::table('videos')->where('product_id',$product_id)
                    ->get();


                    $value->videos=$videos1;
                    
                }
                foreach ($videos1 as $key => $value) {
                       $titlecounts[]=$value->title;
                       $locatvideo[]=$value->location;
                    }

               // dd($titlecounts,$locatvideo);
               
        //return view('front.index', compact('products'));
        return view('front.index', compact('products','category'));
    }
    public function moredetails() {
    	$input = \Request::all();
    	
        $products = \DB::table('siteproducts')->where('id', $input['id'])->get();
        foreach ($products as $product) {
            $mul_images=$product->mul_images;
        }

        $temp = explode('|',$mul_images );
        
        return view('front.moredetails', compact('products','temp'));
    }
    public function contactUs()
    {
       // dd('hhhhhh');
        return view('front.contact');
    }

    public function aboutus()
    {
       // dd('hhhhhh');
        return view('front.about');
    }
    public function showcategoryproduct()
    {
        $input = \Request::all();
        //dd($input);
        $category = \DB::table('site_category')->where('id',$input['id'])->first();
        //$products = \DB::table('siteproducts')->where('category',$category->slug)->get();
        $products = \DB::table('siteproducts')->where('categoris_id',$category->id)
                    ->get();
            foreach ($products as  $value) {
               $product_id[]=$value->id;
               //$products = \DB::table('siteproducts')->where('category',$category->slug)->where('id',$value->id)
                   // ->get();
                   // $value->products=$products;
                $videos= \DB::table('videos')->where('product_id',$value->id)
                    ->get();
                    $value->videos=$videos;
            }
           if($category->id == 9)
            {
               // dd($category->id,$input,$products,$category);
                return view('front.catproductindex1', compact('products','category'));
            }elseif ($category->id == 19) {
               // dd($category->id,$input,$products,$category);
                return view('front.catproductindex2', compact('products','category'));
            }elseif ($category->id == 20) {
               // dd($category->id,$input,$products,$category);
                return view('front.catproductindex3', compact('products','category'));
            }elseif ($category->id == 21) {
               // dd($category->id,$input,$products,$category);
                return view('front.catproductindex4', compact('products','category'));
            }
            else{
                //fff
            }
    }
}
