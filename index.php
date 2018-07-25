<?php

ob_start();
    ob_start();
        ob_start();
            echo ob_get_level();  // 4
        ob_end_flush();
        echo ob_get_level();  //3
    ob_end_flush();
    echo ob_get_level(); //2
ob_end_flush();
echo ob_get_level();  //1