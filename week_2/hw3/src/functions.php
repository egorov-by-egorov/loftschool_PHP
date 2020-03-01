<?php

function task1()
{

    $fileData = file_get_contents('src/data.xml');
    $dataXML = new SimpleXMLElement($fileData);

    echo '<p>Order: '. $dataXML->attributes()->PurchaseOrderNumber . '<br>' .'Date: ' . $dataXML->attributes()->OrderDate.'</p>';
    echo "<h2>Data order</h2>";
    echo '<table border="1" cellspacing="0">';

    function generateRow ($dataXMLArray, bool $useKey = false)
    {
        if ($useKey) {
            foreach ($dataXMLArray as $key => $value) {
                echo "<td style=\"padding: 5px;\">$key</td>";
            }
        } else {
            foreach ($dataXMLArray as $key => $value) {
                echo "<td style=\"padding: 5px;\">$value</td>";
            }
        }
    }

    for ($i = 0; $i < (count($dataXML->Address) + count($dataXML->Items->Item)); $i++ ) {

        echo '<tr style="background-color: #ccc;padding: 5px;">';

            generateRow($dataXML->Address[$i], TRUE);
            generateRow($dataXML->Items->Item[$i], TRUE);

        echo "</tr>";
        echo "<tr>";

            generateRow($dataXML->Address[$i]);
            generateRow($dataXML->Items->Item[$i]);

        echo "</tr>";
    }

    echo '</table><br>';
    echo $dataXML->DeliveryNotes;
};

function task2()
{
    $dataToOutput = Array();

    for ($i = 0; $i < 10; $i++) {
        array_push($dataToOutput, "string_$i");
    }

    $dataToOutput = json_encode($dataToOutput, JSON_UNESCAPED_UNICODE);

    file_put_contents('src/output.json', $dataToOutput);

    $dataFromOutput = json_decode(file_get_contents('src/output.json'));
    $dataFromOutput2 = $dataFromOutput;

    if (rand(0, 1)) {
        array_push($dataFromOutput2, 'new string');
        echo 'Файл output2 изменен.<br>';
    }

    $dataToOutput2 = json_encode($dataFromOutput2, JSON_UNESCAPED_UNICODE);
    file_put_contents('src/output2.json', $dataToOutput2);

    $dataFromOutput2 = json_decode(file_get_contents('src/output2.json'));

    foreach ($dataFromOutput2 as $value) {
        if (!in_array($value, $dataFromOutput)) {
            echo "Разница: $value<br>";
        }
    }
}

function task3()
{

}