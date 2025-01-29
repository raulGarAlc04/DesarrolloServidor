<?php
$message = '';
$moved = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_FILES['image']['error'] === 0) {
    $temp = $_FILES['image']['tmp_name'];
    $path = 'uploads/' . $_FILES['image']['name'];
    $moved = move_uploaded_file($temp, $path);
  }

  if ($moved === true) {
    $message = '<img src="' . $path . '">';
  } else {
    $message = 'Error al subir la imagen';
  }
}
?>
<?php include './includes/header.php' ?>

<?= $message ?>
<form method="POST" action="02_moverImagen.php" enctype="multipart/form-data">
  <label for="image"><b>Subir archivo:</b></label>
  <input type="file" name="image" accept="image/*" id="image"><br>
  <input type="submit" value="Subir">
</form>

<?php include './includes/footer.php' ?>