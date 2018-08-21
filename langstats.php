<?php

function countArrayKeys(array $ar): int {

    $count = 0;
    foreach ($ar as $key => $value)
    {
        if (is_array($value))
            $count += countArrayKeys($ar[$key]);
        else
            ++$count;
    }

    return $count;

};

$countStrings = function (string $path): int {

    $count = 0;
    $iterator = new RecursiveDirectoryIterator($path);
    foreach(new RecursiveIteratorIterator($iterator) as $file)
    {
        if (preg_match('/\.php$/', $file) === 1 && preg_match('/validation\.php$/', $file) !== 1)
        {
            $array = require($file);
            $count += countArrayKeys($array);
        }
    }

    return $count;

};

$languages = array_filter(glob('./src/*'), 'is_dir');
$engCount = $countStrings('./src/en');
foreach ($languages as $lang)
{
    $count = $lang === './src/en' ? $engCount : $countStrings($lang);
    $pct = round($count / $engCount * 100);

    echo "$lang\t$count\t$pct%\n";
}

