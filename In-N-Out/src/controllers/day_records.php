<?php
session_start();
requireValidSession();

loadModel('workingHours');

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

$user = $_SESSION['user'];
$userWorkingHours = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records',
    [
        'today' => $today,
        'records' => $records,
    ]);