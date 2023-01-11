<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title'); ?> - CodeIgniter</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/styles.css">
</head>
<body>

    <?= $this->renderSection('content'); ?>
    
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>