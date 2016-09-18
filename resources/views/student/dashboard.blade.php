<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/material-bootstrap/css/mdb.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/student/css/dashboard.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/font-awesome-4.6.3/css/font-awesome.css')}}">

        
    </head>
    <body>
        <div class="wrapper">
        <div class="sidebar">

            <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    MASTER ASSIST
                </a>
            </div>
            <div class="profile-userpic">
                    <img src="assets/student/img/upic1.png" class="img-responsive" alt="">
                </div>
                
            
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        
                        <p>DASHBOARD</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-rss" aria-hidden="true"></i>
                        
                        <p>CHANNELS</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        
                        <p>ACCOUNT</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        
                        <p>HELP</p>
                    </a>
                </li>
            </div>
        </div>
        <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                
                            </a>
                        </li>
                        </li>
                        <li>
                           <a href="">
                               Home
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('logout') }}">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
                        <!--CARDS-->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">CARD#1</h4>
                                <p class="category">SOMETHING something</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">CARD#2</h4>
                                <p class="category">something something</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





</div>
</body>

        
</html>