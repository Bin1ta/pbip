<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Models\BidOffice;
use App\Http\Requests\StoreBidOfficeRequest;
use App\Http\Requests\UpdateBidOfficeRequest;

class BidOfficeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $bidOffices = BidOffice::latest()->get();

        return view('admin.setting.bid_office.index', compact('bidOffices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBidOfficeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBidOfficeRequest $request)
    {
        BidOffice::create($request->validated());
        toast('Bid Office Stored Successfully', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BidOffice  $bidOffice
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BidOffice  $bidOffice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(BidOffice $bidOffice)
    {
        return view('admin.setting.bid_office.edit', compact('bidOffice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBidOfficeRequest  $request
     * @param  \App\Models\BidOffice  $bidOffice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateBidOfficeRequest $request, BidOffice $bidOffice)
    {
        $bidOffice->update($request->validated());
        toast('Bid Office Updated Successfully', 'success');

        return redirect(route('admin.bid-office.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BidOffice  $bidOffice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(BidOffice $bidOffice)
    {
        $bidOffice->delete();
        toast('Bid Office Deleted Successfully', 'success');
        return back();
    }
}
