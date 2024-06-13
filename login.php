<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>el qady</title>
</head>
<body>
    <center>
    <div class="wrapper">
        <form action="cheacking.php" method="post">
        
            <h1>login</h1>
            <div class="input">
                <input type="text" placeholder="username" name="username"><br>
                <input type="password" placeholder="password" name="password"><br>
                <select class="form-select" aria-label="Default select example" name="role"><br>
                  <option selected value="user">user</option>
                  <option value="admin">admin</option>
                </select>
            </div>
            <button type="submit"> submit</button>
            
        </form>
    </div>
    </center>
</body>
</html>