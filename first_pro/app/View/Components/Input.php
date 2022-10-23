<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
   
    public $type;
    public $demo;
    public $label;
    public function __construct($name,$type,$label,$demo=0)
    {
    $this->name = $name;
    
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
        return view('components.input');
    }
}
