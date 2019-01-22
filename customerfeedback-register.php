<?php
include("customerrequiredfiles.php");

if(isset($_POST["register_customerfeedback"]))
{
    $restaurant = isset($_POST["restaurant"]) ? mysqli_real_escape_string($conn, $_POST["restaurant"]) : null;
    $rating = isset($_POST["rating"]) ? mysqli_real_escape_string($conn, $_POST["rating"]) : null;
    $feedback = isset($_POST["feedback"]) ? mysqli_real_escape_string($conn, $_POST["feedback"]) : null;

    if(empty($rating)) {
        unset($_SESSION["cutomerfeedbackmessage"]);
        $_SESSION["cutomerfeedbackerror"] = "Please select rating....!";
        header('Location:customer-feedback.php');
    }

    $customerfeedbackquery = "INSERT INTO `customer_feedbacks` (`restaurant_id`, `rating`, `feedback`) VALUES ('" . $restaurant . "', '" . $rating . "', '" . $feedback . "')";

    $customerfeedbackresult = mysqli_query($conn, $customerfeedbackquery);
    $count = mysqli_affected_rows($conn);

    if ($count) {
        unset($_SESSION["cutomerfeedbackerror"]);
        $_SESSION["cutomerfeedbackmessage"] = "Customer Feedback Inserted Successfully..!";
        header('Location:customer-feedback.php');
    } else {
        $_SESSION["cutomerfeedbackerror"] = "Some went wrong....!";
        header('Location:customer-feedback.php');
    }

}