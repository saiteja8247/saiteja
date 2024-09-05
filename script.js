
// var x = document.getElementById("ind").value;
// alert(5+6);

function getValue() {
    // const ind= document.getElementById("ind").value;
    console.log("value is ind");
  // switch(ind) {
  //   case "1":
  //     text = "20/200";
  //     break;
  //   case "2":
  //     text = "20/100";
  //     break;
  //   case "3":
  //     text = "20/70";
  //     break;
  //   case "4":
  //     text = "20/50";
  //     break;
  //   case "5":
  //     text = "20/40";
  //     break;
  //   case "6":
  //     text = "20/30";
  //     break;
  //   case "7":
  //     text = "20/25";
  //     break;
  //   case "8":
  //     text = "20/20";
  //     break;
  //   case "9":
  //     text = "20/15";
  //     break;
  //   case "10":
  //       text = "20/13";
  //       break;
  //   case "11":
  //       text = "20/10";
  //       break;
  //   default:
  //     text = "Input not valid";
  // }
  // document.getElementById('res').innerHTML = "<p>Visual_Entity: "+text+ "</p>";

}

// const eyeChartLines = [
//     "E F P T O Z L P",
//     "F E D P E C F D",
//     "T D E L O P E C",
//     "O P E F D C T E",
//     "Z C O D E F L O",
//     "L F T E P E O D",
//     "P D L F E T Z P",
//     "E C P O D E F T"
//   ];
  
//   const visualAcuityLevels = ["20/200", "20/100", "20/70", "20/50", "20/40", "20/30", "20/25", "20/20"];
  
//   function generateEyeChart() {
//     const eyeChart = document.getElementById("eyeChart");
//     eyeChart.innerHTML = "";
//     eyeChartLines.forEach(line => {
//       const row = document.createElement("div");
//       row.textContent = line;
//       eyeChart.appendChild(row);
//     });
//   }
  
//   function startTest() {
//     generateEyeChart();
//     const results = document.getElementById("results");
//     results.textContent = "";
//     const input = prompt("Enter the smallest line you can read (e.g., E, F, P, T, O, Z, L, C)");
//     const index = eyeChartLines.findIndex(line => line.includes(input.toUpperCase()));
//     if (index !== -1) {
//       const visualAcuity = visualAcuityLevels[index];
//       results.textContent = `Your visual acuity is approximately ${visualAcuity}.`;
//     } else {
//       results.textContent = "Invalid input. Please try again.";
//     }
//   }
  