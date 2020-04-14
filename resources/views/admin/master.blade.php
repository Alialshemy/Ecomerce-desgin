<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{asset('css\admin_style.css')}}>
    <link rel="stylesheet" href={{asset('css\app.css')}}>
    <link rel="stylesheet" href={{asset('css/templatemo-style.css')}}>
    <title> Admin</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light"  >
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top" style=" overflow-y: auto;" >
                    <div class="bottom-border pb-3">
                        <a href="#"><img src={{asset('image/ali.jpg')}} width="50" height="48" class="rounded-circle mr-3"></a>
                        <a href="#" class="text-white">Ali mohammed</a>
                    </div>
                    <ul class="navbar-nav flex-column mt-4">

                        <li class="nav-item"><a href="/admin" class="nav-link text-white p-3 mb-2 current"><i class="fa fa-home text-light fa-lg mr-3"></i>Home</a></li>
                        <li class="nav-item"><a href="/admin/show_customer" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-user text-light fa-lg mr-3"></i>Show Customer</a></li>
                        <li class="nav-item"><a href="/admin/show_category" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa fa-clipboard-list fa-lg mr-3"></i>Show Category</a></li>
                        <li class="nav-item"><a href="/admin/add_category" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-shopping-cart text-light fa-lg mr-3"></i>Add Category </a></li>
                        <li class="nav-item"><a href="/admin/edit_category" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-edit fa-lg mr-3"></i>Edit Category</a></li>
                        <li class="nav-item"><a href="/admin/add_product" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-shopping-cart text-light fa-lg mr-3"></i>Add Product</a></li>
                        <li class="nav-item"><a href="/admin/edit_product" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-edit fa-lg mr-3"></i>Edit Product</a></li>

                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 @yield('websiteNamePos') style="font-weight: bold; color: white">My Website</h4>
                        </div>
                        <div class="col-md-5">
                            @yield('search')
                        </div>
                        <div class="col-md-1">
                            <ul class="navbar-nav">
                                <li class="nav-item ml-md-auto"><a href="{{route('login')}}" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<!-- modal -->
<div class="modal fade" id="sign-out">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Want to leave?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Press logout to leave
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
            </div>
        </div>
    </div>
</div>
<!-- end of modal -->

@yield('body')


</body>
</html>






