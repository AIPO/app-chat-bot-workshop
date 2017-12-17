<?php
/**
 * Created by PhpStorm.
 * User: povilas
 * Date: 17.12.16
 * Time: 15.28
 */

namespace MY\Entity\Quiz;
class Question
{
    var $questionText;
    var $questionOptions = [];
    var $correctAnswer;

    /**
     * @return mixed
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * @param mixed $questionText
     */
    public function setQuestionText($questionText)
    {
        $this->questionText = $questionText;
    }

    /**
     * @return array
     */
    public function getQuestionOptions()
    {
        return $this->questionOptions;
    }

    /**
     * @param array $questionOptions
     */
    public function setQuestionOptions($questionOptions)
    {
        $this->questionOptions = $questionOptions;
    }

    /**
     * @return mixed
     */
    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    /**
     * @param mixed $correctAnswer
     */
    public function setCorrectAnswer($correctAnswer)
    {
        $this->correctAnswer = $correctAnswer;
    }


    public function __construct($questionText, $questionOptions, $questionCorrectAnswer)
    {
        $this->questionText = $questionText;
        $this->questionOptions = $questionOptions;
        $this->correctAnswer = $questionCorrectAnswer;
    }
}