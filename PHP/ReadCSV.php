<?php

if (! function_exists('simpleMapping')) {
    function simpleMapping(array $array, $callback): array
    {
        return array_map(function ($a) use ($callback) {
            return $callback($a);
        }, $array);
    }
}

function CSV(): array
{
    $items = [];

    if (($handle = fopen(storage_path('app/public/discountmatrix.csv'), "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
            $items[] = $data;
        }
        fclose($handle);
    }

    return $this->sortMatrix(array_map(function ($a) {
        return explode(';', $a);
    }, simpleMapping(array_slice($items, 15), 'array_pop')));
}

