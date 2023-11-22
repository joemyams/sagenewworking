<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ThemeOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Options | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeOptions = new FieldsBuilder('theme_options');

        $themeOptions
            // ->addRepeater('items')
            //     ->addText('item')
            // ->endRepeater();
            ->addImage('logo', ['label' => 'Logo', 'return_format' => 'id']);

        return $themeOptions->build();
    }
}
