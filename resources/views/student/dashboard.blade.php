<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/mdb.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/mdb.css')}}">

        
    </head>
    <body>
        
<!-- SideNav slide-out button -->
<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
<!--/. SideNav slide-out button -->

<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav fixed default-side-nav light-side-nav">

    <!-- Logo -->
    <div class="logo-wrapper waves-light">
        <a href="#"><img src="http://mdbootstrap.com/wp-content/uploads/2015/12/mdb-white2.png" class="img-fluid flex-center"></a>
    </div>
    <!--/. Logo -->

    <!--Search Form-->
    <form class="search-form" role="search">
        <div class="form-group waves-effect">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <!--/.Search Form-->

    <!-- Side navigation links -->
    <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header waves-effect">Click me</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#" class="waves-effect">Link</a>
                    </li>
                    <li><a href="#" class="waves-effect">Link</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect">Click me</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#" class="waves-effect">Link</a>
                    </li>
                    <li><a href="#" class="waves-effect">Link</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect">Click me</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#" class="waves-effect">Link</a>
                    </li>
                    <li><a href="#" class="waves-effect">Link</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!--/. Side navigation links -->
</ul>
<!--/. Sidebar navigation -->

    </body>
</html>
