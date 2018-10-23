<?php

class CourseSingleton
{
    private static $course;
    private $title;

    public function setCourseTitle($title)
    {
        $this->title = $title;
    }

    public function getCourseTitle()
    {
        return $this->title;
    }

    private function __construct()
    {

    }

    public static function createCourse()
    {
        if (!isset(self::$course))
            self::$course = new CourseSingleton();
        return self::$course;
    }
}