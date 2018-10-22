<?php

class AlgCourse extends Course
{


    public function __construct($program)
    {
        parent::__construct($program);
    }


    public function view()
    {
        parent::view();
        echo 'Algorthims and Analaysis .. <br>';
    }


}