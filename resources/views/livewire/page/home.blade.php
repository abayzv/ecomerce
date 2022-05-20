<div>
    <div class="row">
        <div class="col-lg-3">
            <x-card-widget>
                @slot('title', 'Products')
                @slot('value')
                    {{ $product_count }}
                @endslot
                @slot('icon', 'bi bi-box')
                @slot('color', 'success')
            </x-card-widget>
        </div>
        <div class="col-lg-3">
            <x-card-widget>
                @slot('title', 'Customer')
                @slot('value', '12')
                @slot('icon', 'bi bi-people')
                @slot('color', 'info')
            </x-card-widget>
        </div>
        <div class="col-lg-3">
            <x-card-widget>
                @slot('title', 'Sales')
                @slot('value', '15')
                @slot('icon', 'bi bi-bar-chart')
                @slot('color', 'danger')
            </x-card-widget>
        </div>
        <div class="col-lg-3">
            <x-card-widget>
                @slot('title', 'Revenue')
                @slot('value', 'Rp. 312,000')
                @slot('icon', 'bi bi-currency-dollar')
                @slot('color', 'warning')
            </x-card-widget>
        </div>
    </div>
</div>
