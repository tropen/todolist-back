<?php


namespace App\Enums;


use ReflectionClass;

class TaskStatus
{
    const PLANNED = 1;
    const COMPLETED = 2;

    //todo check
    public function toString($status): string
    {
        if ($status == self::PLANNED) {
            return 'planned';
        } elseif ($status == self::COMPLETED) {
            return 'completed';
        }

        return 'error';
    }

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
