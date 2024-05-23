<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        h1{
            text-align: center;
            font-size: 40px;
            color: brown;
            background-color: salmon;
        }
        #regbox{
            position: absolute;
            border: 3px solid gold ;
            border-radius: 20px;
            padding: 25px;
            
            height: 500px;
            width: 400px;
            margin-top: -590px;
            margin-left: 530px;
            color: rgb(77, 77, 165);
            line-height: 3;
            
        }
        #fn{
            margin-left: 25px;
            width: 60%;
            height: 25px;
            border-color: salmon;
        }
        #ln{
            margin-left: 28px;
            width: 60%;
            height: 25px;
            border-color:  salmon;  
        }
        #dob{
            margin-left: 85px;
            width: 60%;
            height: 25px;
            border-color:  salmon;
        }
        #email{
            margin-left: 60px;
            width: 60%;
            height: 25px;
            border-color:  salmon;
        }
        #phone{
            margin-left: 50px;
            width: 60%;
            height: 25px;
            border-color:  salmon;
        }
        #eq{
            margin-left: 1px;
            width: 60%;
            height: 25px;
            border-color:  salmon;
        }
        #exp{
            margin-left: 47px;
            width: 10%;
            height: 25px;
            border-color:  salmon;
            
        }
        #labelColor{
            margin-left: 50px;
        }
        #pas{
            margin-left: 56px;
            width: 60%;
            height: 25px;
            border-color:  salmon;
        }
        #cpas{
            margin-left: -1px;
            width: 60%;
            height: 25px;
            border-color:  salmon;
        }
        #regf{
            border: 2px solid yellow;
            width: 700px;
            height: 400px;
            margin: 130px 350px;
            padding: 50px;
        }
        h2{
            text-align: center;
            color: brown;
        }
        #menu{
    display: inline-block;
    background-color: skyblue;
    border: 3px solid green;
    border-radius: 20px;
    width: 99.7%;
    
    
}
#logo{
    display: inline-block;
    width: 60px;
    height:50px ;
    margin-top: 4px;
    margin-left: 15px;
    border: 2px solid wheat;
    border-radius: 15px;

}
*{
    margin: 0px;
    padding: 0px;
}
#mbbutton1{
    display: inline-block;
    position: absolute;
    background-color: white;
    border: 3px solid silver;
    border-radius: 15px;
    width: 160px;
    height:25px ;
    margin: 6px;
    margin-left: 200px;
    padding: 10px;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
}
#mbbutton2{
    display: inline-block;
    position: absolute;
    background-color: white;
    border: 3px solid silver;
    border-radius: 15px;
    width: 160px;
    height:25px ;
    margin: 6px;
    margin-left: 400px;
    padding: 10px;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
}
#mbbutton3{
    display: inline-block;
    position: absolute;
    background-color: white;
    border: 3px solid silver;
    border-radius: 15px;
    width: 160px;
    height:25px ;
    margin: 6px;
    margin-left: 600px;
    padding: 10px;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
}
#mbbutton4{
    display: inline-block;
    position: absolute;
    background-color: white;
    border: 3px solid silver;
    border-radius: 15px;
    width: 160px;
    height:25px ;
    margin: 6px;
    margin-left: 800px;
    padding: 10px;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
}
#mbbutton5{
    display: inline-block;
    position: absolute;
    background-color: white;
    border: 3px solid silver;
    border-radius: 15px;
    width: 160px;
    height:25px ;
    margin: 6px;
    margin-left: 1000px;
    padding: 10px;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
}
.plink{
    text-align: center;
}
body{
    background-color: black;
}
a{
    text-decoration: none;
    color: black;
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
}

#mbbutton1:hover{
    background-color: black;
    color: aliceblue;
}
#mbbutton2:hover{
    background-color: black;
    color: aliceblue;
}
#mbbutton3:hover{
    background-color: black;
    color: aliceblue;
}
#mbbutton4:hover{
    background-color: black;
    color: aliceblue;
}
#mbbutton5:hover{
    background-color: black;
    color: aliceblue;
}
#mbbutton4 a ul li:hover>ul{
    display: block;
    position: absolute;
    margin-left: 950px;
    padding: 5px;
    color: alicewhite;
    background-color: skyblue;
    color: aliceblue;
}
 
ul{
    display: none;
} 
ul{
    list-style: none;
    font-weight: bold;
    position: absolute;
    width: 150px;
    margin-left: 925px;
    background-color: skyblue;
    margin-top: 3px;

}
#crf{
    border: 2px solid yellow;
}
#h1{
    background-color: salmon;
}
    </style>
</head>
<body>
    <div id="menu">
        <img src="logo.jpg" alt="" id="logo">
        <a id="mbbutton1" class="plink" href="index.html">Home</a>
        <a id="mbbutton2" class="plink" href="login.html">Login</a>
        <a id="mbbutton3" class="plink" href="services.html">Services</a>
        <a id="mbbutton4" class="plink" href="student.html">Student 
            <ul>
                <li><a href="verification.html">verification</a></li>
                <li><a href="certification.html">certification</a></li>
                <li><a href="marksheet.html">marksheet</a></li>
            </ul></a>
        <a id="mbbutton5" class="plink" href="contactUs.html">Contact Us</a>
        <a id="mbbutton5" class="plink" href="regForm.html">Registration Form</a>
    </div>
    <div id="h1">
    <marquee behavior="alternate" direction=""><h1>"WELCOME TO THE HUBNET LEARNING INSTITUTE"</h1></marquee>
    </div>
    <div id="crf">
        <h1>Client's Registration Form</h1>
        <img src="p9.jpg" alt="" width="100%" height="655px">
        
        <div id="regbox">  
            <label for="">FIRST NAME </label>
            <input type="text" id="fn" name="fn" >
            <label for="">LAST NAME </label>
            <input type="text" id="ln" name="ln" >
            <label for="">DOB </label>
            <input type="date" id="dob" name="dob">
            <label for="">Email-Id </label>
            <input type="" id="email" name="email" >
            <label for="">Phone No. </label>
            <input type="tel" id="phone" name="phone">
            <label for="">Edu. Qualification
                
            </label>
            <select value="" id="eq" name=eq>
                <option value="">10th</option>
                <option value="">12th</option>
                <option value="">Graduation</option>
                <option value="">PG</option>
            </select>
            <label for="">Experience </label>
            <input type="number" id="exp" name="exp" min="2" max="40" value="2">
            <!-- <label for="" id="labelColor" >Color</label>
            <input type="color" id="col" name="col"><br> -->
            <label for="">Password </label>
            <input type="password" id="pas" name="pas">
            <label for="">Confirm Password </label>
            <input type="password" id="cpas" name="cpas">
            <input type="submit" value="submit" name="submit" id="submit"><br>
        </div>
    </div>
    <?php
        $connection=mysqli_connect("localhost","root","Anant@1987","newdb"); 
        if($_POST['submit'])
        {
            echo "Connected with SQL server....";
            $fn=$_POST['fn'];
            $ln=$_POST['ln'];
            $dob=$_POST['dob'];
            $em=$_POST['email'];
            $pn=$_POST['pn'];
            $eq=$_POST['eq'];
            $exp=$_POST['exp'];
            $pas=$_POST['pas'];
            $cpas=$_POST['cpas'];
            $q="insert into student values('$fn','$ln','$dob','$em','$pn','$eq','$exp','$pas','$cpas')";
            mysqli_query($connection,$q);
            echo "Record saved";

        }
    ?>
</body>
</html>