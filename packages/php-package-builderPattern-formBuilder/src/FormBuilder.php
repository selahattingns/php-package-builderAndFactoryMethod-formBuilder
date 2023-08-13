<?php
namespace SelahattinGns\PhpPackageBuilderPatternFormBuilder;

use SelahattinGns\PhpPackageBuilderPatternFormBuilder\ElementBuilder\Elements\Button;
use SelahattinGns\PhpPackageBuilderPatternFormBuilder\ElementBuilder\Elements\Textarea;
use SelahattinGns\PhpPackageBuilderPatternFormBuilder\ElementBuilder\Elements\Input;

class FormBuilder{

    /**
     * @var Form
     */
    private $form;

    /**
     * @param null $formName
     */
    public function createForm($formName = null)
    {
        $this->form = new Form($formName);
    }

    /**
     * @param array $attributes
     * @param $text
     */
    public function addButton($text, $attributes = [])
    {
        $this->form->addElement(new Button($text, $attributes));
    }

    /**
     * @param $name
     * @param array $attributes
     */
    public function addInput($name, $attributes = [])
    {
        $this->form->addElement(new Input($name, $attributes));
    }

    /**
     * @param $name
     * @param array $attributes
     * @param string $text
     */
    public function addTextarea($name, $attributes = [], $text = "")
    {
        $this->form->addElement(new Textarea($name, $attributes, $text));
    }

    /**
     * @param bool $isBootstrap
     * @return string
     */
    public function getHtml($isBootstrap = false)
    {
        return $this->form->getHtml($isBootstrap);
    }
}
