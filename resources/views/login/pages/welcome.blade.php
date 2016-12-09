@extends('login.layouts.master')

@section('title', 'Welcome to MasterAssist')

@section('content')
<div class="container-fluid intro">
    <div class="btngrp" style="position:absolute;top:15px;right:15px;display:inline-flex;">
        <button type="button" class="btn btn-default btnreglogin" data-toggle="modal" data-target="#RegModal">REGISTER</button>
        <button type="button" class="btn btn-default btnreglogin" data-toggle="modal" data-target="#LoginModal" style="">LOGIN</button>
    </div>
    <h1 class="introhead">MASTER ASSIST<h1>  
</div>

<div class="container-fluid whatcontainer">
    <h1>About MasterAssist</h1>
</div>

<div class="container introcontainer">
        <h1 >Features</h1>
        <hr class="introhr">
        <div class="row " style="margin-top:5.5%;">
           
            <div class="col-sm-4 f1" >
             <center></center><div class="fahover"><i class="fa fa-location-arrow" aria-hidden="true"></i></div></center>
                <!--<img src="{{ URL::to('assets/login/img/teacher.png')}}" class="img-responsive teacherimg" " alt="Responsive image">-->
                <h2 style="">Lorem Ipsum</h2>
                <center><p>loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren.</p></center>
            </div>
            <div class="col-sm-4 f2">
             <div class="fahover"><i class="fa fa-pencil-square" aria-hidden="true"></i></div>
                <h2 style="">Lorem Ipsum</h2>
                <center><p>loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren.</p></center>
            </div>    
            <div class="col-sm-4 f3">
            <div class="fahover"> <i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <h2 style="">Lorem Ipsum</h2>
                <center><p>loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren.</p></center>
            </div>
        </div>

        <div class="row" style="margin-top:7%;">
            <div class="col-sm-4 f1" >
                <!--<img src="{{ URL::to('assets/login/img/teacher.png')}}" class="img-responsive teacherimg" " alt="Responsive image">-->
                <div class="fahover"> <i class="fa fa-location-arrow" aria-hidden="true" ></i></div>
                <h2 style="">Lorem Ipsum</h2>
                <center><p>loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren.</p></center>
            </div>
            <div class="col-sm-4 f2">
               <div class="fahover"> <i class="fa fa-pencil-square" aria-hidden="true" ></i></div>
                <h2 style="">Lorem Ipsum</h2>
                <center><p>loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren.</p></center>
            </div>    
            <div class="col-sm-4 f3">
                <div class="fahover"><i class="fa fa-plus-circle" aria-hidden="true" ></i></div>
                <h2 style="">Lorem Ipsum</h2>
                <center><p>loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren ipsum loren.</p></center>
            </div>
        </div>
</div>



<div id="RegModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" >REGISTER</h4>
            </div>
            <div class="modal-body" >
                <form action="{{ route('register') }}" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Enter a username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control"  id="password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="r_password" placeholder="Retype Password" class="form-control" id="confirm_password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 87%;border-radius: 0px;">Register</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="LoginModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content" >
        <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">LOGIN</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('login') }}" method="POST">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 87%;border-radius:0px;">Log In</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </form>
        </div>
      
        </div>

    </div>
</div>

<script>
</script>

@endsection