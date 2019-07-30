<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script type="text/javascript" src="script.js">
        //Validations for Full Name
    </script>

</head>

<body>
    <div class="main">
        <div class="form-body">
            <div class="form">

                <h1> Signup Here!</h1>

                <form name="SignUp_Form" action="insert.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="text" name="FName" id="FName" placeholder="full name" onblur="valName1(this);" required><br>
                    <input type="text" name="Email" id="Email" placeholder="Email" onblur="validateEmail(this); "required ><br>
                    <input type="password" name="Password" id="Password" placeholder="Password" onblur="valPass(this);" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    /><br>
                    <input type="text" name="Age" id="Age" placeholder="age" size="2" maxlength="2" onblur="checkAge(this);"><br>
                    <input type="text" name="address" placeholder="address"><br>
                    <input type="file" name="uploadphoto" />
                    <input type="text" name="mobile" id="Mobile" placeholder="Mobile" maxlength="10" onblur="valMob(this);" pattern="[987][0-9]{9}"><br>

                    <br>
                    <select name="countries" class="datalist">
					<datalist id="countries">
					<option class="selp" value="none">Select Your Country</option>
					<option class="selq" value="India" selected>India</option>
					<option class="selq" value="Australia">Australia</option>
					<option class="selq" value="new zealand">new zealand</option>
					<option class="selq" value="England">England</option>
					<option class="selq" value="America">America</option>
					<option class="selq" value="China">China</option>
					<option class="selq" value="Russia">Russia</option>
					<option class="selq" value="Germany">Germany</option>
					<option class="selq" value="Malesia">Malesia</option>
                </datalist></select>


                    <br><br>
                    <select name="questioon" onchange=" getAnswer(this.value);">
					<option class="selp" value="none">Select a secret question </option>
					<option class="selq" value="nickname">what is your nickname ?</option>
					<option class="selq" value='bestfriend'>what is your best friend's name ?</option>
					<option class="selq" value="game">what is your favourite game ?</option>
                </select>


                    <br><br>
                    <input type="text" name="answer" id="questioon" style="display:none" />

                    <input type="radio" name="gender" value="male" checked><span class="rad">Male</span>
                    <input type="radio" name="gender" value="female"> <span class="rad">Female</span>
                    <input type="radio" name="gender" value="other">
                    <span class="rad">Other</span>
                    <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" name="submit" id="submit">Sign Up</button>

                    <h3>Already have account ? <a class="aclk" href="login.php">Click here!</a></h3>
                </form>
            </div>
            <div id="error-fullName"></div>
            <div id="error-Email"></div>
            <div id="error-Password"></div>
            <div id="error-Mobile"></div>
            <div id="error-Age"></div>
        </div>
    </div>

</body>

</html>