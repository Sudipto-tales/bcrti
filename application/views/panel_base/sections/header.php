        <meta charset="utf-8" />
        <!-- App favicon -->
        <title><?php echo $page_name? $page_name : " "?> | <?php echo $site_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin CRM Panel for management of Scripts developed by Infovue Solutions" name="description" />
        <meta content="Infovue Solutions" name="author" />
        <meta content="IRMS Panel" name="name" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/ir_logo.png">
        <meta name="<?=$this->security->get_csrf_token_name()?>" content="<?=$this->security->get_csrf_hash()?>"/>