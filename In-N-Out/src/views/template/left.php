<aside class="sidebar">
    <nav class="menu mt-3">
        <ul class="nav-list">
            <li class="nav-list">
                <a href="day_records.php" class="link">
                    <i class="icofont-ui-check mr-2"></i>
                    Registrar Ponto
                </a>
            </li>
            <li class="nav-list">
                <a href="../monthly_report.php" class="link">
                    <i class="icofont-ui-calendar mr-2"></i>
                    Relatório Mensal
                </a>
            </li>
            <li class="nav-list">
                <a href="manager_report.php" class="link">
                    <i class="icofont-chart-histogram mr-2"></i>
                    Relatório Gerencial
                </a>
            </li>
            <li class="nav-list">
                <a href="users.php" class="link">
                    <i class="icofont-users mr-2"></i>
                    Usuários
                </a>
            </li>
        </ul>
    </nav>
    <div class="sidebar-widgets">
        <div class="sidebar-widget">
            <i class="icon icofont-hour-glass text-primary"></i>
            <div class="info">
                <span class="main text-primary"
                    <?php $activeClock === 'workedInterval' ? 'active-clock' : '' ?>>
                    <?php $workedInterval ?>
                </span>
                <span class="label text-muted">Horas Trabalhadas</span>
            </div>
        </div>
        <div class="division my-3"></div>
        <div class="sidebar-widgets">
            <div class="sidebar-widget">
                <i class="icon icofont-ui-alarm text-danger"></i>
                <div class="info">
                <span class="main text-danger"
                    <?php $activeClock === 'exitTime' ? 'active-clock' : '' ?>>
                    <?php $exitTime ?>
                </span>
                    <span class="label text-muted">Hora de Saída</span>
                </div>
            </div>
    </div>
</aside>
