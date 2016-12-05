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
        font-weight:400;
        font-size:16px;
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
        z-index:5555;
        font-weight:600;
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
        list-style:none;
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
        padding:20px 15px;
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
    #signin-form,#login-form{
        max-width:400px;
        margin:40px auto;
    }
    .userType-radio label{
        padding:5px 15px;
        cursor:pointer;
        font-weight:600;
    }
    .form-control{
        height:40px;
        box-shadow: none;
        border: 1px solid #ddd;
        font-weight: 400;
    }
    .submit-btn{
        padding:10px 25px;
        font-weight:400;
        border: 0;
        border-radius: 3px;
        min-width: 100%;
        font-size: 18px;
    } 
    .linkedin-btn{
        padding:10px 25px;
        font-weight:400;
        border: 0;
        border-radius: 3px;
        min-width: 100%;
        font-size: 18px;
        background:#0085AF;
    }
    p.login-helper{
        font-size:13px;
        color:#4d4d4d;
        font-weight:400;
        padding:10px 0px;
    }
    .login-helper a{
        text-decoration:underline !important;
        color:#4d4d4d;
    }
    .linkedin-btn i{
        background:white;
        padding:5px;
        border-radius:3px;
        margin-left:10px;
        color:#0085AF;
    }
    .or-creative{
        width: 100%;
        border-top: 1px double #ddd;
        position: relative;
        margin: 20px 0px;        
        border-bottom: 1px solid #ddd;
        height: 4px;
    }
    .or-creative span{
        position: absolute;
        left: 50%;        
        background: #F8F8F8;
        transform: translate(-50%,-50%);
        padding: 5px 25px;
        margin-top: 2px;
    }
</style>

<!--sandbox home page-->
<style>
    .sandbox-home{
        background:#f8f8f8;
    }

    .sandbox-home .tabs-outer{
        width:calc(100% - 200px);        
    }
    .sandbox-home .sidebar{
        float:left;                
        width:200px;
        min-height:calc(100vh - 200px);  

        /*        box-shadow:inset -5px 0px 10px -10px;
                -webkit-box-shadow:inset -5px 0px 10px -10px;
                -moz-box-shadow:inset -5px 0px 10px -10px;
                -ms-box-shadow:inset -5px 0px 10px -10px;*/
    }    
    .sandbox-home .sidebar .tab-remote{
        color: #555;
        font-weight: 400;
        display: block;
        margin-bottom:1px;
        padding: 10px 15px;
        transition: all 0.2s;
        cursor:pointer;
    }
    .sandbox-home .sidebar .tab-remote:hover{
        background: #eee;
        color: #3164AD;
    }
    .sandbox-home .sidebar .tab-remote.active{
        color: #3164AD;        
        background: #eee;
        border-right: 5px solid #3164AD;
    }
    .sandbox-home .tabs-outer{
        float:left;
        padding:15px;
        border-left:1px solid #ddd;
        background:white;
        width:calc(100% - 200px);        
        min-height:calc(100vh - 200px);
    }
    .sandbox-home .tabs-outer .tab-content{
        display:none;
    }
    .sandbox-home .tabs-outer .tab-content.active{
        display:block;
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
    <section class="sandbox-signin hidden">
        <h1 class="hero-heading greenColor whiteBg text-center">SIGN IN</h1>
        <div class="container text-center">
            <form id="signin-form">
                <div class="form-group userType-radio">
                    <label class="form-check-inline blueColor">
                        <input class="form-check-input" type="radio" name="userTypeRadio" id="userType1" value="option1">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>  Personal User
                    </label>
                    <label class="form-check-inline blueColor">
                        <input class="form-check-input" type="radio" name="userTypeRadio" id="userType2" value="option2"> 
                        <i class="fa fa-suitcase" aria-hidden="true"></i> Business User
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
                <!--
                insert your data site key here. for more info, read this article:
                https://webdesign.tutsplus.com/tutorials/how-to-integrate-no-captcha-recaptcha-in-your-website--cms-23024-->
                <div class='form-group'>
                    <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="greenBg whiteColor text-center submit-btn">Let's Go!</button>
                    <p class='login-helper'>I have an account. <a href='#'>Login</a></p>
                </div>
                <div class='or-creative'>
                    <span>OR</span>
                </div>
                <div class='form-group'>
                    <button type="submit" class="greenBg whiteColor text-center linkedin-btn">Signup via LinkedIn <i class="fa fa-linkedin" aria-hidden="true"></i></button>
                </div>
            </form>

        </div>
    </section>

    <!--login page-->
    <section class='sandbox-login hidden'>
        <h1 class="hero-heading greenColor whiteBg text-center">LOG IN</h1>
        <div class="container text-center">
            <form id="login-form">                
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="*E-mail">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="email" placeholder="*Password">
                </div>                             
                <!--
                insert your data site key here. for more info, read this article:
                https://webdesign.tutsplus.com/tutorials/how-to-integrate-no-captcha-recaptcha-in-your-website--cms-23024-->
                <div class='form-group'>
                    <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="greenBg whiteColor text-center submit-btn">Log In!</button>
                    <p class='login-helper'><a href='#'>Forgot your Password?</a></p>
                </div>
                <div class='or-creative'>
                    <span>OR</span>
                </div>
                <div class='form-group'>
                    <button type="submit" class="greenBg whiteColor text-center linkedin-btn">Signup via LinkedIn <i class="fa fa-linkedin" aria-hidden="true"></i></button>
                    <p class='login-helper'>Don't have an account yet? <a href='#'>Create New</a></p>
                </div>
            </form>
        </div>
    </section>

    <!--sandbox home-->
    <section class='sandbox-home'>
        <h1 class="hero-heading greenColor whiteBg text-center">SANDBOX HOME</h1>
        <div class='sidebar'>
            <ul>
                <li class="tab-remote active" data-trigger="#sandboxhome-tab1">
                    Home
                </li>
                <li class="tab-remote" data-trigger="#sandboxhome-tab2">
                    Testing Summary
                </li>
                <li class="tab-remote" data-trigger="#sandboxhome-tab3">
                    Testing Report One
                </li>
                <li class="tab-remote" data-trigger="#sandboxhome-tab4">
                    Credits
                </li>
                <li class="tab-remote" data-trigger="#sandboxhome-tab5">
                    History
                </li>
            </ul>
        </div>
        <div class='tabs-outer'>
            <div id="sandboxhome-tab1" class='tab-content active'>
                <h1>Tab 1</h1>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>
            <div id="sandboxhome-tab2" class='tab-content'>
                <h1>Tab 2</h1>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>
            <div id="sandboxhome-tab3" class='tab-content'>
                <h1>Tab 3</h1>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>
            <div id="sandboxhome-tab4" class='tab-content'>
                <h1>Tab 4</h1>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>
            <div id="sandboxhome-tab5" class='tab-content'>
                <h1>Tab 5</h1>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                </p>
                <p>qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</p>
                <p>
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>
        </div>
        <div class='clearfix'></div>
    </section>



    <!--API Documentation-->
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:400,700" rel="stylesheet">
    <style>
        .wrapper{
            background:white;
        }
        .apiDoc-hero{
            padding:75px 0px;
            width:100%;
            background: url(https://www.translatebyhumans.com/webroot/images/bnr-document.png);
            position: relative;
            background-size: cover;
        }       
        .apiDoc-hero .hero-flag{            
            background: rgba(10, 102, 160,0.9);
            padding: 25px;
            color: white;
            padding-left:45px;
            display:inline-block;            
        }
        .apiDoc-hero .hero-flag h1{
            margin:5px 0px;    
            font-family: 'Rokkitt', serif;
            font-weight:700;
            font-size:60px;
        }
        .apiDoc-hero .hero-flag h2{
            font-size:20px;
            margin:5px 0px;
            font-weight:lighter;            
        }
        .apiDoc-body{
            padding:40px 15px;
            background:white;
        }
        .apiDoc-body h2{
            color:#4CAD50;              
            font-size:22px;
            font-weight:600;
        }
        .apiDoc-body p{
            color:#777;
            font-weight:400;
            line-height:30px;
        }
        .apiDoc-body a{
            font-weight: 600;
            color: #555;
        }
    </style>

    <section class="apiDoc-hero hidden">        
        <div class="hero-flag">
            <h1>API Documentation</h1>
            <h2>Way to change your translation medium.</h2>
        </div>        
    </section>
    <section class="apiDoc-body container">        
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <h2>Getting Started</h2>
                <p>Explore the basics of using the Translate by Humans API with our simple walkthrough.</p>
                <a href="">Learn More</a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <h2>API details</h2>
                <p>Complete documentation of all TBH API calls, including helpful code examples.</p>
                <a href="">View Documentation</a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <h2>Sandbox Testing</h2>
                <p>Test your application safely using the TBH Sandbox, a repro-duction of the live API.</p>
                <a href="">Try the Sandbox</a>
            </div>
        </div>
    </section>
</div>

<div class="footnav">
    © 2016 Translate By Humans [Innovative Humans Limited]. All Rights Reserved.
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>


<script>
    $('.sandbox-home .tab-remote').click(function () {
        $('.sandbox-home .tab-remote').removeClass('active');
        $(this).addClass('active');
        var target_id = $(this).attr('data-trigger');
        $('.sandbox-home .tab-content').hide();
        $(target_id).show();
    });
</script>