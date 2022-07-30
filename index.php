
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="css\mystyle.css">
    <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

$timing        : 265ms;
$iconColor     : #00B5F5;
$accent        : #002A8F;
$bluefade      : #0043E0;
$gradient      : #00B5F5;

@mixin transformScale($size: 1) {
    transform: scale($size);
    -ms-transform: scale($size);
    -webkit-transform: scale($size);
}

body {
    background-color: rgba($iconColor, 0.05);
}

.social-container {
    width: 400px;
    margin: 40vh auto;
    text-align: center;
}

.social-icons {
    padding: 0;
    list-style: none;
    margin: 1em;
  
    li {
        display: inline-block;
        margin: 0.15em;
        position: relative;
        font-size: 1.2em;

    }

    i {
        color: #fff;
        position: absolute;
        top: 21px;
        left: 21px;
        transition: all $timing ease-out;
    }

    a {
        display: inline-block;
      
        &:before {
            @include transformScale();
            content: " ";
            width: 60px;
            height: 60px;
            border-radius: 100%;
            display: block;
            background: linear-gradient(45deg, $iconColor, $accent);
            transition: all $timing ease-out;
        }
        
        &:hover:before {
            transform: scale(0);
            transition: all $timing ease-in;
        }
        
        &:hover i {
            @include transformScale(2.2);
            color: $iconColor;
            background: -webkit-linear-gradient(45deg, $iconColor, $accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all $timing ease-in;
        }
    }
  
}
.p{
    color: greenyellow;
    font-weight: bold;
}

.li{
    font-weight: bold;
    color: black;
}
.a{
    color: blueviolet;
    font-weight: bolder;
}
.h3{
    font-weight: bolder;
    text-align: center;
    color: #404040;
}
    </style>
</head>
<body style="font-family: Arial;
    padding: 10px;
    background: #f1f1f1;">
<?php include 'header.php'; ?>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="jobs.php">Jobs</a>
  <a href="about.php">About</a>
  <a href="contact/contact.php">Contact Us</a>
  <a href="login.php" style="float:right">Register / Login</a>
  <a href="/job portal/admin_panel/admin_panel.php" style="float:right">Admin</a>
</div>



<div class="row" style="background-color:#d9d9d9;">
  <div class="leftcolumn">
    <div class="card" style="background-color:#a6a6a6;">
      <h2 style="text-align:center" > <h3><u><a href="https://www.sarkarinaukri.today/">RCFL Officer (Marketing) Recruitment</a></u></h3></h2>
      
    </div>
   
<h3>
    <table border="1" cellpadding="0" cellspacing="0" xmlns="http://www.w3.org/1999/xhtml">
        <tbody>
            <tr>
                <td>
                    <p>Organization</p>
                </td>
                <td>
                    <p>Rashtriya Chemicals and Fertilizers Limited (RCFL)</p>
                </td>
            </tr>
            <tr>
                <td>Name of the Post</td>
                <td>Officer (Marketing) Grade E1</td>
            </tr>
            <tr>
                <td>No of Vacancies</td>
                <td>18</td>
            </tr>
            <tr>
                <td><br></td>
                <td><br></td>
            </tr>
            <tr>
                <td>Age limit</td>
                <td>34 Years</td>
            </tr>
            <tr>
                <td>Educational Qualification</td>
                <td>Regular and full time UGC/AICTE recognized Science / Engineering / Agriculture graduate of minimum 3 / 4 years&rsquo; duration and Post graduation degree in &nbsp;MBA (Marketing as specialization or Major) /MMS (Marketing as specialization or Major)/ MBA (Agri. Business Management)</td>
            </tr>
            <tr>
                <td>Selection Process</td>
                <td>Online Test and Personal Interview.</td>
            </tr>
            <tr>
                <td>Last Date</td>
                <td>&nbsp;12-08-2022</td>
            </tr>
            <tr>
                <td><br></td>
                <td><br></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1"><a href="https://ibpsonline.ibps.in/rcfjun22/" target="_blank">Apply Online</a><br><br></td>
            </tr>
        </tbody>
    </table>
</h3>
<div>Job Location - Mumbai (Maharashtra)</div>
<div><br></div>
<div>
    <table border="1" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td valign="top" width="100%">
                    <p>Application fee:&nbsp;General, OBC and EWS category candidates have to pay Rs.1000/- through internet banking account or credit/ debit card. SC/ST/PwBD/ExSM/Female Candidates are exempted from payment of application fee.</p>
                    <p>Pay Scale:&nbsp;Rs.40,000 &ndash; Rs.1,40,000/- PM</p>
                    <p>How to Apply : &nbsp;Interested&nbsp;Candidates have to apply&nbsp;Online through Website http://www.rcfltd.com</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div>
    <div><br></div>
    <div>Important Dates to Remember</div>
    <div>Starting Date of Application Form - 23-07-2022</div>
    <div>Last Date of Application Form - 12-08-2022</div>
</div>
<div>Last Date for Payment of Fee Online - 12-08-2022</div>
<div><br></div>
<div>Details Notification Link -&nbsp;<a href="https://www.rcfltd.com/files/DETAILED%20ADVERTISEMENT%20-%20OFFICER%20MARKETING%20(E1%20GRADE)(1).pdf" target="_blank">Click Here</a></div>
  </div>
  <div class="rightcolumn" style="background-color:#d9d9d9;">
    <div class="card" style="background-color:#d9d9d9;">
      <h2 class="h3">About</h2>
      <div class="fakeimg" style="height:100px;  background-color: #d9d9d9;
    width: 100%;
    padding: 5px;">
      <img src="about.jpg" alt="Ujjawal" style="height:310px;" width="410px;">
    
    
    </div >
      <p style="font-family:courier;" class="p">Are you looking forward to building your professional career? Do you find it daunting 
        to begin your job search and filter the firms and jobs? And the only solution you repeatedly co
        me across is to look for a placement consultancy, but you are unsure about h
        ow does a placement consultancy work? Then, you do not need to worry because we are here to offer you answers to all your queries related to the domain of consultancies.
       </p>
    </div>
    <div class="card" style="background-color:#d9d9d9;">
      <h3 class="h3">Vacancies</h3>
     
        <li class="li"> <a href="" class="a">Computer Teacher</a> </li> <br>
        <li class="li"><a href="" class="a">Music Teacher</a></li> <br>
        <li class="li"><a href="" class="a">Sport Teacher</a></li><br>
        <li class="li"><a href="" class="a">Science Teacher</a></li><br>
        <li class="li"><a href="" class="a">Dance Teacher</a></li><br>
        <li class="li"><a href="" class="a">Math Teacher</a></li><br>
        <li class="li"><a href="" class="a">English Teacher</a></li><br>
   
    </div>
    <div class="card" style="background-color:#d9d9d9;">
      <h3 class="h3">Follow</h3>
      <ul class="social-icons">
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-codepen"></i></a></li>
    </ul>
    </div>
  </div>
</div>

<div class="footer"
style="background-color: black;"
>
  
       <i class="ri-copyright-line"
       style="color: white;"
       >
        Copyright@2022 || Created By Ujjawal Tiwari
       </i>
</div>
              
</body>
</html>