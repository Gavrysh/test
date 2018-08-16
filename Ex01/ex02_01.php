<?php
class FileSystemExeption extends Exception
{

}

class DirectoryExeption extends FileSystemExeption
{
    const DIRECTORY_NOT_EXIST = 1;
    const DIRECTORY_NOT_WRITABLE = 2;
}

class FileExeption extends FileSystemExeption
{

}

try {
    $directory = __DIR__ . DIRECTORY_SEPARATOR;

    //директорія може бути відсутня
    if (!is_dir($directory)) {
        throw new DirectoryExeption('Діректорія ' . $directory . ' відсутня!');
    }

    //відсутні права на запис у папку
    if (!is_writable($directory)) {
        throw new DirectoryExeption('Відсутні права на запис на папку: ' . $directory);
    }

    //можливо вже хтось створив файл та закрив до нього доступ
    if (!$file = @fopen($directory . DIRECTORY_SEPARATOR . date('Y-m-d') . '.log', 'a+')) {
        throw new FileExeption('Системі не вдалося створити log файл.');
    }

    fputs($file, date("[H:i:s]") . "done\n");
    fclose($file);
} catch (DirectoryExeption $e) {
    echo 'Із діректориєю трапились якісь проблеми: '.$e->getMessage();
} catch (FileExeption $e) {
    echo 'З файлом трапились проблеми: '.$e->getMessage();
} catch (FileSystemExeption $e) {
    echo 'Помилка файлової системи: '.$e->getMessage();
} catch (Exception $e) {
    echo 'Помилка серверу: '.$e->getMessage();
}