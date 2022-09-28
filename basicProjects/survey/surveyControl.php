<?php

require 'dbConnectPhp.php';

$gelenID = $_SESSION['id'];
$gelenSurveyID = $_POST["submitSurvey"];
$gelenAnswer = $_POST["exampleForm"];

$sorguSurvey = $conn->prepare(" select * from survey WHERE userID=?");
$sorguSurvey -> execute([$gelenID]);
$surveyListele = $sorguSurvey -> fetchall();
$rowSurvey = $sorguSurvey -> rowCount();

$count = 0;

if($rowSurvey > 0 ){
    foreach ($surveyListele as $survey){
        if($gelenSurveyID == $survey["surveyID"]){
            echo $gelenSurveyID . " . anketi zaten tamamladınız";
            break;
        }
        $count++;
    }
    if($rowSurvey == $count){
        $sorguSurvey2 = $conn -> prepare(" INSERT INTO survey SET userID=?,surveyID=?,answer=?");
        $sorguSurvey2 ->execute([$_SESSION['id'],$gelenSurveyID,$gelenAnswer]);
        header('Location: ./survey.php');
    }
}else{
    $sorguSurvey2 = $conn -> prepare(" INSERT INTO survey SET userID=?,surveyID=?,answer=?");
    $sorguSurvey2 ->execute([$_SESSION['id'],$gelenSurveyID,$gelenAnswer]);
    header('Location: ./survey.php');
}




