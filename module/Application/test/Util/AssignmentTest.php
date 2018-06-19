<?php
/**
 * Created by PhpStorm.
 * User: siwapunsiwaporn
 * Date: 6/19/2018 AD
 * Time: 9:41 AM
 */

namespace ApplicationTest\Util;


use Application\Util\Assignment;
use PHPUnit\Framework\TestCase;

class AssignmentTest extends TestCase
{
  /**
   * 3, 5, 9, 15, X  - Please create new function for finding X value
   */
  public function testExerciseOne() {
    $this->assertEquals(3, Assignment::exerciseOne(1));
    $this->assertEquals(5, Assignment::exerciseOne(2));
    $this->assertEquals(9, Assignment::exerciseOne(3));
    $this->assertEquals(15, Assignment::exerciseOne(4));
    $this->assertEquals(23, Assignment::exerciseOne(5));
  }
  /**
   * (Y + 24)+(10 × 2) = 99 - Please create new function for finding Y value
   */
  public function testExerciseTwo() {
    $this->assertEquals(55, Assignment::exerciseTwo());
  }
  /**
   * If 1 = 5 , 2 = 25 , 3 = 325 , 4 = 4325 Then 5 = X
   */
  public function testExerciseThree() {
    $this->assertEquals(5, Assignment::exerciseThree(1));
    $this->assertEquals(25, Assignment::exerciseThree(2));
    $this->assertEquals(325, Assignment::exerciseThree(3));
    $this->assertEquals(4325, Assignment::exerciseThree(4));
    $this->assertEquals(54325, Assignment::exerciseThree(5));
  }
}
