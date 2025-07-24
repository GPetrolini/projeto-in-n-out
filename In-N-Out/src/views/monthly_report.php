<main class="content">
    <?php
    renderTitle(
        'Relatório Mensal',
        'Acompanhe seu saldo de horas',
        'icofont-ui-calendar'
    );
    ?>
    <div>
        <form class="mb-4" action="#" method="post">
            <select name="period" class="form-control" placeholder="Selecione o período">
                <?php
                    foreach($periods as $key => $month)
                    {
                        echo "<option value='{$key}'>{$month}</option>";
                    }
                ?>
            </select>
        </form>
        
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <th>Dia </th>
            <th>Entrada 1</th>
            <th>Saída 1</th>
            <th>Entrada 2</th>
            <th>Saída 2</th>
            <th>Saldo </th>
            </thead>
            <tbody>
            <?php foreach($report as $registry): ?>
                <tr>
                    <td><?php formatDateWithLocale($registry->work_date, '%A, %d de %B de %Y') ?></td>
                    <td><?php $registry->time1 ?></td>
                    <td><?php $registry->time2 ?></td>
                    <td><?php $registry->time3 ?></td>
                    <td><?php $registry->time4 ?></td>
                    <td><?php $registry->getBalance()?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="bg-primary text-white">
                <td>Horas Trabalhadas</td>
                <td colspan="3"><?php $sumOfWorkedTime ?></td>
                <td>Saldo Mensal</td>
                <td><?php $balance ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</main>