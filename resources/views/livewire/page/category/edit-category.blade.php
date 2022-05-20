<div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h4 class="card-title">Edit Category</h4>
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
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header border-bottom">
                    Category Image
                </div>
                <div class="card-body text-center">
                    <img class="mt-1" src="{{ asset('storage/' . $category->image_url) }}" alt=""
                        width="50%">
                </div>
            </div>
        </div>
    </div>
</div>
