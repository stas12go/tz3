<?php

namespace App\View\Components\MortgagePrograms;

use Illuminate\View\Component;

class TableRow extends Component
{
    public int $key;
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($key, $item)
    {
        $this->key = $key;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mortgage-programs.table-row');
    }
}
