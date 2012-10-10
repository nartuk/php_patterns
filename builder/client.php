<?php
require 'builders/ireportbuilder.php';
require 'builders/htmlreportbuilder.php';
require 'builders/clireportbuilder.php';
require 'builders/barreportbuilder.php';
require 'reportdirector.php';

/*
 *  creaza formatul pentru tipul de raport dorit 
 *  - grafic => obiect de tipul IReportBuilder realizat cu ajutorul clasei BarRaportBuilder
 *  - html   => obiect de tipul IRaportBuilder realizat cu ajutorul clasei HTMLRaportBuilder
 *  - text   => obiect de tipul IRaportBuilder realizat cu ajutorul clasei CliRaportBuilder
 */
 //$builder = new BarReportBuilder(300, 40, '../builder/tmp/image.gif');
 $builder = new HTMLReportBuilder();
 //$builder = new CliReportBuilder();

/*
 * creeaza obiect de tip ReportDirector
 */
 $director = new ReportDirector();

 //$tst = $director->createExpenseReport($builder)
 /*
  * afiseaza tipul de raport pentru obiectul creat
  * 
  */
$director->displayInfo($director->createExpenseReport($builder));
?>