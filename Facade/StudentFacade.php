<?php

class StudentFacade
{

    private $artStudent, $engStudent, $itStudent;

    private static $studentFacade;


    private function __construct()
    {
        $this->artStudent = new ArtStudent();
        $this->engStudent = new EngStudent();
        $this->itStudent = new ItStudent();
    }

    public static function createStudentFacade()
    {
        if (!isset(self::$studentFacade))
            self::$studentFacade = new StudentFacade();
        return self::$studentFacade;
    }

    public function viewIt()
    {
        $this->itStudent->view();
    }

    public function viewArt()
    {
        $this->artStudent->view();
    }

    public function viewEng()
    {
        $this->engStudent->view();
    }


}

