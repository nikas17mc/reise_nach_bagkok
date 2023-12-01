<?php
# ------------------ Information to the Form ------------------------------
$departureLocation_opt = [1 => "Berlin-Tegel", 2 => "Frankfurt am Main", 3 => "München", 4 => "DUS", 5 => "Hamburg", 6 => "Stuttgard", 8=>"Köln / Bonn"];
$drive_opt = [1 => "Auto", 2 => "Bus", 3 => "Schiff (Fähre)", 4 => "Zug", 5 => "Flugzeug", 6 => "Fahrrad"];
$star_opt = [1 => "⭐", 2 => "⭐⭐", 3 => "⭐⭐⭐", 4 => "⭐⭐⭐⭐", 5 => "⭐⭐⭐⭐⭐"];
$excursion_opt = ["beach" => "Strandausflug", "city" => "Stadtbesichtigung", "adventure" => "Abenteuertour"];
$extras_opt = ["guide" => "Reiseleiter", "meals" => "Verpflegungspaket", "activities" => "Zusätzliche Aktivitäten"];
$departureLocation = isset($_POST["departureLocation"]) ? $departureLocation_opt[$_POST["departureLocation"]] : null;
$drive = isset($_POST["drive"]) ? $drive_opt[$_POST["drive"]] : null;
$star = isset($_POST["star"]) ? $star_opt[$_POST["star"]] : null;
$excursion = isset($_POST["excursion"]) ? $excursion_opt[$_POST["excursion"]] : null;
$extras = isset($_POST["extras"]) ? $extras_opt[$_POST["extras"]] : null;
$participants = isset($_POST["participants"]) && is_numeric($_POST["participants"]) ? $_POST["participants"] : null;
$departureDate = isset($_POST["departureDate"]) && is_numeric($_POST["departureDate"]) ? $_POST["departureDate"] : null;
$tripDuration = isset($_POST["tripDuration"]) && is_numeric($_POST["tripDuration"]) ? $_POST["tripDuration"] : null;
# -------------------------------------------------------------------------



# --------------------- Math Logic ----------------------------------------
$depLocTime= "ca. 12h";
$travelCost=0;
?>