<?php

use PHPUnit\Framework\TestCase;

require('../models/Fence.php');

class TestFenceBuilder extends TestCase 
{
    const RAILING_LENGTH = 1.5;
    const POST_LENGTH = 0.1;
    const MIN_LENGTH = 1.7;

    public function testCalculateLength() 
    {
        $fence = new FenceBuilder();

        $length = $fence->caluclateLength(3, 2);

        $this->assertEquals(3.3, $length);
    }

    public function testCalculatePosts() 
    {
        $fence = new FenceBuilder();

        $posts = $fence->calculatePosts(3.3);

        $this->assertEquals(3, $posts);
    }

    public function testCalculateRailings()
    {
        $fence = new FenceBuilder();

        $railings = $fence->calculateRailings(3.3);

        $this->assertEquals(2, $railings);
    }
}