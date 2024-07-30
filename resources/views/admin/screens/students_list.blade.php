<!DOCTYPE html>
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
                      <div class="card card-default">
                        <div class="card-header">
                          <h2>Students </h2>

                        </div>
                        <div class="card-body">
                          <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                              <tr>
                                <th>Qalam ID</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Institution</th>
                                <th>Discipline</th>
                                <th>Scholarship Name</th>
                                <th>Province</th>
                                <th>City</th>
                                <th>Gender</th>
                                <th>Program</th>
                                <th>Degree</th>
                                <th>Year of Admission</th>
                                <th>Father Status</th>
                                <th>Father Profession</th>
                                <th>Monthly Income</th>
                                <th>Images</th>
                                <th>Update</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)
                                <tr>
                                    <td>{{$item->qalam_id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->father_name}}</td>
                                    <td>{{$item->institution}}</td>
                                    <td>{{$item->discipline}}</td>
                                    <td>{{$item->scholarship_name}}</td>
                                    <td>{{$item->province}}</td>
                                    <td>{{$item->city}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>{{$item->program}}</td>
                                    <td>{{$item->degree}}</td>
                                    <td>{{$item->year_of_admission}}</td>
                                    <td>{{$item->father_status}}</td>
                                    <td>{{$item->father_profession}}</td>
                                    <td>{{$item->monthly_income}}</td>
                                    <td>
                                        <!-- Display image if available -->
                                        @if ($item->images)
                                        <img src="{{ asset('students_images/' . $item->images) }}" alt="Student Image" style="max-width: 100px; max-height: 100px;">
                                        @else
                                        No Image Available
                                        @endif
                                    </td>
                                    {{-- <td>{{$item->statement_of_purpose}}</td> --}}
                                    <td>
                                        <a href="{{ url('students_edit', $item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                    </td>
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
