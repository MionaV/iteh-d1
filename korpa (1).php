<html>
<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid black;
    }
</style>

<body>
    <h1>Korpa</h1>
    <table>
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Ukupno:</td>
                <td>800</td>
            </tr>
        </tfoot>
        <tbody>
        <tbody>
        <?php
 foreach($korpa_proizvodi as $pr):


?>
            <tr>
                <td>Laptop</td>
                <td>500</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $pr['id'];?>">
                        <input type="submit" name="submit" value="Kupi">
                    </form>
                </td>
            </tr>
            <?php endforeach;?>

            
              

        </tbody>
        </tbody>
    </table>
    <p>Nema proizvoda u korpi</p>
    <form method="post" action="?">
        <p>
            <a href="?">Nastavi sa kupovinom</a>
            <input type="submit" name="submit" value="Isprazni">
        </p>
    </form>
</body>

</html>