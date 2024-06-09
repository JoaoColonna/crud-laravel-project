<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times de Futebol</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2>Football Teams</h2>
        </div>
        <div class="col ">
            <a href="{{ route("times.create") }}" class="btn btn-primary float-md-right">Insert Team</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>League</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($times as $time)
            <tr>
                <td>{{ $time->id }}</td>
                <td>{{ $time->name }}</td>
                <td>{{ $time->league }}</td>
                <td>{{ $time->country }}</td>
                <td>
                    <a href="{{ route('times.edit', $time->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('times.delete', $time->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
