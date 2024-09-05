<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visual Acuity Test</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <style>
    .container {
            text-align: center;
          }
          
          #eyeChart {
            margin: 20px auto;
            width: 400px;
            height: 200px;
            border: 1px solid black;
            background: #ffffff;
            font-size: 24px;
            line-height: 1.5;
          }
          .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.val{
     height: 300px;
     width: 300px:
}

#set{
    padding: 200px;
    display: block;

}
#ind, #chart {
            padding: 10px;
            font-size: 16px;
            border-left: black;
            border-top: black;
            border-right: black;
            border-bottom: 3px solid black;
            border-radius: 17px;
            width: 200px;
            height: 40px;
            margin: 10px;
            transition: border-color 0.3s ease-in-out;
            text-align: center;
        }
        /* #ind {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roberto';
            text-align: center;
            align:center;
        }

        #chart {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roberto';
            text-align: center;
        } */
        #sub {
            background-color: rgb(53, 90, 133);
            border: none;
            border-radius: 5px;
            color: #fff;
            font-style: italic;
            margin: 10px;
            font-size: 20px;
            height: 60px;
            width: 120px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out;
            text-align: center;
          
        }

        #sub:hover {
            background-color: rgb(38, 65, 97);
            color: #ffd700;
            transform: scale(1.05);
        }
        #res{
          font-size: 30px;
          font-weight:Bolder;
        }
  </style>

</head>
<script>
  function getValue() {
    const ind= document.getElementById("ind").value;
    console.log("value is ind"+ind);
     switch(ind) {
    case "1":
      text = "20/200 and Worse(Legal blidness in many areas)";
      break;
    case "2":
      text = "20/100 and very severe Impairment";
      break;
    case "3":
      text = "20/80 and Severe Impairment ";
      break;
    case "4":
      text = "20/70 and Moderately severe Impairment ";
      break;
    case "5":
      text = "20/50 Moderate Impairment";
      break;
    case "6":
      text = "20/40 and Minimum for driving in many places, mild Impairment";
      break;
    case "7":
      text = "20/30 and Slightly worse than normal";
      break;
    case "8":
      text = "20/20 and Normal vision";
      break;
    case "9":
      text = "20/15 and  Excellent vision, better than normal.";
      break;
    case "10":
        text = "20/13 and Exceptional vision, better than 20/20.";
        break;
    case "11":
        text = "20/10 and  Exceptional vision, significantly better than normal.";
        break;
    default:
      text = "Input not valid";
  }
  document.getElementById('res').innerHTML = "<p>Visual_Entity: "+text+ "</p>";
  }
</script>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="sampl.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="sampl.php">Home<span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
               
                    <a class="nav-link" href="https://www.aao.org/eye-health/tips-prevention/visual-acuity-3">Details</a>
                </li>
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact us
                    </a> -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                        <a class="dropdown-item" href="https://www.linkedin.com/in/narlakanti-akshith-62944826a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" ><p class="drpdwn">Akshith</p></a>
                    </div>
                </li>
                <li class="nav-item">
                   <a class="nav-link disabled" href="#">Talk to Doctor ?</a>
                </li>
            </ul>
      </div>
    </nav>
  <div class="container">
    <h1>Visual Acuity Test</h1>
    <img align="left padding="50px" src="https://images.ctfassets.net/u4vv676b8z52/3Fj6SBrlvjeZyVTwEfvInd/7a822c59522442778b2d8e1b8dd725a0/eye-charts-330x311.png?fm=jpg&q=80"  width="800px" height="800px"  alt="chart" class="center">
    </div>
    <div class="val">
    <!-- <form id="set"> -->
    <label for="index" style="font-size:30px">Index</label>

    <input type="number" id="ind" name="Index" min="0"  placeholder="Index" style="background-color:rgb(221, 218, 203)"  required><br>
    <label for="Enter_The_ChartLines" style="font-size:30px";padding"50px"> Enter_The_ChartLines</label>
    <input type="text" id="chart" name="Enter_The_ChartLines" min="0"  placeholder="Enter_The_ChartLines" style="background-color:rgb(221, 218, 203)" required>
    <button id="sub" onclick=getValue()>Start</button>
    <p id="res"></p>
    <!-- </div> -->
    </div>
    <!-- <script>
        function getValue() {
    const index= parseFloat(document.getElementById('ind').value);
    // Do something with the value stored in 'ind'
  }
  getValue();
  alert(index);
    </script> -->
  
  <!-- <script src="script.js"></script> -->
</body>
</html>
