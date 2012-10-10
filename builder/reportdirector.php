<?php
class ReportDirector
{

	/* 
 	*  metoda pentru creerea tipul de raport dorit in care se paseaza un
 	*  obiect de tipul IReportBuilder ( clase care implementeaza interfata IReportBuilder )
 	*  
 	*  clase ce implementeaza IReportBuilder => BarReportBuilder  ( format grafic )
 	*                                        => CliReportBuilder  ( format text   )
 	*                                        => HTMLReportBuilder ( format HTML   )  
 	*/	
   public function createExpenseReport(IReportBuilder $pReportBuilder) {
        
   		// incarca datele din metoda statica getExpenseData()
   		$data = ReportDirector::getExpenseData();
   		
   		// creaza titlul pentru obiectul de tip IReportBuilder
   		$pReportBuilder->addTitle($data['meta']['title']);
   		
   		// create legenda pentru obiectul de tip IReportBuilder
        $pReportBuilder->addLegend($data['meta']['legend']);
		
        // incarca liniile de date pentru obiectul de tip IReportBuilder
        foreach ($data['datas'] as $line){
            $pReportBuilder->addExpense($line['type'], $line['amount']);
        }
        
        return $pReportBuilder;
    }
	
    /*
     *  metoda pentru stocarea datelor ( echivalenta unei baze de date )
     */
    protected static function getExpenseData()
    {
    	
        return array('meta'=>array('title'=>'Déepenses mensuelles', 'legend'=>'Mois de Janvier 2011'),
                     'datas'=>array(
                                    array('type'=>'Livres', 'amount'=>157),
                                    array('type'=>'Matériel', 'amount'=>200),
                                    array('type'=>'Services', 'amount'=>377),
                                    array('type'=>'Boissons', 'amount'=>50)
                                   )
                    );
    }
	
    /*
     *  metoda pentru afisarea datelor in functie de tipul de raport dorit
     *  obiectul primit ca parametru este un obiect de tipul IReportBuilder 
     */
    public function displayInfo(IReportBuilder $pReportBuilder){
    	
    	echo $pReportBuilder->getReport();
    }
}