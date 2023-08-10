<style>
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table>
    <tr>
        <td>X</td>
        <td>X²</td>
    </tr>
<?php 
    for ($i=1; $i <=30 ; $i++) { 
        $x2 = $i * $i;
        echo("<tr>");
        echo("<td>$i</td>");
        echo("<td>$x2</td>");
        echo("</tr>");     
    }
    echo("</table>")
?>