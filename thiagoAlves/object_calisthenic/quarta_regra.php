<?php

    // foreach($students as $student){
    //     if($student->isGoodAccount()){
    //         $student->addBonus(50);
    //     }

// Modelado para classes com responsabilidades únicas

class StudentCollection
{
    private array $students = [];

    public function add(array $student): void
    {
        $this->students = $student;
    }

}
