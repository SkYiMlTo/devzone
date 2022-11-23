<?php
session_start();
?>

<nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand" href="../index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./xx">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./xx">Log In</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="./xx">My infos</a>
                    <a class="dropdown-item" href="./xx">Collaborators</a>
<!--                    <a class="dropdown-item" href="./views/view-data-visualization.php">Data visualization- Test</a>-->
                    <a class="dropdown-item" href="./xx">Data visualization</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./xx">About</a>
            </li>
        </ul>
        <?php
        if(isset($_SESSION['__userSession']['idUser'])){
            $hostname = "localhost";
            $username = "cryptography";
            $password = "cryptography";
            $db = "cryptography";

            $dbconnect=mysqli_connect($hostname,$username,$password,$db);
            $query = 'SELECT firstName, lastName FROM accounts WHERE id = '.$_SESSION['__userSession']['idUser'].' ';
            $result = $dbconnect->query($query)->fetch_all();
            echo "
        <div class=\"dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            ".$result[0][0]." ".$result[0][1]."
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink2\">
                <a class=\"dropdown-item\" href=\"./controllers/disconnect.php\">Déconnexion</a>
            </div>
        </div>
        ";
        }else{
            echo "
        <span class=\"navbar-text\">
      Non connecté
    </span>
        ";
        }
        ?>
        <!--            <form action="" method="post">-->
        <!--                <button type="submit" name='sub' value='aller' class="btn btn-primary">Déconnexion</button>-->
        <!--            </form>-->


    </div>
</nav>