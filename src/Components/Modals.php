<?php

namespace greenskies\LaravelLivewireModals\Components;

use Livewire\Component;

class Modals extends Component
{
    public $alias;
    public $params = [];

    public function resetModal()
    {
        $this->alias = null;
        $this->params = [];
    }

    public function render()
    {
        return view('laravel-livewire-modals::modals');
    }
}
