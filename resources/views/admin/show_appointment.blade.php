

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
        

        <div class="container-fluid">

            {{-- <div class="container"> --}}
                <div style="margin-top: 150px" class="card bg-light">
                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                              <tr>
                                <th>Patient Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Appointed Doctor</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $appoint)
                                <tr>
                                    <td>{{$appoint->name}}</td>
                                    <td>{{$appoint->email}}</td>
                                    <td>{{$appoint->phone}}</td>
                                    <td>{{$appoint->doctor}}</td>
                                    <td>{{$appoint->date}}</td>
                                    <td>
                                        @if ($appoint->status == 'Approved')
                                        <span class="badge badge-success">{{$appoint->status}}</span>
                                        @else
                                        <span class="badge badge-danger">{{$appoint->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="/approved/{{$appoint->id}}">Approved</a>
                                        <a class="btn btn-sm btn-danger" href="/canceled/{{$appoint->id}}">Cancel</a>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>


    <!-- container-scroller -->
    @include('admin.js')
  </body>
</html>