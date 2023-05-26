<?php
session_start();
    $servername ='localhost';
    $username = 'root';
    $password = '';
    $dataBaseName = 'restau';
    
    $bdd = new mysqli($servername, $username, $password, $dataBaseName);
    if ($bdd->connect_error)
    {
        die("connection echouée");
    }
    if (isset($_POST['envoi']))
    {
        if (!empty($_POST['name']) AND !empty($_POST['password']))
        {
            $pseudo = htmlspecialchars($_POST['name']);
            $mdp = sha1($_POST['password']);

            $recupData = $bdd->prepare('SELECT * FROM client WHERE name = ? AND password = ?');
            $recupData->execute();
            var_dump($recupData);
            if ($recupData->affected_rows > 0)
            {
                $_SESSION['name'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recupData->fetch()['id'];
                echo $_SESSION;
            }
            else
            {
                echo "Votre mot de passe ou nom est incorrecte";
            }
        }
        else
        {
            echo "Veuiller compléter tous les champs ...";
        }
    }
ob_start();
?>

<div align="center">
        <p>LOGIN</p>
        <form method="POST" action="" class="form" align="center">
                <br>
                <input type="text" id="name" name = "name" placeholder="Entrez votre nom" autocomplete="off"/><br><br>
                <input type="email" id="email" name = "email" placeholder="Entrez votre email" autocomplete="off"/><br><br>
                <input type="password" id="password" name = "password" placeholder="Entrez votre mot de passe" autocomplete="off"/><br><br>
                <input type="submit" name="envoi">
                <a href="signup.php">Sign up</a><br>
            </form>
        </div>

<?php
    $content = ob_get_clean();
    require_once("template.php");
