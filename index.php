<?php

$result = '';
$error_msg = '';
 if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation']))
 {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if(!is_numeric($num1) || !is_numeric($num2))
    {
        $error_msg = 'Please enter valid numbers';
    }
    elseif($operation == "div" && $num2 == 0){
        $error_msg = 'Cannot divide by zero';
    }
    else{
 
    switch($operation){
        case "add":
        $result = $num1 + $num2;
        break;  
        case "sub":
         $result = $num1 - $num2;
         break;  
        case "mul":
        $result = $num1 * $num2;
        break;  
        case "div":
        $result = $num1 / $num2;
        break;  
        default:
        $error_msg = "Invalid operatior";
    }
    }
}
 
?>

<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;

}

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container{
    width: 100%;
    max-width: 650px;
    padding: 70px;
    margin-bottom: 30px;
    border: 1px solid black;
    display: flex;
    flex-wrap: wrap;
}

.main-user-info{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

.main-user-info:nth-child(2n){
    justify-content: end;
}

.user-input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
    font-size: 18px;
}

.user-input-box label{
    margin-left: 15px;
    padding: 10px;
}

input{
    margin-bottom: 10px;
    padding: 12px;
    border-radius: 3px;
    border: 1px solid  #dedede;
    text-align: center;
}

.result{
    text-align: center;
    margin-right: 20px;
    padding-top: 30px;
    font-size: 18px;
}

.result label{
    margin-right: 30px;
}

.result input{
    margin: 10px;
    text-align: center;
    width: 100%;
}


.buttons{
  text-align: center;
  margin-bottom: 10px;
  margin-right: 60px;
}

.btn{
    border: none;
    font-size: 16px;
    padding: 20px;
    color: white;
    background-color: #00CC99    ;
    border-radius: 6px;
    cursor: pointer;

}

h3{
    margin-right: 40px;
    font-weight: 90;
}
 
#result{
    border: 1px solid #dedede;
    text-align : center;
    padding: 20px;
    margin: 10px;
    color:black;
}

div p{
    color: red;
    font-size:18px;
    margin: 2px 140px;
}
    </style>

<html>
 <head>
        <title>Calculate two numbers using PHP</title>

 </head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="num1">First Number</label>
                    <input type="text" name="num1" id="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''?>">
                </div>
                <div class="user-input-box">
                    <label for="num2">Second Number</label>
                    <input type="text" name="num2" id="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''?>" />
                </div>
            </div>
                <div class="buttons">
                    <button type="submit" class="btn" name="operation" value="add">+</button>
                    <button type="submit" class="btn" name="operation" value="sub"> - </button>
                    <button type="submit" class="btn" name="operation" value="mul">x</button>
                    <button type="submit" class="btn" name="operation" value="div"> / </button>
                </div>

                <div class="result">
                    <h3>Result</h3>
                    <p id="result"><?php echo $result; ?></p>
                </div>
           
                <div>
                    <p style="color:red; font-size=18px text-align:center margin:10px"><?php echo $error_msg; ?></p>
                </div>

        </form>
    </div>
      
</div>
</div>
</body>
</html>


