<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Team Form Delete</title>
</head>
<body>
    <div class="container mt-3">
        <p class="h2">Delete Team</p>
        <form action="{{ route("times.destroy", $time->id)}}" class="form" method="post">
            @csrf
            @method('DELETE')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $time->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="league" class="form-label">League:</label>
                <input type="text" class="form-control" name="league" id="league" value="{{ $time->league }}" disabled>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <input type="text" class="form-control" name="country" id="country" value="{{ $time->country }}"' disabled>
            </div>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>