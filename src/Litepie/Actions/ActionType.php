<?php
namespace Litepie\Actions;

use Illuminate\Support\Arr;

enum ActionType: string
{
    case List = 'List';
    case Details = 'Details';

    public function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}