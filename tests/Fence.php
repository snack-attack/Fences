<?php

require_once '../models/Fence.php';

use PHPUnit\Framework\TestCase;

class TestFence extends TestCase 
{
    const RAILING_LENGTH = 1.5;
    const POST_LENGTH = 0.1;
    const MIN_LENGTH = 1.7;

    private $posts, $railings, $length;

    public function testCalculateLength($posts, $railings) {
        $fence = new Fence;

        $fence->setPosts(3);
        $fence->setRailings(2);
        
        $posts = $fence->getPosts();
        $railings = $fence->getRailings();

        $length = $fence->caluclateLength($posts, $railings);

        return $length;
    }

}