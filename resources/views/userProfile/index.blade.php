@extends('userProfile/master')
@section('WebsiteNamePos')
    class= "text-right"
@endsection
@section('body')
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <h2 class="text-center" style="font-weight: bold; color: white">show Profile</h2>
                    <div class="container emp-profile bg-dark">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-img">
                                        <img src="{{asset("image\phone.png")}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h5 class="text-white">
                                            Kshiti Ghelani
                                        </h5>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 90px">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{route('edit')}}" class="profile-edit-btn">Edit Profile </a>
                                </div>
                            </div>
                            <div class="row col-12 justify-content-center">
                                <div class="col-4">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6 text-white">
                                                    <label>User Id</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Kshiti123</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-white">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Kshiti Ghelani</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-white">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>kshitighelani@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-white">
                                                    <label>Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>123 456 7890</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
