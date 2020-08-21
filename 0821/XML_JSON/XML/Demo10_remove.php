<!DOCTYPE HTML>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <title>PHP Sample</title>
</head>

<body>
    <?php
    $doc = new DOMDocument();
    $doc->Load('employees_bak.xml');
    echo $doc->saveXML();
    $xpath = new DOMXPath($doc);
    $entries = $xpath->query("/employees/employee");
    foreach ($entries as $entry) {
        $entry->parentNode->removeChild($entry);
        echo "結果：" . $entry->nodeValue . "<br>";
    }
    echo $doc->saveXML();
    $doc->save("employees_bak.xml");
    ?>

</body>

</html>