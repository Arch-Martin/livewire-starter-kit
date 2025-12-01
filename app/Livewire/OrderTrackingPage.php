<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Seguimiento de Compras - Outlet del Café')]
class OrderTrackingPage extends Component
{
    public function render()
    {
        return view('livewire.order-tracking-page');
    }
}
