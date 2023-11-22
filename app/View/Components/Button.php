<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

    public $type;
    public string $type_class;
    public array $types= [
        "primary"=> "bg-red-400 text-white text-xl",
        "outline"=> "border border-blue-400 text-red-40 text-xl"
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'primary')
    {
        $this->type = $type;
        $this->type_class = $this->types[$type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
