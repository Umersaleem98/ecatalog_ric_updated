<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Create User</title>
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
                    <!-- User Form -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h2>Add User</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('store_user') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="images">Image:</label>
                                            <input type="file" class="form-control-file" id="images" name="images">
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

    @include('admin.script')
</body>
</html>
