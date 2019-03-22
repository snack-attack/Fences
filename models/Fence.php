<?php

class FenceBuilder 
{
    //lengths given in centimeters
    const RAILING_LENGTH = 1.5;
    const POST_LENGTH = 0.1;
    const MIN_LENGTH = 1.7;

    private $posts, $railings, $length;

    public function setPosts($posts) 
    {
        $this->posts = $posts;
    }

    public function getPosts() 
    {
        return $this->posts;
    }

    public function setRailings($railings) 
    {
        $this->railings = $railings;
    }

    public function getRailings() 
    {
        return $this->railings;
    }

    public function setLength($length) 
    {
        $this->length = $length;
    }

    public function getLength() 
    {
        return $this->length;
    }

    //function to calculate fence length in meters given posts + railings
    public function caluclateLength($posts, $railings) 
    {
        //validate the min posts (2) and railings (1) to build the shortest possible fence length
        if (isset($posts) && isset($railings)) {
            $postLength = $posts * static::POST_LENGTH;
            $railLength = $railings * static::RAILING_LENGTH; 
            $length = $postLength + $railLength;

            return $length;
        }

    }

    public function calculatePosts($length) 
    {
        if (isset($length) && $length >= static::MIN_LENGTH) {
            $posts = ceil(($length - static::POST_LENGTH) / 1.6 + 1);
            return $posts; 
        }

        echo "Please supply a minimum fence length of 1.7m or greater.";
    }

    public function calculateRailings($length) 
    {
        if (isset($length) && $length >= static::MIN_LENGTH) { 
            $railings = ceil(($length - static::POST_LENGTH) / 1.6);
            return $railings;
        }
    }
}