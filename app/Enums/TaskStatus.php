<?php


namespace App\Enums;


use ReflectionClass;

class TaskStatus
{
    const PLANNED = 1;
    const COMPLETED = 2;

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function getConstants(): array
    {
        $rClass = new ReflectionClass(get_called_class());

        return array_values($rClass->getConstants());
    }
}
