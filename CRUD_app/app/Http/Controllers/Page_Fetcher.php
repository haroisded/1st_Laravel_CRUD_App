<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_Fetcher
{
    public function users_page(){ return view('users'); }
    
    public function create_page(){ return view('create'); }

    public function update_page(){ return view('update'); }
}
