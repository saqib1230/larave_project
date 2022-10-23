<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Inputt extends Component
{
    public $name;
    public $email;
    public $type;
    public $demo;
    public $label;
    public function __construct($name,$email,$type,$label,$demo=0)
    {
    $this->name = $name;
    $this->email = $email;
    $this->type = $type;
    $this->demo = $demo;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputt');
    }
}
