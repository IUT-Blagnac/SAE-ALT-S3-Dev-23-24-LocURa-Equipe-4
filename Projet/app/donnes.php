<?php
require_once("connexionBaseDeDonnees.php");

if(isset($_POST["request"]))
{
    if($_POST["request"] == "pointsFixesData")
    {
        header('Content-Type: application/json');
        echo json_encode(RecupererDonneesSetup());
    }
    if($_POST["request"] == "rangingData")
    {
        header('Content-Type: application/json');
        echo json_encode(RecupererDonneesRanging());
    }
    if($_POST["request"] == "ancrageData")
    {
        header('Content-Type: application/json');
        echo json_encode(RecupererDonneesComm());
    }
}