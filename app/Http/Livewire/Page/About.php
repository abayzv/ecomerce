<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.page.about')
        ->layout('layouts.admin');
    }
}
