@extends('user/master')
@section('body')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <h2 class="text-center" style="font-weight: bold; color: white">Categories</h2>
                    <div class="row pt-md-5 mt-md-3 mb-5">

                        <div class="container">
                            <div class="row">
                                @for($i=0;$i<4;$i++)
                                    <div class="col-md-3 col-sm-6">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img class="pic-1" src="{{asset('image\img-1.jpg')}}">
                                                    <img class="pic-2" src="{{asset('image\img-1.jpg')}}">
                                                </a>
                                                <ul class="social">
                                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-tip="Buy Now"><i class="fa fa-shopping-cart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                                <p class="product-content">Description of This close</p>
                                                <div class="price">$21.00</div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                                    @for($i=0;$i<4;$i++)
                                        <div class="col-md-3 col-sm-6">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" src="{{asset('image\computer.jpg')}}">
                                                        <img class="pic-2" src="{{asset('image\computer.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-tip="Buy Now"><i class="fa fa-shopping-cart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Labtop</a></h3>
                                                    <p class="product-content">Dell laptop cor i7</p>
                                                    <div class="price">$200.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                    @for($i=0;$i<4;$i++)
                                        <div class="col-md-3 col-sm-6">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" src="{{asset('image\phone.png')}}">
                                                        <img class="pic-2" src="{{asset('image\phone.png')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-tip="Buy Now"><i class="fa fa-shopping-cart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">phone</a></h3>
                                                    <p class="product-content">Apple phone</p>
                                                    <div class="price">$200.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
