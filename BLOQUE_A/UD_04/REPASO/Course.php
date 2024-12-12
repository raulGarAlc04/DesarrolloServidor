<?php
declare(strict_types=1);

class Course{
    private string $name;
    private array $students ;

    public function __construct(string $name , array $students = [])
    {
        $this->name = $name;
        $this->students = $students;
    }

    public function getName(): string {
        return $this->name;
    }
    public function setName(string $courseName){
        $this->name = $courseName;
    }

    public function getStudents(): array{
        return $this->students;
    }

    public function setStudents(Student $students): void{
        $this->students[] = $students;
    }

    public function getStudentById(string $id): Student|null{

        $student = null;
        foreach($this->students as $estudiante){
            if($estudiante->getId() === $id){
                return $estudiante;
            }
        }
        return $student;
    }



}