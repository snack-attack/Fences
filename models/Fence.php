<?php

/*
Description & Constraints =>
A class that will accept user input for three parameters: posts + railings OR length
Returns length if given posts + railings
Returns posts + railings if given length

TODO =>
1. Figure out why 4.9 length is giving incorrect railings
2. write validation for making sure railings are one less than posts & that only ints are provided (not floats)
3. Write comments
*/

class Fence {
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
    public function caluclateLength(int $posts, int $railings) 
    {
        //validate the min posts (2) and railings (1) to build the shortest possible fence length
        if(isset($posts) && isset($railings)) {
            $postLength = $posts * static::POST_LENGTH;
            $railLength = $railings * static::RAILING_LENGTH; 
            $length = $postLength + $railLength;

            return $length;
        }

    }

    public function calculatePosts($length) 
    {
        if(isset($length) && $length >= static::MIN_LENGTH) {
            $posts = ceil(($length - static::POST_LENGTH) / 1.6 + 1);
            return $posts; 
        }

        echo "Please supply a minimum fence length of 1.7m or greater.";
    }

    public function calculateRailings($length) 
    {
        if(isset($length) && $length >= static::MIN_LENGTH) { 
            $railings = ceil(($length - static::POST_LENGTH) / 1.6);
            return $railings;
        }

        echo "Please supply a minimum fence length of 1.7m or greater.";
    }



}

/*
Test for supplying length and returning the correct number of posts + railings.
*/

$myFence = new Fence;
$myFence->setLength(3);
$length = $myFence->getLength();
$posts = $myFence->calculatePosts($length);
$railings = $myFence->calculateRailings($length);

echo "A minimum fence length of {$length}m requires:\n";
echo $posts, " posts\n";
echo $railings, " railings\n";


/* 
Test for supplying posts + railings and returning the correct length.
*/

// $myFence = new Fence;
// $myFence->setPosts(3);
// $myFence->setRailings(2);
// $posts = $myFence->getPosts();
// $railings = $myFence->getRailings();
// $length = $myFence->caluclateLength($posts, $railings);

// echo $posts, "\n";
// echo $railings, "\n";
// echo $length, "\n";