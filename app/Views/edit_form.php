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

        <h2 class="h2" style="text-align: center;">Modification d'une dépense</h2>
        <div>
            <form method="post" id="addForm" name="addForm" action="<?= site_url('/update') ?>">
                <div class="form-group">
                    <label for="id">Numéro</label>
                    <input type="text" id="id" name="id" class="form-control" value="<?php echo $expense_item['id']; ?>" readonly >
                </div>
                <div class="form-group">
                    <label for="category">Catégorie</label>
                    <select id="category" name="category" class="form-control">
                        <option value="<?php echo $expense_item['category']; ?>" selected><?php echo $expense_item['category']; ?></option>
                        <option value="Alimentation">Alimentation</option>
                        <option value="Restaurants">Restaurants</option>
                        <option value="Loisirs">Loisirs</option>
                        <option value="Transport">Transport</option>
                        <option value="Santé">Santé</option>
                        <option value="Cadeaux">Cadeaux</option>
                        <option value="Famille">Famille</option>
                        <option value="Achats">Achats</option>
                        <option value="Autres">Autres</option>
                    </select>
                    <small id="categoryHelp" class="form-text text-muted">Veuillez sélectionner une catégorie</small>
                </div>
                <div class="form-group">
                    <label for="montant">Montant</label>
                    <input type="number" id="montant" name="montant" class="form-control" value="<?php echo $expense_item['montant']; ?>">
                </div>
                <div class="form-group">
                    <label for="dateTr">Date</label>
                    <input type="date" id="dateTr" name="dateTr" class="form-control" value="<?php echo $expense_item['dateTr']; ?>">
                </div>
                <br>
                <br>

                <button type="submit" class="btn btn-success">Valider</button>
            </form>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>