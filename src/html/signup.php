<?php
ob_start();

    
    $bdd = new PDO('mysql:host=localhost;dbname=restau','root','');    //PDO mieux que mysqli
    if (isset($_POST['envoi']))
    {
        if (!empty($_POST['email']) AND !empty($_POST['password']))
        {
            $pseudo = htmlspecialchars($_POST['email']);
            $mdp = sha1($_POST['password']);

            $insertData = $bdd->prepare('INSERT INTO client ( email, password) VALUES(? ,?) ');
            $insertData->execute(array($pseudo, $mdp));
            
            $RecupUser = $bdd->prepare('SELECT * FROM client WHERE email = ? AND password = ? ');
            $RecupUser->execute(array($pseudo, $mdp));
            if ($RecupUser->rowCount()>0)
            {
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['password'] = $mdp;
                $_SESSION['client_id'] = $RecupUser->fetch()['client_id'];
                echo $_SESSION['client_id'];
                header('Location: index.php');
            }
            
            

        }
        else
        {
            echo "Veuiller compléter tous les champs ...";
        }
    }

?>

<div align="center">
        <p>LOGIN</p>
        <form method="POST" action="" class="form" align="center">
                <br>
                <input type="email" id="email" name = "email" placeholder="Entrez votre email" autocomplete="off"/><br><br>
                <input type="password" id="password" name = "password" placeholder="Entrez votre mot de passe" autocomplete="off"/><br><br>
                <input type="submit" name="envoi">
            </form>
        </div>

<?php
    $content = ob_get_clean();
    require_once("template.php");
