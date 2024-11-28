<div class="container my-4">
    <div class="card p-4 shadow-sm">
        <h4 class="card-title mb-3">बोलपत्र दरखास्त फारम</h4>

        <form wire:submit.prevent="submit">
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="fiscal_year_id" class="form-label">आर्थिक वर्ष</label>
                    <select wire:model="form.fiscal_year_id" class="form-select">
                        <option value="">आर्थिक वर्ष छान्नुहोस्</option>
                        @foreach($fiscalYears as $fiscalYear)
                            <option value="{{ $fiscalYear->id }}">{{ $fiscalYear->year }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="buyer_name" class="form-label">खरिदकर्ताको नाम</label>
                    <input type="text" id="buyer_name" class="form-control" placeholder="खरिदकर्ताको नाम" wire:model="form.buyer_name">
                </div>

                <div class="col-md-4">
                    <label for="address" class="form-label">ठेगाना</label>
                    <input type="text" id="address" class="form-control" placeholder="ठेगाना" wire:model="form.address">
                </div>

                <!-- Tax -->
                <div class="col-md-4">
                    <label for="tax" class="form-label">आयकर दर्ता नं</label>
                    <input type="text" id="tax" class="form-control" placeholder="आयकर दर्ता नं" wire:model="form.tax">
                </div>


                <div class="col-md-4">
                    <label for="vat" class="form-label">भ्याट नं</label>
                    <input type="text" id="vat" class="form-control" placeholder="भ्याट नं" wire:model="form.vat">
                </div>


                <div class="col-md-4">
                    <label for="lot" class="form-label">लट नं</label>
                    <input type="text" id="lot" class="form-control" placeholder="लट नं" wire:model="form.lot">
                </div>


                <div class="col-md-4">
                    <label for="phone" class="form-label">फोन नं</label>
                    <input type="text" id="phone" class="form-control" placeholder="फोन नं" wire:model="form.phone">
                </div>


                <div class="col-md-4">
                    <label for="email" class="form-label">इमेल</label>
                    <input type="email" id="email" class="form-control" placeholder="इमेल" wire:model="form.email">
                </div>


                <div class="col-md-4">
                    <label for="bid_office_id" class="form-label">निकायको नाम</label>
                    <select wire:model="form.bid_office_id" id="bid_office_id" class="form-select">
                        <option value="">निकायको नाम छान्नुहोस्</option>
                        @foreach($bidOffices as $office)
                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                        @endforeach
                    </select>
                </div>


                <fieldset class="col-md-12 mt-4">
                    <legend><strong>कागजातहरु</strong><small> (रसिद, टेण्डर फारम, नागरिकता, सूचिकृत, कर चुक्ता, उद्योगदर्ता प्रमाणपत्र, पाना नं)</small></legend>

                    <div class="d-flex justify-content-end mb-2">
                        <button type="button" class="btn btn-xs btn-outline-info" wire:click.prevent="fileArrayIncrement">
                            <i class="fas fa-plus-circle"></i> नयाँ थप्नुहोस्
                        </button>
                    </div>

                    <fieldset class="bg-light p-3 rounded">
                        <div id="documents">
                            @foreach ($form['files'] ?? [] as $key => $file)
                                <div class="row border-bottom mb-2">
                                    <!-- File Title -->
                                    <div class="col-md-5 mb-2">
                                        <label for="form.files.{{ $key }}.file_name" class="form-label">शीर्षक*</label>
                                        <input type="text" class="form-control @error('form.files.' . $key . '.file_name') is-invalid @enderror"
                                               wire:model="form.files.{{ $key }}.file_name" placeholder="शीर्षक">
                                        @error("form.files.$key.file_name")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- File Upload -->
                                    <div class="col-md-6 mb-2">
                                        <label for="form.files.{{ $key }}.file" class="form-label">डकुमेन्ट *</label>
                                        <input type="file" class="form-control @error('form.files.' . $key . '.file') is-invalid @enderror"
                                               wire:model="form.files.{{ $key }}.file">
                                        <div wire:loading wire:target="form.files.{{ $key }}.file">Uploading...</div>
                                        @error("form.files.$key.file")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Remove Button -->
                                    <div class="col-md-1 mb-2 d-flex align-items-end">
                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                                wire:click.prevent="fileArrayDecrement({{ $key }})">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                </fieldset>
            </div>


            <div class="mt-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>


        @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
