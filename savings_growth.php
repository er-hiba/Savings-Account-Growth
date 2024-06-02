<html>
<body>

<table border="1" cellspacing="0" cellpadding="5" width="450" style="text-align:center; margin: 20px 0 0 20px">
    <tr>
        <th>Age</th>
        <th>Account Balance</th>
    </tr>

    <?php
    $balance = 1000;
    $interest_rate = 0.02;


    for ($year = 1; $year <= 20; $year++){
        $balance += $balance * $interest_rate;
    ?>

        <tr>
            <td><?php echo $year; ?></td>
            <td><?php echo number_format($balance, 2); ?> DH</td>
        </tr>

    <?php } ?>
</table>

</body>
</html>
