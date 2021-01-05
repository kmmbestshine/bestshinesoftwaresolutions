<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;
use ZipArchive;

class FranchaseeController extends Controller
{ 
	public function index() {
		//dd('hhhh');
        return view('front.franchasee.index');
    }
    public function visitindex() {
		//dd('hhhh');
        return view('front.franchasee.visitindex');
    }
    public function demoindex() {
		//dd('hhhh');
        return view('front.franchasee.demoindex');
    }
    public function serviceagreeindex() {
		//dd('hhhh');
        return view('front.franchasee.serviceagreeindex');
    }
     public function postvisitform(Request $request ) {
		//dd('post visit form');

         DB::table('visitform')->insert(
                array(
            'software_type' => $request->softwaretype,
            'franchisee_id' => $request->franchiseeid,
            'company_name' => $request->institutename,
            'country' => 'india',
            'state' => $request->state,
            'district' => $request->district,
            'taluka' => $request->taluka,
            'address' => $request->address,
            'city' => $request->city,
            'hod_name' => $request->hodname,
            'contact_no' => $request->contactno,
            'coord_contact_no' => $request->coord_contactno,
            'off_contact_no' => $request->office_contactno,
            'email' => $request->email,
            'no_of_staff' => $request->no_of_staff,
            'no_of_student' => $request->no_of_student,
            'feedback' => $request->feedback,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ));
        
return redirect()->route('visitform')->with('success_message', 'You are successfully created');
     //   return redirect('franchasee/visitform');
    }
    public function postdemoform(Request $request) {

         // // Upload the demo logo
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('franchise', $image->getClientOriginalName());
        }
        // Upload the demo form
        $images=array();
        if ($files=$request->file('images')) {
            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move('franchise',$name);
                $images[]=$name;
            }
        }
         
         DB::table('demoforms')->insert(
                array(
            'software_type' => $request->softwaretype,
            'franchisee_id' => $request->franchiseeid,
            'company_name' => $request->institutename,
            'country' => 'india',
            'state' => $request->state,
            'district' => $request->district,
            'taluka' => $request->taluka,
            'address' => $request->address,
            'city' => $request->city,
            'hod_name' => $request->hodname,
            'contact_no' => $request->contactno,
            'coord_contact_no' => $request->coord_contactno,
            'off_contact_no' => $request->office_contactno,
            'email' => $request->email,
            'no_of_staff' => $request->no_of_staff,
            'no_of_student' => $request->no_of_student,
            'demoform' => implode("|",$images),
            'logo' => $request->image->getClientOriginalName(),
           // 'feedback' => $request->feedback,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ));
        
        
         return redirect()->route('demoform')->with('success_message', 'You are successfully created');
    }

    public function postserviceagreement(Request $request) {

         // // Upload the demo logo
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('franchise', $image->getClientOriginalName());
        }
        // Upload the demo form
        $images=array();
        if ($files=$request->file('images')) {
            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move('franchise',$name);
                $images[]=$name;
            }
        }
         
         DB::table('service_agreement')->insert(
                array(
            'software_type' => $request->softwaretype,
            'franchisee_id' => $request->franchiseeid,
            'company_name' => $request->institutename,
            'country' => 'india',
            'state' => $request->state,
            'district' => $request->district,
            'taluka' => $request->taluka,
            'address' => $request->address,
            'city' => $request->city,
            'hod_name' => $request->hodname,
            'contact_no' => $request->contactno,
            'coord_contact_no' => $request->coord_contactno,
            'off_contact_no' => $request->office_contactno,
            'serv_agreement' => implode("|",$images),
            'logo' => $request->image->getClientOriginalName(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ));
        
        
         
         return redirect()->route('serviceagreement')->with('success_message', 'You are successfully created');
    }

    public function franchiseereport() {
		//dd('franchiseereport');
        return view('front.franchasee.franchiseereport');
    }
    public function franchiseereportdetails(Request $request) {

        if($request->district != 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->get();
             $state=$request->state;
             $district=$request->district;
        }else{
            $visitForms= DB::table('visitform')->where('state',$request->state)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->get();
             $state=$request->state;
             $district='All';
        }

     
        //dd('visitForms',$newRegister);
       return view('front.franchasee.franch_report_list', compact('visitForms','demoForms','agreements','state','district','newRegister'));
    }
    public function franchregisterform() {
       // dd('franchregisterform');
        return view('front.franchasee.franchregisterform');
    }
     public function postfranchregister(Request $request) {
        $input = \Request::all();
       // dd('register',$input);
        // // Upload the demo logo
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('franchise', $image->getClientOriginalName());
        }
        

            if(isset($request->pdf))
            {
                $pdf = $request->pdf;
                $ex = $pdf->getClientOriginalExtension();
                $name = $pdf->getClientOriginalName();
                $destinationPath = 'franchise';
                $pdfname = substr(str_shuffle(sha1(rand(3,300).time())), 0, 10) . "." . $ex;
                $upload_pdf = $pdf->move($destinationPath, $pdfname);
                $pdffile = $destinationPath.'/'.$pdfname;
            }
            else
            {
                $pdffile = '';
            }
        // Upload the demo form
        $images=array();
        if ($files=$request->file('images')) {
            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move('franchise',$name);
                $images[]=$name;
            }
        }
         
        DB::table('franch_register')->insert(
                array(
            'photo'=> $request->image->getClientOriginalName(),
            'biodata' => $pdffile,
            'kyc_document' => implode("|",$images),
            'name' => $request->name,
            'country' => 'india',
            'state' => $request->state,
            'district' => $request->district,
            'taluka' => $request->taluka,
            'address' => $request->address,
            'city' => $request->city,
            'contact_no' => $request->contactno,
            'email' => $request->email,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ));
        
        
         //$message='successfull posted';
        return redirect()->route('franchregisterform')->with('success_message', 'You are successfully created');
 //return view('front.franchasee.franchregisterform', compact('message'));
    }
    public function downloadresume($id)
    {
         
        $resume=\DB::table('franch_register')->where('id', $id)->first();
        if($resume->biodata)
        {
             $path = public_path().'/'. $resume->biodata;
        }
       // dd($path);
         if ( file_exists( $path ) ) {
            // Send Download
            return response()->download($path);
        } 
        //dd($build_details->image);
    }

    public function downloadphoto($id)
    {
         
        $photo=\DB::table('franch_register')->where('id', $id)->first();
       // dd($photo);
        if($photo->photo)
        {
             $path = public_path().'/franchise/'. $photo->photo;
        }
       // dd($path);
         if ( file_exists( $path ) ) {
            // Send Download
            return response()->download($path);
        } 
        //dd($build_details->image);
    }
    public function downloadkycdocument($id)
    {

        $kyc=\DB::table('franch_register')->where('id', $id)->first();

        $temp = explode('|', $kyc->kyc_document);
        
        return view('front.franchasee.kycdocuments', compact('temp'));
    }
    public function franchregisterdelete(Request $request, $id)
    {
       // dd($id);

        $kyc=\DB::table('franch_register')->where('id', $id)->delete();

               // return redirect()->route('franchreport')->with('success_message', 'successfully Deleted');
                 if($request->district != 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->get();
             $state=$request->state;
             $district=$request->district;
        }else{
            $visitForms= DB::table('visitform')->where('state',$request->state)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->get();
             $state=$request->state;
             $district='All';
        }
        $message="Deleted Successfully";
     
        //dd('visitForms',$newRegister);
       return view('front.franchasee.franch_report_list', compact('visitForms','demoForms','agreements','state','district','newRegister','message'));
    }

}
