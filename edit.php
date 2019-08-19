<?php
include 'models/templater.php';

$text = file_get_contents('text.txt');
$title = 'Чтение текста';



if(!empty($_POST)) {
    $text = $_POST['text'];
    file_put_contents('text.txt', $text);
    header("Location: /index.php");
    die;
}

// внутренний шаблон
$content = templation('v-edit', ['text' => $text]);

// главный шаблон
echo templation('v-main', ['content' => $content, 'title' => $title]);



