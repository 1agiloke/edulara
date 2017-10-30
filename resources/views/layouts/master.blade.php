<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	
	<!-- <link rel="stylesheet" type="text/css" href="/css/app.css"> -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="{{ asset('css/get-shit-done.css') }}" rel="stylesheet" />
	<link href="{{ asset('style/main.css') }}" rel="stylesheet" />

	<!--     Font Awesome     -->
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
	<style type="text/css">
	
		nav{
			padding: 10px;
		}
		header{
			background-color: #ddd;
		}
		#logout{
			padding: 10px;
			margin: -2px 10px;
			font-size: 100%;
			width: 100%;
			text-align: left;
		}
		#alogout{
			padding: 0px;
		}
		@yield('styles')
		
	</style>
</head>
<body>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<header>
	<div id="navbar-full">
        <div id="navbar">

		<nav class="navbar navbar-ct-blue  navbar-fixed-top" role="navigation">
		    <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">Educationeer </a>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav">
		                <li>
		                    <a href="/home">
		                        Home
		                    </a>
		                </li>
		                <!--
		                <li>
		                    <a href="/about">
		                        <%= i18n.__('menuabout')%>
		                    </a>
		                </li>
		-->
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                       Kontribusi<b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        <li>
		                            <a href="/donasi">
		                                Donasi
		                            </a>
		                        </li>
		                        <li>
		                            <a href="/merchandise">
		                                Merchandise
		                            </a>
		                        </li>
		                        <li>
		                            <a href="/volunteer">
		                                Volunteer
		                            </a>
		                        </li>
		                        <li>
		                            <a href="/event">
		                                Event
		                            </a>
		                        </li>
		                        <!--
		                        <li class="divider"></li>
		                        <li><a href="#">Separated link</a></li>
		-->
		                    </ul>
		                </li>
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                        Hall of Fame<b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        <li>
		                            <a href="/ranking">
		                                Ranking
		                            </a>
		                        </li>

		                    </ul>
		                </li>
		                <li>
		                    <a href="/lelang">
		                        Lelang
		                    </a>
		                </li>
		                <li>
		                    <a href="/sponsorhome">
		                        Sponsor
		                    </a>
		                </li>
		                @if(Auth::check())
		                <li>
		                    <a href="/chat">
		                        Chat
		                    </a>
		                </li>
		                @endif
		            </ul>
		            <form class="navbar-form navbar-left navbar-search-form" role="search">
		                <div class="form-group">
		                    <input type="text" value="" class="form-control" placeholder="Search...">
		                </div>
		            </form>
		            <ul class="nav navbar-nav navbar-right">
		                @if(Auth::check())
		            	<li><a href="/cart"><i class="fa fa-shopping-cart">
		                <span class="badge">Cart</span>
		                </i></a></li>
		                @endif

		                <li>
		                    <form action="/donasi">
		                        <button id="donate" type=submit class="btn btn-round btn-default" onclick="go1()">
		                            Donasi
		                        </button>
		                    </form>
		                </li>

		                @if(!Auth::check())
		                <li class="sponsor">
	                        <a href="/login">
	                            Login
	                        </a>
	                    </li>
		                @endif

                        @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                User<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/profile">Profile</a></li>

                                <li>
                                	<a id="alogout">
                                		<form action="{{ route('logout') }}" method="POST">
    	                                    {{csrf_field()}}
	                                        <input type="submit" name="submit" class="btn" id="logout" value="Logout">
        	                            </form>
                                	</a>
                                </li>
                            </ul>
                        </li>
                        @endif
		                
		            </ul>

		        </div>
		    </div>
		</nav>
		@yield('nav')
            
        </div>
    </div>

	</header>
	<div class="">
		@yield('main')
	</div>
	<footer class="">
		 <div class="row footer" style="">
		    <div class="container">
		        <div class="col-md-6">
		        <h2>Educationeer</h2>
		        </div>
		        <div class="col-md-3">
		            <span class="title">Tentang Kami</span>
		              <ul class="nav">
		                <li><a href="#">link1</a></li>
		                <li><a href="#">link2</a></li>
		                <li><a href="#">link3</a></li>
		                <li><a href="#">link4</a></li>
		              </ul>
		        </div>
		        <div class="col-md-3">
		            <span class="title">Social Media</span>
		              <ul class="nav">
		                <li><a href="#">Facebook</a></li>
		                <li><a href="#">Twitter</a></li>
		                <li><a href="#">Instagram</a></li>
		              </ul>
		        </div>
		    </div>
		    <hr style="width:85%;">
			<div class="container">
		    	 <div class="col-md-12">

				     <span>© Educationeer | Education Volunteer <span id="tahun"><?= Now('Y') ?></span>

				    </span>
			     </div>
		 	</div>
		</div>

	</footer>



</body>
</html>