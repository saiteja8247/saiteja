<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Tracking Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
</head>
</head>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

    body{ 
    
        /* height: 100%;
            display: flex;
            position: relative;
            padding: 50px;
            
            margin-top: 2px; */
             margin: 0;
             background-image: url(https://cdn.create.vista.com/api/media/small/348058840/stock-photo-colorful-fresh-organic-vegetables-salad-cooking-diet-healthy-food-fall);
            height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
            text-align: center;
    }
    form {
    margin-bottom: 20px;
    /*text-align: center; */
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            color: black;
            font-weight:bold;

            /* font-style: italic; */ 
}
#health-form{
    margin: auto;
  width: 25%;
  /* border: 3px solid green; */
  /* padding: 10px; */
}

input, button {
    display: block;
    margin-bottom: 10px;
}
#exercise,#nutrition,#sleep,#hydration,#date {
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
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="sampl.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href=eye_acuity.php>Eye_acuity<span class="sr-only">(current)</span></a>
                    <!-- eye_acuity.php -->
                </li>
                <li class="nav-item">
               
                    <a class="nav-link" href=selects.php>Records</a> 
                    <!-- selects.php in place of href -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact us
                    </a>
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
         <h1>Health Tracking Application</h1>
        <!-- <img  src="https://cdn.create.vista.com/api/media/small/348058840/stock-photo-colorful-fresh-organic-vegetables-salad-cooking-diet-healthy-food-fall" style="width:100%;"> -->
        <form id="health-form" action="inserts.php" method="post">
       
            <label for="exercise" style="font-size:30px">Minutes of Exercise:</label>
            <input type="number" id="exercise" name="Minutes_of_Exercise" min="0" placeholder="Minutes of Exercise" style="background-color:rgb(221, 218, 203)" required>
            <label for="nutrition" style="font-size:30px">Calories Consumed:</label>
            <input type="number" id="nutrition" name="Calories_consumed" placeholder="Calories consumed" style="background-color:rgb(221, 218, 203)" min="0" required>
            <label for="sleep" style="font-size:30px">Hours of Sleep:</label>
            <input type="number" id="sleep" name="Hours_of_sleep" min="0" step="0.1" placeholder="Hours of sleep" style="background-color:rgb(221, 218, 203)" required>
            <label for="hydration" style="font-size:30px">Glasses of Water Consumed:</label>
            <input type="number" id="hydration" name="Glasses_of_water_consumed" min="0"  placeholder="Glasses of water consumed" style="background-color:rgb(221, 218, 203)" required>
            <label for="date" style="font-size:30px">Date: </label>
            <input type="date" name="Date" id="date"  min="0"  placeholder="Date" style="background-color:rgb(221, 218, 203)" required>
            <button id="sub" type="submit">Log Health Metrics</button>
        </form>

        <div id="result"></div>
    </div>
    <!-- <script src="scripts.js"></script>  -->
     <script>
    document.getElementById('health-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Retrieve health metrics
    const exercise = parseFloat(document.getElementById('exercise').value);
    const nutrition = parseFloat(document.getElementById('nutrition').value);
    const sleep = parseFloat(document.getElementById('sleep').value);
    const hydration = parseFloat(document.getElementById('hydration').value);
    
    // Calculate health status
    const totalScore = (exercise / 30) + (nutrition / 2000) + (sleep / 8) + (hydration / 8);
    let status;
    if (totalScore >= 3) {
        status = 'Healthy';
    } else {
        status = 'Unhealthy';
    }
    const resultElement = document.getElementById('result');
    resultElement.innerHTML = `<p>Total Health Score: ${totalScore.toFixed(2)}</p>
                                <p>Status: ${status}</p>`;

});
</script>


</body>
</html>
