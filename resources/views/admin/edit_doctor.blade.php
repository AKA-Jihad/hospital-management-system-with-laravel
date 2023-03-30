

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
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
        <div class="conatiner-fluid page-body-wrapper">
          
          <div class="container mt-5">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('message')}}
                  </div>
                @endif
            <div class="card py-4">
              <div class="card-body bg-dark rounded">
                  <form action="/update_doctor/{{$data->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form -group">
                        <label>Doctor Name</label>
                        <input type="text" value="{{$data->name}}" class="form-control bg-light  text-dark" name="name" required>
                      </div>
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" value="{{$data->phone}}" class="form-control bg-light  text-dark" name="phone" required>
                      </div>

                      <div class="form-group">
                          <label>Room No.</label>
                          <input type="text" value="{{$data->room}}" class="form-control bg-light  text-dark" name="room" required>
                      </div>

                      <div class="form-group">
                          <label>Photo</label>
                          <img class="w-25 pb-3" src="doctorimage/{{$data->image}}" alt="">
                          <input type="file" class="form-control text-dark" name="file" required>
                      </div>

                      <input class="btn btn-success" type="submit" value="Update Doctor Information">
                  </form>
              </div>
          </div>
          </div>
        </div>
    <!-- container-scroller -->
    @include('admin.js')
  </body>
</html>