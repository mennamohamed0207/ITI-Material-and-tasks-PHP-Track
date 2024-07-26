<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container" style="padding-top: 50px;">
    <form class="row g-3" method="post" action="save.php" enctype="multipart/form-data">

        <div class="col-md-6">
        <label for="inputAddress" class="form-label">First Name</label>
            <input type="text" class="form-control" placeholder="First name" name="fname" aria-label="First name">
            <span class="text-danger"><?php if(isset($_GET['fname'])) echo $_GET['fname']; ?></span>
        </div>
        <div class="col-md-6">
        <label for="inputAddress" class="form-label">Last Name</label>

            <input type="text" class="form-control" placeholder="Last name" name="lname" aria-label="Last name">
            <span class="text-danger"><?php if(isset($_GET['lname'])) echo $_GET['lname']; ?></span>

        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
            <span class="text-danger"><?php if(isset($_GET['address'])) echo $_GET['address']; ?></span>

        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Country</label>
            <select id="inputState" name="country" class="form-select">

                <option selected>Choose...</option>
                <option>Egypt</option>
                <option>Lebanon</option>
                <option>Morocco</option>
                <option>Sudan</option>
            </select>
            <span class="text-danger"><?php if(isset($_GET['country'])) echo $_GET['country']; ?></span>

            <br />
        </div>
       
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Female
                    </label>
                </div>
                </div>
                <div style="padding-top: 50px;" class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Skills</legend>
                    <input class="form-check-input" name="skill1" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        PHP
                    </label>
                    <input class="form-check-input" name="skill2"type="checkbox" id="gridCheck2">
                    <label class="form-check-label" for="gridCheck2">
                        MySQL
                    </label>
                    <input class="form-check-input" type="checkbox" name="skill3" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        PostgreSQL
                    </label>
                    <input class="form-check-input" type="checkbox" name="skill4" id="gridCheck4">
                    <label class="form-check-label" for="gridCheck4">
                        J2SE
                    </label>
                </div>
           
        </fieldset>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="inputPassword4">
            <span class="text-danger"><?php if(isset($_GET['username'])) echo $_GET['username']; ?></span>

        </div>
        <div class="col-md-12">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword5">
            <span class="text-danger"><?php if(isset($_GET['password'])) echo $_GET['password']; ?></span>

        </div>
        <div class="col-md-12">
            <label for="inputPassword6" class="form-label">Department</label>
            <input type="text" class="form-control" id="inputPassword6" name="department" value="opensource" >
        </div>
        <div class="col-md-12">
            <label for="inputPassword6" class="form-label">Image</label>
            <input type="file" class="form-control" id="inputPassword6" name="image">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
        <div class="col-12">
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>