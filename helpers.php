<?php

function customPrint(string $payload, ...$additional)
{
    $additionalValues = count($additional) > 0 ? ', ' . implode(', ', $additional) : '';

    echo("{$payload}{$additionalValues}\n");
}