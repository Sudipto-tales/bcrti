<?php

function modal_close($arg){
    if ($arg) {
        ?>
        <div class="alert alert-warning">
          <strong>Status!</strong> Updated Successfully.</b>
          <script>
            function reload_close() {
              parent.location.reload();
              parent.closeModal();
            }
            setTimeout(reload_close, 1000);
          </script>
        </div>
      <?php
      } else {
      ?>
        <div class="alert alert-danger">
          <strong>Status!</strong> Updated Failed.</b>
          <script>
            function reload_close() {
              parent.location.reload();
              parent.closeModal();
            }
            setTimeout(reload_close, 1000);
          </script>
        </div>
      <?php
      }
}

?>