<?php

/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<?= $this->Html->script('//cdn.jsdelivr.net/npm/sweetalert2@11') ?>

<script type="text/javascript">
    Swal.fire({
        icon: 'info',
        text: '<?= $message ?>',
        showCloseButton: true,
        focusConfirm: true,
        confirmButtonText: '<?= __('Aceptar') ?>'
    });
</script>
