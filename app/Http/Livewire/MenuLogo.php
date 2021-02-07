<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuLogo extends Component
{
    public $menu;
    public $x;

    protected $listeners = ['clickMenu' => 'switchMenu'];
    
    public function render()
    {
        return view('livewire.menu-logo');
    }

    public function mount(){
        $this->menu = 'block';
        $this->x = 'hidden';
    }

    public function switchMenu(){
        // $this->emitTo('menu', 'clickMenu');
        if($this->menu == 'hidden'){
            $this->menu = 'block';
            $this->x = 'hidden';
        }else{
            $this->menu = 'hidden';
            $this->x = 'block';
        }
        
    }
}
