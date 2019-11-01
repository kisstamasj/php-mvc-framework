<?php

namespace views;

use libraries\CSRFToken;

class View
{

    public $__view;

    public function __construct(){
        CSRFToken::generateToken();
    }

    /**
     * This function set the properties
     *
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * This function set the variables to view
     *
     * @param array $variables
     * @return void
     */
    public function toView($variables)
    {
        foreach ($variables as $name => $value) {
            $this->$name = $value;
        }

        return $this;
    }

    /**
     * This function load a view
     *
     * @param string $view
     * @return void
     */
    public function loadView($view, $template = "main")
    {

        $this->__view = $view;
        include_once "views\\templates\\".$template.".php";
    }

    /**
     * This function load a view
     *
     * @param string $view
     * @return void
     */
    public function loadError($error, $template = "main")
    {
        $this->__view = 'components\\errors\\'.$error;
        include_once "views\\templates\\".$template.".php";
    }

    /**
     * This function load a component
     *
     * @param string $component
     * @return void
     */
    public function loadComponent($component)
    {
        include_once "views\\components\\".$component.".php";
    }
}