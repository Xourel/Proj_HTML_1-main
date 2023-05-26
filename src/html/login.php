
<?php

    ob_start();
    
    $servername ='localhost';
    $username = 'root';
    $password = '';
    $dataBaseName = 'restau';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dataBaseName);

    if ($conn->connect_error)
    {
        die("connection echouée");
    }

    //make sql request
    $sql = "SELECT * FROM client";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()){
        echo $row["email"]. ' ' .$row["password"];
        echo " / ";
    }

    $conn->close();
    ?> 
    
         
        <div>
        <p>LOGIN</p>
        <form class="form" method="post">
                <br>
                <input type="name" id="name" name = "name" placeholder="Entrez votre nom"/><br><br>
                <input type="email" id="email" name = "email" placeholder="Entrez votre email"/><br><br>
                <input type="password" id="password" name = "password" placeholder="Entrez votre mot de passe"/><br><br>
                <button onclick="Signup()" type="submit"f>se connecter</button>
                <a href="signup.php">Sign up</a><br>
            </form>
        </div>
    
    
    
    
    
    <?php
    $content = ob_get_clean();
    require_once("template.php");
    ?>
 