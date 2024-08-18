<html>
    <head>
        <title>Document loaded</title>
    </head>
    <body>
        <?php foreach ($data as $value): ?>
            <img src="<?php echo base_url('assets/documents/admit/' . $value['admit_filepath']); ?>">
        <?php endforeach; ?>
    </body>
</html>
