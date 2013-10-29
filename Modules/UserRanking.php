<?php

echo 'ranking<br><br>';

$UserRanking = new UserRanking();
//$UserRanking->useReset = false;
//$UserRanking->useName = false;
$UserRanking->useOnline = true;
var_dump($UserRanking->prepareUserRankingSelectStatement());
var_dump($UserRanking->generateUserRanking());

?>