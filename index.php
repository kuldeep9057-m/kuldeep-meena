<!DOCTYPE html>
<html lang="en">

<head>

    <title>Basic Banking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- BOOTSTRAP CSS FRAME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">     

       <!--ICON-->
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
 
 .header {
    text-align: center;
   
    background-color:#FFD700;
    height: 100px;
    font-style: bold;
    font-family:sans-serif;
  }
  h2{
   transform: translate(1%, 80%);
   font-family:'Brush Script MT (cursive)';
  }
 .footer {
    background-color:black ;
    height: 70px;
    font-style: italic;

  }
  
 .position {
    margin-top: 200px;
    margin-bottom:200px;
 }

</style>
</head>
<body>
  <?php
  include 'navbar.php';
  ?>
      <header class="header" >
         <div class="col-12 align-self-center">
          
             <h2>Basic Banking System</h2>  
         
        </div>
      </header>

      <div class="container-fluid">
        <div class="row intro py-1" style="background-color: black">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style='color:white'>
                    <h2>Welcome to,</h2><br>
                    <h1>&nbsp The Bank Of Sparks Foundation</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" alt="bankimg" class="img-fluid pt-2">
            </div>
        </div>

        <div class="row activity text-center">
          <div class="col-md act">
                <img src="img/transfer.jpg" alt="transferimg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color: #C86DFB;" >Make a Transaction</button></a>
            </div>

            <div class="col-md act">
                <img src="img/history.jpg" alt="historyimg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color: #C86DFB;">Transaction History</button></a>
            </div>

        </div>

    </div>
      
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 align-self-center">
                        <div style="display: flex;justify-content: center;align-items: center; " class="text-center" >
                            <a class="btn btn-social-icon btn-linkedin"  style="color:white" href="https://www.linkedin.com/in/kuldeep-meena-294bb61a0"><i class="fa fa-linkedin "></i></a>                      
                            <a class="btn btn-social-icon btn-instagram" style="color:white" href="https://www.instagram.com/kuldeep_meena_kkm"><i class="fa fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                      <div class="col-auto" style="color:white">
                         <p> Designed by- <b>Kuldeep Meena</b></p>
                      </div>
                </div>
            </div>
        </footer>

</body>
</html>


        
