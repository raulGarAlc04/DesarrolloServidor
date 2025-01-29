<?php
$moved         = false;
$message       = '';
$error         = '';
$upload_path   = 'uploads/';
$max_size      = 5242880;
$allowed_types = ['image/jpeg', 'image/png',];
$allowed_exts  = ['jpeg', 'png', 'jpg',];

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

function redimensionar_imagen_gd($orig_path, $new_path, $max_width, $max_height) {
  $image_data  = getimagesize($orig_path);
  $orig_width  = $image_data[0];
  $orig_height = $image_data[1];
  $media_type  = $image_data['mime'];
  $new_width   = $max_width;
  $new_height  = $max_height;
  $orig_ratio  = $orig_width / $orig_height;

  if ($orig_width > $orig_height) {
    $new_height = $new_width / $orig_ratio;
  } else {
    $new_width  = $new_height * $orig_ratio;
  }

  // Convert dimensions to integers
  $new_width = (int) round($new_width);
  $new_height = (int) round($new_height);

  switch ($media_type) {
    case 'image/jpeg':
      $orig = imagecreatefromjpeg($orig_path);
      break;
    case 'image/png':
      $orig = imagecreatefrompng($orig_path);
      break;
  }

  $new = imagecreatetruecolor($new_width, $new_height);

  imagecopyresampled($new, $orig, 0,0,0,0, $new_width, $new_height, $orig_width, $orig_height);

  switch($media_type) {
    case 'image/jpeg': $result = imagejpeg($new, $new_path); break;
    case 'image/png' : $result = imagepng($new, $new_path);  break;
  }

  return $result;
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
      $resized     = redimensionar_imagen_gd($destination, $thumbpath, 200, 200);
    }
  }

  if ($moved === true) {
    $message = '<img src="' . $thumbpath . '">';
  } else {
    $message = '<b>Error al subir la imagen:</b> ' . $error;
  }
}
?>
<?php include './includes/header.php' ?>

<?= $message ?>
<form method="POST" action="04_redimensionando_gd.php" enctype="multipart/form-data">
  <label for="image"><b>Subir archivo:</b></label>
  <input type="file" name="image" accept="image" id="image"><br>
  <input type="submit" value="Subir">
</form>

<?php include './includes/footer.php' ?>