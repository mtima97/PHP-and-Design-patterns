<?php

namespace Includes;

class ChildClass extends ParentClass
{
    function sayHello(): string
    {
        return parent::sayHello();
    }
}