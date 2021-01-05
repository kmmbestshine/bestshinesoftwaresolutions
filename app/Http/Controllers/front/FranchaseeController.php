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
        $input = \Request::all();
		//dd('post visit form',$input);

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
            'date' => date('Y-m-d'),
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
    }
    public function postdemoform(Request $request) {
        $input = \Request::all();
      //  dd('postdemoform',$input);
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
            'date' => date('Y-m-d'),
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
          $input = \Request::all();
      // dd('postserviceagreement',$input);
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
            'date' => date('Y-m-d'),
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

    public function reportindex() {
        //dd('franchiseereport');
        return view('front.franchasee.report.reportindex');
    }
    public function franchiseelist() {
        //dd('franchiseereport');
        return view('front.franchasee.report.franchiseelist');
    }
    public function demolists() {
       // dd('demolists');
        return view('front.franchasee.report.demolists');
    }
    public function demolistsdetails(Request $request) {
$input = \Request::all();
//DB::table('demoforms')->where('date','=', '')->update(
             //  array(
           // 'date' => date('Y-m-d'),
         //   'updated_at' => date('Y-m-d H:i:s')

       // ));
 
        $from = date('Y-m-d', strtotime($request->from));
        $to=date('Y-m-d', strtotime($request->to));
//dd($input);
        if($request->state != null && $request->district == null && $request->taluka == null){
            
             $demoForms= DB::table('demoforms')->where('state',$request->state)->whereBetween('date', [$from, $to])->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district='All';
             $taluka='All';
           //  dd($input,$newRegister);
        }elseif($request->state != null && $request->district != null && $request->taluka == null){
            
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->whereBetween('date', [$from, $to])->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->whereBetween('date', [$from, $to])->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

     $success_message ='';
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.demolistsdetails', compact('state','district','demoForms','taluka','success_message'));
    }


    public function agreementlist() {
       // dd('demolists');
        return view('front.franchasee.report.agreementlist');
    }
    public function agreementlistdetails(Request $request) {
$input = \Request::all();
//DB::table('service_agreement')->where('date','=', '')->update(
             //  array(
          //  'date' => date('Y-m-d'),
         //   'updated_at' => date('Y-m-d H:i:s')

       // ));
 
        $from = date('Y-m-d', strtotime($request->from));
        $to=date('Y-m-d', strtotime($request->to));
//dd($input);
        if($request->state != null && $request->district == null && $request->taluka == null){
            
             $agreements= DB::table('service_agreement')->where('state',$request->state)->whereBetween('date', [$from, $to])->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district='All';
             $taluka='All';
           //  dd($input,$newRegister);
        }elseif($request->state != null && $request->district != null && $request->taluka == null){
            
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->whereBetween('date', [$from, $to])->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->whereBetween('date', [$from, $to])->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

     $success_message ='';
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.agreementlistdetails', compact('state','district','agreements','taluka','success_message'));
    }

    public function visitlistsdetails(Request $request) {
$input = \Request::all();
 
        $from = date('Y-m-d', strtotime($request->from));
        $to=date('Y-m-d', strtotime($request->to));
//dd($input);
        if($request->state != null && $request->district == null && $request->taluka == null){
            
             $visitForms= DB::table('visitform')->where('state',$request->state)->whereBetween('date', [$from, $to])->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district='All';
             $taluka='All';
           //  dd($input,$newRegister);
        }elseif($request->state != null && $request->district != null && $request->taluka == null){
            
             $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->whereBetween('date', [$from, $to])->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            
             $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->whereBetween('date', [$from, $to])->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

     $success_message ='';
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.visitlistsdetails', compact('state','district','visitForms','taluka','success_message'));
    }

    public function franchiseelistdetails(Request $request) {
$input = \Request::all();
 
        $from = date('Y-m-d', strtotime($request->from));
        $to=date('Y-m-d', strtotime($request->to));
//dd($input);
        if($request->state != null && $request->district == null && $request->taluka == null){
            
             $newRegister= DB::table('franch_register')->where('state',$request->state)->whereBetween('date', [$from, $to])->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district='All';
             $taluka='All';
           //  dd($input,$newRegister);
        }elseif($request->state != null && $request->district != null && $request->taluka == null){
            
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->whereBetween('date', [$from, $to])->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->whereBetween('date', [$from, $to])->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

     $success_message ='';
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.franchiseelistdetails', compact('state','district','newRegister','taluka','success_message'));
    }

    public function visitlists() {
        //dd('franchiseereport');
        return view('front.franchasee.report.visitlists');
    }

    public function franchiseereport() {
		//dd('franchiseereport');
        return view('front.franchasee.report.franchiseereport');
    }
    public function franchiseereportdetails(Request $request) {
$input = \Request::all();
//dd($input);
        if($request->state != null && $request->district == null && $request->taluka == null){
            $visitForms= DB::table('visitform')->where('state',$request->state)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district='All';
             $taluka='All';
        }elseif($request->state != null && $request->district != null && $request->taluka == null){
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

     $success_message ='';
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.franch_report_list', compact('visitForms','demoForms','agreements','state','district','newRegister','taluka','success_message'));
    }
    public function franchregisterform() {
       // dd('franchregisterform');
        return view('front.franchasee.franchregisterform');
    }
     public function postfranchregister(Request $request) {
        $input = \Request::all();
     /*  $this->validate($request, [
            'name' => 'required',
            'state' => 'required',
            'district' => 'required',
            'taluka' => 'required',
            'address' => 'required',
            'city' => 'required',
            'contact_no' => 'required',
        ]);*/
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
         //dd($request->name,$request->state,$request->contactno,$request->image->getClientOriginalName());
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
            'date' => date('Y-m-d'),
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
     public function downloadagreementlogo($id)
    {
         
        $photo=\DB::table('service_agreement')->where('id', $id)->first();
       // dd($photo);
        if($photo->logo)
        {
             $path = public_path().'/franchise/'. $photo->logo;
        }
       // dd($path);
         if ( file_exists( $path ) ) {
            // Send Download
            return response()->download($path);
        } 
        //dd($build_details->image);
    }

     public function downloaddemologo($id)
    {
         
        $photo=\DB::table('demoforms')->where('id', $id)->first();
       // dd($photo);
        if($photo->logo)
        {
             $path = public_path().'/franchise/'. $photo->logo;
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
        
        return view('front.franchasee.report.kycdocuments', compact('temp'));
    }

     public function downloaddemoform($id)
    {

        $kyc=\DB::table('demoforms')->where('id', $id)->first();

        $temp = explode('|', $kyc->demoform);
        
        return view('front.franchasee.report.viewdemoform', compact('temp'));
    }

     public function downloadserv_agreement($id)
    {

        $kyc=\DB::table('service_agreement')->where('id', $id)->first();

        $temp = explode('|', $kyc->serv_agreement);
        
        return view('front.franchasee.report.viewagreement', compact('temp'));
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
        $success_message="Deleted Successfully";
     
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.franch_report_list', compact('visitForms','demoForms','agreements','state','district','newRegister','success_message'));
    }
    public function franchvisitdelete(Request $request, $id)
    {
        $input=\Request::all();
       // dd($id,$input);

        $kyc=\DB::table('visitform')->where('id', $id)->delete();

                if($request->state != 'All' && $request->district == 'All' && $request->taluka == 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister,$id);
             $state=$request->state;
             $district='All';
             $taluka='All';
        }elseif($request->state != 'All' && $request->district != 'All' && $request->taluka == 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

        $success_message="Deleted Successfully";
     
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.franch_report_list', compact('visitForms','demoForms','agreements','state','district','newRegister','success_message','taluka'));
    }
    public function franchdemodelete(Request $request, $id)
    {
        $input=\Request::all();
       // dd($id,$input);

        $kyc=\DB::table('demoforms')->where('id', $id)->delete();

                if($request->state != 'All' && $request->district == 'All' && $request->taluka == 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister,$id);
             $state=$request->state;
             $district='All';
             $taluka='All';
        }elseif($request->state != 'All' && $request->district != 'All' && $request->taluka == 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

        $success_message="Deleted Successfully";
     
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.franch_report_list', compact('visitForms','demoForms','agreements','state','district','newRegister','success_message','taluka'));
    }

    public function franchservicedelete(Request $request, $id)
    {
        $input=\Request::all();
       // dd($id,$input);

        $kyc=\DB::table('service_agreement')->where('id', $id)->delete();

                if($request->state != 'All' && $request->district == 'All' && $request->taluka == 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->get();
            // dd('State level',$input,$visitForms,$demoForms,$agreements,$newRegister,$id);
             $state=$request->state;
             $district='All';
             $taluka='All';
        }elseif($request->state != 'All' && $request->district != 'All' && $request->taluka == 'All'){
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->get();
           //  dd('District level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka='All';
            // $district='All';
        }else{
            $visitForms= DB::table('visitform')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $demoForms= DB::table('demoforms')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $agreements= DB::table('service_agreement')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
             $newRegister= DB::table('franch_register')->where('state',$request->state)->where('district',$request->district)->where('taluka',$request->taluka)->get();
           //  dd('taluk level',$input,$visitForms,$demoForms,$agreements,$newRegister);
             $state=$request->state;
             $district=$request->district;
             $taluka=$request->taluka;
             
        }

        $success_message="Deleted Successfully";
     
        //dd('visitForms',$newRegister);
       return view('front.franchasee.report.franch_report_list', compact('visitForms','demoForms','agreements','state','district','newRegister','success_message','taluka'));
    }


}
