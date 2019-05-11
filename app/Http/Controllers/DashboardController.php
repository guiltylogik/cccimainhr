<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){

        $total_members = count(Member::All());
        $deleted_members = count(Member::onlyTrashed()->get());

        return view('dashboard', ['members'=> $total_members, 'deleted' => $deleted_members]);
    }
}
