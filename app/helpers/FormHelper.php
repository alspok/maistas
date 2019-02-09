<?php

namespace App\Helpers;

class FormHelper
{
    private $form = '';

    public function __construct($method, $action)
    {
        $this->form .= '<form method="' . $method .'" action="' . $action . '">';
    }

    public function input($attributes)
    {
        $this->form .= '<input ';
            foreach($attributes as $key => $attr){
                $this->form .= $key . '="' . $attr . '" ';
            }
        $this->form .= '>';
        // var_dump($this->form);

        return $this;
    }
    
//Selecton TAG
    public function label($attributes)
    {
        $this->form .= '<label for=' . $attributes . '>' . $attributes . '</label>';
        return $this;
    }

    public function h2($attributes)
    {
        $this->form .= '<h2>' . $attributes . '<h2>';
        return $this;
    }

    public function h3($attributes)
    {
        $this->form .= '<h3>' . $attributes . '<h3>';
        return $this;
    }

    public function h4($attributes)
    {
        $this->form .= '<h4>' . $attributes . '<h4>';
        return $this;
    }

    public function h5($attributes)
    {
        $this->form .= '<h5>' . $attributes . '<h5>';
        return $this;
    }

    public function break()
    {
        $this->form .= '<br>';
        return $this;
    }

    public function selection($attributes)
    {

        $this->form .= '<select ';
        foreach($attributes as $key => $attr) {
            $this->form .= $key . '="' . $attr . '">';
        }
        $this->form .= '>';
        return $this;
    }
    
    public function selectionOption($attributes){
        foreach($attributes as $key => $attr){
            $this->form .= '<option value="' . $key . '">' . $attr .'</option>';
        }
        $this->form .= '</select>';
        // var_dump($this->form);
        return $this;
    }
//End selection TAG

//Textarea TAG
    public function textArea($attributes)
    {
        $this->form  .= '<textarea ';
        $i = 0;
        foreach($attributes as $key => $attr){
            $this->form .= $key . '="' . $attr . '" ';
            if($i++ === 3){
                $this->form  .= '>' . $attr . '</textarea>';
           }
            // var_dump($this->form);
        }
        return $this;
    }

    public function get()
    {
        $this->form .= '</form>';
        return $this->form;
    }
}