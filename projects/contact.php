<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Pages</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>


     <style>
         .location{
            color:black;
            max-width:500px;
            padding: 20px;
            background:white;
            font-family:sans-serif;
            border-radius:20px;
            font-size:24px;
            margin-top: 30px;
            box-shadow:0px 0px 1px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

            }
            p{
                font-size:25px;
                color:salmon;
                font-weight:bold;
                }
                h1{
                    color:wheat;
                    text-align:center;
                    text-decoration:underline;

                }
                @media (max-width:600px){
                  .forms{
                  margin: auto;
                  max-width: 600px;
                  margin-top: 100px;
                  box-shadow: 0px 0px 17px;
                  padding: 10px;
                  margin-left: 300px;
                 color: aliceblue;
                 width: 100%;
                 box-sizing: border-box;
                 position: relative;
                  left:-310px;
    
                }
                h1{
                  margin-left:-50px;
                }
                .location{
                  width: 75%;
                }
                p{
                  position: relative;
                  left:-5px;
                }
                textarea{
                    position: relative;
                    left:20px;
                    
                }
                input[type=text]{
                    width: 75%;
                    padding-bottom: 10px;
                    display: block;
                    margin-bottom:10px;
                    position: relative;
                    left:20px;

                }
                textarea{
                  width: 55%;
                }
                input[type=submit]{
                     width: 75%;
                }
                label{
                  margin-left:-30px ;
                }
                  }
                

</style>
</head>


<body style="background-color:black; height:190vh;" >
    <div class="container">
           <div class="delivery" style="color:white">
            <h1>Contactless Delivery</h1>
            <p>
                You see that menu pages then click any food next.
                <br>
                Then below food order pages.
                <br>
                Then fill the Confirm.
                
            </p>
           </div>
           <div class="location" >
             <res-address>
             <span>KFC ADDRESS</span>
                <address>
                  <p1>Coimbatore
                    T.Nagar main road opposite
                    <br>
                    KFC SPICY HALAL FOOD
                    <br>
                     8220655063
                     <br>
                     <offer>
                        Special Spicy
                        <br>
                        offer 50%.
                   </offer>
                  </p1>
               </address>
             </res-address>
</div>
          <form method="post" action="details.php" id="myForm" autocomplete="off">
            <div class="forms" autocomplete="off">
                 <h2>Food Order</h2>
                 <div class="input-section">
                 <div class="input-group">
                    <label>Name:</label>
                     <input type="text" name="name" autocomplete="off" required>
                    </div>
                 <div class="input-group">
                    <label>Mobile Number:</label> 
                    <input type="text" name="num" autocomplete="off" required="">
                 </div>
                 <div class="input-group">
                    <label>Food Name:</label>
                    <input type="text" name="food" autocomplete="off" required>
                 </div>
                 <div class="input-group">
                    <label>Quantitiy:</label>
                    <input type="text" name="quan" autocomplete="off" required>
                 </div>
                 <div class="input-group">
                    <label>Address:</label>
                    <textarea name="add"></textarea>
                 </div>
                 <div class="input-group">
                    <label>Enter food Amount:(Case on delivery only avalibale):</label>
                    <input type="text" name="amount" autocomplete="off" required>
                 </div>
                 <br>
                 <input type="submit" value="Submit">
                 
            </div>
          </div>
            </form>

            </div>
   

              
       
   

</body>
</html>