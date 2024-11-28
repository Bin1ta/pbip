<?php

namespace App\Http\Livewire;

use App\Models\Bid;
use App\Models\BidOffice;
use App\Models\FiscalYear;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class BidForm extends Component
{
    use WithFileUploads;

    public $fiscalYears = [];
    public $bidOffices = [];

    public $form = [
        'fiscal_year_id' => null,
        'buyer_name' => null,
        'address' => null,
        'tax' => null,
        'vat' => null,
        'lot' => null,
        'phone' => null,
        'email' => null,
        'bid_office_id' => null,
        'files' => []
    ];

    public function mount()
    {
        $this->fiscalYears = FiscalYear::all();
        $this->bidOffices = BidOffice::all();
        $this->form['files'][] = ['file_name' => '', 'file' => null];
    }

    public function fileArrayIncrement()
    {
        $this->form['files'][] = ['file_name' => '', 'file' => null];
    }

    public function fileArrayDecrement($index)
    {
        unset($this->form['files'][$index]);
        $this->form['files'] = array_values($this->form['files']);
    }

    public function submit()
    {
        $this->validate([
            'form.fiscal_year_id' => ['required'],
            'form.buyer_name' => ['required'],
            'form.address' => ['required'],
            'form.tax' => ['required'],
            'form.vat' => ['required'],
            'form.lot' => ['required'],
            'form.phone' => ['required'],
            'form.email' => ['required'],
            'form.bid_office_id' => ['required'],
            'form.files.*.file_name' => ['nullable', 'string'],
            'form.files.*.file' => ['nullable', 'file'],  // Ensures the file is validated correctly
        ]);
        DB::transaction(function () {
            $bid = Bid::create([
                'fiscal_year_id' => $this->form['fiscal_year_id'],
                'buyer_name' => $this->form['buyer_name'],
                'address' => $this->form['address'],
                'tax' => $this->form['tax'],
                'vat' => $this->form['vat'],
                'lot' => $this->form['lot'],
                'phone' => $this->form['phone'],
                'email' => $this->form['email'],
                'bid_office_id' => $this->form['bid_office_id'],
            ]);
            if (array_key_exists('files', $this->form)) {
                foreach ($this->form['files'] as $fileData) {
                    if ($fileData['file']) {  // Ensure there's a file to process
                        $path = $fileData['file']->store('bid_files', 'public');
                        $bid->bidFiles()->create([
                            'title' => $fileData['file_name'],
                            'file' => $path,
                        ]);
                    }
                }
            }

        });

$this->reset('form');
        session()->flash('message', 'Bid submitted successfully!');
    }

    public function render()
    {
        return view('livewire.bid-form');
    }
}
