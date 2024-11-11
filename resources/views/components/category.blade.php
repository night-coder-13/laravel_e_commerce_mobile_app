<!-- Catagory Card -->
<div class="col-3">
    <div class="card catagory-card">
        <div class="card-body px-2">
            <a href="{{ route('category' , ['category' => $item->id]) }}">
                <img src="{{ ImageUrl('categories/' . $item->primary_image) }}" alt="">
                <span>{{ $item->name }}</span>
            </a>
        </div>
    </div>
</div>
