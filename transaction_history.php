<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "icon" href ="././images/logo_img.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History | SANFA</title>
 <style>
        html, body {
            margin: 0px;
            width: 100%;
            height: 100%;    
            overflow: hidden;
        }
        h1{
            text-align: center;
            text-transform: capitalize;
            padding-top:10px;
    
        }
        table {
        width: 800px; 
        border-collapse:collapse; 
        margin:1px auto;
        background-color: rgba(187, 149, 172, 0.548);
        }
        td {
            padding: 20px 10px 15px 15px;
            color: black;
        }
        th {
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-size: 90%;
        text-align: left;
        padding: 20px 10px 15px 15px;
        background-color: #fff;
        }
        tr.even {
        background-color: #efefef;
        }
        tr:hover {
            background-color: #ffff;
            color: rgb(33, 160, 86);    
        }
        table:hover{
        box-shadow: 1px 1px 7px -2px;
        cursor: pointer;
        }
        input{
            background-color: #ffff;
            color: teal;
        }
        input:hover{
        background-color: teal;
        color: #ffff;
        }
        button{
          background: brown;
          
        }
        .buttons{
          padding-left: 45%;
          padding-top: 100px;
          
        }

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}


    </style>
</head>
<body data-vide-bg="././images/3">
    <h1><u>TRANSACTIONS REVIEW</u></h1>
    
    <div>
    <table border="3">

        <tr>
            <th>S.NO</th>
            <th>Date</th>
            <th>UserName</th>
            <th>Credit</th>
            <th>Debit</th>
            <th>Balance</th>
          </tr>
          <tr>
            <td>1</td>
            <td>04-mar-2021</td>
            <td>Peter</td>
            <td>7600</td>
            <td>9800</td>
            <td>$100</td>
          </tr>
          <tr>
            <td>2</td>
            <td>15-apr-2021</td>
            <td>Griffin</td>
            <td>3900</td>
            <td>7890</td>
            <td>$100</td>
          </tr>
          <tr>
            <td>3</td>
            <td>22-sept-2021</td>
            <td>Swanson</td>
            <td>5420</td>
            <td>8741</td>
            <td>$100</td>
          </tr>
          <tr>
            <td>4</td>
            <td>15-dec-2021</td>
            <td>Brown</td>
            <td>1200</td>
            <td>6509</td>
            <td>$100</td>
          </tr>

          <tr>
            <td>5</td>
            <td>14-feb-2021</td>
            <td>starven</td>
            <td>5600</td>
            <td>8910</td>
            <td>$100</td>
          </tr>

          <tr>
            <td>6</td>
            <td>12-jan-2021</td>
            <td>Margou</td>
            <td>1260</td>
            <td>3450</td>
            <td>$100</td>
          </tr>
          <tr>
            <td>7</td>
            <td>05-aug-2021</td>
            <td>Annah</td>
            <td>2000</td>
            <td>2300</td>
            <td>$100</td>
          </tr>
          </table>
    </div>
    <div class="buttons">
      <a href="popup.php"><button class="button">Want to give a REVIEW</button></a>
    </div>
   
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery.vide.js"></script>
    <script src="1.js"></script>
</body>
</html>