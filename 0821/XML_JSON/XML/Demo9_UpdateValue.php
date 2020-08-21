<?php
$xmlString =
  '<employees>
    <employee EmpType="SalesManager">
      <lastName>Cashman</lastName>
      <firstName>Briant</firstName>
    </employee>
  </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->loadXML($xmlString);
$root = $doc->documentElement;
$root->setAttribute("id", "001");

$xpath = new DOMXPath($doc);
$etries=$xpath->query("/employees/employee[1]/lastName");
$etries[0]->nodeValue = "aaa";

$etries=$xpath->query("/employees/employee[1]/@EmpType");
$etries[0]->nodeValue = "bbb";

$etries=$xpath->query("/employees/employee[1]/lastName");
$etries[0]->parentNode->removeChild($etries[0]);

header("Content-type: text/xml", true);
echo $doc->saveXML();
