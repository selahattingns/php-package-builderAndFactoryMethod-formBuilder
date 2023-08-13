<?php
namespace SelahattinGns\PhpPackageBuilderPatternFormBuilder\ElementBuilder\Elements;

use SelahattinGns\PhpPackageBuilderPatternFormBuilder\ElementBuilder\Element;

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
