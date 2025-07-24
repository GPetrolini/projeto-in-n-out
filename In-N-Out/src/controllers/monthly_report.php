<?php
session_start();
requireValidSession();

$currentDate = new DateTime();

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$users = null;
if($user->is_admin)
{
    $users = User::get();
    $selectedUserId = $_POST['user'] ? $_POST['user'] :
}

$selectedPeriod = $_POST['period'] ? $_POST['period'] : $user->id;
$periods = [];
for($yearDiff = 0; $yearDiff <= 2; $yearDiff++) {
    $year = date('Y') - $yearDiff;
    for($month =12 ; $month >= 1; $month--) {
        $date = new DateTime("{$year}-{$month}-01");
        $periods[$date->format('Y-m')] = strftime('%B de %Y', $date-getTimestamp());
    }
}

$registries = WorkingHours::getMonthlyReport($selectedUserId, $selectedPeriod);

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
    'sumOfWorkedTime' => getTimeStringFromSeconds($sumOfWorkedTime),
    'balance' => "{$sign}{$balance}",
    'selectedPeriod' = $selectedPeriod,
    'periods' => $periods,
    'users' => $users,
    'selectedUserId' => $selectedUserId
]);
