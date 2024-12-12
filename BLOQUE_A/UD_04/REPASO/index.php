<?php 
declare(strict_types=1);
require_once 'Student.php';
require_once 'Course.php';

$student = new Student("Juan", 20, "12345678A");
$student2 = new Student("Alex",22, "1234ABC");

$course = new Course("2DAW");

$course -> setStudents($student);
$course -> setStudents($student2);
$alumno = $course -> getStudentById("1234ABC");

echo "Curso : " . $course->getName() . "<br><br>";

foreach ($course -> getStudents() as $student){
    echo "Nombre: " . $student -> getName() . "<br>" ."Edad: " . 
    $student -> getAge() . "<br>" . "Id: " . $student -> getId() . "<br><br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1><?= $course->getName() ?></h1>
        <p><?= ($alumno != null) ? $alumno->getDetails(): "Alumno no existe" ?></p>
        <p><?= ($student->setAge(17)) ? "Edad cambiada" : "Error al establecer la edad, debes tener al menos 18 años" ?></p>
      <table border=1>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>ID</th>
        </tr>
        <?php foreach ($course->getStudents() as $student): ?>
            <tr>
                <td><?= $student-> getName()?></td>
                <td><?= $student -> getAge()?></td>
                <td><?= $student -> getId()?></td>
            </tr>
        <?php endforeach;?>
      </table>
</body>
</html>