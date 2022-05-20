<div>
    <x-alert></x-alert>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h4 class="card-title">Add Products</h4>
                </div>
                <div class="card-datatable p-2">
                    <form wire:submit.prevent="save">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">SKU</label>
                                <input type="text" wire:model.defer="product.sku" class="form-control mb-1">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Category</label>
                                <select class="form-select" wire:model.defer="product.category_id">
                                    <x-category-select></x-category-select>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Nama Produk</label>
                                <input type="text" wire:model.defer="product.name" class="form-control mb-1">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Buy Price</label>
                                <input type="text" wire:model.defer="product.buy_price" class="form-control mb-1">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Sell Price</label>
                                <input type="text" wire:model.defer="product.sell_price" class="form-control mb-1">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Barcode</label>
                                <div class="input-group mb-1">
                                    <input type="text" wire:model.defer="product.barcode" class="form-control"
                                        readonly>
                                    <button class="btn btn-outline-secondary"
                                        wire:click.prevent="generate">Generate</button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Description</label>
                                <textarea name="" id="" cols="30" rows="10" wire:model.defer="product.description" class="form-control mb-1"></textarea>
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
                    Lattest Products
                </div>
                <div class="card-body">
                    <table class="table mt-1">
                        <thead>
                            <tr>
                                <th>Barcode</th>
                                <th>Name</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td><img src="/barcode.php?text='{{ $product->barcode }}&codetype=code128&print=true&size=55"
                                            width="70px" alt=""></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
