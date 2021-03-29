<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class TicketComponent extends Component
{
    public $ticket = "";

    public function render()
    {
        return view('livewire.ticket-component');
    }

    public function ticket()
    {

        $this->reset('ticket');

        $ticket = Str::random(40);

        $this->ticket = $ticket;

        return $this->ticket;
    }
}
