<div class="section-category">
    <div class="containers">
       <div class="category-wrapper bg-white">
        <div class="category-header">
            Kategori
        </div>
        <div class="category-content">
            <ul class="d-flex">
                @foreach ($categories as $item)
                <li>
                    <div class="category-item">
                        <div class="category-image">
                            <img src="{{ asset('storage/' . $item->image_url) }}" width="100%" alt="">
                        </div>
                        <div class="category-title">
                            {{ $item->name }}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
       </div>
    </div>
</div>