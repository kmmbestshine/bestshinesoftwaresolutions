@extends('front.layouts.master')

@section('content')
   <?php
    $category = \DB::table('site_category')->where('status', 1)->orderBy('id', 'asc')->get();
    foreach ($category as  $cat) {
      $cat_id[]=$cat->id;
      $cat_name[]=$cat->name;
    }
                     
  ?>
  
    <table>
      <tr>
        <form action="{{ route('categoryProd') }}" method="post">
        {{ csrf_field()}}
        <th>              
         <input type="hidden" name="id" value="{{ $cat_id[0] }}">
        <button type="submit" class="btn btn-primary btn-outline-light">{{$cat_name[0]}}</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </th>
        </form>
        <form action="{{ route('categoryProd') }}" method="post">
        {{ csrf_field()}}
        <th>              
         <input type="hidden" name="id" value="{{ $cat_id[1] }}">
        <button type="submit" class="btn btn-primary btn-outline-light">{{$cat_name[1]}}</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </th>
        </form>
        <form action="{{ route('categoryProd') }}" method="post">
        {{ csrf_field()}}
        <th>              
         <input type="hidden" name="id" value="{{ $cat_id[2] }}">
        <button type="submit" class="btn btn-primary btn-outline-light">{{$cat_name[2]}}</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </th>
        </form>
        <form action="{{ route('categoryProd') }}" method="post">
        {{ csrf_field()}}
        <th>              
         <input type="hidden" name="id" value="{{ $cat_id[3] }}">
        <button type="submit" class="btn btn-primary btn-outline-light">{{$cat_name[3]}}</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </th>
        </form>

</tr>


</table>
  <div class="banner-wr">
  <!--  -->
  <div class="wrapper hidden-xs">
     
    
       <div class="text-typ-wr">
         <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <h1> <marquee direction="left" > We build school management software that users love.</marquee></h1>
    </div>

        <div class="container">
            <div class="row  d-flex">
                <div class="col-lg-6 col-md-12 justify-content-top align-self-top">
                  <div class="row">
                      <div class="column" style="background-color:#b5dcb3;">
                         <h2>Advanced Modules</h2>
                         <p>1.Dashboard</p><p>2.Academics Management</p><p>3.Library Management</p><p> 4.Enquiry & Admission Management</p><p>5.Student Management</p>
                         <p>6.Communication - Notification /Email/SMS/Voice Calling</p>
                     </div>
                      <div class="column" style="background-color:rgba(255, 99, 71, 0.5);">
                          <p>7.Fees Management</p><p>8.Exam Management</p><p> 9.School Website</p>
                          <p>10.HRM/Employee Management</p><p>11.Video/Audio/Gallery/PDF Management</p><p>12.Settings</p><p>13.Leave Management</p><p>14.Transportation Management</p><p>15.Store Room Management</p>
                      </div>
                    </div>
                
                </div>
                <div class="col-lg-6 col-md-12">
                   <!-- <img src="assets/images/hero.jpg" class="img-fluid">-->
                   <div class="container-fluid"> 
                    <div id="carousel1"
                        class="carousel slide carousel-fade"
                        data-ride="carousel" style="height:50vh"> 
          
            <!--Indicators-->
            <ol class="carousel-indicators"> 
                <li data-target="#carousel1"
                    data-slide-to="0"
                    class="active"></li> 
                <li data-target="#carousel1"
                    data-slide-to="1"></li> 
                <li data-target="#carousel1"
                    data-slide-to="2"></li> 
                    <li data-target="#carousel1"
                    data-slide-to="3"></li> 
                    <li data-target="#carousel1"
                    data-slide-to="4"></li> 
                    <li data-target="#carousel1"
                    data-slide-to="5"></li> 
                    <li data-target="#carousel1"
                    data-slide-to="6"></li> 
                    <li data-target="#carousel1"
                    data-slide-to="7"></li> 
            </ol> 
      
            <!--Slides-->
           <div class="carousel-inner" role="listbox"> 
                <div class="carousel-item active"> 
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero.png')}}"
                            alt="First slide"> 
                        <div class="mask rgba-black-light"></div> 
                    </div> 
                </div> 
                <div class="carousel-item"> 
                  
                    <!-- Slideer 1 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero1.png')}}"
                            alt="Second slide"> 
                        <div class="mask rgba-black-strong"></div> 
                    </div> 
                </div> 
                <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero2.png')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero3.png')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero4.png')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero5.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero6.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/school/hero7.png')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
            </div> 
          
            <!-- Slideer 3 -->
            <a class="carousel-control-prev"
            href="#carousel1" role="button"
            data-slide="prev"> 
                <span class="carousel-control-prev-icon"
                    aria-hidden="true"></span> 
                <span class="sr-only">Previous</span> 
            </a> 
            <a class="carousel-control-next"
            href="#carousel1" role="button"
            data-slide="next"> 
                <span class="carousel-control-next-icon"
                    aria-hidden="true"></span> 
                <span class="sr-only">Next</span> 
            </a> 
        </div> 
    </div> 
   
                </div>
                <div class="text-typ-wr">
         <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
         <h3>Smart Solution for 
          <span
             class="txt-rotate"
             data-period="1000"
            
             data-rotate='[ "Super Admin Management.","Admin Management.","Management Staff.", "Teachers.", "Parents.", "Students.", "Accounts.","Store Room.","Library." ]'></span>
        </h3>
    </div>
                    
            </div>
        </div>
    </div>
    
  </div>

  <div>
 

          </div>
    @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif


    <div class="row text-center">

    @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card w3-lobster">
                <p ><h4 class="card-title"><strong style="background-color:red; color:yellow;">{{ $product->name }}</strong></h4></p>
                <img class="card-img-top" src="{{ url('/uploads') . '/' . $product->image }}" alt="">
               {{-- {!! $product->intro_video_embed_code !!}   --}} 
               <p ><h4 style="background-color:black; color:white;">VIDEO OVERVIEW</h4></p>
               @foreach ($product->videos as $key => $product1)
                    <?php
                    //$locatvideo=array();
                    if($product1){
                        $titlecount[]=$product1->title;
                    $locatvideo[]=$product1->location;
                    }
                    
                    ?>
                    <div>
                   <button  onclick="enableAutoplay()" type="button" ><strong style="background-color:blue; color:yellow;">{{$product1->title}}</strong></button>
                    <video id="myVideo" width="320" height="240"  controls >
                      <source src="{{$product1->location}}" type="video/mp4">
                      <source src="{{$product1->location}}" type="video/ogg">
                   
                    </video>
                    </div>
                    <br>
                    @endforeach            
                <div class="card-body">
                    
                    
                    <p class="card-text">
                       {!! $product->description !!}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>Rs.{{ $product->price }}</strong> &nbsp;
                    
                    
                </div>
                <div class="card-footer">
                   <form action="{{ route('moredetails') }}" method="post">
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-bars"></i>Click More Details</button>
                    </form> 

                </div>
            </div>
        </div>

        @endforeach
    
       

    </div>
    <script>
        var passedArray = <?php echo json_encode($titlecount); ?>; 
        var locatvideo = <?php echo json_encode($locatvideo); ?>; 
    
        var vid = document.getElementById("myVideo");
        for(var i = 0; i < passedArray.length; i++){ 
            
        function enableAutoplay() { 
          
          document.getElementById('player').setAttribute('src',locatvideo[i]);
          vid.autoplay = true;
          vid.load();

        } 
        } 
        

        function disableAutoplay() { 
          vid.autoplay = false;
          vid.load();
        } 

        function checkAutoplay() { 
          alert(vid.autoplay);
        } 
        </script> 

        <style type="text/css">
    .carousel-inner {
    margin-bottom: 0;
   
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
    text-shadow: black 0.3em 0.3em .5em;
}
    </style>
     <script src="{{ url('tuttee/js/particles/particles.js')}}"></script>
<script src="{{ url('tuttee/js/particles/app.js')}}"></script> 

      
<!-- <script src="js/particles/stats.js"></script -->
<!-- <script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>  -->
<script type="">
  $('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
}); 

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})
// 
// 
</script>

<!-- <script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script> -->
<script type="text/javascript">
  window.setTimeout(function() {
    $(".wish-pop,.modal-backdrop").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>













       
       

    </div>
    <meta name="keywords" content="Edu app, education app, School web app, school mobile app, School app, school software, e- School app, smartphone school app, educational management app, cloud based school app" />
<meta name="description" content=" A School Management App development company in Chennai, Tamilnadu, India, best Mobile App integrated to Web Application, Integrated school management, School software, Web Designing, SMS/Text portal, NEET/IAS coaching." />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bs-slider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome.css') }}"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,900" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700,800" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,500i,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,500,600,700,800,900" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome-css.min.css') }}"/>  -->
<script src="https://use.fontawesome.com/c7a7b2acb2.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--  <script src="{{ url('tuttee/js/c7a7b2acb2.js')}}"></script> -->
   <script src="{{ url('tuttee/js/js.js')}}"></script>
   <script src="{{ url('tuttee/js/wow.min.js')}}"></script>
   <script>
        new WOW().init();
    </script>  
    <script type="text/javascript">
                  var TxtRotate = function(el, toRotate, period) {
              this.toRotate = toRotate;
              this.el = el;
              this.loopNum = 0;
              this.period = parseInt(period, 10) || 1500;
              this.txt = '';
              this.tick();
              this.isDeleting = false;
            };

            TxtRotate.prototype.tick = function() {
              var i = this.loopNum % this.toRotate.length;
              var fullTxt = this.toRotate[i];

              if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
              } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
              }

              this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

              var that = this;
              var delta = 300 - Math.random() * 100;

              if (this.isDeleting) { delta /= 2; }

              if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
              } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
              }

              setTimeout(function() {
                that.tick();
              }, delta);
            };

            window.onload = function() {
              var elements = document.getElementsByClassName('txt-rotate');
              for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                  new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
              }
              // INJECT CSS
              var css = document.createElement("style");
              css.type = "text/css";
              css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
              document.body.appendChild(css);
            };
    </script>      
  <link rel="shortcut icon" type="text/css" href="{{url('tuttee/images/images/fav-ico.ico')}}">
    <script>
        
       
    
        var vid = document.getElementById("myVideo");
        for(var i = 0; i < passedArray.length; i++){ 
            
        function enableAutoplay() { 
          
          document.getElementById('player').setAttribute('src',locatvideo[i]);
          vid.autoplay = true;
          vid.load();

        } 
        } 
        

        function disableAutoplay() { 
          vid.autoplay = false;
          vid.load();
        } 

        function checkAutoplay() { 
          alert(vid.autoplay);
        } 
        </script> 
       
    <script src= 
"https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity= 
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"> 
    </script> 
  
    <script src= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity= 
"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"> 
    </script> 
           <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
        }

        li {
          float: left;
        }

        li a, .dropbtn {
          display: inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        li.dropdown {
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>   
    <style> 

        article {  
            margin: 15px;  
            background-color: blue;
        }  
        h4 { 
            color: blue; 
        } 
        .carousel-inner { 
            height: 310px; 
            background-color: lightblue;
        } 
          
        .item.active { 
            height: 310px!important; 
        } 
          
        .item img { 
            object-fit: cover; 
            height: 100%!important; 
        } 
       
        * {
              box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column {
              float: left;
              width: 50%;
              padding: 10px;
              height: 330px; /* Should be removed. Only for demonstration */

            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
        
    </style>
@endsection