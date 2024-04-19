<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMI Calculator</title>
</head>

<body>
  
<link rel="stylesheet" type="text/css" href="style.css"> 

<h2>Body Mass Index Calculator</h2>

<div id="calculator">
  <p>Your Height:</p> 
  <div id="info"> 
    
    <label for="height_feet">Feet:</label>
  </div>
    <input type="text" id="height_feet">
  <div id="info">
    <label for="height_inches">Inch(es):</label>
  </div>
    <input type="text" id="height_inches">
    <p>Your Weight</p>
  <div id="info">
    <label for="weight">Pounds:</label>
  </div>
    <input type="text" id="weight">
    <input type="button" value="Calculate" onclick="calculateBMI()">
   
</div>

<div id="result">
  <script>
  function calculateBMI() {
      var weight = parseFloat(document.getElementById('weight').value);
      var heightFeet = parseFloat(document.getElementById('height_feet').value);
      var heightInches = parseFloat(document.getElementById('height_inches').value);
      var resultDiv = document.getElementById('result');
      var calculatorDiv = document.getElementById('calculator');
      var otherElements = document.querySelectorAll('h2, p, table');
      
      if (!weight || !heightFeet || !heightInches) {
          resultDiv.innerHTML = "Please enter valid weight and height.";
          return;
      }
  
      var totalHeightInches = (heightFeet * 12) + heightInches;
      var bmi = (weight / (totalHeightInches * totalHeightInches)) * 703;
      var result = "Your BMI is " + bmi.toFixed(1) + ". ";
      
      if (bmi < 18.5) {
          result += "You are underweight";
      } else if (bmi >= 18.5 && bmi < 25) {
          result += "You are normal weight";
      } else if (bmi >= 25 && bmi < 30) {
          result += "You are overweight";
      } else {
          result += "You are obese";
      }
      
      // Display inputted values
      result += "<br>Height: " + heightFeet + "'" + heightInches + "&#x0022";
      result += "<br>Weight: " + weight + " lbs<br>";
      
  
      resultDiv.innerHTML = result; // Display result in the div
      
      // Hide calculator and other unnecessary elements
      calculatorDiv.style.display = 'none';
      otherElements.forEach(element => {
          element.style.display = 'none';
      });
  }
</script>
</div>

<div id="p">
  <p>IT300, The University of Kansas, Edwards Campus</p>
</div>

<table>
  <tr>
    <td>Underweight</td>
    <td>&lt; 18.5</td>
  </tr>
  <tr>
    <td>Normal Weight</td>
    <td>18.5-24.9</td>
  </tr>
  <tr>
    <td>Overweight</td>
    <td>25-29.9</td>
  </tr>
  <tr>
    <td>Obesity</td>
    <td>30 or greater</td>
  </tr>
</table>

</body>
</html>
