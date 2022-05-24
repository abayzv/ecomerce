<div class="row invoice-preview">
    <div class="col-xl-9 col-md-8 col-12">
        <div class="card invoice-preview-card">
            <div class="card-body invoice-padding pb-0">
                <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                    <div>
                        <div class="logo-wrapper">
                            <img src="https://wa.mahesadev.com/app/assets/images/mahewa.png" width="40px" alt="">
                            <h3 class="text-dark invoice-logo">{{ env('APP_NAME') }}</h3>
                        </div>
                        <p class="card-text mb-25">Jalan Fatmawati No 837H</p>
                        <p class="card-text mb-25">Pedurungan Kidul, Kec. Pedurungan</p>
                        <p class="card-text mb-0">Kota Semarang, Jawa Tengah 50272, +6285-25962-2409</p>
                    </div>
                    <div class="mt-md-0 mt-2">
                        <h4 class="invoice-title">
                            Invoice
                            <span class="invoice-number">#{{ $invoice_id }}</span>
                        </h4>
                        <div class="invoice-date-wrapper">
                            <p class="invoice-date-title">Date Issued:</p>
                            <p class="invoice-date">{{ $date }}</p>
                        </div>
                        <div class="invoice-date-wrapper">
                            <p class="invoice-date-title">Due Date:</p>
                            <p class="invoice-date">{{ $due_date }}</p>
                        </div>
                    </div>
                </div>
                <!-- Header ends -->
            </div>

            <hr class="invoice-spacing">

            <!-- Address and Contact starts -->
            <div class="card-body invoice-padding pt-0">
                <div class="row invoice-spacing">
                    <div class="col-xl-8 p-0">
                        <h6 class="mb-2">{{ $title }}</h6>
                        <h6 class="mb-25">{{ $vendor_name }}</h6>
                        <p class="card-text mb-25">{{ $vendor_phone }}</p>
                    </div>
                    <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                        <h6 class="mb-2">Payment Details:</h6>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pe-1">Status:</td>
                                    <td><span class="fw-bold">{{ $invoice_status }}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Address and Contact ends -->

            <!-- Invoice Description starts -->
            {{ $slot }}

            <div class="card-body invoice-padding pb-0">
                <div class="row invoice-sales-total-wrapper">
                    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                        {{-- <p class="card-text mb-0">
                            <span class="fw-bold">Salesperson:</span> <span class="ms-75">Alfie
                                Solomons</span>
                        </p> --}}
                    </div>
                    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                        <div class="invoice-total-wrapper">
                            <div class="invoice-total-item">
                                <p class="invoice-total-title">Sub:</p>
                                <p class="invoice-total-amount">Rp. {{ $sub_total }}</p>
                            </div>
                            <div class="invoice-total-item">
                                <p class="invoice-total-title">Discount:</p>
                                <p class="invoice-total-amount">Rp. {{ $discount }}</p>
                            </div>
                            <hr class="my-50">
                            <div class="invoice-total-item">
                                <p class="invoice-total-title">Total:</p>
                                <p class="invoice-total-amount">Rp. {{ $total_price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invoice Description ends -->

            <hr class="invoice-spacing">

            <!-- Invoice Note starts -->
            <div class="card-body invoice-padding pt-0">
                <div class="row">
                    <div class="col-12">
                        <span class="fw-bold">Note:</span>
                        <span>Make sure the goods received are in good condition. Thank You!</span>
                    </div>
                </div>
            </div>
            <!-- Invoice Note ends -->
        </div>
    </div>
    <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary w-100 mb-75 waves-effect waves-float waves-light" data-bs-toggle="modal"
                    data-bs-target="#send-invoice-sidebar">
                    Return Order
                </button>
                <a class="btn btn-outline-secondary w-100 mb-75 waves-effect"
                    href="/admin/purchase/print/{{ $purchase_id }}" target="_blank"> Print </a>
                <button class="btn btn-success w-100 waves-effect waves-float waves-light" data-bs-toggle="modal"
                    data-bs-target="#add-payment-sidebar">
                    Complete Order
                </button>
            </div>
        </div>
    </div>
</div>
