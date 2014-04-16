<?php
/**
 * Author: jestemkaspi
 * Date: 16.04.14
 * Time: 10:35
 */
function __autoload($class)
{
    $filename = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require $filename;
}

$pajonk = new WypokPajonk();
$pajonk->setTags(array('#suchar','#niebylo'));
foreach($pajonk->fetchEntries() as $suchar)
{
    echo "++++++++++++++++ SUCHAR +++++++++++++++++\n";
    echo $suchar['body'] . "\n\n";
}