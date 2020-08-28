
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            width: 50%
        }
    </style>
</head>

<body>
    <hr>
    <center>
        <form method="post" , enctype="multipart/form-data">
            <div class="form-group row">
                <label for="title" class="col-2 col-form-label">Title</label>
                <div class="col-10">
                    <input id="title" name="title" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="des" class="col-2 col-form-label">Description</label>
                <div class="col-10">
                    <textarea id="des" name="des" cols="40" rows="5" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-2 col-form-label">Image</label>
                <div class="col-10">
                    <input type="file" , name="upload" , enctype="multipart/form-data" />
                </div>

            </div>
            <div class="form-group row">
                <label for="status" class="col-2 col-form-label">Status</label>
                <div class="col-10">
                    <select id="status" name="status" class="custom-select">
                        <option value="Enable">Enable</option>
                        <option value="Disable">Disable</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-2 col-10">
                    <button name="submit" type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </center>
</body>

</html>

