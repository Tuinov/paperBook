<?php
include 'models/templater.php';
$text = file_get_contents('text.txt');
$title = 'Чтение текста';

// внутренний шаблон
$content = templation('v-index', ['text' => $text]);

// главный шаблон
echo templation('v-main', ['content' => $content, 'title' => $title]);