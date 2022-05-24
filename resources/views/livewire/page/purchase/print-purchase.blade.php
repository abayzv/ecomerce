<div class="invoice-print p-3">
    <div class="invoice-header d-flex justify-content-between flex-md-row flex-column pb-2">
        <div>
            <div class="d-flex my-1">
                <img src="https://wa.mahesadev.com/app/assets/images/mahewa.png" width="30px" height="30px" alt="">
                <h3 class="text-primary fw-bold ms-1">{{ env('APP_NAME') }}</h3>
            </div>
            <p class="mb-25">Jalan Fatmawati No 837H</p>
            <p class="mb-25">Pedurungan Kidul, Kec. Pedurungan</p>
            <p class="mb-0">Kota Semarang, Jawa Tengah 50272, +6285-25962-2409</p>
        </div>
        <div class="mt-md-0 mt-2">
            <h4 class="fw-bold text-end mb-1">INVOICE #{{ $purchase->transaction_number }}</h4>
            <div class="invoice-date-wrapper mb-50">
                <span class="invoice-date-title">Date Issued:</span>
                <span class="fw-bold"> {{ $purchase->created_at->format('Y-m-d') }}</span>
            </div>
            <div class="invoice-date-wrapper mb-50">
                <span class="invoice-date-title">Due Date:</span>
                <span class="fw-bold">{{ $purchase->due_date }}</span>
            </div>
            <div class="invoice-date-wrapper">
                <span class="invoice-date-title">Status:</span>
                <span class="fw-bold">{{ $purchase->status }}</span>
            </div>
        </div>
    </div>

    <hr class="my-2" />

    <div class="row pb-2">
        <div class="col-sm-6">
            <h6 class="mb-1">Order From:</h6>
            <p class="mb-25"> {{ $purchase->vendor->name }}</p>
            <p class="mb-25">{{ $purchase->vendor->phone }}</p>
        </div>
    </div>

    <div class="table-responsive mt-2">
        <table class="table">
            <thead>
                <tr>
                    <th class="py-1">Item</th>
                    <th class="py-1">Price</th>
                    <th class="py-1">Quantity</th>
                    <th class="py-1">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchase->item as $key => $item)
                    {{-- if last item key --}}
                    @if ($key == count($purchase->item) - 1)
                        <tr class="border-bottom">
                            <td class="py-1">
                                <p class="card-text fw-bold mb-25">{{ $item->product->name }}</p>
                                {{-- <p class="card-text text-nowrap">
                                    Developed a full stack native app using React Native, Bootstrap &amp; Python
                                </p> --}}
                            </td>
                            <td class="py-1">
                                <span class="fw-bold">Rp. {{ number_format($item->price) }}</span>
                            </td>
                            <td class="py-1">
                                <span class="fw-bold">{{ $item->quantity }}</span>
                            </td>
                            <td class="py-1">
                                <span class="fw-bold">Rp.
                                    {{ number_format($item->price * $item->quantity) }}</span>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td class="py-1">
                                <p class="card-text fw-bold mb-25">{{ $item->product->name }}</p>
                                {{-- <p class="card-text text-nowrap">
                                    Developed a full stack native app using React Native, Bootstrap &amp; Python
                                </p> --}}
                            </td>
                            <td class="py-1">
                                <span class="fw-bold">Rp. {{ number_format($item->price) }}</span>
                            </td>
                            <td class="py-1">
                                <span class="fw-bold">{{ $item->quantity }}</span>
                            </td>
                            <td class="py-1">
                                <span class="fw-bold">Rp.
                                    {{ number_format($item->price * $item->quantity) }}</span>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="invoice-header d-flex justify-content-between flex-md-row flex-column pb-2">
        <div>
        </div>
        <div class="mt-md-0 mt-2">
            <div class="invoice-total-wrapper">
                <div class="invoice-total-item">
                    <p class="invoice-total-title">Sub:</p>
                    <p class="invoice-total-amount">Rp. {{ number_format($purchase->totalPrice()) }}</p>
                </div>
                <div class="invoice-total-item">
                    <p class="invoice-total-title">Disc:</p>
                    <p class="invoice-total-amount">Rp. {{ number_format($purchase->discount()) }}</p>
                </div>
                <hr class="my-50" />
                <div class="invoice-total-item">
                    <p class="invoice-total-title">Total:</p>
                    <p class="invoice-total-amount">
                        Rp. {{ number_format($purchase->totalPrice() - $purchase->discount()) }}</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-2" />

    <div class="row">
        <div class="col-12">
            <span class="fw-bold">Note:</span>
            <span>Make sure the goods received are in good condition. Thank You!</span>
        </div>
    </div>
</div>
