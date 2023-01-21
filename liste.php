<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>Accueil</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<?php
 
 $connect = new mysqli("localhost", "id20183727_root", "Danilo@20232023", "id20183727_testsimplon");
 if ($connect->connect_errno)
 {
     echo "Echec lors de la connexion à MySQL : (" . $connect->connect_errno . ") " . $connect->connect_error;
 }

 $reponse= $connect->query('SELECT * FROM users');

?>
<a class="text-blue-500" href="index.php" name="from">Enregistrer etudiant</a>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <p class="text-center text-green-500">ETUDIANTS ENREGISTRER</p><br>
        <table class="min-w-full text-center">
          <thead class="border-b bg-green-800">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                N°
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NOM
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                PRENOMS
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                EMAIL
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                CONTACT
              </th>
            </tr>
          </thead class="border-b">
          <?php
          $nu=0;
          while($donnees = mysqli_fetch_array($reponse)){
            $nu++;

          ?>

          <tbody>
            
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
              <?php echo $nu;?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $donnees['Nom'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $donnees['Prenoms'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $donnees['email'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $donnees['contact'];?>
              </td>
            </tr class="bg-white border-b">
          </tbody>
          <?php
        }
        ?>
        </table>
      </div>
    </div>
  </div>
</div>