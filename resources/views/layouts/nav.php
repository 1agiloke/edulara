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
                    <a href="/">
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
                        DD<b class="caret"></b></a>
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
                @if($_SESSION['user'])
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
                <li><a href="/cart"><i class="fa fa-shopping-cart">

                @if($_SESSION['cartBadge'])
                <span class="badge"><%= cartBadge %></span>
                @endif
                </i></a></li>
                <li>
                    <form>
                        <button id="donate" type=submit class="btn btn-round btn-default" onclick="go1()">
                            Donasi
                        </button>
                    </form>
                    <script>
                        function go1() {
                            window.location.href = "/donasi";
                        }
                    </script>
                </li>
                @if($_SESSION['user'])
                    <li class="sponsor">
                        <a href="/login">
                            Login
                        </a>
                    </li>
                @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{$user}}<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/profile">Profile</a></li>

                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{csrf_field()}}
                                        <input class="text-danger" type="submit" name="" value="Logout">
                                    </form>
                                </li>
                            </ul>
                        </li>
                @endif
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->

</nav>
