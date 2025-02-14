<?php

namespace App\Livewire;

use Livewire\Component;

class ToastNotification extends Component
{
    public function render()
    {
        return view('livewire.toast-notification');
    }

    public function alertSuccess()
    {
        $this->dispatch('alert',
                ['type' => 'success',  'message' => 'User Created Successfully!']);
    }

    public function alertError()
    {
        $this->dispatch('alert',
            ['type' => 'error',  'message' => 'Something is Wrong!']);
    }

    public function alertInfo()
    {
        $this->dispatch('alert',
            ['type' => 'info',  'message' => 'Going Well!']);
    }
}
