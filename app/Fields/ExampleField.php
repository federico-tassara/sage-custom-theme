<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ExampleField extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $example = new FieldsBuilder('example field');

        $example
            ->setLocation('post_type', '==', 'post');

        $example
            ->addRepeater('items')
            ->addText('item')
            ->endRepeater();

        return $example->build();
    }
}
