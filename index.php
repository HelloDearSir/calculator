<!DOCTYPE html>
<html>
<!-- CSS only -->
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<?php include 'cal.php' ?>

<div class="container">
 
        <form method="post">


            <h2 class="text-center">Calculator </h2>

            <div class="container">
                <div class="row">

                    <div class="text-center">
                        <input type="text"    id=" results " placeholder=" <?php echo $result; ?> " disabled>

                    </div>

                </div>
            </div>
            <div class="text-center"> 
                <input type="text" name="num1" placeholder="Enter first number" >

            </div>
            
            <div class="text-center">
                
                <select name="ops">
                    <option value="x">x </option>
                    <option value="-"> - </option>
                    <option value="/">/ </option>
                    <option value="+"> +</option>


                </select>
            </div>
            

            <div class="text-center">
                


                <input type="text" name="num2" placeholder="Enter second number">
            </div>
            <br>
            <div class="text-center">
            <button type="sumbit" name="submit">Calculate  </button>
            </div>
    </div>
    </br>


    </form>


</html>