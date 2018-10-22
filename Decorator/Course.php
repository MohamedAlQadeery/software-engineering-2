<?php

class Course implements Program
{

    protected $program;


    public function __construct($program)
    {
        $this->program = $program;
    }


    public function view()
    {
    $this->program->view();
    }

}