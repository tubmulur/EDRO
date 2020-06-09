<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////   /\ RCe:
   //  <  **> 	
 //     Jl   	
////// 2020	

class EDRO
	{
	public	$objEvent;
	public	$objDesign;
	public	$objReality;
	public	$objObjects;
	//1.Read event;
	//2.Event will be proceed in design cell;
	//3.Get Reality
	//4.Construct objects and display them.
	public function __construct($_objKIIM)
	/*v*/	{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
	/*>*//*>*//*>*//*>*//*>*//*>*//*>*//*>*//*V*/

		$this->objEvent		=new Event($_objKIIM	,$this);	//HFic++
		$this->objDesign	=new Design($_objKIIM	,$this);	//HFic++
		$this->objReality	=new Reality($_objKIIM	,$this);	//HFic++
		$this->objObjects	=new Objects($_objKIIM	,$this);	//HFic++
		echo '<pre>';
		print_r($this);
		echo '</pre>';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));}
	}
?>