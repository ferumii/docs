<?php

include_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$lang = 'ru';

exec("tree $lang -f -a -i -n --dirsfirst --noreport | grep \.md | grep -vi readme", $filelist);

print_r($filelist);

// ---

$file = file_get_contents("$lang/01_Revolution/00_Revolution.md");

preg_match('/^---(.+)---/s', $file, $data);

$data = Yaml::parse($data[1]);

print_r($data);

/*
TODO:

1. Собрать карту файлов, быстрее с помощью команды tree

сначала верхние уровни, затем нижние, чтобы знать парентов и формировать сразу же карту иерархий?

нужно знать иерархию для джобы




2. Парсить по очереди файл и ставить его в очередь на обработку
3. Воркер очереди берет файл, обрабатывает его и обновляет.

*/