<?php
namespace SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder\Elements;

use SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder\Element;

class Input extends Element {

    /**
     * Input constructor.
     * @param $name
     * @param array $attributes
     */
    public function __construct($name, $attributes = [])
    {
        $this->tagName = "input";
        $this->name = $name;
        $this->attributes = $attributes;
        $this->isTagClosure = false;
    }
}
