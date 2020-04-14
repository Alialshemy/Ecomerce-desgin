@extends('userProfile/master')
@section('websiteNamePos')
    class= "text-right"
@endsection
@section('body')
<section>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="col-md-9">
                    <div class="card bg-dark">
                        <div class="card-body bg-dark">
                            <div class="row">
                                <div class="col-md-12 text-white">
                                    <h4>Your Profile</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <form>
                                        <div class="col-md-5">
                                            <div class="profile-img">
                                                <img src="{{asset("image\phone.png")}}"/>
                                                <div class="file btn btn-lg btn-primary">
                                                    Change Photo
                                                    <input type="file" name="file"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">User Name*</label>
                                            <div class="col-8">
                                                <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-4 col-form-label">First Name</label>
                                            <div class="col-8">
                                                <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lastname" class="col-4 col-form-label">Last Name</label>
                                            <div class="col-8">
                                                <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Nick Name*</label>
                                            <div class="col-8">
                                                <input id="text" name="text" placeholder="Nick Name" class="form-control here" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-4 col-form-label">Email*</label>
                                            <div class="col-8">
                                                <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="newpass" class="col-4 col-form-label">check Password</label>
                                            <div class="col-8">
                                                <input id="newpass" name="newpass" placeholder="check Password" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</section>
@endsection
