<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('reservations.index', compact('tables', 'min_date', 'max_date'));
    }
}
