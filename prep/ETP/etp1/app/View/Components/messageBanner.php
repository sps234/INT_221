<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messageBanner extends Component
{
    /**
     * Create a new component instance.
     */

    public $msg ;
    public $cls ;

    public function __construct( $message, $class )
    {
        //
        $this->msg = $message;
        $this->cls = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
