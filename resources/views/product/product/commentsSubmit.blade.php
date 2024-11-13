<div class="rating-and-review-wrapper bg-white py-3 mb-3 dir-rtl">
    <div class="container">
        <h6>نظرات</h6>
        <div class="rating-review-content">
            <ul class="ps-0">
                @if ($product->comments->isEmpty())
                    <p>دیدگاهی وجود ندارد</p>
                @endif
                <p>با ثبت دیدگاه خود ،در خرید این محصول به دیگران کمک کنید!</p>
                <!-- Single User Review -->
                @foreach ($product->comments as $item)
                    <li class="single-user-review d-flex">
                        <div class="user-thumbnail"><img src="{{ asset('img/bg-img/7.jpg') }}" alt=""></div>
                        <div class="rating-comment">
                            <div class="rating">
                                @for ($i = 0 ; $i < $item->rating ; $i++)
                                    <i class="ti ti-star-filled"></i>
                                @endfor
                            </div>
                            <p class="comment mb-0">{{ $item->comment }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

{{-- ****************************** --}}

<div class="ratings-submit-form bg-white py-3 dir-rtl">
    <div class="container">
        <h6>دیدگاه خود را به اشتراک بگذارید</h6>
        @if ($errors->any())
            <div class="form-text text-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>-{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comment.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="stars mb-3">
                <input class="star-1" value="1" type="radio" name="rating" id="star1">
                <label class="star-1" for="star1"></label>
                <input class="star-2" value="2" type="radio" name="rating" id="star2">
                <label class="star-2" for="star2"></label>
                <input class="star-3" value="3" type="radio" name="rating" id="star3">
                <label class="star-3" for="star3"></label>
                <input class="star-4" value="4" type="radio" name="rating" id="star4">
                <label class="star-4" for="star4"></label>
                <input class="star-5" value="5" type="radio" name="rating" id="star5">
                <label class="star-5" for="star5"></label><span></span>
            </div>
            <textarea class="form-control mb-3" id="comments" name="comment" cols="30" rows="10" data-max-length="200"
                placeholder="دیدگاه خود را اینجا بنویسید..."></textarea>
            <button class="btn btn-primary" type="submit">ارسال دیدگاه</button>
        </form>
    </div>
</div>
