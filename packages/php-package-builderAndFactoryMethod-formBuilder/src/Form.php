<?php
namespace SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder;

use SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder\Element;

class Form {
    /**
     * @var string
     */
    private $formName = null;

    /**
     * @var array
     */
    private $elements = [];

    /**
     * Form constructor.
     * @param null $formName
     */
    public function __construct($formName = null)
    {
        $this->formName = $formName;
    }

    /**
     * @param $element
     */
    public function addElement(Element $element)
    {
        $this->elements[] = $element;
    }

    /**
     * @param bool $isBootstrap
     * @return string
     */
    public function getHtml($isBootstrap = false)
    {
        $form = $this->formName ? "<form name=\"$this->formName\">" : "<form>";
        foreach ($this->elements as $element){
            $element->isBootstrap = $isBootstrap;
            $form .= $element->generateHTMLAndFetch() . "\n";
        }
        return $form . "</form>";
    }
}
