<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <title>Money Management</title>

    <style>
        body {
            padding-top: 50px;
        }

        .special {
            padding-top: 50px;
        }

        h4 {
            text-align: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <h2 style="color: blue;">Système de suivi des dépenses💸🤑</h2>
            </div>
        </div>
    </nav>


    <div class="container special">
        <h2 class="h2" style="text-align: center;">Liste des dépenses </h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Catégorie</th>
                        <th>Montant</th>
                        <th>Date de la transaction</th>
                    </tr>
                </thead>
                <tbody>
                <?php $global_amount = 0;?>
                    <?php if (!empty($depenses) && is_array($depenses)) : ?>
                        <?php foreach ($depenses as $depenses_item) : ?>
                            <tr>
                                <td><?= esc($depenses_item['id']) ?></td>
                                <td><?= esc($depenses_item['category']) ?></td>
                                <td><?= esc($depenses_item['montant']) ?> FCFA</td>
                                <td><?= esc($depenses_item['dateTr']) ?></td>
                            </tr>
                            <?php $global_amount += $depenses_item['montant']; ?>
                        <?php endforeach ?>
                    <?php endif ?>
                    
                </tbody>
            </table>
        </div>
        <br><br>
            <h2 style="text-align: center;">Total : <?php echo $global_amount;?> FCFA</h2>

        <br><br>


    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>