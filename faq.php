<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spiffy</title>

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <style>
               body{
            font-family: 'Baloo Bhai 2', cursive;

        }

        /*----------------------NAVIGATION BAR---------------------------- */

        /*Box Shadow to Navigation Bar*/
        .cont {
            width: 100%;
            height: 71px;
            box-shadow: 0px 7px 9px #e1e3e6 !important;
            position: fixed;
            font-weight: 650;
            z-index: 45;
            margin-top: -150px;
        }


        /*Border and Box Shadow of Search Bar*/
        .change {
            border: 1px solid #fc2779;
        }

        [type=search]:focus {
            border: 2px solid #fc2779;
            box-shadow: 0 0 5px #fc2779;

        }

        /*Alligning left to Login, signup, wishlist, cart in desktop mode*/
        @media (min-width: 800px) {
            #ss {
                margin-right: 30px;
            }
        }

        @media screen and (max-width: 800px) {
           
           .cont{
             margin-top:-100px;
           }
       }
        /*----------------------//NAVIGATION BAR\\-----------------------*/
        .footer
        {
          margin-top:3811px;
          background:#e6e8ed;
          color:#000;

        }
        .footer h1
        {
          font-size:25px;
          margin:25px 0;
          text-align: left;
          font-weight: 700;
        }
        .footer a
        {
          font-size:15px;
          text-decoration: none;
          padding-bottom: 5px;
          color: #000; 
          text-align: left;
          cursor: pointer;
          font-weight: 600;
        }
        .features 
          {
            margin:45px 0px 40px 0px;

        
          }
          .features img
          {
             display: inline-block;
             float:left;
             margin-left:-10px;
             margin-right: 10px;
             width: 47.5px;
             height: 40px;
               }
            
               .fq
         {
             width:1000px;
             display: block;
             margin: 0 auto;
         }
         .cont3
         {
             margin-top: 150px;
             text-align: left;
         }
         .tc h1
         {
             font-size:18px;
             padding:5px 0;
             text-decoration: underline;
         }
               .head
               {
                 text-align: left;
                 padding-bottom: 10px;
                 border-bottom: 1px solid #ccc;
                 margin: 20px 0 10px;
                 color:#697071;

               }
               .content
               {
                 margin-top: 30px;
                 position: relative;
               }
               .sidebar
               {
                 display: inline-block;
                 float:left;
                 width:240px;
                 margin-top:30px;
                 font-size:16px;
                 border-right: 1px solid #ecedec;
               }
               .sidebar-item
               {
                 margin-bottom: 20px;
                 display: block;
               }

               .sidebar-item span
               {
                 display: table-cell;
                 width: 31px;
                 height: 26px;
               }
               .sidebar-item label
               {
                 display: table-cell;
                 padding-left: 11px;
                 line-height: 26px;
                 vertical-align: middle;
                 cursor: pointer;
                  color:#fc2779;
               }
               .sidebar-active
               {
                 border-right: 5px solid #fc2779;
               }
               .fa-star-o
               {
                 color:#fc2779;
                 display: inline-block;

               }
               .section
               {
                 float: right;
                 width:70%;
                 display: inline-block;
               }
               .section-sec
               {
                 margin-bottom: 100px;
               }
               .section-link
               {
                 overflow: hidden;
                 padding-bottom: 5px;
                 border-bottom: 1px dotted #ccc;
                 margin-bottom: 15px;
                 font-size: 16px;
               }
               .section-link span
               {
                 font-weight: 300;
                 display:inline-block;
                 padding:10px 0;
               }
               .section-link a
               {
                  text-transform: uppercase;
                  font-size: 14px;
                  color:#526cd0;
                  display: inline-block;
                  padding: 10px;
                  border: 1px solid #ccc;
                  border-radius: 5px;
                  cursor: pointer;
                  margin-left:5px; 
               }
               .h2
               {
                 display: block;
                 font-size:1.5em;
                 margin-block-start: 0.83em;
                 margin-block-end: 0.83em;
                 font-weight: bold;
               }
               .section-links
               {
                 float: right;
               }
               .section-Questions
               {
                 padding:7px 0;
                 font-size:16px;
                 line-height:22px;
                 color: #444546;
                 font-weight: 500;
                 cursor: pointer;

               }
        @media only screen and (max-width:770px)
        {
           .form-inline
           {
                  width:100%;
           } 
           .footer h1
        {
          font-size:15px;
          margin:20px 0;
          text-align: left;
          font-weight: 500;
        }
           .footer a
        {
          font-size:11px;
          text-decoration: none;
          padding-bottom: 3px;
          color: #000; 
          text-align: left;
          cursor: pointer;
          font-weight:300;
        }
           .features 
          {
            margin-top: 20px;
            padding-right: 5px;
            padding-left: 4px;
        
          }
          .features b
          {
            font-size: 11px;
            font-weight: bold;
            
          }
          .features p
          {
            margin-bottom: 0.67rem;
            margin-top: 0.67rem;
            text-align: left;  
            font-size: 11px;
               
           }
           .features img  
           {
            width: 44px;
             height: 49px;
           }
           .fq
           {
            width:270px;
             display: block;
             margin: 0 auto;
           }
           .cont3
         {
             margin-top: 100px;
             text-align: left;
         }
         .content
         {
           display: none;
         }
         .fq h1{
            
             font-weight: 300;
             font-size: 20px;
         }
         .section h2
         {
           font-size: 18px;
           font-weight: 300;
         }
         .section-link span
         {
           font-size: 13px;
         }
         .section-link a
          {
            text-transform: lowercase;
                  font-size: 11px;
                  color:#526cd0;
                  display: inline-block;
                  padding: 6px;
                  border: 1px solid #ccc;
                  border-radius: 2px;
                  cursor: pointer;
                  margin-left:2px; 
         }
         .section
         {
             width:95%;
             
         }
             
        }
        
    </style>
</head>

<body>
    <!--Navigation Bar-->

    <?php
    if(isset($_SESSION['e']))
        include("Header.php");
    else 
    include("Header2.php");
?>
  <!-------------------------------------------------------------------------FAQ---------------------------------->
   <div class="fq">
     <div class="cont3">
       <div class="head">
         <h1>
          Frequently Asked Questions
         </h1>
       </div>
       <div class="content">
         <div class="sidebar">
           <a class="sidebar-item sidebar-active" href="#tquers">
             <span>
              <i class="fa fa-star-o" aria-hidden="true"></i>
             </span>
             <label>Top Queries</label>
           </a>
           <a class="sidebar-item" href="#t&c">
            <span>
             <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>
            <label>	Terms and Conditions</label>
          </a>
          <a class="sidebar-item" href="#shipping">
            <span>
             <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>
            <label>		Shipping, Order Tracking & Delivery
            </label>
          </a>
          <a class="sidebar-item" href="#cancel">
            <span>
             <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>
            <label>		Cancellations and Modifications
            </label>
          </a>
          <a class="sidebar-item" href="#retrnex">
            <span>
             <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>
            <label>			Returns and Exchange
            </label>
          </a>
          <a class="sidebar-item" href="#signup">
            <span>
             <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>
            <label>		Sign Up and Login
            </label>
          </a>
          <a class="sidebar-item" href="#pyment">
            <span>
             <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>
            <label>			Payments
            </label>
          </a>

         </div>

       </div>
       <div class="section">
         <div id="tquers" class="section-sec">
           <h2>top Queries</h2>
           <div class="section-link">
             <span>you can track orders</span>
             <div class="section-links">
               <a href="">track orders</a>
             </div>
           </div>
           <div>
             <div class="section-Questions">
              What is Try and Buy Service?
             </div>
             <div class="section-Questions">
              Why are there different prices for the same product? Is it legal?

             </div>
             <div class="section-Questions">
              How will I detect fraudulent emails/calls seeking sensitive personal and confidential information?

             </div>
             <div class="section-Questions">
              How will I identify a genuine appointment letter?

             </div>
             <div class="section-Questions">
              How do I cancel the order, I have placed?

             </div>
             <div class="section-Questions">
              How do I create a Return Request?

             </div>
           </div>

         </div>
         <div id="t&c" class="section-sec">
           <h2>Terms and Conditions
          </h2>
          <div class="section-link">
            <span>You can view Terms and condition here </span>
            <div class="section-links">
              <a href="/t&c.html">view T&C</a>
            </div>
          </div>
         </div>

         <div id="shipping" class="section-sec">
          <h2>Shipping, Order Tracking & Delivery
         </h2>
         <div class="section-link">
           <span>You can track your orders in spiffy </span>
           <div class="section-links">
             <a href="">Track Orders</a>
           </div>
         </div>
         <div>
           <div class="section-Questions">
            What is Spiffy's Shipping Policy?
           </div>
           <div class="section-Questions">
            How do I check the status of my order?
          </div>
          <div class="section-Questions">
            Does Spiffy deliver products outside India?
          </div>
          <div class="section-Questions">
            How can I get my order delivered faster? 
          </div>
          <div class="section-Questions">
            I have received a partial item/partial order or an Untenanted/Void packet?
            Cancellations and Modificatio
          </div>
          <div class="section-Questions">
            What is Spiffy’s Fair Usage Policy?
          </div>
         </div>
     
        </div>
        <div id="cancel" class="section-sec">
          <h2>Cancellations and Modifications
         </h2>
         <div class="section-link">
           <span>You can cancel your order under Spiffy here </span>
           <div class="section-links">
             <a href="">cancel item</a>
           </div>
         </div>
         <div>
           <div class="section-Questions">
            What is Spiffy's Cancellation Policy?
           </div>
           <div class="section-Questions">
            Can I modify the shipping address of my order after it has been placed?
          </div>
          <div class="section-Questions">
            How do I cancel my Order? 
          </div>
          <div class="section-Questions">
            I just cancelled my order. When will I receive my refund?

          </div>
         </div>
     
        </div>

        <div id="retrnex" class="section-sec">
          <h2>Returns and Exchange
         </h2>
         <div class="section-link">
           <span>You can exchange/return your item here </span>
           <div class="section-links">
             <a href="">exchange and return</a>
           </div>
         </div>
         <div>
           <div class="section-Questions">
            What is Spiffy's Return and Exchange Policy? How does it work?

           </div>
           <div class="section-Questions">
            To return a product to Spiffy, please follow these steps:

          </div>
          <div class="section-Questions">
            What is No Questions Asked Returns?
          </div>
          <div class="section-Questions">
            What is Instant Refunds?

          </div>
          <div class="section-Questions">
            Where should I self-ship the Returns?
          </div>
          <div class="section-Questions">
            Why has my return request been declined?
          </div>
          <div class="section-Questions">
            Why is my returned product re-shipped?
          </div>
         </div>
     
        </div>

        <div id="signup" class="section-sec">
          <h2>Sign Up and Login
         </h2>
         <br>
        <div>
          <div class="section-Questions">
            How do I create an account on Spiffy?
          </div>
          <div class="section-Questions">
            Why am I asked for password after entering OTP while trying to login?

          </div>
          <div class="section-Questions">
            Can I still login with password on Spiffy?

          </div>
          <div class="section-Questions">
            What is an alternate mobile number? Why does Spiffy ask for it?

          </div>
          <div class="section-Questions">
            I have given my mobile number in my last order? Can I use that number to log in to Spiffy?
          </div>
          <div class="section-Questions">
            Why am I asked for my credit card details to access my account?

          </div>
          <div class="section-Questions">
            How can i change my mobile number that I use to login on Spiffy?
          </div>
          <div class="section-Questions">
            Why is my account locked?

          </div>
        </div>
        </div>
        <div id="pyment" class="section-sec">
          <h2>Payments
         </h2>
         <div class="section-link">
           <span>You can check refund status of your returns here </span>
           <div class="section-links">
             <a href="">Refund status</a>
           </div>
         </div>
         <div>
           <div class="section-Questions">
            How can I pay for my order at Spiffy?
           </div>
           <div class="section-Questions">
            How does the COD (Cash on Delivery) payment option work?
          </div>
          <div class="section-Questions">
            What is COD limit?

          </div>
          <div class="section-Questions">
            How do I make payment using EMI (Credit Card) option?
          </div>
          <div class="section-Questions">
            What should I do if my payment fails?
          </div>
          <div class="section-Questions">
            How is the GST amount decided?

          </div>
          <div class="section-Questions">
            If I return/cancel the purchased product will the GST/VAT amount charged be refunded?
 
          </div>
         </div>
        </div>


        

        



       </div>
     </div>
   </div>
  <!------------------------------------------------------------------------footer-------------------------------------------------------------------------------------->
  <?php include("Footer.php"); ?>


         
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
    
               

</body>

</html>
   