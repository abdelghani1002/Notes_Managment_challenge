<?php

require("app/classes/NotesManagement.php");
require("app/classes/Student.php");
require("app/classes/Subject.php");

$student_1 = new Student(1, "student_1");
$student_2 = new Student(2, "student_2");
$student_3 = new Student(3, "student_3");

$subject_1 = new Subject(1, "subject_1");
$subject_2 = new Subject(2, "subject_2");
$subject_3 = new Subject(3, "subject_3");

$subject_1->addNote($student_1, 11.5);
$subject_1->addNote($student_2, 21.5);
$subject_1->addNote($student_3, 31.5);

$subject_2->addNote($student_1, 12.5);
$subject_2->addNote($student_2, 22.5);
$subject_2->addNote($student_3, 32.5);

$subject_3->addNote($student_1, 13.5);
$subject_3->addNote($student_2, 23.5);
$subject_3->addNote($student_3, 33.5);

$students = [$student_1, $student_2, $student_3];
$subjects = [$subject_1, $subject_2, $subject_3];

$Manager = new NotesManagement($students, $subjects);

$rapport = $Manager->generateRapport();
//dump($rapport);
var_dump($rapport);