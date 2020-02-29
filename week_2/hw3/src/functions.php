<?php

function task1()
{

    $fileData = file_get_contents('src/data.xml');
    $dataXML = new SimpleXMLElement($fileData);

    echo '<p>Order: '. $dataXML->attributes()->PurchaseOrderNumber . '<br>' .'Date: ' . $dataXML->attributes()->OrderDate.'</p>';
    echo "<h2>Data order</h2>";
    echo '<table border="1" cellspacing="0">';

    for ($i = 0; $i < (count($dataXML->Address) + count($dataXML->Items->Item)); $i++ ) {

        echo '<tr style="background-color: #ccc;padding: 5px;">';

            foreach ($dataXML->Address[$i] as $key => $value) {
                echo "<td style=\"padding: 5px;\">$key</td>";
            }

            foreach ($dataXML->Items->Item[$i] as $key => $value) {
                echo "<td style=\"padding: 5px;\">$key</td>";
            }

        echo "</tr>";
        echo "<tr>";

            foreach ($dataXML->Address[$i] as $key => $value) {
                echo "<td style=\"padding: 5px;\">$value</td>";
            }

            foreach ($dataXML->Items->Item[$i] as $key => $value) {
                echo "<td style=\"padding: 5px;\">$value</td>";
            }

        echo "</tr>";
    }

    echo '</table><br>';
    echo $dataXML->DeliveryNotes;
};