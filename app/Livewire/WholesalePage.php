<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Venta por Mayor - Outlet del Café')]
class WholesalePage extends Component
{
    public function render()
    {
        return view('livewire.wholesale-page');
    }
}
