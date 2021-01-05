@extends('front.layouts.master')

@section('content')

    <div class="row">

    <div class="col-md-12" id="register">

        <div class="card col-md-8">
            <div class="card-body">
                <h2 class="card-title">Franchisee Documents</h2>
                <hr>

                

                <h2>Document list</h2>

                    <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-right">
                                               
                                               
                                                    <a href="{{url('franchasee/registerform')}}" class="btn btn-info btn-rounded">New Franchisee<span class="new-gif-wr"></span> </a>
                                               
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                                    <a href="{{url('franchasee/visitform')}}" class="btn btn-info btn-rounded">Visit Form <span class="new-gif-wr"></span></a>
                                               
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                                
                                                    <a href="{{url('franchasee/demoform')}}" class="btn btn-info btn-rounded">Demo Form <span class="new-gif-wr"></span></a>
                                               
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="{{url('franchasee/serviceagreement') }}" class="btn btn-info btn-rounded">Upload Service Agreement <span class="new-gif-wr"></span></a>
                                               
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        </div>

    </div>

</div>

@endsection
