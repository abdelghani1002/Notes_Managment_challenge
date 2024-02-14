<?php

class NotesManagement
{
    public array $students = [];
    public array $subjects = [];

    public function __construct($students, $subjects)
    {
        $this->students = $students;
        $this->subjects = $subjects;
    }

    public function generateRapport()
    {
        $rapport = [[]];
        foreach ($this->students as &$student) {
            $rapport[$student->name] = [];
            $notes_sum = 0;
            $notes_count = 0;
            foreach ($this->subjects as &$subject) {
                $student_note = $subject->getNote($student);
                if(!$student_note) continue;
                $rapport[$student->name][$subject->name] = $student_note;
                $notes_count++;
                $notes_sum += $student_note;
            }
            $rapport[$student->name]['averge'] = $notes_sum / $notes_count;
        }
        return $rapport;
    }
}