<div>
    <div wire:ignore>
        <input wire:model="ottPlatform" type="text" list="product-list" class="form-control">
        <datalist id="product-list">
            @foreach ($products as $product)
                <option value="{{ $product->name }}">
            @endforeach
        </datalist>
        {{ $ottPlatform }}
    </div>
</div>
