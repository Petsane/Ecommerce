<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @foreach($data as $product)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img height="300" width="150" src="{{asset('/productimage/'.$product->image)}}" alt="Product image"></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>{{$product->title}}</h4>
                        </a>
                        <h6>R {{$product->price}}</h6>
                        <p>{{$product->description}}</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (32)</span>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="d-flex justify-content-center"> 
                {!! $data->links() !!}
            </div>
        </div>
    </div>
</div>