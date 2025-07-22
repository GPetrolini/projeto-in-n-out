<?php
if($exception) {
    $message = [
        'type' => 'danger',
        'message' => $exception->getMessage()
    ];
}
?>

<?php if($message): ?>
<div class="my-3 alert alert-danger" role="alert">
        <?= $message['message'] ?>
</div>
<?php endif; ?>