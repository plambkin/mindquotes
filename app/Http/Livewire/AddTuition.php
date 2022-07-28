<?php

namespace App\Http\Livewire;

use App\Models\Tuition;
use Livewire\Component;

class AddTuition extends Component
{
    public $tuition;

    public $isOpen = false;

    public function mount(Tuition $tuition)
    {
        $this->tuition = $tuition;
    }

    public function render()
    {
        return view('livewire.add-tuition');
    }
}
