<?php

class DiplomaDegree implements Degree{

    public function getTitle()
    {
        return new DiplomaTitle();
    }

    public function getContent()
    {
        return new DiplomaContent();
    }
}