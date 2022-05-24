<?php

namespace App\Http\Livewire\Page\Home;

use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        return view('livewire.page.home.show-home')->layout('layouts.desktop');
    }
}
