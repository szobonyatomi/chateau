<?php

namespace App\Blocs;

use Extended\ACF\Location;

abstract class Bloc
{

    public static $name = '';
    public static $label = '';
    public static $position = '';
    public static $description = '';
    public static $allowed_blocks = [];

    public static function register(): void
    {
        if (count(static::location()) == 0) {
            acf_register_block([
                'name' => static::$name,
                'description' => static::$description,
                'title' => static::$label ?: static::$name,
                'category' => wp_get_theme()->template,
                'mode' => 'edit',
                'render_callback' => function () {
                    static::render();
                },
            ]);
        }

        register_extended_field_group([
            'title' => static::$name . ' Bloc',
            'fields' => static::fields(),
            'position' => static::$position ?: 'normal',
            'location' => count(static::location()) > 0 ? static::location() : [Location::where('block', '==', 'acf/' . static::$name)],
            'style' => 'default'
        ]);
        static::enabled_blocks('acf/' . static::$name);
    }

    protected static function enabled_blocks($block_name): void
    {
        static::$allowed_blocks[] = $block_name;
    }

    protected static function render(): void
    {
        blade('bloc/' . static::$name);
    }

    protected static function fields(): array
    {
        return [];
    }

    protected static function location(): array
    {
        return [];
    }
}
