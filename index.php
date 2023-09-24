<!DOCTYPE html>
<html>
  <head>
  <title>temperature conversion</title>
<style>
    *{
        margin: 0;
        padding; 0;
        box-sizing: border-box;
        font-family: 'muli';
    }
    h1{
        text-align: center;
        line-height: 20vh;
        color: #6c63ff;
    }
    .main-div{
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: space-around;
        align-items: center;

    }
    .left-side{
        background-color: #dfe6e9;
        /* border-radius: 40% 60% 60% 40% / 30% 30% 70% 70%; */

    }
    .left-side img{
        max-width: 400px;
        height: auto;
        border-radius: 15px solid grey;
        border: 5px;
    }
    .right-side{
        width: 400px;
        height: 300px;
        background-color: #dfe6e9;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .inputs1{
        width: 250px;
        height: 40px;
        padding: 5px;
        outline: none;
        border-radius: 1px solid grey;
        border-radius: 5px;

    }
    .selection{
        width: 100%;
        margin: 20px 0;

    }
    .btn{
        padding: 10px 16px;
        border-radius: 5px;
        outline: none;
        border: none;
        background-color: #6c63ff;
        color: #fff;
        font-size: 0.9rem;
    }
    p{
        margin: 20px 0 0 0;
    }
</style>
  </head>
  <body>
    <header>
        <h1>Temperature Conversion</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="image/img.jpg">

            </div>
            <div class="right-side">
                <form method="POST">
                <input type="text" name="num" placeholder="Enter your number" class="inputs1">
                <div class="selection">
                    <label>celcius</label>
                    <input type="radio" name="units" value="cel">
                    <label>farenheit</label>
                    <input type="radio" name="units" value="feh">

                </div>
                 <input type="submit" name="submit" value="Convert Now" class="btn">

                </form>
                
            
            <div>
                <p>
                    <?php
                    if(isset($_POST['submit'])){
                        $num=$_POST['num'];
                        $temp=$_POST['units'];
                        if($temp=="cel"){
                            $result= $num * 9/5 + 32;
                            echo "The conversion value of cel in faren is " . $result;

                        }else{
                            $result=($num-32) *5/9;
                            echo "The conversion value of faren in cel is " . $result;
                        }
                        
                    }
                  
                    

                    ?>
                </p>
            </div>
            </div>
        </div>
    </header>
  </body>
    
</html>