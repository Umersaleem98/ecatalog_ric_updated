<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Users List</title>


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
                          <h2>Users List</h2>

                        </div>
                        <div class="card-body">
                          <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if ($item->images)
                                            {{-- <img src="{{ asset('images/'.$item->image) }}" alt="Image" style="width: 50px; height:50px;"> --}}
                                            <img src="{{ asset('users_images/' . $item->images) }}" alt="Image" style="width: 50px; height:50px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('delete', $item->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                            </tbody>
                          </table>

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
