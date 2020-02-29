<?php

function task1()
{

    $fileData = file_get_contents('src/data.xml');
    $dataXML = new SimpleXMLElement($fileData);
    echo "<p>";
    echo 'Order: '. $dataXML->attributes()->PurchaseOrderNumber . '<br>' .'Date: ' . $dataXML->attributes()->OrderDate;;
    echo "<h2>Data order</h2>";


    echo '<table border="1"><thead style="background-color: #ccc">';

    echo '</thead><tbody>';
    for ($i = 0; $i < (count($dataXML->Address) + count($dataXML->Items->Item)); $i++ ) {
        echo '<tr style="background-color: #ccc">';
            foreach ($dataXML->Address[$i] as $key => $value) {
                echo "<td>$key</td>";
            }
            foreach ($dataXML->Items->Item[$i] as $key => $value) {
                echo "<td>$key</td>";
            }
        echo "</tr>";

        echo "<tr>";
            foreach ($dataXML->Address[$i] as $key => $value) {
                echo "<td>$value</td>";
            }
            foreach ($dataXML->Items->Item[$i] as $key => $value) {
                echo "<td>$value</td>";
            }
        echo "</tr>";

    }
    echo '</tbody></table><br>';
    echo $dataXML->DeliveryNotes;
};