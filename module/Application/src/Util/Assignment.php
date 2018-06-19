<?php
/**
 * Created by PhpStorm.
 * User: siwapunsiwaporn
 * Date: 6/19/2018 AD
 * Time: 9:36 AM
 */

namespace Application\Util;


use function Functional\compose;
use function Functional\partial_left;
use function Functional\partial_right;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class Assignment
{

  /**
   * 3, 5, 9, 15, X  - Please create new function for finding X value
   * @param $pos integer
   * @return integer
   */
  public static function exerciseOne($pos) {
    $calculation = compose(
      partial_left("range", 1),
      partial_right('Functional\map', function($i){ return ($i - 1) * 2; }),
      partial_right('Functional\reduce_left', function($value, $index, $collection, $reduction) { return $value + $reduction; }, 0),
      function ($i) { return $i + 3; }
    );
    return $calculation($pos);
  }
  /**
   * (Y + 24)+(10 × 2) = 99 - Please create new function for finding Y value
   * @return integer
   */
  public static function exerciseTwo() {
    $expectedResult = 99;
    $expression = '(Y + 24) + (10 * 2)';
    $expressionLanguage = new ExpressionLanguage();
    $result = $expressionLanguage->evaluate($expression, ['Y' => 0]);
    return $expectedResult - $result;
  }
  /**
   *  If 1 = 5 , 2 = 25 , 3 = 325 , 4 = 4325 Then 5 = X
   * @param $pos integer
   * @return integer
   */
  public static function exerciseThree($pos) {
    $calculation = compose(
      partial_left("range", 1),
      partial_right('Functional\map', function($i){ return $i == 1 ? 5 : $i; }),
      partial_right('Functional\reduce_left', function($value, $index, $collection, $reduction) { return $value . $reduction; }, '')
    );
    return (int) $calculation($pos);
  }

}
