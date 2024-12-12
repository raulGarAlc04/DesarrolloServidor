<?php
declare(strict_types= 1);
class Student{
    private string $name;
    private int $age;
    private string $id;

    public function __construct(string $name , int $age , string $id ){
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
    }

    public function getDetails(){
        return "<br>Nombre: " . $this->name . "<br>Edad: " . $this->age . "<br>Id: " . $this->id . "<br>";
    }

    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }

    public function getAge(): int{
        return $this->age;
    }
    public function setAge(int $age): bool{
        if($age >= 18){
            $this->age = $age;
            return true;
        }
        return false;
    }

    public function getId(): string{
        return $this->id;
    }
    public function setId(string $id){
        $this->id = $id;
    }
}

?>