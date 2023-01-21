<?php
include("connectBD.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Mon site</title>
        <link rel="stylesheet" href='Style.Css' type="text/Css"/>
    </head>
    <body>
       <form method="POST" enctype="multipart/form-data" action="index.php">
       <a href="liste.php" name="liste">Liste</a>
     <ul>

            <li>
                <label for="name">Name:</label>
                <input type="text" name="user_name" placeholder="Konan" required/>
            </li>
            <br>

            <li>
                <label for="name">Prenoms:</label>
                <input type="text" name="user_surname" placeholder="Daniel" required/>
            </li>
            <br>

            <li>
                <label for="mail">E-mail:</label>
                <input type="email" name="user_mail" placeholder="daniel@gmail.com" required/>
            </li>
            <br>

            <li>
                <label for="mail">Cntact:</label>
                <input type="text"  name="contact" placeholder="TEL: 0707070707" required/>
            </li>
            <br>
            <li><button type="submit" name="valider">Envoyer</button></li>
        

      </lu>
        </form>

        
    </body>
</html>

<?php
  if (isset($_POST['valider']))
  {
      $link = connexionDB();
      $code = "insert into users(Nom, Prenoms, email, contact) values (:Nom, :Prenoms, :email, :contact)";
			$req = $link->prepare($code);
      $req->execute(array(
        ':Nom' => $_POST['user_name'],
        ':Prenoms' => $_POST['user_surname'], 
        ':email' => $_POST['user_mail'],
        ':contact' => $_POST['contact']));
        echo "<script language='javascript'>";
        echo "alert('Engeristrer avec succes!')";
        echo "</script>";

    } 
    else{

    }
      ?>