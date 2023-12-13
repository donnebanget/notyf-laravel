<?php

namespace App\Livewire\Layout;

use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    #[On('refresh-navbar')]
    public function render()
    {
        return view('layouts.navbar');
    }
}
