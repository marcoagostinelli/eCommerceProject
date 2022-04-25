<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        th {padding-right: 100px;}
        td {padding-right: 100px; padding-bottom: 50px;text-align: center;}
    </style>
    <title><?= _("Browsing History") ?></title>
</head>
<body>
<div class='container' style='margin-top: 3px;'>
    <?php $this->view('shared/menu_bar');?>

    <h1><?= _("My Browsing History") ?></h1><br>

    <table style="border-bottom: solid black; margin-bottom: 25px;">
        <tr><th><?= _("Product Id") ?></th><th><?= _("Product name") ?></th><th><?= _("Date") ?></th></tr>
        <?php
            foreach ($data as $browseHistory) {
                echo "<tr><td>" . _("$browseHistory->product_id") . "</td>
                <td>" . _("$browseHistory->search") . "</td>
                <td>" . _("$browseHistory->date") . "</td></tr>";
            }
        ?>
    </table>
    <form action='' method='post'>
        <input type="submit" name='action' value="<?= _('Clear History') ?>"/>
    </form>
</div>
</body>
</html>