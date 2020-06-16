<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////   /\ RCe	[E] Event
   //  <  **> 	[D] Device
 //     Jl   	[R] Reality
////// 2020	[O] Objects

class Objects
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>'', '_intShowTempo'=>'' ));

		//echo'<pre>';
		//	print_r($this->arrEDRO['arrObjects']);
		//echo'</pre>';
		foreach($this->arrEDRO['arrObjects'] as $strObjectName=>$arrObjectEDRO)
			{
			//echo $strObjectName;
			$this->arrEDRO['arrObjects'][$strObjectName]['arrEvent']=$this->arrEDRO['arrEvent'];
			//echo'<pre>';
			//print_r($this->arrEDRO['arrObjects'][$strObjectName]);
			//echo'</pre>';
			}
		//$obj=$_obj;
		//unset($_obj);
		//$this->strClass		=ucfirst(substr($obj->objEvent->strAction,1));
		//$this->strMethod	='strHTML';
		///$this->strParams	=$obj->objEvent->arrParams;
		//$this->obj		=$this->strClass::$this->strMethod($objKIIM, $this->strParams);
		//$strName		=$_arr['_strName'];
		//$strMethod		=$_arr['_strMethod'];
		//$arrData		=$_arr['_arrData'];

		//$strName::$strMethod($objKIIM, $arrData);
		//print_r($_arr['_arrMethodData']);
		//$object=new$_arr['']
		//quire_once('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/3.HTML_CloseInterface.php');

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
?>