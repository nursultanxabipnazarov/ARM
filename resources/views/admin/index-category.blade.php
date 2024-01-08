<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
 @include('admin.css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     @include('admin.navbar')
     

     @include('admin.saidbar')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-10">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <?php $i = 0 ;?>
                    @foreach ($categories as $category )
                           <?php $i++ ;?>
                    <tr>
                        <td> {{$i}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->desc}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>
                            <div class="badge badge-success">Active</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                    </tr>
                    @endforeach
                    
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
             
        </section>
     
      </div>
     
     @include('admin.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  @include('admin.js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>