<?php

class MscContent implements Content{

    //view Bsc content
    public function view($content)
    {
        echo 'Master degree course with content:'.$content."<br>";
    }
}