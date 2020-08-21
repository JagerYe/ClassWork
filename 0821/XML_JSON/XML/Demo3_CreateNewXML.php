<?php
$doc = new DOMDocument("1.0", "utf-8");
$root = $doc->createElement("HTML");//創造標籤
$root2 = $doc->createElement("CSS");

$doc->appendChild($root);//遷入
$root->appendChild($root2);
echo htmlspecialchars($doc->c14n());
?>
