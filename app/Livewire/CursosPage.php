<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Cursos y Talleres - Outlet del Café')]
class CursosPage extends Component
{
    public function render()
    {
        return view('livewire.cursos-page');
    }
}
