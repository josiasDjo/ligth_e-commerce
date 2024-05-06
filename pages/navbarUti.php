<?php 
    $path =  dirname(dirname(__DIR__))  . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'userCbd' . DIRECTORY_SEPARATOR . 'connexion.php';
    $pathIndex = dirname(__DIR__)  . DIRECTORY_SEPARATOR . 'index.php';
?>
<div class="navbarUti">
    <div class="btn-navbar">
        <button onclick="navbarChange(); ">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
    <ul class="navbar-responsive" id="navbar-responsive">
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../../pages/explore.php">Explore</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="../pages/userCbd/connexion.php"><button>Sign in</button></a></li>       
    </ul>
</div>