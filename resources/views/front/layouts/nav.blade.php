<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    
    <div class="container">
       

                <form action="{{ route('/') }}" method="get">
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-success btn-outline-light">Home</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--<form action="" method="post">-->
                    <form action="{{ route('aboutus') }}" method="get">
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light">About Us</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Media</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Events</button>
                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Gallery</button>
                    </form> 
                {{--    <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Services</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Features</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Gallery</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Events</button>
                    </form> --}}
                   
                  {{--  <form action="" >
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light" disabled>Contact Us</button>
                    </form> --}}
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form action="{{ route('franchasee') }}" method="get">
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light">Franchisee</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <form action="{{ route('user.login') }}" method="get">
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-outline-light">Login</button>
                    </form> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  
                    

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    
                    
                </li>
               {{-- <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ auth()->check() ? auth()->user()->name : 'Account' }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        @if (!auth()->check())
                            <a class="dropdown-item " href="{{  url('user/login') }}">Sign In</a>
                            <a class="dropdown-item" href="{{  url('user/register') }}">Sign Up</a>
                        @else
                            <a class="dropdown-item" href="{{  url('user/profile') }}"><i class="fa fa-user"></i> Profile</a>
                            <hr>
                            <a class="dropdown-item" href="{{  url('user/logout') }}"><i class="fa fa-lock"></i> Logout</a>
                        @endif
                    </div>
                </li>--}}
            </ul>
        </div>
    </div>
</nav>
