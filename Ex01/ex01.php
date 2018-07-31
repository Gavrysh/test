<?php
try {
    if (rand(0, 1)) {
        throw new Exception('One');
    } else {
        echo 'Zerro';
    }
} catch (Exception $e) {
    echo $e -> getLine();
}