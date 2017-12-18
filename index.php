<?php

include(__DIR__ . '/vendor/autoload.php');

use my\QuestionsMaker;
use my\AnswerValidator;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$access_token = $_ENV['access_token'];
$verify_token = $_ENV['verify_token'];
$appId = $_ENV['appId'];
$appSecret = $_ENV['appSecret'];


if (isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    if ($_REQUEST['hub_verify_token'] === $verify_token) {
        echo $challenge;
        die();
    }
}

$q = new QuestionsMaker();
$question = $q->printQuestion();


$input = json_decode(file_get_contents('php://input'), true);

if ($input === null) {
    exit;
}
//gaunu is fb message ir id


$message = $input['entry'][0]['messaging'][0]['message']['text'];
$sender = $input['entry'][0]['messaging'][0]['sender']['id'];

$fb = new \Facebook\Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
]);
//
$data = [
    'messaging_type' => 'RESPONSE',
    'recipient' => [
        'id' => $sender,
    ],
    'message' => [
        'text' => $question->text,
        'quick_replies' => [
            [
                "content_type" => "text",
                "title" => $question->options[0],
                "payload" => $question->options[0],

            ],
            [
                "content_type" => "text",
                "title" => $question->options[1],
                "payload" => $question->options[1]
            ],
            [
                "content_type" => "text",
                "title" => $question->options[2],
                "payload" => $question->options[2]
            ],
            [
                "content_type" => "text",
                "title" => $question->options[3],
                "payload" => $question->options[3]
            ]

        ]
    ],
];

$response = $fb->post('/me/messages', $data, $access_token);
