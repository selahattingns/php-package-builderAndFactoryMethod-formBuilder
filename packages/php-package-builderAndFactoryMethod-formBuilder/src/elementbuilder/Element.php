<?php
namespace SelahattinGns\PhpPackageBuilderAndFactoryMethodFormBuilder\ElementBuilder;

class Element {
    protected $tagName = "div";
    protected $name = null;
    protected $attributes = [];
    protected $isTagClosure = true;
    protected $text = "";
    public $isBootstrap = false;

    /**
     * @return string
     */
    public function generateHTMLAndFetch()
    {
        $element = $this->isBootstrap ? "<div class=\"form-group\">" : "";
        $element .= "<$this->tagName " . ($this->name ? "name=\"$this->name\" " : "");
        foreach ($this->attributes as $key => $attribute) {
            $element .= $key . "=\"" . $attribute . "\" ";
        }
        $element = $this->isTagClosure ? "$element>" . $this->text . "</$this->tagName>" : "$element/>";
        return $this->isBootstrap ? "$element</div>" : $element;
    }
}
