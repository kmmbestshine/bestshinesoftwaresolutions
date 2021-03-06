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
                            
                            <form action="{{ url('franch/report') }}" method="post" >
                    {{ csrf_field()}}
                    
                     <div class="form-group">
                       Select State: <select name="state" id="countySel" size="1">
                        <option value="" selected="selected">Select State</option>
                        </select>
                        Select District: <select name="district" id="stateSel" size="1">
                        <option value="" selected="selected">Please select State first</option>
                        </select>
                    </div>
                    <div class="form-group">
                        Select Taluk: <select name="taluka" id="districtSel" size="1">
                        <option value="" selected="selected">Select Taluk</option>
                       
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
        "Tamilnadu": {
         "Ariyalur": ["Udayarpalayam", "Ariyalur","Sendurai","Andimadam"],
        "Chengalpattu": ["Chengalpattu", "Cheyyur","Madhurantakam", "Pallavaram","Tambaram", "Thirkkalukundram","Thirupporur", "Vandalur"],
        "Chennai": ["Alandur", "Ambattur","Aminjikarai", "Ayanavaram","Egmore", "Guindy",
                    "Madhavaram", "Maduravoyal","Mambalam", "Mylapore","Perambur", "Purasawalkam","Sholinganallur", 
                    "Thiruvottiyur","Tondiarpet", "Velachery"],
        "Coimbatore": ["Anaimalai", "Annur","Coimbatore(North)", "Coimbatore(South)","Kinathukadavu", "Madukkarai",
                    "Mettupalayam", "Perur","Pollachi", "Sulur","Valparai"],
        "Cuddalore": ["Bhuvanagiri", "Chidambaram","Cuddalore", "Kattumannarkoil","Kurinjipadi", "Panruti",
                    "Srimushanam", "Titakudi","Veppur", "Vridachalam"],
        "Dharmapuri": ["Dharmapuri", "Harur","Karimangalam", "Nallampalli","Palakcode", "Pappireddipatti",
                    "Pennagaram"],
        "Dindigul ": ["Attur", "Dindigul East","Dindigul West", "Gujiliamparai","Kodaikanal", "Natham",
                    "Nilakottai", "Oddenchatram","Palani", "Vedasandur"],
        "Erode  ": ["Anthiyur", "Bhavani","Erode", "Gobichettipalayam","Kodumudi", "Modakkurichi",
                    "Nambiyur", "Perundurai","Sathyamangalam", "Thalavadi"],
        "Kallakurichi ": ["Chinnaselam", "Kallakurichi","Kalvarayan hills", "Sankarapuram","Tirukkoilur", "Ulundurpet"],
        "Kancheepuram ": ["Kancheepuram", "Kundrathur","Sriperumbudur", "Uthiramerur","Walajabad"],
        "Kanyakumari ": ["Agasteeswaram", "Kalkulam","Killiyoor", "Thiruvattar","Thovalai", "Vilavancode"],
         "Karur ": ["Aravakurichi", "Kadavur","Karur", "Krishnarayapuram","Kulithalai", "Manmangalam","Pugalur"],
        "Krishnagiri ": ["Anchetty", "Bargur","Denkanikottai", "Hosur","Krishnagiri", "Pochampalli","Shoolagiri","Uthangarai"],
        "Madurai": ["Kalligudi", "Madurai East","Madurai North", "Madurai(South)","Madurai West", "Melur",
                    "Peraiyur", "Thirupparankundram","Tirumangalam", "Usilampatti","Vadipatti"],
        "Nagapattinam  ": ["Kilvelur", "Kutthalam","Mayiladuthurai", "Nagapattinam","Sirkali", "Tharangambadi",
                    "Thirukkuvalai", "Vedaranyam"],
        "Namakkal  ": ["Kolli Hills", "Kumarapalayam","Mohanur", "Namakkal","Paramathi Velur", "Rasipuram",
                    "Sendamangalam", "Thiruchengode"],
        "Perambalur  ": ["Alathur", "Kunnam","Perambalur", "Veppanthattai"],
        "Pudukottai": ["Alangudi", "Aranthangi","Avadaiyarkoil", "Gandarvakottai","Illuppur", "Karambakudi",
                    "Kulathur", "Manamelkudi","Ponnamaravathi", "Pudukkottai","Thirumayam","Viralimalai"],
        "Ramanathapuram": ["Kadaladi", "Kamuthi","Kilakarai", "Mudukulathur","Paramakudi", "Rajasingamangalam",
                    "Ramanathapuram", "Rameswaram","Tiruvadanai"],
         "Ranipet  ": ["Arakkonam", "Arcot","Nemili", "Walajah"],
         "Salem": ["Attur", "Edapady","Gangavalli", "Kadayampatti","Mettur", "Omalur",
                    "Pethanaickenpalayam", "Salem","Salem South", "Salem West","Sangagiri","Valapady","Yercaud"],
        "Sivagangai": ["Devakottai", "Ilayankudi","Kalaiyarkoil", "Karaikudi","Manamadurai", "Sigampunari",
                    "Sivaganga", "Thiruppuvanam","Tirupathur"],
         "Tenkasi": ["Alangulam", "Kadayanallur","Sankarankovil", "Shencottai","Sivagiri", "Tenkasi",
                    "Thiruvengadam", "V.K.Pudur"],
        "Thanjavur": ["Budalur", "Kumbakonam","Orathanadu", "Papanasam","Pattukkottai", "Peravurani",
                    "Thanjavur", "Thiruvaiyaru","Thiruvidaimarudur"],
        "Theni": ["Andipatti", "Bodinayakanur","Periyakulam", "Theni","Uthamapalayam"],
        "The Nilgiris": ["Coonoor", "Gudalur","Kotagiri", "Kundah","Kundah","Udhagamandalam"],
        "Thirunelveli": ["Ambasamuthiram", "Cheranmahadevi","Manur", "Nanguneri","Palayamkottai","Radhapuram","Thisayanvilai","Tirunelveli"],
        "Thiruvallur": ["Avadi", "Gummidipoondi","Pallipattu", "Ponneri","Poonamallee","R.K. Pettai","Tiruttani","Tiruvallur","Uthukkotai"],
        "Thiruvannamalai": ["Arani", "Chengam","Chetpet", "Jamunamarathoor","Kalasapakkam","Kilpennathur","Periyakulam","Polur","Thandarampattu","Tiruvannamalai","Vandavasi","Vembakkam"],
        "Thiruvarur": ["Koothanallur", "Kudavasal","Mannargudi", "Nannilam","Needamanglam","Thiruthuraipoondi","Thiruvarur","Valangaiman"],
         "Tirupathur": ["Ambur", "Natrampalli","Tirupattur", "Vaniyambadi"],
        "Tiruppur": ["Avinashi", "Dharapuram","Kangayam", "Madathukulam","Palladam","Tiruppur North","Tiruppur South","Udumalpet","Uthukuli"],
        "Trichirappalli": ["Lalgudi", "Manachanallur","Musiri", "Srirangam","Thiruchirapalli-West","Thiruverumpur","Thottiyam","Thuraiyur","Tiruchirappalli-East"],
        "Tuticorin": ["Eral", "Ettayapuram","Kayathar", "Kovilpattai","Ottapidaram","Sathankulam","Srivaikundam","Thoothukkudi","Tiruchendur","Vilathikulam"],
         "Vellore": ["Anaicut", "Gudiyatham","Katpadi", "K V Kuppam","Pernambut","Vellore"],
         "Viluppuram": ["Gingee", "Kandachipuram","Marakkanam", "Melmalaiyanur","Thiruvennainallur","Tindivanam","Vanur","Vikkiravandi","Villupuram"],
         "Virudhunagar": ["Arupukottai", "Kariapattai","Rajapalayam", "Sathur","Sivakasi","Srivilliputhur","Tiruchuli","Vembakkottai","Virudhunagar","Watrap"],
        },
        "Pondicherry/Puducherry": {
         "Pondicherry/Puducherry": ["Bahour", "Ozhukarai","Puducherry","Villianur"],
        "Karaikkal": ["Poovam", "Thiruvettakudy","Varichikudy", "Kil Vanjiyur","Mel Vanjiyur", "Keezhaiyur","Polagam"],
        "Mahe": ["Mahe", "Pandakkal","Chalakara", "Palloor","Kallayi"],
        "Yanam": ["Yanam"],
        },
        "Karnataka": {
         "Bangalore": ["Koramangala"],
        
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

