<style>
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo ("<tr>");
        echo ("<td rowspan = '10'>Tabuada do $i</td>");
        for ($j = 1; $j <= 10; $j++) {
            $tab = $i * $j;
            echo ("<td> $i * $j é $tab</td>");         
            echo ("</tr>");
        }
    }
    echo ("</table>");
    ?>