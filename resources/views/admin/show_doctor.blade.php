

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
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
            <div style="margin-top: 150px" class="card bg-light mb-5">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                          <tr>
                            <th>Doctor Name</th>
                            <th>Phone</th>
                            <th>Speciality</th>
                            <th>Room</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $doctor)
                            <tr>
                                <td>{{$doctor->name}}</td>
                                <td>{{$doctor->phone}}</td>
                                <td>{{$doctor->speciality}}</td>
                                <td>{{$doctor->room}}</td>
                                <td><img src="doctorimage/{{$doctor->image}}" ></td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="editdoctor/{{$doctor->id}}"><i class="mdi mdi-account-edit"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')" href="/deletedoctor/{{$doctor->id}}"><i class="mdi mdi-delete-forever"></i>Delete</a>
                                </td>
                            </tr>
                        @endforeach    
                        </tbody>
                      </table>
                </div>
            </div>

    <!-- container-scroller -->
    @include('admin.js')
  </body>
</html>