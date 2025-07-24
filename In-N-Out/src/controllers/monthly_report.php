<?php
session_start();
requireValidSession();

$user = $_SESSION['user'];

$registries = WorkingHours::getMonthlyReport($user->Id, new DateTime());

loadTemplateView('monthly_report', [
    'registries' => $registries,
]);
