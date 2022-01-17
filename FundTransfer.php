<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="./images/logo_img.jpg">
    <title>Funds Transfer | SANFA </title>
    <link rel="stylesheet" href="1.css">
    
  </head>
  <style>
    .button {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 1px;
    cursor: pointer;
    height: 20px;
    width: 20px;
    }
    
    .fb9 {
      border: 1px solid #3366FF;
      background-color: #B3C6FF;
      width:150px;
      height:30px;
    }

  </style>

  <body data-vide-bg="././images/3">
    <form id="myform" action="personal.php">
      <div class="form-header">
        <img src="./images/logo_img.jpg" alt="logo">
        <h1>TRANSFER PORTAL</h1>
        <h2>ENTER THE NECESSARY INFO</h2>
        
      </div>
      <div class="input-container">
        <input type="text" placeholder="Your Account Number">
      </div>
      <div class="input-container">
        <input type="text" placeholder="Account Number to Send">
      </div>
      <div>
        <label style="font-size: larger;">Please Select the amount you want to transfer</label><br>
        <input  id=demoInput1 type="number"  min=0 max=9 style="width: 25px; margin:2px 0px ;"> 
        <input  id=demoInput2 type="number" min=0 max=9 style="width: 25px; margin: 2px 0px ;"> 
        <input  id=demosInput3 type="number" min=0 max=9 style="width: 25px; margin: 2px 0px;">
        <input  id=demoInput4 type="number" min=0 max=9 style="width: 25px; margin:2px 0px ;"> 
        <input  id=demosInput5 type="number" min=0 max=9 style="width: 25px; margin: 2px 0px;">
        <input  id=demoInput6 type="number" min=0 max=9 style="width: 25px; margin:2px 0px ;"> 
        <input  id=demoInput7 type="number" min=0 max=9 style="width: 25px; margin: 2px 0px;"><br>
      </div>

      <div class="input-container">
          <input type="text" placeholder="Amount in words">
      </div>
      <div class="input-container">
        <label style="font-size: larger;">Please Select the reason for transfer</label><br>
        <select name="Reasons" id="reason">
            <option value="0">Loan</option>
            <option value="1">Card Bill Payment</option>
            <option value="2">Education Fee Payment</option>
            <option value="3">Donations or Charity</option>
            <option value="4">Rental Payment</option>
            <option value="5">Recreational Reasons</option>
            <option value="6">Supplier and Distributer Payment</option>
            <option value="7">Other</option>
        </select>
      </div>
       
      <div class="g-recaptcha" data-sitekey="6LdcwBseAAAAAIiK0Jqjxt6SoGpPbgERS-um1XZe"></div>      

      <div class="input-container">
        <input onclick="myFunction()" type="submit" value="Transfer" >
      </div>

    </form>
    <div>
      <a href="personal.php">Back Home</a>
    </div>
    <script>
      
      
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery.vide.js"></script>
    <script src="1.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </body>
</html>