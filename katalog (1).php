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
    <p>Vasa korpa sadrzi: <?php echo count( $_SESSION["korpa"]);?> proizvoda</p>
    <a href="?vidi_korpu">Vidi korpu</a>
    <table border="1">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
        <?php
 foreach($proizvodi as $pr):


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
    </table>
</body>

</html>