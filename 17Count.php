<?php
/**
 * assertCount($expectedCount, $haystack[, string $message = ''])
 * Reports an error identified by $message if the number of elements 
 * in $haystack is not $expectedCount.
 * assertNotCount() is the inverse of this assertion and takes the same arguments. 
 */

class CountTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertCount(0, array('foo'));
    }
}
?>