<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container mt-2">
    <form method="post" action="save.php">
        <div class="mb-3">
            <label for="exampleInputFirstName" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputFirstName"
                   aria-describedby="FirstNameHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputLastName" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputLastName"
                   aria-describedby="LastNameHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="exampleInputPassword"
                   aria-describedby="passwordHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>