@extends('admin/master')
@section('websiteNamePos')
    class= "text-left"
@endsection
@section('search')
    <form>
        <div class="input-group">
            <input type="text" class="form-control search-input" placeholder=" Enter Id OF Category">
            <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
        </div>
    </form>
@endsection
@section('body')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <h2 class="text-center" style="font-weight: bold; color: white">Categories</h2>
                    <div class="row pt-md-5 mt-md-3 mb-5">
                        @for($i=0;$i<8;$i++)
                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                            <div class="text-right text-secondary">
                                                <h5>Phone</h5>
                                                <h3>id:1</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span><a href="show_product">Show Product</a> </span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

