<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Models\FiscalYear;
use App\Http\Requests\StoreFiscalYearRequest;
use App\Http\Requests\UpdateFiscalYearRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class FiscalYearController extends BaseController
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
        $fiscalYears = FiscalYear::latest()->get();

        return view('admin.setting.fiscal_year.index', compact('fiscalYears'));
    }



    public function store(StoreFiscalYearRequest $request)
    {
        FiscalYear::create($request->validated());
        toast('Fiscal Year Stored Successfully', 'success');
        return back();

    }


    public function edit(FiscalYear $fiscalYear)
    {
        return view('admin.setting.fiscal_year.edit', compact('fiscalYear'));

    }


    public function update(UpdateFiscalYearRequest $request, FiscalYear $fiscalYear)
    {
        $fiscalYear->update($request->validated());
        toast('Fiscal Year Updated Successfully', 'success');

        return redirect(route('admin.fiscal-year.index'));

    }


    public function destroy(FiscalYear $fiscalYear)
    {
        $fiscalYear->delete();
        toast('Fiscal Year Deleted Successfully', 'success');
        return back();

    }
}
