<!DOCTYPE html>
<title>User Update</title>
<html lang="en" dir="ltr">

  <head>


 @include('admin.head')

<style>
    body, table, th, td {
    color: #000; /* Black color */
}
</style>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>
    <div class="wrapper">
      @include('admin.sidebar')
      <div class="page-wrapper">
        @include('admin.header')

        <div class="content-wrapper">
            <div class="content">
                    <!-- Top Statistics -->
                  <!-- Table Product -->
                  <div class="row">
                    <div class="col-12">

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                      <div class="card card-default">
                        <div class="card-header">
                          <h2>Update User</h2>

                        </div>
                        <div class="card-body">
                            <div class="card-body col-lg-8">
                                <form action="{{ url('update', $users->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="{{ $users->password }}" placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                        <label for="images">Image</label>
                                        <input type="file" class="form-control-file" id="images" name="images">
                                        @if ($users->images)
                                            <img src="{{ asset('users_images/' . $users->images) }}" alt="Image" style="width: 50px; height:50px; margin-top: 10px;">
                                        @else
                                            No Image
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

          </div>

        </div>


      </div>
    </div>

                    <!-- Card Offcanvas -->


                    @include('admin.script')
  </body>
</html>
