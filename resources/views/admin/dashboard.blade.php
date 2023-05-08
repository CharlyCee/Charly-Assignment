<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style-dashboard.css">
</head>

<body>
    <div class="container-fliud">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="h5">
                                Welcome {{Auth::guard('admin')->user()->name}}
                            </div>
                            <div class="h6">
                                <a href="{{route('admin.logout')}}" class="btn btn-sm btn-primary"> Log Out</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        Welcome, You are logged in as an Administrator.
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Overview</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 border shadow text-center p-5">
                                <p>Number of Users</p>
                                <h4 class="text-success">{{count($users)}}</h4>
                                <a href="{{route('admin.users')}}">View All</a>
                            </div>
                            <div class="col-md-6 border shadow text-center p-5">
                                <p>Number of Adminstrators</p>
                                <h4 class="text-success">{{count($admins)}}</h4>
                                <a href="">View All</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card mt-4">
                    <div class="card-header">Latest Broadcasts</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/back 3.png" alt="Broadcast Thumbnail" class="img-thumbnail mb-2">
                                <p>Latest Broadcast 1</p>
                            </div>
                            <div class="col-md-6">
                                <img src="images/logoolympic.png" alt="Broadcast Thumbnail" class="img-thumbnail mb-2">
                                <p>Latest Broadcast 2</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
