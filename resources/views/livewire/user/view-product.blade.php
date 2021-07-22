<div>
    <div style="height: 80vh;marin-bottom:100px;">
        <img src="{{ asset('assets/images/products') }}/{{ $prod->image }}" alt="{{ $prod->name }}"
            style="height: 500px;width:100vw;object-fit:cover; position:absolute; display:inline-block;">
        <div
            style="position: relative; top:200px; margin:auto; padding:20px; text-align:center; background:	rgb(105,105,105);opacity: 0.7; width:400px;height:auto; ">
            <h2 style="color: white">{{ $prod->name }}</h2>

        </div>
    </div>
    <div style="display: flex; width:90vw; margin :auto;">
        <div style="width: 45vw;">
            <img src="{{ asset('assets/images/products') }}/{{ $prod->image }}" alt="{{ $prod->name }}"
                style="height: 400px; width:400px;" />


        </div>
        <div style="width: 45vw;">
            <br>
            <h2 style="color: brown">Product Details
            </h2>
            <p><b>Seller's Name:</b> {{ $prod->user->name }}</p>
            <p><b>Seller's Tel:</b> <span style="color: blue">{{ $prod->user->tel }}</span> </p>
            <p><b>Product Name:</b> <span style="color: blue">{{ $prod->name }}</span> </p>
            <p><b>Description:</b> <span style="color: blue">{{ $prod->Sshort_description }}</span> </p>
            <p><b>Price:</b>ksh <span style="color: blue"> {{ $prod->regular_price }} </span> </p>

            <p><b>Product category</b> <span style="color: blue">{{ $prod->category->name }}</span> </p>
            <h2 style="color: brown">More info</h2>
            <p>{{ $prod->details }}</p>


        </div>
    </div>
    <div class="featured-rooms-center">
        @foreach ($related as $re)
            <article class="room">
                <div class="img-container">
                    <img src="{{ asset('assets/images/products') }}/{{ $re->image }}" alt="{{ $re->name }}"
                        style="height: 200px; width:100%; object-fit:cover; " />
                    <div class="price-top">
                        <h6>ksh {{ $re->price }}</h6>

                    </div>
                    <a href="{{ route('product.details', ['id' => $re->id]) }}" class="btn-primary room-link">
                        details
                    </a>
                </div>
                <p class="room-info">{{ $re->name }}</p>


            </article>
        @endforeach


    </div>
</div>
