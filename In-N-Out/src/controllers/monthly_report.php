<?php
session_start();
requireValidSession();

$currentDate = new DateTime();

$user = $_SESSION['user'];
$registries = WorkingHours::getMonthlyReport($user->Id, new DateTime());

$report = [];
$workday = 0;
$sumOfWorkedDay = 0;
$lastDay = getLastDayOfMonth($currentDate)->format('d');

for($day = 1; $day <= $lastDay; $day++)
{
    $date = $currentDate->format("Y-m") . '-' . sprintf("%02d", $day);
    $registry = $registries[$date];

    if(isPastWorkday($date)) $workday++;

    if($registry) {
        $sumOfWorkedDay += $registry->worked_time;
        array_push($report, $registry);
    } else {
        array_push($report, new WorkingHours([
            'work_date' => $date,
            'worked_time' => 0
        ]));
    }
}

$expectedTime = $workday * DAILY_TIME;
$balance = getTimeStringFromSeconds(abs($sumOfWorkedTime - $expectedTime));
$sign = ($sumOfWorkedTime > $expectedTime) ? "+" : '-';

loadTemplateView('monthly_report', [
    'report' => $report,
    'sumOfWorkedTime' => $sumOfWorkedTime,
    'balance' => "{$sign}{$balance}"
]);
