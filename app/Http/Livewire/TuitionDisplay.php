<?php

namespace App\Http\Livewire;

use App\Models\Tuition;
use Livewire\Component;

class TuitionDisplay extends Component
{

    public $question_id;

    public function render()
    {
        return view('livewire.tuition-display', [
            'content' => Tuition::where('id', $this->question_id)->get(),
        ]);
    }

}
