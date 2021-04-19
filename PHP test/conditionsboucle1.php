<!DOCTYPE html>
<html>
        <head>
            <title>PREMIERS PAS EN PHP</title>

        </head>

        <body> 

    <?php
    
    for ($nombre = 1; $nombre <= 150; $nombre++) {
        echo "$nombre";
        echo "<br />";
        $nombre++;
    }


    $x = 1;
do {
    echo "$x - Je dois faire des sauvegardes régulières de mes fichiers.<br>";
    $x++;
} while ($x <= 500);

  

    ?>
<br>
<table class="highlight centered responsive-table">
    <thead>
        <tr>
            <th></th>
            <?php
            $x = 0;
            while ($x <= 12) {
            ?>
                <th><?= $x ?></th>
            <?php
                $x++;
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $y = 0;
        while ($y <= 12) {
        ?>
            <tr>
                <td>
                    <?= $y ?>
                </td>
                <?php
                $x = 0;
                while ($x <= 12) {
                ?>
                    <td>
                        <?= $x * $y ?>
                        <?php $x++; ?>
                    </td>
                <?php
                } 
                ?>
            </tr>
        <?php
        $y++;
        }
        ?>
    </tbody>
</table>



        </body>
</html>