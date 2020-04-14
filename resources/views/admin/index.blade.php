@extends('admin/master')
@section('websiteNamePos')
    class= "text-right"
@endsection
@section('body')
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <h2 class="text-center" style="font-weight: bold; color: white">Recent Payments</h2>
                    <div class="col-xl-12 col-12">
                        <table class="table table-dark table-hover text-center">
                            <thead>
                            <tr class="text-muted">
                                <th>id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Ali</td>
                                <td>$2000</td>
                                <td>25/05/2018</td>
                                <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>mohammed</td>
                                <td>$2000</td>
                                <td>25/05/2018</td>
                                <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Mohmoud</td>
                                <td>$2000</td>
                                <td>25/05/2018</td>
                                <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Abd Alaal</td>
                                <td>$2000</td>
                                <td>25/05/2018</td>
                                <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>Ahmmed</td>
                                <td>$2000</td>
                                <td>25/05/2018</td>
                                <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                            </tr>
                            <tr>
                                <th>6</th>
                                <td>mohammed</td>
                                <td>$2000</td>
                                <td>25/05/2018</td>
                                <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
