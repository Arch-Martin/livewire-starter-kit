<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Cafeterías - Outlet del Café')]
class CafeteriasPage extends Component
{
    public function render()
    {
        return view('livewire.cafeterias-page');
    }
}
