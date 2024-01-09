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
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Add</h4>
                  </div>
                  <form action="{{route('storeBook')}}" method="post">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category )
                                
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                            
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Author</label>
                        <select name="author_id" class="form-control">
                            @foreach ($authors as $author )
                                
                            <option value="{{$author->id}}" >{{$author->name}}</option>
                            
                            @endforeach
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Book name</label>
                      <input type="text" name="name" placeholder="Book name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >ISBN</label>
                      <input type="text" name="ISBN" placeholder="ISBN" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >Published_year</label>
                        
                      <input type="date" name="published_year" placeholder="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >Copy Count</label>
                      <input type="text" name="copy_count" placeholder="count " class="form-control">
                    </div>

                    
                  
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
               <button class="btn btn-primary "><input type="submit" value="SAVE"></button>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div>
     
     @include('admin.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  @include('admin.js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>