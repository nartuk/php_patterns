<?php
/*
 *  clasa HTMLRaportBuilder implementeaza interfata IReportBuilder
 *  si creaza raportul de tip HTML  
 */
class HTMLReportBuilder implements IReportBuilder
{
    private $_title;
    private $_legend;
    private $_expenses;

    public function addTitle($pTitle)
    {
        $this->_title = htmlentities($pTitle);
    }

    public function addLegend($pLegend)
    {
        $this->_legend = htmlentities($pLegend);
    }

    public function addExpense($pType, $pAmount)
    {
        $this->_expenses .= '<tr><td>'.htmlentities($pType).'</td><td>'.$pAmount.'</td></tr>';
    }

    public function getReport()
    {
       return '<h1>'.$this->_title.'</h1>'
               .'<p>'.$this->_legend.'</p>'
               .'<table bgcolor="#CCCCCC" width="50%" cellspacing="1" cellpadding="2" style="border:1px solid #000000">'
               .'<tr><td>Type de dépense</td><td>Montant</td>'
               .$this->_expenses
               .'</table>';
    }
}