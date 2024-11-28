<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Bid;
use App\Models\BidOffice;
use App\Models\FiscalYear;
use Illuminate\Http\Request;

class BidController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $fiscalYears = FiscalYear::get();
        $bidOffices = BidOffice::get();
        $bids = Bid::with('bidFiles','bidOffice','fiscalYear')
            ->when(!empty(request()->fiscal_year_id),function($query){
                $query->where('fiscal_year_id',request()->fiscal_year_id);
            })
            ->when(!empty(request()->bid_office_id), function ($query) {
                $query->where('bid_office_id', request()->bid_office_id);
            })
            ->latest()
            ->get();
        return view('admin.setting.bid.index', compact('bids','bidOffices','fiscalYears'));
    }

    public function show($id)
    {
        $bid = Bid::with('bidFiles')->findOrFail($id);
        return view('admin.setting.bid.show', compact('bid'));
    }

}
