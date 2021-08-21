<?php

/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<?= $this->Html->script('//cdn.jsdelivr.net/npm/sweetalert2@11') ?>

<script type="text/javascript">
    Swal.fire({
        title: '<?= __('Error') ?>',
        icon: 'error',
        text: '<?= $message ?>',
        showCloseButton: true,
        focusConfirm: true,
        confirmButtonText: '<?= __('Aceptar') ?>'
    });
</script>
