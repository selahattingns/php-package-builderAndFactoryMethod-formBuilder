<?php
namespace SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder\Elements;

use SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder\Element;

class Button extends Element {

    /**
     * Button constructor.
     * @param $text
     * @param $attributes
     */
    public function __construct($text, $attributes = [])
    {
        $this->tagName = "button";
        $this->attributes = $attributes;
        $this->isTagClosure = true;
        $this->text = $text;
    }
}
