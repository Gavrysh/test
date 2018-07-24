<?php
function getFilesName($nameDir)
{
    return array_diff(scandir($nameDir), ['..', '.']);
}

function connectFiles($nameDir)
{
    $files = getFilesName($nameDir);
    foreach ($files as $val) {
        $config[$val] = include $nameDir.$val;
    }
    return $config;
}

$Default = './Config/Default/';
$Development = './Config/Development/';
$Production = './Config/Production/';

if (!isset($_ENV['PROJECT_PHP_SERVER'])) {
    $config = connectFiles($Default);
} else {
    if (isset($_ENV['PROJECT_PHP_SERVER']) && $_ENV['PROJECT_PHP_SERVER'] == 'development') {
        $config = array_merge(connectFiles($Default), connectFiles($Development));
    } elseif (isset($_ENV['PROJECT_PHP_SERVER']) && $_ENV['PROJECT_PHP_SERVER'] == 'production') {
        $config = array_merge(connectFiles($Default), connectFiles($Production));
    }
}
