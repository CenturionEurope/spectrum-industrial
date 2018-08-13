<div class="container">
    <div class="row">
        @foreach($Api->Brands as $brand)
        <div class="col-lg-2">
            <div class="brand-image">
                <img src="{{$brand->image}}" alt="{{$brand->name}}">
            </div>
        </div>
        @endforeach
    </div>
</div>