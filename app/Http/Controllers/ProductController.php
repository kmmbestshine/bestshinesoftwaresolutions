<?php

namespace App\Http\Controllers;

use App\Product;
use App\Video;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index() {

        $products = \DB::table('siteproducts')->get();
        //dd($products);
        return view('backend.site.products.index', compact('products'));
    }
    public function categoryindex() {
                $category = \DB::table('site_category')->get();
        
        return view('backend.site.category.list', compact('category'));
    }
    public function categoryedit($id)
    {
             
        $productcategory  = \DB::table('site_category')->find($id);
        return view('backend.site.category.edit',compact('productcategory'));
    }
    public function categoryupdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
        $pc = \DB::table('site_category')->where('site_category.id',$id)->limit(1);
        
        $message=$pc->update([
           'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
            'updated_at' => date('Y-m-d H:i:s'),
            'modified_by' =>  Auth::user()->username
        ]);
            return redirect()->route('site.category.list')->with('success_message', 'successfully updated');
    }
    public function categorydestroy($id)
    {
       // $check = $this->checkpermission('productcategory-delete');
         $productcategory = \DB::table('site_category')->where('site_category.id',$id)->limit(1);
            $message = $productcategory->delete();
            if ($message) {
                return redirect()->route('site.category.list')->with('success_message', 'successfully Deleted');
            }
        
        
    }

    public function create() {

       // $product = new Product();
        $category = \DB::table('site_category')->get();
        //dd('kkkkkkkkk',$product);
        return view('backend.site.products.create', compact('category'));
    }

    public function store(Request $request) {
        $input = \Request::all();
        
        // Validate the form
        

        // Upload the image
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());
        }
        //dd($input, $request,$image,$request->product_name);
        // Upload the multible images
        $images=array();
        if ($files=$request->file('images')) {
            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move('multipleuploads',$name);
                $images[]=$name;
            }
            
        }

        $category  = \DB::table('site_category')->find($request->category_id);
       // dd($category);
    /*Insert your data*/

        DB::table('siteproducts')->insert(
                array(
            'category' => $category->slug,
            'categoris_id' =>$category->id,
            'name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->cov_descript,
            'full_descript' => $request->description,
            'image' => $request->image->getClientOriginalName(),
            'mul_images' => implode("|",$images),
            'intro_video_embed_code' => '0',
            'video_site_link' => '0',
            'website' => $request->webste,
            'youtube' => $request->youtube_url,
            'studentprice' => $request->studentprice,

        ));
        

        // Sessions Message
        $request->session()->flash('msg','Your product has been added');
//dd($input);
        // Redirect

        return redirect('site/products/create');

    }

    public function edit($id) {
        //dd($id);
        $product = \DB::table('siteproducts')->find($id);
        return view('backend.site.products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
         $input = \Request::all();
        // Find the product
        $product = \DB::table('siteproducts')->find($id);
        $update_result = \DB::table('siteproducts')->where('id', $id)->update([
                        
              'category' => $request->category_slug,
            'name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->cov_descript,
            'full_descript' => $request->description,
            'image' => $product->image
            //'image' => $request->image->getClientOriginalName(),
            //'mul_images' => implode("|",$images),
            //'website' => $request->webste,
           // 'youtube' => $request->youtube_url,
           // 'studentprice' => $request->studentprice,
                   
            ]);
        // Store a message in session
        $request->session()->flash('msg', 'Product has been updated');

        // Redirect
        return redirect('siteproduct-list');
    }
    // private functions
  private function formatBytes($size, $precision = 2)
  {
      $base = log($size, 1024);
      $suffixes = array('', 'K', 'M', 'G', 'T');

      return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
  }

    public function show($id) {
        $product = Product::find($id);
       // $product = \DB::table('siteproducts')->find($id);
        return view('admin.products.details', compact('product'));
    }
    public function createvideo($id) {
       // $product = Product::find($id);
        $product = \DB::table('siteproducts')->find($id);
       // dd($product);
        return view('backend.site.products.uploadvideo', compact('product'));
    }
    public function postvideo($id, Request $request)
  {
    $product = \DB::table('siteproducts')->where('id',$id)->first();
    if ($request->hasFile('video')) {
          $randName = Carbon::now()->timestamp;
          $uploadDir = '/videouploads/';
          $location = $randName . '.mp4';
          $fullPath = public_path() . $uploadDir . $location;

          // check if 'uploads/' directory exists. If not, create it.
          ////if(!File::exists(public_path() . $uploadDir)) {
         //   File::makeDirectory(public_path() . $uploadDir, $mode = 0777, true, true);
        //  }

          $file = $request->file('video');
          $file->move(public_path() . $uploadDir, $location);

          $title = $request->input('title');

          // get video filesize
          $filesize = File::size($fullPath);
          $filesize = $this->formatBytes($filesize);

          // get video bitrate
        //  $bitrate = $ffprobe->format($fullPath)
           // ->get('bit_rate');
         // $bitrate = $this->formatBytes($bitrate);

          $video = new Video();
          $video->title = $title;
          $video->category_id = $product->category;
          $video->product_id = $product->id;
          $video->filename = htmlspecialchars($file->getClientOriginalName());
          $video->location = $uploadDir . $location;
         // $video->thumbnail = $uploadDir . $randName . '.png';
         // $video->duration = $duration;
          $video->filesize = $filesize;
         // $video->bitrate = $bitrate;
          $video->save();
         // dd('inserted');
         // return redirect('site.product.uploadvideo')
           // ->withSuccess('Successfully uploaded!')
           // ->with([
            //  'title' => $title
           // ]);
          $message='successfull posted';
          return view('backend.site.products.uploadvideo', compact('product','message'));
            //return redirect()->route('site.product.uploadvideo')->with('success_message', 'successfully Uploaded');
      }
  }

    public function destroy($id) {
       // dd('kkk',$id);
        $product = \DB::table('siteproducts')->where('siteproducts.id',$id)->limit(1);
            $message = $product->delete();
            if ($message) {
                return redirect()->route('site.product.list')->with('success_message', 'successfully Deleted');
            }

    }
    public function categorycreate() {

        $product = new Product();
        //dd('kkkkkkkkk',$product);
        return view('backend.site.category.create', compact('product'));
    }
     public function categorystore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
        $message =DB::table('site_category')->insert(
                array(
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
            'created_by' => Auth::user()->username,
            'created_at' => date('Y-m-d H:i:s'),
        ));
        if ($message) {
            return redirect()->route('site.category.create')->with('success_message', 'successfully created ');
        } else {
            return redirect()->route('site.category.create')->with('error_message', 'Failed To create');
        }
    }

    
}
