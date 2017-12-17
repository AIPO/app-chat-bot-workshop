<?php
/**
 * Created by PhpStorm.
 * User: povilas
 * Date: 17.12.17
 * Time: 10.50
 */

namespace My\Entity\Quiz;


class AnswerValidator
{
    public function checkAnswer($message, $question)
    {
        if ($message == $question['correct_answer']) {
            return "Answer Correct";
        }
        return "Answer Incorrect";
    }
}