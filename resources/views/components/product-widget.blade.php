<div class="section-product">
    <div class="containers">
        <nav class="nav bg-white mb-2">
            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#home-tab-pane" aria-current="page"
                href="#">REKOMENDASI</a>
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" href="#">FLASH SALE</a>
        </nav>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <div class="product-wrapper">
                    @foreach ($products as $product)
                        @foreach ($product as $key => $item)
                            <div class="product-items">
                                <div class="item-wrapper">
                                    <div class="product-image">
                                        <img src="{{ $item->image }}" alt="">
                                    </div>
                                    <div class="product-info">
                                        <div>
                                            <div class="product-title mb-1">
                                                {{ $item->title }}
                                            </div>
                                            @if ($key == rand(0, count($product) - 1))
                                                <div class="product-discount">
                                                    <span>Diskon Rp. 5.000</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-price text-primary">
                                                Rp. {{ number_format($item->price * 1000) }}
                                            </div>
                                            <div class="product-sale text-secondary">
                                                {{ $item->rating->count }} Terjual
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action p-2 text-white text-center bg-primary">
                                        Lihat Produk
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                tabindex="0">
                <div class="product-wrapper">
                    <div class="product-items">
                        <div class="product-image">
                            <img src="https://cf.shopee.co.id/file/2f813ddb52cf5eedbe4f3c57cfbb7ddc" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                Air Jordan Low Black Toe
                            </div>
                            <div class="product-meta">
                                <div class="product-price text-primary">
                                    Rp. 250.000
                                </div>
                                <div class="product-sale">
                                    155 Terjual
                                </div>
                            </div>
                        </div>
                        <div class="product-action p-2 text-white text-center bg-primary">
                            Lihat Produk
                        </div>
                    </div>
                    <div class="product-items">
                        <div class="product-image">
                            <img src="https://cf.shopee.co.id/file/792c65ef7f922d2752900ae8b6985806" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                Air Jordan Low Black Toe
                            </div>
                            <div class="product-discount">
                                <span>Diskon Rp. 5.000</span>
                            </div>
                            <div class="product-meta">
                                <div class="product-price text-primary">
                                    Rp. 250.000
                                </div>
                                <div class="product-sale">
                                    155 Terjual
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-items">
                        <div class="product-image">
                            <img src="https://cf.shopee.co.id/file/792c65ef7f922d2752900ae8b6985806" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                Air Jordan Low Black Toe
                            </div>
                            <div class="product-meta">
                                <div class="product-price text-primary">
                                    Rp. 250.000
                                </div>
                                <div class="product-sale">
                                    155 Terjual
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-items">
                        <div class="product-image">
                            <img src="https://s4.bukalapak.com/img/40260677692/s-250-250/2c4a1e43_4560_4bd4_9c61_cb9f27869fa3.jpg"
                                alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                Air Jordan Low Black Toe
                            </div>
                            <div class="product-meta">
                                <div class="product-price text-primary">
                                    Rp. 250.000
                                </div>
                                <div class="product-sale">
                                    155 Terjual
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-items">
                        <div class="product-image">
                            <img src="https://cf.shopee.co.id/file/792c65ef7f922d2752900ae8b6985806" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                Air Jordan Low Black Toe
                            </div>
                            <div class="product-meta">
                                <div class="product-price text-primary">
                                    Rp. 250.000
                                </div>
                                <div class="product-sale">
                                    155 Terjual
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-items">
                        <div class="product-image">
                            <img src="https://cf.shopee.co.id/file/792c65ef7f922d2752900ae8b6985806" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                Air Jordan Low Black Toe
                            </div>
                            <div class="product-meta">
                                <div class="product-price text-primary">
                                    Rp. 250.000
                                </div>
                                <div class="product-sale">
                                    155 Terjual
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
