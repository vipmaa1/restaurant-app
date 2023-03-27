<?php

namespace App\Enums ;

enum TableStatus: string
{
    case Pending = 'pending';
    case Avilable = 'avilable' ;
    case Unavilable = 'Unavilable';

}