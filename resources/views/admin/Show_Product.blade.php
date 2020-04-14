@extends('admin/master')
@section('search')
    <form>
        <div class="input-group">
            <input type="text" class="form-control search-input" placeholder=" Enter Id OF product">
            <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
        </div>
    </form>
@endsection
@section('body')

    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="col-xl-12 col-12">
                        <h3 class="text-muted text-center mb-3">Show Product</h3>
                        <table class="table table-dark table-hover text-center">
                            <thead>
                            <tr class="text-muted">
                                <th>id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category id</th>
                                <th>quantity</th>
                                <th>Action</th>
                                <th>Action</th>

                            </tr>
                            </thead>

                            <tbody>
                            @for($i=0;$i<6;$i++)
                                <tr>
                                    <th>1</th>
                                    <td>Sumsung A10</td>
                                    <td>$2000</td>
                                    <td>Phone</td>
                                    <td>10</td>
                                    <td><a href="#"  class="btn btn-primary btn-sm">Delete</a></td>
                                    <td><a href="edit_product"  class="btn btn-primary btn-sm">Edit</a></td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
