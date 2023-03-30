<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and
                                more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->

            <div class="container-fluid page-body-wrapper mt-5">
                


                <div class="container">
                    @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('message')}}
                  </div>
                @endif
                    <div class="card">
                        <div class="card-body bg-dark rounded">
                            <form action="{{'/upload_doctor'}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label>Doctor Name</label>
                                  <input type="text" class="form-control bg-light  text-dark" name="name" required>
                                </div>
                                <div class="form-group">
                                  <label>Phone</label>
                                  <input type="text" class="form-control bg-light  text-dark" name="phone" required>
                                </div>
        
                                <div class="form-group">
                                  <label class="">Speciality</label>
                                  <select class="form-control bg-light text-dark" name="speciality" required>
                                    <option>Skin</option>
                                    <option>Heart</option>
                                    <option>Eye</option>
                                    <option>Nose</option>
                                  </select>
                                </div>
        
                                <div class="form-group">
                                    <label>Room No.</label>
                                    <input type="text" class="form-control bg-light  text-dark" name="room" required>
                                </div>
        
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" class="form-control text-dark" name="image" required>
                                </div>
        
                                <input class="btn btn-success" type="submit" value="Add Doctor">
                            </form>
                        </div>
                    </div>
                </div>
            </div>











            <!-- container-scroller -->
            @include('admin.js')
</body>

</html>
