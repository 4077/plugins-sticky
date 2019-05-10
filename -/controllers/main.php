<?php namespace plugins\sticky\controllers;

class Main extends \Controller
{
    public function load()
    {
        $this->js('jquery.sticky');
    }

    public function bind()
    {
        $this->js('jquery.sticky');

        $this->js(':.bind', [
            'selector' => $this->data['selector'],
            'options'  => $this->data('options')
        ]);
    }
}
