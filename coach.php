<?php
require_once("util-db.php");
require_once("model-coach.php");

$pageTitle = "Coaches";
include "view-header.php";
$coach = selectcoach();
include "view-coach.php";
include "view-footer.php";
?>
