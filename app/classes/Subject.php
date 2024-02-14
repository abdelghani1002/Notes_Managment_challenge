<?php

class Subject
{
    // Atributtes
    public $id;
    public $name;
    public $notes = [];

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function addNote($student, $value)
    {
        $this->notes[$student->id] = $value;
    }

    public function editNote($student, $value)
    {
        $this->notes[$student->id] = $value;
    }

    public function deleteNote($student)
    {
        array_slice($this->notes, $this->notes[$student->id], 1);
    }

    public function getNote($student)
    {
        if (isset($this->notes[$student->id]))
            return $this->notes[$student->id];
        return null;
    }
}
