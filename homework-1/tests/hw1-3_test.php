<?php

require_once __DIR__.'/../autoloadClass.php';
$db = new App\Settings\Db;

assert(true == $db->execute('INSERT INTO news (header, text, author)
               VALUES (:header, :text, :author)', [
                  ':header' => 'Apple выпустила красный iPhone',
                  ':text' => 'Корпорация Apple выпустила iPhone 7 и 7 Plus в ярко-красном цвете корпуса. Кроме этого,
                   был представлен новый планшет iPad, сообщается в пресс-релизе компании, поступившем в «Ленту.ру».
                   Новая версия iPhone 7 создана в рамках благотворительной кампании (RED), поэтому часть средств от продаж
                   специальной версии устройств будет направлена в Глобальный фонд для борьбы со СПИДом. Телефоны в новом цвете
                   будут доступны лишь в версиях на 128 и 256 гигабайт накопителя, а их продажа начнется в пятницу, 24 марта.',
                  ':author' => 'lenta.ru']));

assert(true == $db->execute('UPDATE news SET header = :header, author = :author WHERE id = :id',
                           [':header' => 'Apple выпустила iPhone', ':author' => 'apple.com', ':id' => 3]));

assert(false == $db->execute('UPDATE news1 SET header = :header, author = :author WHERE id = :id',
        [':header' => 'Apple выпустила iPhone', ':author' => 'apple.com', ':id' => 9]));
