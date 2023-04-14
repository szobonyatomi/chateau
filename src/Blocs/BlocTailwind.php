<?php

namespace App\Blocs;

use Extended\ACF\Fields\Message;

class BlocTailwind extends Bloc
{
    public static $name = 'tailwind';
    public static $label = 'Tailwind-1';

    protected static function fields(): array
    {
        return [
            Message::make("Just to built a page w/ Tailwind")
        ];
    }
}
