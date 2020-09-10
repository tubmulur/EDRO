<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class Listeners
	{
	public $strHTML;
	public function __construct($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
		//print_r($_мСлушатели);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$мСлушатели5Мин	=$_мСлушатели['мСлушателиЗаПятьМинут'];
		           unset($_мСлушатели);
		$this->strHTML='
			<activeListeners 
				class="fixed V3 block scrollerY layer_5 BC2 TC2" 
				style="
					left		:0px;
					Width		:100%;
					height		:20px;
					"
				>';
		foreach($мСлушатели5Мин as $чСлушательИД=>$мСлушательПараметры)
			{
			$this->strHTML.='
				<activeListener 
					class="block left BRJ BRL" 
					style="
						height:20px;
						"
					>
					';
					$this->strHTML.='123';
					$this->strHTML.=Tag::strHTML($objKIIM, $мСлушательПараметры['strStyle'], $_мПоиск, 'strStyle');
			$this->strHTML.='
				</activeListener>
				';
			}
		$this->strHTML.='
			</activeListeners>
			';
		$this->strHTML;
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$о	=new Listeners($_objKIIM, $_мСлушатели, $_мПоиск);
		return $о->strHTML;
		}
	}
?>