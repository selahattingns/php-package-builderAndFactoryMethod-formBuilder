<?php
namespace SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder\Elements;

use SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder\Element;

class Textarea extends Element {

    /**
     * Textarea constructor.
     * @param $name
     * @param array $attributes
     * @param string $text
     */
    public function __construct($name, $attributes = [], $text = "")
    {
        $this->tagName = "textarea";
        $this->name = $name;
        $this->attributes = $attributes;
        $this->isTagClosure = true;
        $this->text = $text;
    }
}
