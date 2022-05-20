<div>
    <x-alert></x-alert>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h4 class="card-title">Add Category</h4>
                </div>
                <div class="card-datatable p-2">
                    <form wire:submit.prevent="save">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Category Name</label>
                                <input type="text" wire:model.defer="category.name" class="form-control mb-1">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Image</label>
                                <input type="file" wire:model="photo" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-success w-100 mt-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom">
                    Lattest Categories
                </div>
                <div class="card-body">
                    <table class="table mt-1">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td><img src="{{ asset('storage/' . $item->image_url) }}" alt="" width="50px">
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
