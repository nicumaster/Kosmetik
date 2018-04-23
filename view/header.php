<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="body">
<nav style="z-index: 10;" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Kosmetik.ch</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/uberuns">Über uns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user">Produkte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Land?region=eu">Dienstleistungen</a>
            </li>
            <?php
            if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='/recipe/add'>Produkt hinzufügen</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
        <?php
        if(!$_SESSION['loginerror'] && !$_SESSION['loginsuccess']){
            if(!isset($_SESSION['id'])){
                $_SESSION['loginmiss'] = true;
                $_SESSION['message'] = 'sie sind nicht eingeloggt';
            } else {
                $_SESSION['loginmiss'] = false;
            }
            $_SESSION['loginsuccess'] = false;
            $_SESSION['loginerror'] = false;
        }
        if($_SESSION['loginerror']){
            $_SESSION['loginsuccess'] = false;
            $_SESSION['loginmiss'] = false;
        }
        if($_SESSION['loginsuccess']){
            $_SESSION['loginmiss'] = false;
            $_SESSION['loginerror'] = false;
        }
        ?>
    </div>
</nav>
