<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    $(function () {
        // Display a success toast, with a title
        $.toast({
            heading: 'Success Message',
            text: '<?= json_encode($message)?>',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3000, 
            stack: 6
          });
    });
</script>
