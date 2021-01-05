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
        <h1> <marquee direction="left" >Welcome To Bestshine Software Solutions. We build software solutions that users love.</marquee></h1>
    </div>

        <div class="container">
            <div class="row  d-flex">
                <div class="col-lg-6 col-md-12 justify-content-top align-self-top">
                  <div class="row">
                      <div class="column" style="background-color:#b5dcb3;">
                         <h2>Our Best Projects</h2>
                         <p>1.Digital School Management System</p><p>2.Institute Management System</p><p>3.Online Exam Master</p><p> 4.Smart Hotel Management System</p><p>5.Super Market Management System</p>
                     </div>
                      <div class="column" style="background-color:rgba(255, 99, 71, 0.5);">
                          <h2>Our Best Projects</h2>
                          <p>6.Accounts Management System</p><p>7.E-Commerce Website Management System</p><p>8.Smart Hospital Management System</p><p>9.Inventory Management System</p><p>10.Fully Dynamic Website Management System</p>
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
                    <li data-target="#carousel1"
                    data-slide-to="8"></li> 
            </ol> 
      
            <!--Slides-->
           <div class="carousel-inner" role="listbox"> 
                <div class="carousel-item active"> 
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero.jpg')}}"
                            alt="First slide"> 
                        <div class="mask rgba-black-light"></div> 
                    </div> 
                </div> 
                <div class="carousel-item"> 
                  
                    <!-- Slideer 1 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero1.jpg')}}"
                            alt="Second slide"> 
                        <div class="mask rgba-black-strong"></div> 
                    </div> 
                </div> 
                <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero2.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero3.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero4.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero5.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero6.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero7.jpg')}}"
                            alt="Third slide"> 
                        <div class="mask rgba-black-slight"></div> 
                    </div> 
                </div> 
                 <div class="carousel-item"> 
                  
                    <!-- Slideer 2 -->
                    <div class="view"> 
                        <img style='height: 100%; width: 100%; object-fit: contain' src= "{{url('tuttee/images/hero8.jpg')}}"
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
            
             data-rotate='[ "School Management System.", "Hospital Management System.", "Institute Management System.", "Super Market Management System.", "E-Commerce Management System." ]'></span>
        </h3>
    </div>
                    
            </div>
        </div>
    </div>
    
  </div>

  <div>
  </div>

    <!-- <div class="divider"></div> -->
<section class="sec-1">
   <div class="container">
       
      <div class="row">
        <div class="col-md-6 sec-1-wr">
          <h2 class="cap head-h">Enhancing your reputation<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line"></span></h2>
          <div class="pad-t-3"></div>
          <p>
            We affirm our mission to set a standard for our customers with the best web application that aids in efficiently managing educational institutions. And we have a high quality customer-centric service driven school management software and application in hand with efficient people and processes to implement it at your school successfully. 
            </p>
           <p>
             Our dynamic team of professionals with in-depth knowledge and proven expertise recommends best practices in the industry standards and we are ready to provide prompt and professional support to manage problems and concerns at your end. Training programs to meet the specific learning needs of different user groups can be organized with necessary training sessions. With the optimized talent and resources from our side, your school reputation increases among the parents and student community for sure.  
           </p>
           <!--  <div class="pad-t-3">
              
            </div> -->
        </div>
        <div class="col-md-6 sec-wr text-center">
          <img src="{{url('tuttee/images/images/mobi-new.png')}}" alt="mobi-img" vspace="" class="mobi-img-app animated wow rollIn">
        </div>
      </div>
      
  </div>
</section>
<section class="sec-2">
  <div class="black-wr">
    
  </div>

 <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="cap head-h white">Great Technology by Bestshine edu app <!-- <span class="content-logo"><img src="{{url('tuttee/images/images/tyn-logo.png')}}"></span> --><span class="heading-line"></span></h2>
          <div class="pad-t-3"></div>
            <p class="white">
              We present a complete cloud based and mobile app integrate web application for school management that automates the routine work of any institution with a click of a button. With our application in hand you can reduce the monotonous day to day activities of school administration and maintain connectivity loop between parents, teachers and students with the management. 
              Organized and interlinked modules with icon based dashboard features helps you to go paperless to record, tabulate and process every data without compromising on the privacy and security of your institution.

            </p>
        </div>
        
        
      </div>
 </div>
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 <!--  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
 <div class="container">
    <div class="carousel-inner">
    <div class="item active">
      <div class="row">
        <div class="col-md-6">
          <h3 class="sub-head">Extremely Responsive</h3>
          <p class="white">
           BestShine Edu App supports in all Platforms like Desktop Application, Mobile Application & Tablet device with an User Friendly manner.
          </p>
          <div class="divider">
            
          </div>
          <div class="col-md-12 moreview-a-wr">
            <a href="#">More views</a>
          </div>
        </div>
        <div class="col-md-6 img-wr-slid">
          <img src="{{url('tuttee/images/images/res-view.png')}}">
        </div>

      </div>
    </div>

    <div class="item">
     <div class="row">
        <div class="col-md-6">
          <h3 class="sub-head">Mobile application screen</h3>
          <p class="white">
           The mobile application screen is interlinked with the Dashboard and comes with a user friendly interface to access, notify, request and update data to and from the management with appropriate user rights and secured login control. The application screen is different for every end user according to the user rights.
          </p>
          <div class="divider">
            
          </div>
          <div class="col-md-12 moreview-a-wr">
            <a href="#">More views</a>
          </div>
        </div>
        <div class="col-md-6 img-wr-slid">
          <img class="mobile-scr-res" src="{{url('tuttee/images/images/slide_mobile.png')}}">
        </div>
      </div>
    </div>

    <div class="item">
      <div class="row">
        <div class="col-md-6">
          <h3 class="sub-head">Dashboard screen</h3>
          <p class="white">
           The interactive dashboard of the web application gives an overall glimpse on the backend functional data of your institution like school profile, total no of employee & student, total attendance etc., Classified and organized modules for each and every feature adds transparency to the administration so that you can view and get an insight of your school data remotely from anywhere anytime. 
          </p>
          <div class="divider">
            
          </div>
          <div class="col-md-12 moreview-a-wr">
            <a href="#">More views</a>
          </div>
        </div>
        <div class="col-md-6 img-wr-slid">
          <img src="{{url('tuttee/images/images/dash-board.png ')}}">
        </div>
      </div>
    </div>
  </div>
 </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="slide-ar slide-lf-ar"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="slide-ar slide-rt-ar"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
   </div>
 </div>
</section>
<section class="sec-3 pad-t-3">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <span><img src="{{url('tuttee/images/images/ind-div.png')}}"></span><span class="text-center india-best">india's best</span><span><img src="{{url('tuttee/images/images/ind-div-right.png')}}"></span> <h1 class="cap head-h">SCHOOL MANAGEMENT SOFTWARE<span class="heading-line mr-15-a"></span></h1>
        </div>   
        <div class="pad-t-3 container"><p>Educational institutions and its management is a complex and inter-related process that requires lot of dedicated hard work and planning. Ours is a complete cloud based mobile app integrated web application for school management that facilitates an all-round automated backend administration and data management. You will have the privilege of anytime, anywhere access of the data, as a parent, student, driver or the management with the given user role and controlled access.  All day to day administrative monotonous activities of your institution gets automated and becomes hassle free procedures. 
          </p></div>
        <div class="slide-client">
          <div id="clients-carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                 
    <ol class="carousel-indicators">
        <li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#clients-carousel" data-slide-to="1"></li>
        <li data-target="#clients-carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Carousel items -->
        <div class="carousel-inner">
            
            <div class="item active">
             <div class="row">
                <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sai-junior.png')}}">
                    </a>
                    <span class="school-nm">SAI JUNIORS HOUSE (<i>TN</i>)</span>
                  </div>
                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/al-burooj.png')}}">
                    </a>
                    <span class="school-nm">AL-BUROOJ ISLAMIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/cam-school.png')}}">
                    </a>
                    <span class="school-nm">CAMBRIDGE MATRIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sri-shankara.png')}}">
                    </a>
                    <span class="school-nm">SRI SANKARA MATRICULATION HR. SEC. SCHOOL  (<i>TN</i>)</span>
                  </div>
                 
                  </div>
            </div>

<div class="item">
 <div class="row">
               <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sai-junior.png')}}">
                    </a>
                    <span class="school-nm">SAI JUNIORS HOUSE (<i>TN</i>)</span>
                  </div>
                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/al-burooj.png')}}">
                    </a>
                    <span class="school-nm">AL-BUROOJ ISLAMIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/cam-school.png')}}">
                    </a>
                    <span class="school-nm">CAMBRIDGE MATRIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sri-shankara.png')}}">
                    </a>
                    <span class="school-nm">SRI SANKARA MATRICULATION HR. SEC. SCHOOL  (<i>TN</i>)</span>
                  </div>
                 
                  </div>
</div>
<div class="item">
 <div class="row">
                <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sai-junior.png')}}">
                    </a>
                    <span class="school-nm">SAI JUNIORS HOUSE (<i>TN</i>)</span>
                  </div>
                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/al-burooj.png')}}">
                    </a>
                    <span class="school-nm">AL-BUROOJ ISLAMIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/cam-school.png')}}">
                    </a>
                    <span class="school-nm">CAMBRIDGE MATRIC SCHOOL (<i>TN</i>)</span>
                  </div>

                  <div class="col-sm-3 col-xs-6 text-center">
                    <a href="#" class="">  
                        <img src="{{url('tuttee/images/images/sri-shankara.png')}}">
                    </a>
                    <span class="school-nm">SRI SANKARA MATRICULATION HR. SEC. SCHOOL  (<i>TN</i>)</span>
                  </div>
                 
                  </div>
            </div>
        </div>

    <a data-slide="prev" href="#clients-carousel" class="left carousel-control">‹</a>
    <a data-slide="next" href="#clients-carousel" class="right carousel-control">›</a>
</div><!--.Carousel-->
        </div> 
    </div>
  </div>
</section>

<section class="sec-4 pad-t-3">
   <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="cap head-h">Advanced features<span class="heading-line"></span></h2>
          <div class="pad-t-3"></div>
            <p class="">
               The integrated module based solutions for teachers, management, students, drivers and parents enables hassle free administration procedures. Ours is a powerful application that persuades every necessity of administrating any educational institutions. Being a cloud based application with desktop and mobile interface; we facilitate an all-round automated backend administration and data management. 
            </p>
        </div>
        <div class="col-md-6 features-side-im text-center">
          <img src="{{url('tuttee/images/images/touch.jpg')}}" class="wow animated zoomInDown">
        </div>
      </div>
 </div>
 <!-- test -->
<div id="particles-js" class="">
  <div class="pad-t-3 particles-absolute">
  <div class="container">
    <div class="col-md-12 home-feature-sec">
           <div class="pad-t-3 hidden-xs hidden-md">
          
          </div>
          <div class="col-md-12 text-center">
            <h2 class="cap head-h black">Some feature<span class="db"><img src="{{url('tuttee/images/images/element-h-line.png')}}" class="some-fea-img"></span> </h2>
            <div class="pad-t-3">
              
            </div>
          </div>
            <ul>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <img src="{{url('tuttee/images/images/fe-img.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Admission Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.1s;">
                  <img src="{{url('tuttee/images/images/fe-img-2.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Student Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.2s;">
                  <img src="{{url('tuttee/images/images/fe-img-3.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Staff Management</div></a>
                    </div>
                </div>
              </li><li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.3s;">
                  <img src="{{url('tuttee/images/images/fe-img-4.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Fee Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.4s;">
                  <img src="{{url('tuttee/images/images/fe-img-5.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Smart Attendance</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.5s;">
                  <img src="{{url('tuttee/images/images/fe-img-6.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text">Smart Homework</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.6s;">
                  <img src="{{url('tuttee/images/images/fe-img-7.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                         <a href="#"><div class="fe-text">Result Management</div></a>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-3 col-xs-6 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.7s;">
                  <img src="{{url('tuttee/images/images/fe-img-8.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                    <a href="#"><div class="fe-text">Bus Tracking</div></a>
                    </div>
                </div>
              </li>
            </ul>
            <div class="pad-t-3">
                           <center><a class="more-fea-btn" href="">More features</a></center>
            </div>
        </div>
  </div>
 </div>




</div>
<div>

  </div>
<!-- test -->
</section>

<section class="abt-contact-wr container-fluid">
<!--   <div class="black-wr"></div> -->
      <div class="container text-center">
      <h2 class="heading">THE COMPANY YOU CAN TRUST</h2>
      <p class="pad-t-3">Bestshine Edu App allows school Administrator,Teacher,Parent,Driver to stay connected in real time. Bestshine Edu App has come with an comprehensive feature to provide everthing in a finger tip </p>
      <a class="contact-us-btn" href="">CONTACT US</a>
    </div>
   </section>
   <div class="play-wr container text-right col-md-12">
           <div class="text-center">
            <ul>
              <!-- <li><img class="android-gif" src="{{url('tuttee/images/images/tenor.gif')}}"></li> -->
              <li><span><img class="android-gif wow animated rollIn" src="{{url('tuttee/images/images/tenor.gif')}}"></span><img class="wow animated zoomIn" src="{{url('tuttee/images/images/play.png')}}"></li>
            </ul></div>
         </div>
<section class="pd-0">
  <div class="blu-bg-wr">
   <a href="#"> <img src="{{url('tuttee/images/images/sys-bg2.png')}}" class="blu-bg"></a>
 </div>
 
</section>





<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a></li>
</ul>
<div class="contact-side-btn">

 <a href="http://bestshineeduapp.com/contact-us">
   <b style="color:white;">C<br>
o<br>
n<br>
t<br>
  a<br>
c<br>
t<br></b>  
<span>
<em>
  <i class="fa fa-phone-square" aria-hidden="true"></i>
</em>
<br>
<em>
 <i class="fa fa-envelope" aria-hidden="true"></i>info@bestshineeduapp.com
</em>

</span>
<br>

  </a>
</div>
<!-- modal -->
<!-- <div class="modal fadein animated in wish-pop" id="wish-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999999; display: block;">



        <div class="modal-header text-center" style="border:none !important;">
            <a type="button" class="btn btn-default close" data-dismiss="modal" style="position: absolute;background: #ccccc9;opacity: 0.8;right: 31%;top: 12%;">X</a>
            <img style="min-width: 320px;margin: 54px auto;float: none;width:34%;" src="{{url('tuttee/images/images/wishes.jpg')}}">

        </div>
    </div>
    <div class="modal-backdrop in"></div> -->
<!-- modal -->
<footer class="container-fluid relative">
  <div class="container">
    <div class="row">
      <div class="get-in-touch col-md-6 r-side-br text-center">
      <!--   <h3>GET IN TOUCH....</h3> -->
        <span class="white sub-head">Subscribe to our newsletter</span>
         <form>
           <div class="input-group pad-t-3 mr-0-a">
              <input class="btn btn-lg" name="email" id="email" type="email" placeholder="E-mail" required="">
              <button class="btn sub-btn btn-primary btn-lg" type="submit"> Subscribe </button>
            </div>
         </form>
      </div>

      <div class="col-md-6 footer-blck text-center">
  

                <!--Grid column-->
                <div class="">
                  <span class="white sub-head">Get connected with us on !</span>
                    <!-- <h6 class="white text-center"><span class="sub-head">Get connected with us on !</span></h6> -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-12 text-center social-ic-ft">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0 animated wow fadeInRight" style="animation-delay: 0.2"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.4"> </i></a>
                    <!--Google +-->
                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.6"> </i></a>
                    <!--Linkedin-->
                    <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.8"> </i></a>
                    <!--Instagram-->
                    <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text mr-lg-4 wow fadeInRight" style="animation-delay: 1"> </i></a>
                </div>
                <!--Grid column-->

  </div>
     
    </div>
    
    
  </div>
  <div class="footer-copyright">
        <div class="text-center white">
            © 2020 Copyright: <a href="#"><strong style="color:#efbf0b;">Bestshine Education campus Pvt.Ltd</strong></a> All rights reserved.
        </div>
    </div>

</footer>
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