<!DOCTYPE html>
<html lang="en" dir="ltr">
    <title>Entire Degree </title>
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
                      <div class="card card-default">
                        <div class="card-header">
                          <h2>Entire Degree List</h2>

                        </div>
                        <div class="card-body">
                          <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Program</th>
                                    <th>Degree</th>
                                    <th>Seats</th>
                                    <th>Total Amount</th>
                                    <th>Donor Name</th>
                                    <th>Donor Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entiredegree as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->program}}</td>
                                            <td>{{$item->degree}}</td>
                                            <td>{{$item->seats}}</td>
                                            <td>{{$item->totalAmount}}</td>
                                            <td>{{$item->donor_name}}</td>
                                            <td>{{$item->donor_email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->payments_status}}</td>

                                        </tr>
                                @endforeach

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
