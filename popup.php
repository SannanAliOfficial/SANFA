[11:21 PM, 1/17/2022] .: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    transition: all .2s linear;
    text-transform: capitalize;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.container{
    min-height: 100vh;
    background:#eee;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn{
    color:#fff;
    background:#ff6933;
    box-shadow: 0 5px 10px rgba(0,0,0,.3);
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover{
    background:#ff4400;
}

.btn:active{
    transform:scale(.90);
}

#button{
    font-size: 25px;
    height:60px;
    width:250px;
}

.popup-container{
    position: fixed;
    top:-120%; left:0;
    z-index: 1000;
    background:rgba(0,0,0,.3);
    display: flex;
    align-items: center;
    justify-content: center;
    height:100%;
    width:100%;
}

.popup-container.toggle{
    top:0%;
}

.popup-container .popup{
    background:#fff;
    text-align: center;
    margin:10px;
    padding:10px;
    box-shadow: 0 5px 10px rgba(0,0,0,.5);
    border-radius: 5px;
    position: relative;
}

.popup-container .popup h3{
    color:#444;
    padding:20px 40px;
    font-size: 25px;
}

.popup-container .popup .btn{
    margin:30px;
    font-size: 20px;
    height:40px;
    width: 150px;
}

.popup-container .popup input[type="radio"]{
    display: none;
}

.popup-container .popup .icons{
    padding:10px;
}

.popup-container .popup .icons label{
    font-size: 50px;
    cursor: pointer;
    opacity: .4;
}

.popup-container .popup .icons:hover label{
    opacity: .2;
}


.popup-container .popup #btn1:checked ~ .icons label:nth-child(1),
.popup-container .popup #btn2:checked ~ .icons label:nth-child(2),
.popup-container .popup #btn3:checked ~ .icons label:nth-child(3),
.popup-container .popup #btn4:checked ~ .icons label:nth-child(4),
.popup-container .popup #btn5:checked ~ .icons label:nth-child(5),
.popup-container .popup .icons label:hover{
    opacity: 1;
    font-size: 60px;
}

.popup-container .popup #close{
    position: absolute;
    top:-15px; right:-15px;
    border-radius: 50%;
    border:4px solid #ff6933;
    height:40px;
    width:40px;
    line-height: 35px;
    cursor: pointer;
    background:#333;
    color:#fff;
    font-size: 20px;
}

.popup-container .popup #close:hover{
    transform: rotate(90deg);
}
</style>
<body>
    <div class="container">
        <button onclick="toggle()"  id="button" class="btn">REVIEW</button>
    </div>
    
    <div class="popup-container">
    
        <div class="popup">
    
            <h3>How do you like our Services</h3>
    
            <input type="radio" name="buttons" id="btn1">
            <input type="radio" name="buttons" id="btn2">
            <input type="radio" name="buttons" id="btn3">
            <input type="radio" name="buttons" id="btn4">
            <input type="radio" name="buttons" id="btn5">
    
            <div class="icons">
                <label for="btn1">🙁</label>
                <label for="btn2">😐</label>
                <label for="btn3">😊</label>
                <label for="btn4">😀</label>
                <label for="btn5">😍</label>
            </div>
    
            <a href="personal.php">
            <input type="submit" value="submit" class="btn"></a>
    
            <div onclick="toggle()" id="close">✖</div>
    
        </div>
    
    </div>
    <script>

        function toggle(){
         
         let toggle = document.querySelector('.popup-container')
        
         toggle.classList.toggle('toggle');
        
        }
        
        </script>        
      

</body>
</html>