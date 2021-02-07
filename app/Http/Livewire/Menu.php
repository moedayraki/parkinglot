<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Menu extends Component
{
    public $menu;
    
    protected $listeners = ['clickMenu' => 'toggleMenu'];

    public function render()
    {
        return view('livewire.menu');
    }

    public function mount(){
        $this->menu = 'hidden';
    }

    public function toggleMenu(){
        if($this->menu == 'hidden'){
            $this->menu = 'block';
        }else{
            $this->menu = 'hidden';
        }
    }
}
