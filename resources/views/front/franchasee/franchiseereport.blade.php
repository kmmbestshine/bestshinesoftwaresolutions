@extends('backend.layouts.master')
@section('title')
    Permission Listing Page
@endsection
@section('css')

@endsection
<!-- page content -->
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Franchisee Report</h3>
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
                            <h2>Listing Permission</h2>
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
                            
                            <form action="{{ url('franch/report') }}" method="post" >
                    {{ csrf_field()}}
                    
                     <div class="form-group">
                       Select Country: <select name="country" id="countySel" size="1">
                        <option value="" selected="selected">Select Country</option>
                        </select>
                        Select State: <select name="state" id="stateSel" size="1">
                        <option value="" selected="selected">Please select Country first</option>
                        </select>
                    </div>
                    <div class="form-group">
                        Select District: <select name="district" id="districtSel" size="1">
                        <option value="All" selected="selected">All District</option>
                       
                        </select>

                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-outline-info col-md-2"> Submit</button>
                    </div>

                </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@section('script')

@endsection
    <script>
        var stateObject = {
        "India": { "Tamilnadu": ["Ariyalur", "Chengalpattu","Chennai", "Coimbatore","Cuddalore", "Dharmapuri",
                    "Dindigul", "Erode","Kallakurichi", "Kanchipuram","Kanniyakumari", "Karur","Krishnagiri", 
                    "Madurai","Mayiladuthurai", "Nagapattinam","Namakkal", "Nilgiris","Perambalur", "Pudukkottai",
                    "Ramanathapuram", "Ranipet","Salem", "Sivagangai","Tenkasi", "Thanjavur","Theni", "Thoothukudi",
                    "Tiruchirappalli", "Tirunelveli","Tirupattur", "Tiruppur","Tiruvallur", "Tiruvannamalai","Tiruvarur", 
                    "Vellore","Viluppuram", "Virudhunagar"],
         "Puducherry": ["Bahour","Ozhukarai","Puducherry","Villianur","Karaikkal"],
        "Kerala": ["Alappuzha", "Ernakulam","Idukki", "Kannur","Kasaragod", "Kollam",
                    "Kottayam", "Kozhikode","Malappuram", "Palakkad","Pathanamthitta", "Thiruvananthapuram","Thrissur","Wayanad"
                    ],
        "Karnataka": ["Bangalore"],
        "Andhra Pradesh": ["Anantapur", "Chittoor","East Godavari", "Guntur","YSR Kadapa district", "Krishna",
                    "Kurnool", "Nellore","Prakasam", "Srikakulam","Visakhapatnam", "Vizianagaram","West Godavari"
                    ],
        },
         
        }
        window.onload = function () {
        var countySel = document.getElementById("countySel"),
        stateSel = document.getElementById("stateSel"),
        districtSel = document.getElementById("districtSel");
        for (var country in stateObject) {
        countySel.options[countySel.options.length] = new Option(country, country);
        }
        countySel.onchange = function () {
        stateSel.length = 1; // remove all options bar first
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        for (var state in stateObject[this.value]) {
        stateSel.options[stateSel.options.length] = new Option(state, state);
        }
        }
        countySel.onchange(); // reset in case page is reloaded
        stateSel.onchange = function () {
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        var district = stateObject[countySel.value][this.value];
        for (var i = 0; i < district.length; i++) {
        districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
        }
        }
        }
    </script>

