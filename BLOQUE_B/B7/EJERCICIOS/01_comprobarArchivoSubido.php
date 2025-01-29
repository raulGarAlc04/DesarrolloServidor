<?php 
$message = '';                                                            
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                               
   if ($_FILES['image']['error'] === 0) {                                 
       $message  = 'Archivo subido correctamente';
   } else {                                                               
       $message  = 'El archivo no puede subirse.';                     
   }
}
?>
<?php include './includes/header.php' ?>

<?= $message ?>
<form method="POST" action="01_comprobarArchivoSubido.php" enctype="multipart/form-data">
  <label for="image"><b>Subir archivo:</b></label>
  <input type="file" name="image" accept="image/*" id="image"><br>
  <input type="submit" value="Subir">
</form>

<?php include './includes/footer.php' ?>