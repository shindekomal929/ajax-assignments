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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-success text-center">AJAX Asynchronous JavaScript And XML.</h3>
                <form>
                    <div class="form-group">
                        <label for="user">Username: </label>
                        <input type="text" name="" id="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password: </label>
                        <input type="text" name="" id="pwd" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Choose State: </label>
                            <select class="form-control" onchange="myfun(this.value)">
                            <option> select state </option>
                                <option> Maharashtra </option>
                                <option> UP </option>
                                <option> Bihar </option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label> Choose State: </label>
                            <select class="form-control" id="city">
                                <option> select city </option>
                            </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function myfun(data){
            alert(data);
            var req=new XMLHttpRequest();
            req.open("GET","http://localhost/phpexp/response.php?datavalue="+data,true);
            req.send();

            req.onreadystatechange=function(){
                if(req.readyState==4 && req.status==200){
                    document.getElementById('city').innerHTML= req.responseText;
                }
            }
        }
    </script>
</body>
</html>