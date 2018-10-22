<?php


class MscTitle  implements Title {

    public
    function view($title)
    {
        echo 'Master degree course with title: ' . $title . '<br>';
    }
}