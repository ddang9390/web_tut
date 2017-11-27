<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script rel="stylesheet" src="media/com_portfolio/css/style.css"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript" src="media/com_portfolio/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="media/com_portfolio/js/port.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
</nav>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DD</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="jumbotron" id="choose" >
        <h1 align="center">Welcome To Daniel Dang's Portfolio!</h1>
        <br>
        <p align="center"><a class="btn btn-primary btn-lg" onclick="createLogin()">Login</a></p><br>
        <p align="center"><a class="btn btn-primary btn-lg"  onclick="createRegister()">Register</a></p>
    </div>

    <div class="jumbotron" id="loginPage" style="display:none;">
        <h1 align="center">Login</h1>
        <br>

        <form id="login_form" method="post" action="index.php" align="center">
            Username: <input class="user_field" type="text" required autocomplete="off" name="username" value="" size="50" />
            <br />
            <br>
            Password: <input class="user_field" type="password" required autocomplete="off" name="password" value="" size="50" />
            <br />
            <br>
            <input type="submit" class="btn btn-primary" value="Login" />
            <input type="button" value="Cancel" class="btn btn-danger" onclick="returnHome()">
        </form>
    </div>

    <div class="jumbotron" id="registerPage" style="display:none;">
        <h1 align="center">Register</h1>
        <br>
        <form id="register_form" method="post" action="index.php" align="center">
            First Name: <input class="user_field" type="text" required autocomplete="off" name="first name" value="" size="50" />
            <br />
            <br>
            Last Name: <input class="user_field" type="text" required autocomplete="off" name="last name" value="" size="50" />
            <br />
            <br>
            Email: <input class="user_field" type="email" required autocomplete="off" name="email" value="" size="50" />
            <br>
            <br>

            Username: <input class="user_field" type="text" required autocomplete="off" name="username" value="" size="50" />
            <br />
            <br>
            Password: <input class="user_field" type="password" required autocomplete="off" name="password" value="" size="50" />
            <br />
            <br>
            <input type="button" value="Cancel" class="btn btn-danger" onclick="returnHome()">
        </form>

    </div>
</div>


</body>
</html>