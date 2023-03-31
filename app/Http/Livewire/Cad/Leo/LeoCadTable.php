<?php

namespace App\Http\Livewire\Cad\Leo;

use App\Models\Cad\Call;
use Livewire\Component;

class LeoCadTable extends Component
{

    public $calls;

    public function mount()
    {
        $this->calls = Call::all(['id', 'nature', 'location', 'city', 'priority', 'status', 'updated_at', 'units']);
    }

    public function render()
    {
        return view('livewire.cad.leo.leo-cad-table');
    }
}
