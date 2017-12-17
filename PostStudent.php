<?php
/**
 * Created by PhpStorm.
 * User: TSS
 * Date: 15/11/2017
 * Time: 10:54
 */
    $Navn = $_POST['Navn'];

    $Alder = $_POST['Alder'];

$wsdl = "http://localhost:50967/Service1.svc?wsdl";
$client = new SoapClient($wsdl);

//print_r($client);

$parametersToSoap = array('alder' => $Alder, 'navn' => $Navn);
$resultWrapped = $client->Addstudent($parametersToSoap);
$ReturnStudent = $resultWrapped -> AddstudentResult;

print_r($ReturnStudent);
require_once 'vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('View/');
$twig = new Twig_Environment($loader, array('auto_reload' => true));

$template = $twig->loadTemplate('PostStudentResult.html.twig');


$parametersToTwig = array('Students' => $ReturnStudent);
print $template->render($parametersToTwig);
?>