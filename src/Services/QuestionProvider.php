<?php
/**
 * Created by PhpStorm.
 * User: povilas
 * Date: 17.12.17
 * Time: 15.18
 */

namespace My\Services;

use My\Entity\Quiz\Question;


class QuestionProvider
{
    public function getQuestionFromApi()
    {
        $query = json_decode(file_get_contents('https://opentdb.com/api.php?amount=1'), true);
        //    html_entity_decode
        $cleaned = $query['results'][0];
        $correctAnswer = html_entity_decode($cleaned['correct_answer'], ENT_QUOTES);
        $correctQuestion = html_entity_decode($cleaned['question'], ENT_QUOTES);
        $answerOptions = [$correctAnswer];
        foreach ($cleaned['incorrect_answers'] as $incorrectAnswer) {
            $answerOptions[] = html_entity_decode($incorrectAnswer);
        }
        shuffle($answerOptions);
        $question = new Question($correctQuestion, $answerOptions, $correctAnswer);
        return $question;
    }
}