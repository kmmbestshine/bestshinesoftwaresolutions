@extends('backend.layouts.master')
@section('title')
    Franchisee Listing Page
@endsection
@section('css')

@endsection
<!-- page content -->
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Franchisee Management</h3>
                </div>
                
            </div>
            <div class="clearfix"></div>
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
            @endif
            @if(Session::has('error_message'))
                <div class="alert alert-danger">
                    {{ Session::get('error_message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Listing Franchisee</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <h2>New Franchisee List <strong> {{$district}} </strong> District Of <strong> {{$state}} </strong></h2>
                            
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Name</th>
                                    <th>District-Taluk</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    <th>Download</th>
                                    <th>Delete</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1 ?>
                                @foreach($newRegister as $nr)
                                    <tr>
                                        <th> {{$i++}}</th>
                                        <td> {{$nr->name}}</td>
                                        <td>Dt- {{$nr->district}}<br>TK-{{$nr->taluka}}</td>
                                        <td> {{$nr->address}}</td>
                                        <td> {{$nr->city}}</td>
                                        <td> {{$nr->contact_no}}</td>
                                        <td> {{$nr->email}}</td>
                                        <td><div class="row">
                                                <div >
                                                    @if($nr->photo !='')
                                                    <a href="{{ route('franch.download.photo', $nr->id) }}"class="btn btn-info">Photo</a>
                                                @else
                                                    No Image
                                                @endif
                                                </div>
                                              
                                                <div >
                                                    @if($nr->kyc_document !='')
                                                    <a href="{{ route('franch.download.kyc', $nr->id) }}"class="btn btn-info">KYC View</a>
                                                @else
                                                    No Image
                                                @endif
                                                </div>
                                               
                                                <div >
                                                    @if($nr->biodata !='')
                                                    <a href="{{ route('franch.download.resume', $nr->id) }}"class="btn btn-info">Resume</a>
                                                @else
                                                    No Resume Found
                                                @endif
                                                </div>
                                                
                                            </div>
                                        </td>
                                        
                                        <td>
                                            @if($nr->name !='')
                                                    <form action="{{route('franch.register.delete', $nr->id)}}" method="post">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        {{ csrf_field()}}
                                                        <input type="hidden" name="district" value="{{$district}}">
                                                        <input type="hidden" name="state" value="{{$state}}">
                                                        
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')" ><i class="fa fa-trash-o"></i></button>
                                                    </form>
                                                   
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="x_content">
                            <h2>Visit Form Report Of <strong> {{$district}} </strong> District Of <strong> {{$state}} </strong></h2>
                            
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Type</th>
                                    <th>Franchisee Name</th>
                                    <th>Company Name</th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1 ?>
                                @foreach($visitForms as $vf)
                                    <tr>
                                        <th> {{$i++}}</th>
                                        <td> {{$vf->software_type}}</td>
                                        <td> {{$vf->franchisee_id}}</td>
                                        <td> {{$vf->company_name}}</td>
                                        <td> {{$vf->city}}</td>
                                        <td> {{$vf->contact_no}}<br>{{$vf->coord_contact_no}}<br>{{$vf->off_contact_no}}</td>
                                        <td> {{$vf->email}}</td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="x_content">
                            <h2>Demo Form Report Of <strong> {{$district}} </strong>  District Of <strong> {{$state}} </strong></h2>
                             <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Type</th>
                                    <th>Franchisee Name</th>
                                    <th>Company Name</th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1 ?>
                                @foreach($demoForms as $df)
                                    <tr>
                                        <th> {{$i++}}</th>
                                        <td> {{$vf->software_type}}</td>
                                        <td> {{$vf->franchisee_id}}</td>
                                        <td> {{$vf->company_name}}</td>
                                        <td> {{$vf->city}}</td>
                                        <td> {{$vf->contact_no}}<br>{{$vf->coord_contact_no}}<br>{{$vf->off_contact_no}}</td>
                                        <td> {{$vf->email}}</td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="x_content">
                            <h2>Service Agreement Of <strong> {{$district}} </strong> District Of <strong> {{$state}} </strong></h2>
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Type</th>
                                    <th>Franchisee Name</th>
                                    <th>Company Name</th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1 ?>
                                @foreach($agreements as $agr)
                                    <tr>
                                        <th> {{$i++}}</th>
                                        <td> {{$agr->software_type}}</td>
                                        <td> {{$agr->franchisee_id}}</td>
                                        <td> {{$agr->company_name}}</td>
                                        <td> {{$agr->city}}</td>
                                        <td> {{$agr->contact_no}}<br>{{$vf->coord_contact_no}}<br>{{$vf->off_contact_no}}</td>
                                        <td> {{$agr->email}}</td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@section('script')
<style>
table, th, td {
  border: 1px solid black;
}
</style>
@endsection