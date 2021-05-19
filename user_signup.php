

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="validator.js"></script>
</head>
<body>
<form name="contactForm"  action="" method="post">
    <h2>SIGN UP</h2>
    
    <div class="row">
        <label>Full Name</label>
        <input type="text" name="username">
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <label>address</label>
        <input type="text" name="address" >
        <div class="error" id="addressErr"></div>
    </div>
    
    <div class="row">
        <label>Mobile Number</label>
        <input type="text" name="mobile" maxlength="10">
        <div class="error" id="mobileErr"></div>
    </div>

    <div class="row">
        <label>password</label>
        <input type="text" name="password">
        <div class="error" id="mobileErr"></div>
    </div>

       
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>

</body>
</html>