@extends('admin/master')
@section('websiteNamePos')
    class= "text-left"
@endsection
@section('search')
    <form>
        <div class="input-group">
            <input type="text" class="form-control search-input" placeholder=" Enter Id OF Customer">
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
                        <h3 class="text-center" style="font-weight: bold; color: white">Show Customer</h3>
                        <table class="table table-dark table-hover text-center">
                            <thead>
                            <tr class="text-muted">
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>password</th>
                                <th>Phone</th>



                            </tr>
                            </thead>

                            <tbody>
                            @for($i=0;$i<6;$i++)
                                <tr>
                                    <th>1</th>
                                    <td>Ali</td>
                                    <td>asd@gmail.com</td>
                                    <td>******</td>
                                    <td>01143164035</td>


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
