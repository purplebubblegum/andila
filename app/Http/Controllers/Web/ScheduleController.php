<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    /**
     * Show the index schedule page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// Only allow admin
        if (! session('weblogin')->isAdmin()) {
            abort(403);
        }

        return view('inner.schedule.index');
    }
}
