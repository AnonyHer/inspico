<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class userCard extends Component
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function render(): View|string
    {
        return view('components.user-card');
    }
}
