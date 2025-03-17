<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Regression')]

    #[Validate('required')]
    public $website = '';

    public $pages = [];

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function scrape () {
        debug($this->website);
    }
}
