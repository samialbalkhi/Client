<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>add-car</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

<body>

    <form action="login.php"   method="POST">
        <div class="container">
            <!-- <div class="mb-3 mt-3"> -->

            <div class="row">
                <div class="col-6">


                    <label for="">fat:</label>
                    <input class="form-control " type="text" name="fat">
                    <label for=""> gender</label>
                    <input class="form-control" type="text" name="gender">
                    <label for="">lastname</label>
                    <input class="form-control" type="text" name="lastname">
                    <label for="">phone</label>
                    <input class="form-control" type="text" name="phone">

                    <label for="birthday">Birthday:</label>
                    <input class="form-control" type="date" id="DateofBirth" name="DateofBirth">

                    <!-- </div> -->
                </div>
                <div class="col-6">

                    <label for="">length:</label>
                    <input class="form-control" type="text" name="length">
                    <label for="">farstname</label>
                    <input class="form-control" type="text" name="farstname">
                    <label for="">homeadress</label>
                    <input class="form-control" type="text" name="homeadress">
                </div>
            </div>


            <div class="m-4">
                

                <button type="submit" class="btn btn-primary" name="login">login</button>
            </div>
    </form>
    </div>
</body>

</html>