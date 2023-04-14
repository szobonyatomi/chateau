<?php

namespace App\Blocs;

use Extended\ACF\Fields\WysiwygEditor;
use Extended\ACF\Fields\Image;


class BlocTest extends Bloc
{
    public static $name = 'test';
    public static $label = 'Test';

    protected static function fields(): array
    {
        return [
            WysiwygEditor::make('Content')
                ->instructions('Add the text content.')
                ->mediaUpload(false)
                ->tabs('visual')
                ->toolbar('simple'), // toolbar name in snake_case


            Image::make('Image', 'image')
        ];
    }
}
