<main class="content">
    <?php
    renderTitle(
        'Relat�rio Mensal',
        'Acompanhe seu saldo de horas',
        'icofont-ui-calendar'
    );
    ?>
    <div>
        <form class="mb-4" action="#" method="post">
            <div class="input-group">
                <?php if($user->id_admin): ?>
                    <select name="user" class="form-control mr-2" placeholder="Selecione o usu�rio">
                        <option value="">Selecione o usu�rio</option>
                        <?php
                        foreach($users as $user)
                        {
                            $selected = $user === $selectedUserId ? 'selected' : '';
                            echo "<option value='{$user->id}'{$selected}>{$user->name}</option>";
                        }
                        ?>
                    </select>
                <?php endif ?>
                <select name="period" class="form-control" placeholder="Selecione o per�odo">
                    <?php
                    foreach($periods as $key => $month)
                    {
                        $selected = $key === $selectedPeriod ? 'selected' : '';
                        echo "<option value='{$key}' {$selected}>{$month}</option>";
                    }
                    ?>
                </select>
                <button class="btn btn-primary ml-2">
                    <i class="icofont-search"></i>
                </button>
            </div>
        </form>
        
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <th>Dia </th>
            <th>Entrada 1</th>
            <th>Sa�da 1</th>
            <th>Entrada 2</th>
            <th>Sa�da 2</th>
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