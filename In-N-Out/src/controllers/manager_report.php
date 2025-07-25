<?php

declare(strict_types=1);

session_start();
requireValidSession(true);

$activeUserCount = User::getActiveUserCount();
$absentUsers = WorkingHours::getAbsentUsers();

$yearAndMonth = (new DateTime())->format('Y-m');
$seconds = $absentUsers = WorkingHours::getAbsentUsers($yearAndMonth);
$hoursInMonth = explode(':', getTimeStringFromSeconds($seconds)) [0];

loadTemplateView('manager_report', [
    'activeUserCount'=> $activeUserCount,
    'absentUsers' => $absentUsers,
    'hoursInMonth' => $hoursInMonth
]);
