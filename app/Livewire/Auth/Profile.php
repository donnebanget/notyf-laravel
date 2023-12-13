<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Profile extends Component
{
    #[Title('Profile')]

    #[Validate('required')]
    public $name;

    #[Validate('required', 'email')]
    public $email;

    public function mount()
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function render()
    {
        return view('livewire.auth.profile');
    }

    public function updateProfile()
    {
        $this->validate();

        User::where('id', Auth::user()->id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('success');
        flash()->addSuccess('Profile updated successfully!');

        $this->dispatch('refresh-navbar');
    }
}
