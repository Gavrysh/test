<?php
try {
    $handler = mysqli_connect('localhost', 'root', 'test');
    try {
        throw new Exception('DB error!<br>');
    } catch (Exception $e) {
        throw new Exception('Catch exception', 0, $e);
    } finally {
        mysqli_close($handler);
    }
    echo 'Ok<br>';
} catch (Exeption $e) {
    echo $e->getMessage().'<br>';
    echo $e->getPrevious()->getMessage().'<br>';
}