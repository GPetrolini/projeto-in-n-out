<main class="content">
    <?php
        renderTitle(
            'Cadastro de usuários',
            'Mantenha os dados dos usuários atualizados',
            'icofont-users'
        );

        include(TEMPLATE_PATH . '/messages.php');
    ?>

    <a class="btn btn-lg btn-primary mb-3" href="save_user.php">Novo Usuário</a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de admissão</th>
            <th>Data de desligamento</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?= foreach($users as $user): ?>
            <tr>
                <td><?php $users->name ?></td>
                <td><?php $users->email ?></td>
                <td><?php $users->start_date ?></td>
                <td><?php $users->end_date ?></td>
                <td>
                    <a href="save_user.php?update=<?= $user->id ?>"
                       class="btn btn-warning rounded-circle mr-2">
                        <i class="icofont-edit"></i>
                    </a>
                    <a href="?delete=<?= $user->id ?>"
                       class="btn btn-danger rounded-circle">
                        <i class="icofont-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>
