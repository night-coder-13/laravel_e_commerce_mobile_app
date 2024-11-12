<div class="selection-panel bg-white mb-3 py-3">
    @if ($colorsWithoutSize->isEmpty())
        <div class="container d-flex align-items-center justify-content-between">

            <!-- Choose Color-->
            <div class="choose-color-wrapper">
                <p class="mb-1 font-weight-bold">رنگ</p>
                <div class="choose-color-radio d-flex align-items-center">
                    <!-- Single Radio Input-->

                    @foreach ($sizes as $key => $item)
                        <div id="{{ $key }}" class="box-color-size">
                            @foreach ($item as $color)
                                <div class="form-check mb-0 me-2">
                                    <input class="form-check-input" id="color{{ $loop->index }}" type="radio"
                                        name="color" value="{{ $color }}">
                                    <label class="form-check-label"
                                        for="color{{ $loop->index }}">{{ $color }}</label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <div class="mess-color-size">
                        <p>لطفا یک سایز انتخاب کنید</p>
                    </div>

                </div>
            </div>
            <!-- Choose Size-->
            <div class="choose-size-wrapper text-end">
                <p class="mb-1 font-weight-bold">سایز</p>
                <div class="choose-size-radio d-flex align-items-center">
                    <!-- Single Radio Input-->
                    {{-- {{ dd($product->sizes) }} --}}
                    @foreach ($sizes as $key => $item)
                        <div class="form-check mb-0 me-2">
                            <input class="form-check-input" id="size{{ $key }}" type="radio" name="size"
                                value="{{ $key }}" >
                            <label class="form-check-label" for="size{{ $key }}">{{ $key }}</label>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    @else
        <div class="container d-flex justify-content-end">
            <div class="choose-size-wrapper text-end">
                <p class="mb-1 font-weight-bold">رنگ</p>
                <div class="choose-size-radio d-flex align-items-center">
                    <!-- Single Radio Input-->
                    @foreach ($colorsWithoutSize as $color)
                        <div class="form-check mb-0 me-2">
                            <input class="form-check-input" id="size{{ $color }}" type="radio" name="color"
                                value="{{ $color }}">
                            <label class="form-check-label" for="size{{ $color }}">{{ $color }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif


</div>
</div>
