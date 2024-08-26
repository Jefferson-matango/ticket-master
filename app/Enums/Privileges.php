<?php

namespace App\Enums;

enum Privileges: string
{
    case Propietario = 'propietario';
    case Todo = 'todo';
    case Nada = 'nada';
}
