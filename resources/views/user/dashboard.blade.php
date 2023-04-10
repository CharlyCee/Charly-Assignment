<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style-dashboard.css')}}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Welcome, John Doe! You are logged in as a member of the broadcast site.
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Broadcast Channels</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/150" alt="Channel Thumbnail"
                                    class="img-thumbnail mb-2">
                                <p>Channel 1</p>
                            </div>
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/150" alt="Channel Thumbnail"
                                    class="img-thumbnail mb-2">
                                <p>Channel 2</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Latest Broadcasts</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/300x150" alt="Broadcast Thumbnail"
                                    class="img-thumbnail mb-2">
                                <p>Latest Broadcast 1</p>
                            </div>
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/300x150" alt="Broadcast Thumbnail"
                                    class="img-thumbnail mb-2">
                                <p>Latest Broadcast 2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>