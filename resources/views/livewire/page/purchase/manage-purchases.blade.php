<div>
    <x-data-table title="Purchase Order">
        @slot('action')
            <a href="/admin/purchase/add"><button class="btn btn-primary">New Purchase</button></a>
        @endslot
        <thead>
            <tr>
                <th>Transaction Number</th>
                <th>Vendor Name</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchases as $key => $item)
                <tr>
                    <td><a href="/admin/purchase/{{ $item->id }}"><span
                                class="badge bg-success">{{ $item->transaction_number }}</span></a></td>
                    <td>{{ $item->vendor->name }}</td>
                    <td>
                        @if ($item->status == 'open')
                            <span class="badge bg-warning">Open</span>
                        @elseif($item->status == 'paid off')
                            <span class="badge bg-success">Paid Off</span>
                        @endif
                    </td>
                    <td>{{ $item->due_date }}</td>
                    <td>Rp. {{ number_format($item->totalPrice() - $item->discount()) }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-data-table>
</div>
