<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class TopNavigation extends Component
{
    public function render()
    {
        return view('livewire.navigation.top-navigation');
    }

    // create fucntion for logout
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
