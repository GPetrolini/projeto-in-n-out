<?php
$errors = [];


if($exception) {
    $message = [
        'type' => 'danger',
        'message' => $exception->getMessage()
    ];
    if(get_class($exception) === 'ValidationException')
    {
        $errors = $exception->getErrors();
    }
}

$alertType = '';

if($message['type'] === 'error')
{
    $alertType = 'danger';
} else {
    $alertType = 'success';
}
?>

<?php if($message): ?>
<div role="alert" class="my-3 alert alert-
        <?php $alertType ?>" >
        <?php $message['message'] ?>
</div>
<?php endif; ?>