<?php

function customPrint(string $payload, ...$additional)
{
    $mapped = array_map(function (mixed $value) {
        if (is_array($value)) {
            return implode(', ', $value);
        }

        return $value;
    }, $additional);

    $additionalValues = implode(', ', $mapped);

    echo("{$payload}, {$additionalValues}\n");
}

function xrange(int $start, int $end, int $step = 1): Generator
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}
