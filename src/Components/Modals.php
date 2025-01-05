<?php

namespace App\Livewire;

use Livewire\Component;

class Modals extends Component
{
    public $alias;
    public $params = [];

    protected $listeners = [
        'showModal' => 'show',
        'hideModal' => 'hide',
    ];

    public function show($component, $params = [])
    {
        $this->alias = $component;
        $this->params = $params;

        $this->dispatch('shown.bs.modal');
    }

    public function hide()
    {
        $this->alias = null;
        $this->params = [];

        $this->dispatch('hidden.bs.modal');
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
