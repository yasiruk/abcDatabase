
<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>oosd</title>
        
        <link rel="stylesheet" href="libs/page.css">
        <link rel="stylesheet" href="libs/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="libs/css/bootstrap.min.css">
        <script src="libs/jquery-2.1.1.min.js"></script>
        <script src="libs/js/bootstrap.min.js"></script>
    </head>
    <body onload="onload('hhome')">
        

<script type="text/javascript">
    function onload(id) {
        $('li').removeClass('active');
        document.getElementById(id).className = "active";
    }
</script>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active" id="hhome"><a href="index.php">home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">print</a></li>
                <li><a href="#">export</a></li>
                <li class="dropdown" id="hdropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">historical data <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="monthly.php">monthly view</a></li>
                        <li><a href="#">yearly view</a></li>
                        <li><a href="#">stats</a></li>
                        <li class="divider"></li>
                        <li><a href="#">manifest files</a></li>
                        <li class="divider"></li>
                        <li><a href="#">other</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                -->
                <li id="hlogin"><a href="./login">log in </a></li>
                <li id="hlogout"><a href="#">log out </a></li>

            </ul>

            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="search data">
                </div>
                <button type="submit" class="btn btn-default">submit</button>
            </form>

        </div> 
    </div>
</nav>
        <div class="container">
            
         @yield('content')
        </div>
        
    </body>
</html>
