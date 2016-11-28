<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<style>
    ::-webkit-scrollbar {
        width: 10px;        
    }

    ::-webkit-scrollbar-track {
        background: #eee;     
        box-shadow:inset 0px 0px 7px -5px black;
    }

    ::-webkit-scrollbar-thumb {        
        background:#ddd;        
    }
    ::-webkit-scrollbar-thumb:hover{
        background:#777;
    }
</style>


<style>
    .header,.footer{
        display:none;
    }    
    body{
        font-family: 'Open Sans', sans-serif;
        background:#F8F8F8;
        font-weight:600;
    }    
    .wrapper{
        padding-top:71px;
        min-height:calc(100vh - 50px);
    }  
    .footnav{
        text-align: center;
        color: rgba(0,0,0,0.5);
        background: white;
        padding: 20px 15px;
        font-size: 12px;
        border-top: 1px solid #eee;      
    }
    .headnav{
        position:fixed;
        top:0px;left:0px;
        height:71px;
        width:100%;
        padding:0px 15px;
        background:white;
        border-bottom: 1px solid #eee;
    }
    .headnav .logo{
        padding-right:10px;
        border-right:1px solid #ddd;
    }
    a{
        text-decoration:none !important;
    }    
    ul{
        padding:0;
        margin:0;
    }
    .headnav ul li{
        display:inline-block;
        line-height:50px;
        padding:10px 10px;
    }
    .greenColor{
        color:#4CAD50;
    }
    .greenBg{
        background: #4CAD50;
    }
    .blueColor{
        color:#004A94;
    }
    .blueBg{
        background: #004A94;
    }
    .whiteColor{
        color:white;
    }
    .whiteBg{
        background:white;
    }
    .headnav-links li a{
        color: #3164AD;
        text-transform: uppercase;
        font-size: 13px;        
    }
    .logo-text{
        padding-left:0px !important;
    }
</style>
<style>
    .hero-heading{       
        margin:0;
        padding:40px 15px;
        font-weight:600;
        border-bottom: 1px solid #ddd;
    }
    section.sandbox-intro article{        
        padding: 40px 15px;
        line-height: 30px;
        max-width: 800px;
        color: rgba(0,0,0,0.6);
    }    
    .sandbox-btn{
        display:inline-block;
        padding:15px 20px;       
        margin:10px;
        font-weight:400;       
        min-width:150px;       
        color:white !important;        
        border-radius:3px;
        transition:all 0.2s;
    }
    .sandbox-btn:hover{
        letter-spacing:1px;
        box-shadow:none;
    }
</style>

<style>
    #signin-form{
        max-width:400px;
        margin:40px auto;
    }
    .userType-radio label{
        padding:5px 15px;
        cursor:pointer;
        font-weight:600;
    }
    #signin-form .form-control{
        height:40px;
    }
</style>


<div class="headnav">
    <div class="pull-left">
        <ul>
            <li>
                <!--tbh logo-->
                <img width="120px" class="logo" src="https://www.translatebyhumans.com/webroot/images/logo_new.svg">
            </li>
            <li class="logo-text">
                <span class="greenColor">Developer</span>
            </li>
        </ul>
    </div>
    <div class="pull-right">
        <ul class="headnav-links">
            <li>
                <a href="#!">Documentation</a>
            </li>
            <li>
                <a href="#!">Sandbox</a>
            </li>
            <li>
                <a href="#!">Contact Us</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<div class="wrapper">
    <!--before login page-->
    <section class="sandbox-intro hidden">
        <h1 class="hero-heading greenColor whiteBg text-center">SANDBOX</h1>
        <article class="container text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        </article>
        <div class="buttons-row text-center">
            <a href="#!" class="blueBg sandbox-btn whiteColor">LOGIN</a>
            <a href="#!" class="greenBg sandbox-btn whiteColor">SIGN UP</a>
        </div>
        <article class="text-center container">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco <a href="#!" class="blueColor">API Documentation</a></p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore ullamco laboris nisi ut aliquip ex ea commodo.</p>
        </article>
    </section>

    <!--sign in page-->
    <section class="sandbox-signin">
        <h1 class="hero-heading greenColor whiteBg text-center">SIGN IN</h1>
        <div class="container text-center">
            <form id="signin-form">
                <div class="form-group userType-radio">
                    <label class="form-check-inline blueColor">
                        <input class="form-check-input" type="radio" name="userTypeRadio" id="userType1" value="option1"> Personal User
                    </label>
                    <label class="form-check-inline blueColor">
                        <input class="form-check-input" type="radio" name="userTypeRadio" id="userType2" value="option2"> Business User
                    </label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="companyName" placeholder="*Company Name">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="firstName" placeholder="*First Name">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="lastName" placeholder="*Last Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="*E-mail">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="email" placeholder="*Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="email" placeholder="*Confirm Password">
                </div>
            </form>
        </div>
    </section>
</div>

<div class="footnav">
    © 2016 Translate By Humans [Innovative Humans Limited]. All Rights Reserved.
</div>