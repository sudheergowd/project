<html>
    <head>
        <title>Login</title>
        
        <link rel="stylesheet" type="text/css" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css>
        
    </head>
    <style>
        body{
            color:black;
        }
        </style>
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
        <h1>Login to sudheer's portal</h1> <br>
        <h3>Login Here</h3>
        <form action="validation1.php" method="post">
            <div class="form-group">
            <label>email</label>
            <input type="email" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
    </div>

    
    </div>
    
</div>
</div>
</body>
</html>