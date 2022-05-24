<x-invoice>
    @slot('title')
        Order From :
    @endslot
    @slot('purchase_id')
        {{ $purchase->id }}
    @endslot
    @slot('invoice_id')
        {{ $purchase->transaction_number }}
    @endslot
    @slot('date')
        {{ $purchase->created_at->format('Y-m-d') }}
    @endslot
    @slot('due_date')
        {{ $purchase->due_date }}
    @endslot
    @slot('vendor_name')
        {{ $purchase->vendor->name }}
    @endslot
    @slot('vendor_phone')
        {{ $purchase->vendor->phone }}
    @endslot
    @slot('invoice_status')
        {{ $purchase->status }}
    @endslot
    <div class="table-responsive">
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
    @slot('sub_total')
        {{ number_format($purchase->totalPrice()) }}
    @endslot
    @slot('total_price')
        {{ number_format($purchase->totalPrice() - $purchase->discount()) }}
    @endslot
    @slot('discount')
        {{ number_format($purchase->discount()) }}
    @endslot
</x-invoice>
