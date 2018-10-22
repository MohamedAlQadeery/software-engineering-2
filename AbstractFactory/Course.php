<?php

class Course{
    private $title,$content,$teacher,$degree;

    private static $course;

    /**
     * Course constructor.
     */
    private function __construct(){}

    public static function getCourse(){
        if(Course::$course==null)
            $course= new Course();
        return $course;
    }


    public function setDegree($degree){
        $this->degree=$degree;

    }

    public function setTeacher($teacher){
        $this->teacher=$teacher;
    }

    public function viewData($title,$content){
        $this->title= $this->degree->getTitle();
        $this->content= $this->degree->getContent();

        echo 'Processing Course ..... <br>';
        $this->title->view($title);
        $this->content->view($content);
        $this->teacher->view();

        echo '<br>===================<br>';
    }

}