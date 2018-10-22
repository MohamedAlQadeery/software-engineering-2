<?php

class factoryDp {

    public static function createStudent($type) {
        if(strtolower($type) == 'it')
            return new ItStudent();
        else if (strtolower($type) == 'eng')
            return new EngStudent();
        else if (strtolower($type) == 'art')
            return new ArtStudent();
        else
            return new ItStudent();
    }
}