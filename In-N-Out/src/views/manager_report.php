<main class="content">
    <?php
        renderTitle(
            'Relat�rio Gerencial',
            'Resumo das horas trabalhadas dos funcion�rios',
            'icofont-chart-histogram'
        );
    ?>


    <div class="summary-boxes">
        <div class="summary-box bg-primary">
            <i class="icofont-users"></i>
            <p class="title">Qtde de funcion�rios</p>
            <h3 class="value"><?php $activeUsersCount ?></h3>
        </div>
        <div class="summary-box bg-danger">
            <i class="icofont-patient-bed"></i>
            <p class="title">Faltas</p>
            <h3 class="value"><?php $absentUsers ?></h3>
        </div>
        <div class="summary-box bg-success">
            <i class="icofont-sand-clock"></i>
            <p class="title">Horas Trabalhadas no Mes</p>
            <h3 class="value"><?php $hoursInMonth ?></h3>
        </div>
    </div>
    <?php  if(count($absentUsers) > 0) : ?>
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title"> Faltosos do Dia</h4>
                <p class="card-category">Rela��o dos funcion�rios que n�o bateram ponto</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Nome</th>
                    </thead>
                    <tbody>
                        <?php foreach($absentUsers as $name): ?>
                            <tr>
                                <td><?php $name ?></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif?>
</main>