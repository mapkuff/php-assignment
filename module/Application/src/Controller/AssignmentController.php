<?php
/**
 * Created by PhpStorm.
 * User: siwapunsiwaporn
 * Date: 6/19/2018 AD
 * Time: 12:39 AM
 */

namespace Application\Controller;

use Application\Util\Assignment;
use function Functional\compose;
use function Functional\partial_left;
use function Functional\partial_right;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use ZfAnnotation\Annotation\Controller;
use ZfAnnotation\Annotation\Route;

/**
 * @Controller
 * @Route(name="assignment", route="/assignment")
 */
class AssignmentController extends AbstractActionController
{

  /**
   * @Route(name="exercise-1", route="/exercise-1")
   * @return \Zend\View\Model\ViewModel
   */
  public function exerciseOneAction() {
    return new JsonModel([
      "question" => "3, 5, 9, 15, X  - Please create new function for finding X value",
      "answers" => [
        [
          "position" => "1",
          "answer" => Assignment::exerciseOne(1)
        ],
        [
          "position" => "2",
          "answer" => Assignment::exerciseOne(2)
        ],
        [
          "position" => "3",
          "answer" => Assignment::exerciseOne(3)
        ],
        [
          "position" => "4",
          "answer" => Assignment::exerciseOne(4)
        ],
        [
          "position" => "5",
          "answer" => Assignment::exerciseOne(5)
        ]
      ]
    ]);
  }

  /**
   * @Route(name="exercise-2", route="/exercise-2")
   * @return \Zend\View\Model\ViewModel
   */
  public function exerciseTwoAction() {
    return new JsonModel([
      "question" => "(Y + 24)+(10 x 2) = 99 - Please create new function for finding Y value",
      "answer" => Assignment::exerciseTwo()
    ]);
  }

  /**
   * @Route(name="exercise-3", route="/exercise-3")
   * @return \Zend\View\Model\ViewModel
   */
  public function exerciseThreeAction() {
    return new JsonModel([
      "question" => "If 1 = 5 , 2 = 25 , 3 = 325 , 4 = 4325 Then 5 = X  - Please create new function for finding X value",
      "answers" => [
        [
          "position" => "1",
          "answer" => Assignment::exerciseThree(1)
        ],
        [
          "position" => "2",
          "answer" => Assignment::exerciseThree(2)
        ],
        [
          "position" => "3",
          "answer" => Assignment::exerciseThree(3)
        ],
        [
          "position" => "4",
          "answer" => Assignment::exerciseThree(4)
        ],
        [
          "position" => "5",
          "answer" => Assignment::exerciseThree(5)
        ]
      ]
    ]);
  }

}
