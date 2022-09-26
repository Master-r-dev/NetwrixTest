<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PartnerController extends Controller
{
    // Show all partners
    public function index() {
        return view('partners.index', [
            'partners' => Partner::all(),
            'statuses' => Partner::select('status')->distinct()->get(),
            'countries' => Country::all(),
            'states' => State::all(),
        ]);
    }

    //Show single partner
    public function show(Partner $partner) {
        return view('partners.show', [
            'partner' => $partner
        ]);
    }  

}
