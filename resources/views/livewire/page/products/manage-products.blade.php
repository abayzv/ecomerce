<div>
    <x-data-table title="Products">
        @slot('action')
            <a href="/admin/product/add"><button class="btn btn-primary">Add Product</button></a>
        @endslot
        <thead>
            <tr>
                <th></th>
                <th>SKU</th>
                <th>Name</th>
                <th>Category</th>
                <th>Buy Price</th>
                <th>Sell Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Barcode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ Str::upper($item->sku) }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>Rp. {{ $item->getTotalPrice() }}</td>
                    <td>Rp. {{ number_format($item->sell_price) }}</td>
                    <td>{{ $item->stock() }}</td>
                    <td><img src="{{ asset('storage/' . $item->image_url) }}" alt="" width="50px"></td>
                    <td><img src="/barcode.php?text='{{ $item->barcode }}&codetype=code128&print=true&size=55"
                            width="70px" alt=""></td>
                    <td>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})"
                                style="margin-right: 5px">Delete</button>
                            <a href="/admin/product/edit/{{ $item->id }}"><button
                                    class="btn btn-sm btn-warning">Edit</button></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-data-table>
</div>
