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
    
    // Display result
    const resultElement = document.getElementById('result');
    resultElement.innerHTML = `<p>Total Health Score: ${totalScore.toFixed(2)}</p>
                                <p>Status: ${status}</p>`;
});

    
//     // Send data to server for logging
    // fetch('inserts.php', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/x-www-form-urlencoded',
    //     },
    //     body: `Minutes_of_Exercise=${exercise}&Calories_consumed=${nutrition}&Hours_of_sleep=${sleep}&Glasses_of_water_consumed=${hydration}`,
    // })
    // .then(response => {
    //     if (!response.ok) {
    //         throw new Error('Network response was not ok');
    //     }
    //     console.log('Records added successfully');
    //     // Display result
    //     const resultElement = document.getElementById('result');
    //     resultElement.innerHTML = `<p>Records added successfully</p>`;
    // })
    // .catch(error => {
    //     console.error('Error logging health metrics:', error);
    //     // Display error message
    //     const resultElement = document.getElementById('result');
    //     resultElement.innerHTML = `<p>Error: ${error.message}</p>`;
    // });
// });

