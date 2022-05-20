<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    protected $listeners = ['testEmit' => 'test'];
    public $post = [
        "title" => "",
        'count' => 0
    ];
    public $input = [
        "title" => "",
    ];
    public function render()
    {
        $nama = 'Rizki';
        return view('livewire.show-posts', compact(['nama']));
    }
    public function update()
    {
        $this->post['title'] = $this->input['title'];
    }
    public function test()
    {
        $this->post['count'] = $this->post['count'] + 1;
    }
}
