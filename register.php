<html>
    
    <head>
        <title> Registration</title>
        
        <link rel="stylesheet" type="text/css" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css>
        
    </head>
<style>
    body{
        background-color:yellowgreen;
    }
    h1{
    color:white;
    }
    
</style>    
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-right">
        <h1>Hi, Welcome to Sudheer's Site</h1><br>
        <h2>Sign Up the Account </h2>
        <form action="registration.php" method="post">
        
            <div class="form-group">
            <label>email</label>
            <input type="email" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
    </div>
    </div>   
</div>
    </div>
    
</div>
</div>
</body>
</html>