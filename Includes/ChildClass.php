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
}