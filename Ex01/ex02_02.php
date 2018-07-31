<?php

set_exception_handler(function ($e)
{
    echo $e->getMessage().'<br>';
    echo $e->getFile().': '.$e->getLine().'<br>';
    echo $e->getTraceAsString().'<br>';
});

throw new Exception('Unrecoverable exception');
echo 'Не виконано :(';