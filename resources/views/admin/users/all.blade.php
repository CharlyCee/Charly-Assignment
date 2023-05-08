<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
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
                    <div class="card-header">All Users</div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                        <div class="card-body">
                            <table class="table table-success table-striped-columns">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Sport</th>
                                        <th>Country</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->gender}}</td>
                                            <td>{{$user->sport}}</td>
                                            <td>{{$user->country}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button onclick="resetpass(value='{{$user->id}}')" class="btn btn-primary">Reset Password</button>
                                                    &nbsp;
                                                    <button onclick="deluser(value='{{$user->id}}')" class="btn btn-danger"> Delete User</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center"> Sorry No Registered Users</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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
    <script>
        function resetpass(value) {
            if (window.confirm('Are you sure?'))
            {
                window.location = "{{url('admin/users-reset')}}/"+value;
            }
            else
            {
                // Do Nothing
            }

         }

        function deluser(value) {
            if (window.confirm('Are you sure?'))
            {
                window.location = "{{url('admin/users-delete')}}/"+value;
            }
            else
            {
                // Do Nothing
            }

         }
    </script>
</body>

</html>
