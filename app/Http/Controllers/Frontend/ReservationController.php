<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $tables = Table::where('status', TableStatus::Avaliable)->get();
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('reservations.index', compact('tables', 'min_date', 'max_date'));
    }

    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number) {
            return back()->with('guest_error', 'Please choose the table base on guests number.');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res) {
            $res_date = Carbon::parse($res->res_date);
            if($res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('table_error', 'This table is reserved for this day');
            }
        }
        Reservation::create($request->validated());

        return to_route('thankyou');
    }

    public function thankyou() 
    {
        return view('thankyou');
    }
}
