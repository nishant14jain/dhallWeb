<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<style>
    
    .creditPage{
        padding: 0px 0px;
        font-family: "Open Sans",sans-serif;
        font-size: 15px;  
    }
    .creditPage h1{
        color:#4FAA52;
        background: white;
        text-align:center;
        margin:0;
        padding:20px 15px;
        border-top:1px solid #ddd;
        border-bottom:1px solid #ddd;
    }
    body{
        background:#F9FAFA;
    }
    .creditForm{
        max-width:800px;
        font-weight: 600;
        color: #777;
        padding:40px 15px;
    }
    .credit-available{
        margin: 15px 0px;
        letter-spacing:1px;
        background: white;
        padding: 20px 15px;
        font-size: 18px;
        box-shadow: 0px 1px 12px -5px black;
        -ms-box-shadow: 0px 1px 12px -5px black;
        -moz-box-shadow: 0px 1px 12px -5px black;
        -webkit-box-shadow: 0px 1px 12px -5px black;
    }
    .credit-available .pull-left span{
        color:#4FAA52;
    }
    .credit-available .pull-right span{
        color:#076CAD;
    }
    .credit-table{
        letter-spacing:1px;
        width:100%;
        background:white;
        font-weight:400;
        box-shadow: 0px 1px 12px -5px black;
        -ms-box-shadow: 0px 1px 12px -5px black;
        -moz-box-shadow: 0px 1px 12px -5px black;
        -webkit-box-shadow: 0px 1px 12px -5px black;
    }
    .credit-table td,.credit-table th{
        padding:15px;  
        font-size:16px;
    }
    .credit-table tr{        
        border-bottom:1px solid #eee;
    }
    .credit-table th{
        color:#333;
        border-bottom: 1px solid #ddd;
        font-size:14px;
        font-weight:600;
    }
    .credit-table .price{
        color:#076CAD;
        font-weight:600;
    }
    .credit-table .credit-buy-btn{
        border: 1px solid #4FAA52;
        color: #4FAA52;
        font-weight: 600;
        transition:all 0.2s;
        padding: 5px 10px;
        border-radius: 3px;
        width: 100%;
        max-width: 200px;
        display: inline-block;
        text-decoration:none;
    }
    .credit-table .credit-contact-btn{
        background:#076CAD;
        text-decoration:none;
        color:white;
        font-weight: 600;
        padding: 5px 10px;
        border-radius: 3px;
        width: 100%;
        max-width: 200px;
        display: inline-block;
    }
    .clickable{
        cursor:pointer;
    }
    .credit-table .clickable.active{
        background:#F1F3F4;
        color:#333;
    }
    .credit-table .clickable.active .credit-buy-btn{
        background:#4FAA52;
        color:white;
    }
    .credit-table .clickable .credit-buy-btn .on{
        display:none;
    }
    .credit-table .clickable .credit-buy-btn .off{
        display:inline;
    }
    .credit-table .clickable.active .credit-buy-btn .on{
        display:inline;
    }
    .credit-table .clickable.active .credit-buy-btn .off{
        display:none;
    }
    .creditPage .payment-block{
        padding:40px 15px 25px 15px;
    }
    .creditPage .payment-block label{
        font-size:30px;
        padding:10px 20px;
        color:#076CAD;
    }
    .creditPage .credit-pay-btn{
        background: #0084C7;
        color: white;
        width: 100%;
        max-width: 250px;
        cursor: pointer;
        padding: 15px 20px;
        display: inline-block;
        border-radius: 3px;
        margin: 10px 0px;
        font-size: 19px;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .creditPage .payment-block .footline{
        color:#666;
        font-style: italic;
        font-size:13px;
        font-weight:400;
    }
    .creditPage .creditForm select{
        padding:5px 10px;
    }
</style>

<div class="creditPage">
    <h1>CREDIT ADD</h1>
    <div class="container creditForm">
        <div class="pull-left">
            <span>You are just one click away from credit add.</span>
        </div>
        <div class="pull-right">
            <span><strong style="color:#4d4d4d">Select Currency</strong> &nbsp;</span>
            <select>
                <option>USD</option>
                <option>INR</option>                
            </select>
        </div>
        <div class="clearfix"></div>
        <div class="credit-available">
            <div class="pull-left">
                <span>Your Available Credit</span>
            </div>
            <div class="pull-right">
                <span>$39</span>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="table-reponsive">
            <table class="credit-table">
                <thead>
                    <tr>
                        <th>Credits</th>
                        <th>Prices</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable">
                        <td>50,000</td>
                        <td class="price">$500</td>
                        <td class="text-center">
                            <div class="credit-buy-btn">
                                <span class="off">BUY NOW</span>    
                                <span class="on"><i class="fa fa-check"></i> SELECTED</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="clickable">
                        <td>100,000</td>
                        <td class="price">$1,500</td>
                        <td class="text-center">
                            <div class="credit-buy-btn">
                                <span class="off">BUY NOW</span>    
                                <span class="on"><i class="fa fa-check"></i> SELECTED</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="clickable">
                        <td>200,000</td>
                        <td class="price">$2,999</td>
                        <td class="text-center">
                            <div class="credit-buy-btn">
                                <span class="off">BUY NOW</span>    
                                <span class="on"><i class="fa fa-check"></i> SELECTED</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="clickable">
                        <td>500,000</td>
                        <td class="price">$4,499</td>
                        <td class="text-center">
                            <div class="credit-buy-btn">
                                <span class="off">BUY NOW</span>    
                                <span class="on"><i class="fa fa-check"></i> SELECTED</span>
                            </div>
                        </td>
                    </tr>
                    <!---------------->
                    <tr>
                        <td>> 1,000,000</td>
                        <td></td>
                        <td class="text-center">
                            <a href="#!" class="credit-contact-btn">CONTACT US</a>
                        </td>
                    </tr>
                </tbody>
            </table>   
        </div>        
        <div class="payment-block text-center">
            <p>Payment is received by Cards or PayPal</p>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </label>
                </div> 
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"><i class="fa fa-cc-paypal" aria-hidden="true"></i>
                    </label>
                </div> 
            </div>
            <div class="credit-pay-btn">Pay Now</div>
            <p class="footline">For American Express card payments, please write to us at support@translatebyhumans.com.</p>
        </div>
    </div>
</div>

<script>
    $('.clickable').click(function () {
        $('.clickable').removeClass('active')
        $(this).addClass('active');
    });
</script>