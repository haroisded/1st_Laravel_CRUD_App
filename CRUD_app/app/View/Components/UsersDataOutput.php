<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\users_table;

class UsersDataOutput extends Component
{
   
    public $users = NULL;

    public function __construct()
    {
        $this->users = users_table::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users-data-output', [
            'users' => $this->users
        ]);

    }
}
