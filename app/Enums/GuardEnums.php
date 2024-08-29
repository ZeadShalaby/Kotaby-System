<?php

namespace App\Enums;

enum GuardEnums: string
{
    case kotaby =  'kotaby'; //0
    case ADMIN  =  'admin';  //1
    case AUTHOR =  'author'; //2
    case USER   =  'user';   //3

    /**
     * Get all the enum Gender as an associative array.
     *
     * @return array
     */
    public static function Genders(): array
    {
        return [
            self::kotaby->name => 'kotaby',
            self::ADMIN->name  => 'ADMIN',
            self::AUTHOR->name => 'AUTHOR',
            self::USER->name   => 'USER',
        ];
    }
}
