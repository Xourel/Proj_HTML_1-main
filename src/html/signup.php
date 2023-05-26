
<?php
ob_start();

$serveurname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'restau';
$conn = new mysqli($serveurname, $username, $password, $databaseName);
if ($conn->connect_error) {
    echo "connection echoué";
}

if (isset($_POST["name"])){
    echo $_POST["name"];
    $sql ="INSERT INTO client (client_id, name ,email, password) VALUES (NULL, $name, $email, $password)";
    $conn->query($sql);
}

?> 
     
    <div>
    <p>LOGIN</p>
    <form class="form" method="post">
            <br>
            <input type="name" id="name" name = "name" placeholder="Entrez votre nom"/><br><br>
            <input type="email" id="email" name = "email" placeholder="Entrez votre email"/><br><br>
            <input type="password" id="password" name = "password" placeholder="Entrez votre mot de passe"/><br><br>
            <button onclick="Signup()" type="submit"f>se connecter</button>

        </form>
    </div>





<?php
$content = ob_get_clean();
require_once("template.php");
?>
