<?php
/** @noinspection PhpUnhandledExceptionInspection */
namespace Includes;

class ChildClass extends ParentClass
{
    function sayHello(): string
    {
        return parent::sayHello();
    }

    function getNSpace(): string
    {
        return __NAMESPACE__;
    }

    function loopThroughGen(): void
    {
        $generator = xrange(0, 10000, 100);

        while ($generator->valid()) {
            customPrint("{$generator->key()}: {$generator->current()}");

            $generator->next();
        }
    }
}