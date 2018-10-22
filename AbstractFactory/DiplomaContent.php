<?php

class DiplomaContent implements Content{

    //view Bsc content
    public function view($content)
    {
        echo 'Diploma degree course with content:'.$content."<br>";
    }
}