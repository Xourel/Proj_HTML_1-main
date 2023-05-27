<?php
ob_start();

    $servername ='localhost';
    $username = 'root';
    $password = '';
    $dataBaseName = 'restau';
    

     
    $bdd = new PDO('mysql:host=localhost;dbname=restau','root','');    //PDO mieux que mysqli
    if (isset($_POST['envoi']))
    {
        if (!empty($_POST['email']) AND !empty($_POST['password']))
        {
            $pseudo = htmlspecialchars($_POST['email']);
            $mdp = sha1($_POST['password']);

            $RecupUser = $bdd->prepare('SELECT * FROM client WHERE email = ? AND password = ? ');
            $RecupUser->execute(array($pseudo, $mdp));
            if ($RecupUser->rowCount()>0)
            {
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['password'] = $mdp;
                $_SESSION['client_id'] = $RecupUser->fetch()['client_id'];
                echo $_SESSION['client_id'];
                header('Location: template.php');
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


?>
 <link rel="stylesheet" href="../css/login.css">
<section>
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
                        <p>Don't have a account <a href="signup.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



<?php
    $content = ob_get_clean();
    require_once("template.php");
