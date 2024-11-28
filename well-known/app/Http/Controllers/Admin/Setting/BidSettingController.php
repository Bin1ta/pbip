<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Models\BidSetting;
use Illuminate\Http\Request;

class BidSettingController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
       $bidSetting = BidSetting::first();

        return view('admin.setting.bid_setting.index', compact('bidSetting'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'is_bid_open' => ['nullable', 'boolean'],
        ]);

       $bidSetting = BidSetting::first();

        if ($bidSetting) {
           $bidSetting->update($data);
            toast('सेटिङ सफलतापूर्वक अद्यावधिक गरियो', 'success');
        } else {
            BidSetting::create($data);
            toast('सेटिङ सफलतापूर्वक सिर्जना गरियो', 'success');
        }

        return back();
    }
}
