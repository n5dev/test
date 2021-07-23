<?php
$a = 'Марсоход НАСА «Персеверанс» находится на Марсе с февраля. Сначала он просто сопровождал полёты беспилотного вертолёта Ingenuity, но теперь он и сам готовится к своей как первой научной миссии: сбор образцов марсианской породы в специальные контейнеры.Марсоход изучает дно высохшего озера в кратере Езеро, выискивая признаки древней микробной жизни. Влажная в прошлом местность – идеальное место для подобных поисков. Собранные образцы материала планируется когда-нибудь привезти на Землю. Начать сбор коллекции планируется в течение двух недель в определённом учёными месте. Сначала нужно будет найти подходящую породу. Для этого марсоход передаст визуальные изображения окружения и результаты геологического анализа породы, схожей с той, которую будет собирать.';
$link = 'https://habr.com/ru/news/t/568988/';

$a = strip_tags($a);
$full_text_arr = explode(' ', $a);
$b = mb_substr($a, 0, 180);
$b = rtrim($b, "!,.-");
$trim_text_arr = explode(' ', $b);
$c = count($trim_text_arr) - 1;

// удаляем последнее слово, если оно не целое
if ($trim_text_arr[$c] != $full_text_arr[$c]) {
    $b = mb_substr($b, 0, mb_strrpos($b, ' '));
    $trim_text_arr = explode(' ', $b);
} 

// берем 2 последних слова для ссылки на полный текст новости
$last_el = array_splice($trim_text_arr, -2, 2);
echo implode(' ', $trim_text_arr) . ' <a href="' . $link . '">' . implode(' ', $last_el) . ' ...</a>';
