<?php
function writeFile()
{
    $directory = __DIR__ . DIRECTORY_SEPARATOR;

    //директорія може бути відсутня
    if (!is_dir($directory)) {
        throw new Exception('Діректорія ' . $directory . ' відсутня!');
    }

    //відсутні права на запис у папку
    if (!is_writable($directory)) {
        throw new Exception('Відсутні права на запис на папку: ' . $directory);
    }

    //можливо вже хтось створив файл та закрив до нього доступ
    if (!$file = @fopen($directory . DIRECTORY_SEPARATOR . date('Y-m-d') . '.log', 'a+')) {
        throw new Exception('Системі не вдалося створити log файл.');
    }

    fputs($file, date("[H:i:s]") . "done\n");
    fclose($file);
}

try {
    writeFile();
} catch (Exception $e) {
    echo 'Щось пійшло не так як треба... '.$e->getMessage();
}