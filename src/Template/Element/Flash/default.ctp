<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    $(function () {
        // Display a success toast, with a title
        $.toast({
            heading: 'Info',
            text: '<?= json_encode($message)?>',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'info',
            hideAfter: 3000, 
            stack: 6
          });
    });
</script>
