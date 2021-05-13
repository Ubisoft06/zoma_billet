<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste</title>
    <style>
        
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .table th,
        .table td {
            padding: 0.5rem;
        }
        
        .table thead th {
            border-top: 0;
            padding: 0.75rem;
            border-bottom-width: 1px;
        }
        
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #f2f2f2;
        }
        
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f8f9;
        }
        
        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }
        .logo{
            width: 20%;
        }
        .titre{
            width : 100%;
            text-align: center;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .bt-2{
            border-top:  #f2f2f2 3px solid;
        }
    </style>
</head>
<body>
    <div class="contenu">
        <table class="table">
            <tbody>
                <tr>
                    <td width="30%">
                        <img src="<?php echo public_path('/images/zomatel.png')?>" class="logo" alt="">
                    </td>
                    <td class="text-right">
                        <?php setlocale(LC_ALL, 'fr_FR');
                            $dateNow = ucfirst(strftime('%A %d %B %Y à %H:%M',strtotime(date('Y-m-d h:i'))));
                        ?>
                        <h4><?php echo $dateNow;?></h4>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" colspan="2">
                        <h2>Liste des clients pour le mode de paiement "<?php echo $mode?>"</h2>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Nom du Client</th>
                    <th>Montant</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0;foreach ($client as $key) { ?>
                    <tr>
                        <td><?php echo $key->nom;?></td>
                        <td class="text-right"><?php echo number_format($key->montant, 2, ',', ' '); $total += $key->montant?> Ar</td>
                    </tr>
                <?php }?>
                <tr class="">
                    <td class="text-right bt-2">Total : </td>
                    <td class="text-right bt-2"><?php echo number_format($total, 2, ',', ' ');?> Ar</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>