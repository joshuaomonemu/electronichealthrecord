<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $systolic = (int)$_POST['systolic'];
    $diastolic = (int)$_POST['diastolic'];

    $state = "";
    $recommendation = "";

    // Evaluate BP range
    if ($systolic < 120 && $diastolic < 80) {
        $state = "Normal Blood Pressure";
        $recommendation = "Maintain a healthy lifestyle (diet, exercise).";
    } elseif ($systolic < 129 && 

$systolic >= 120 && $diastolic < 80) {
        $state = "Elevated Blood Pressure";
        $recommendation = "Lifestyle modifications recommended (reduce salt intake, manage stress).";
    } elseif (($systolic < 139 && $systolic >= 130) || ($diastolic >= 80 && $diastolic < 89)) {
        $state = "Stage 1 Hypertension";
        $recommendation = "Consider antihypertensive medication if at high risk (e.g., diabetes, CKD).";
    } elseif ($systolic >= 140 || $diastolic >= 90) {
        $state = "Stage 2 Hypertension";
        $recommendation = "Start antihypertensive therapy and lifestyle changes. Refer to a cardiologist if severe.";
    } elseif ($systolic >= 180 || $diastolic >= 120) {
        $state = "Hypertensive Crisis";
        $recommendation = "Emergency: Immediate medical intervention required (IV meds, hospital admission).";
    } else {
        $state = "Unclassified";
        $recommendation = "Further evaluation may be necessary.";
    }

    echo "<h3>Your Blood Pressure Status: $state</h3>";
    echo "<p>Recommendation: $recommendation</p>";
}

?>



