<div id="phpOutput">
<?php
function calculateBMI() {
    $weight = isset($_POST['weight']) ? (float)$_POST['weight'] : null;
    $heightFeet = isset($_POST['height_feet']) ? (float)$_POST['height_feet'] : null;
    $heightInches = isset($_POST['height_inches']) ? (float)$_POST['height_inches'] : null;

    if (!$weight || !$heightFeet || !$heightInches) {
        echo "<script>alert('Please enter valid weight and height.'); window.close();</script>";
        return;
    }

    $totalHeightInches = ($heightFeet * 12) + $heightInches;
    $bmi = ($weight / ($totalHeightInches * $totalHeightInches)) * 703;

    // Generate HTML content for BMI result
    $result = "<h2>BMI Result</h2>";
    $result .= "<p>Weight: $weight lbs</p>";
    $result .= "<p>Height: $heightFeet feet $heightInches inches</p>";
    $result .= "<p>BMI: " . number_format($bmi, 1) . "</p>";

    // Open a new window and display the BMI result
    echo "<script>
            var newWindow = window.open('', 'BMI Result', 'width=400,height=300');
            newWindow.document.write('$result');
          </script>";
}

// Call the function
calculateBMI();
?>
</div>