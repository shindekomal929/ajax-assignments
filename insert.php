<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"><br>
    <h1 class="text-center">Insert Data using AJAX PHP and MYSQL</h1>
    <br>
    <div class="col-lg-8 m-auto">
    <form id="myform" action="insertphp.php" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
        </div>

        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
    </form>
    </div>

    <div>
        <br><br>
        <h1 class="text-center bg-dark text-white">Dispaly data using AJAX</h1><br>
        <button id="displaydata" class="btn btn-danger">Display</button>

        <table class="table table-striped table-bordered text-center">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
            </thead>
            <tbody id="response">

            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var form=$('#myform');
        $('#submit').click(function(){

            $.ajax({
                url: form.attr("action"),
                type: 'post',
                data: $("#myform input").serialize(),
                success: function(data){
                    console.log(data);
                }
            });
        });

    $('#displaydata').click(function(){
        $.ajax({
            url:'displayajax.php',
            type:'post',
            success:function(responsedata){
                $('#response').html(responsedata)
            }
        });
    });
    });
</script>
</body>
</html>
