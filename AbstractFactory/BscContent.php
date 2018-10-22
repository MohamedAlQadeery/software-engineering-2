<?php

class BscContent implements Content{

  //view Bsc content
    public function view($content)
    {
       echo 'Bachelor degree course with content:'.$content."<br>";
    }
}