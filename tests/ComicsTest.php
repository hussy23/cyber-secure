<?php

class ComicsTest extends PHPUnit\Framework\TestCase {
    public function testadd() {

        $comics = new App\comicsadd;
        $result = $comics->add(1,1);
        
        $this->assertEquals(2, $result);
    }

}
