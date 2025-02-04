<?php
$moved         = false;
$message       = '';
$error         = '';
$upload_path   = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;  // Ruta para la carga de imágenes
$max_size      = 5242880;
$allowed_types = ['image/jpeg', 'image/png',];
$allowed_exts  = ['jpeg', 'png', 'jpg',];

function crear_thumb($source, $thumbpath) {
    $image = new Imagick($source);
    $image->thumbnailImage(200, 200, true);
    $image->writeImage($thumbpath);
    return true;
}

function crear_nombre($filename, $upload_path)
{
  $basename  = pathinfo($filename, PATHINFO_FILENAME);
  $extension = pathinfo($filename, PATHINFO_EXTENSION);
  $filename  = preg_replace('/[^A-z0-9]/', '-', $basename);
  $filename  = $basename . '.' . $extension;
  $i         = 0;

  while (file_exists($upload_path . $filename)) {
    $i        = $i + 1;
    $filename = $basename . $i . '.' . $extension;
  }

  return $filename;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $error = ($_FILES['image']['error'] === 1) ? 'muy grande' : '';

  if ($_FILES['image']['error'] === 0) {
    $error .= ($_FILES['image']['size'] <= $max_size) ? '' : 'muy grande';
    $type   = mime_content_type($_FILES['image']['tmp_name']);
    $error .= in_array($type, $allowed_types) ? '' : 'tipo no permitido ';
    $ext    = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $error .= in_array($ext, $allowed_exts) ? '' : 'extensión no permitida ';

    if (!$error) {
      $filename    = crear_nombre($_FILES['image']['name'], $upload_path);
      $destination = $upload_path . $filename;
      $thumbpath   = $upload_path . 'thumbs/' . $filename;
      $moved       = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
      $resized     = crear_thumb($destination, $thumbpath);
    }
  }

  if ($moved === true) {
    $message = 'Imagen cargada con éxito:<br><img src="uploads/thumbs/' . $filename . '">';  // Mostrar miniatura
  } else {
    $message = '<b>Error al subir la imagen:</b> ' . $error;
  }
}
?>
<?php include './includes/header.php' ?>

<?= $message ?>
<form method="POST" action="05_redimensionando_imagick.php" enctype="multipart/form-data">
  <label for="image"><b>Subir archivo:</b></label>
  <input type="file" name="image" accept="image" id="image"><br>
  <input type="submit" value="Subir">
</form>

<?php include './includes/footer.php' ?>