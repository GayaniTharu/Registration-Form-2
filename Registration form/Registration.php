<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form </title>
</head>
<body>
    <style>
        *{box-sizing: border-box;}

        .container{
            padding: 16px;
        }

        input[type=text],input[type=password]{
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: whitesmoke;
        }

        input[type=text]:focus,input[type=password]:focus{
            background-color: #ddd;
            outline: none;
        }

        .registerbtn{
            background-color: #00c3ff;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover{
            opacity: 1;

        }
        a{
            color: dodgerblue;
        }

        .signin{
            background-color: #f1f1f1;
            text-align: center;
        }

    </style>


    <form action="register.php" method="POST" id="register_form">
        <div class="container">
            <h1 style="color: blue;"> Register Form </h1>
            <p style="color: darkblue;">Create an account</p>

            <label for="First Name"> <b>First Name </b> </label>
            <input type="text" placeholder="Enter Firsst Name" name="firstname" id="firstname" required>

            <label for="Last Name"> <b>Last Name </b> </label>
            <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>
        


            <label for="email"> <b>Email</b> </label>
            <input type="text" placeholder="Enter Email Address" name="email" id="email" required>

            <label for="Password"> <b>Password</b> </label>
            <input type="text" placeholder="Enter Password" name="password" id="password" required>
            


            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account ? <a href="#"> Sign in</a></p>

        </div>


    </form>
    
</body>
</html>