<?php

namespace App\Livewire;

use Livewire\Component;

class SweetalertNotification extends Component
{

    protected $listeners = ['remove'];

    public function render()
    {
        return view('livewire.sweetalert-notification');
    }

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function alertSuccess()
    {

         $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'User Created Successfully!',
            'text' => 'It will list on users table soon.'
            ]);

    }


    public function alertConfirm()
    {
        $this->dispatch('swal:confirm', [
                'type' => 'warning',
                'message' => 'Are you sure?',
                'text' => 'If deleted, you will not be able to recover this imaginary file!'
            ]);
    }

    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'User Delete Successfully!',
            'text' => 'It will not list on users table soon.'
        ]);
    }
}
