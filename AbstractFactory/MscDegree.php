<?php

class MscDegree implements Degree{

    public function getTitle()
    {
        return new MscTitle();
    }

    public function getContent()
    {
        return new MscContent();
    }
}