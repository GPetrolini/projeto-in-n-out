<?php

declare(strict_types=1);

session_start();
requireValidSession();

$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);
loadTemplateView('day_records', ['today' => $today]);
