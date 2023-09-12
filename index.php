<!DOCTYPE html>
<html>
<head>
    <title>PHP within HTML</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Enter Name</h2>
            <form action="" method="GET">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>

            <?php
            if (isset($_GET['name'])) {
                $input = $_GET['name'];
                $name = str_replace(["'","\\",'"','<','>','`', ],'', $input);
                echo '<a href="#" class="btn btn-info d-block mt-3" onclick="document.write(\'Hey '.$name.'\');">Print Name?</a>';  
            }
            ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery (optional, but included for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
