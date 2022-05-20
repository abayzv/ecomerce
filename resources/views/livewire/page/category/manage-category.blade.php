<div>
    <x-data-table title="Category">
        @slot('action')
            <a href="/admin/category/add"><button class="btn btn-primary">Add Category</button></a>
        @endslot
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ asset('storage/' . $item->image_url) }}" alt="" width="50px"></td>
                    <td>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})"
                                style="margin-right: 5px">Delete</button>
                            <a href="/admin/category/edit/{{ $item->id }}"><button
                                    class="btn btn-sm btn-warning">Edit</button></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-data-table>
</div>
