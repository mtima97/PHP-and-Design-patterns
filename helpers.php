<?php

function customPrint(string $payload, ...$additional)
{
    $additionalValues = count($additional) > 0 ? ', ' . implode(', ', $additional) : '';

    echo("{$payload}{$additionalValues}\n");
}

function xrange(int $start, int $end, int $step = 1): Generator
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}
