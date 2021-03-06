<?php
// Load the XML source
$xml = new DOMDocument();
$xml->load("data/feedbacks.xml");
// Load the XSL
$xsl = new DOMDocument();
$xsl->substituteEntities = true;
$xsl->load("feedbackDisplaySpecific.xsl");
// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules
// output
echo $proc->transformToXML($xml);
?>