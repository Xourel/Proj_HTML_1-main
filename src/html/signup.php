

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

            }
            
            

        }
        else
        {
            echo "Veuiller compléter tous les champs ...";
        }
    }

?>


<div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name = "email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name = "password" required>
                        <label for="">Password</label>
                    </div>
                    <input type="submit" name="envoi">
                    <div class="register">
                    </div>
                </form>
            </div>
        </div>

<?php
    $content = ob_get_clean();
    require_once("template.php");