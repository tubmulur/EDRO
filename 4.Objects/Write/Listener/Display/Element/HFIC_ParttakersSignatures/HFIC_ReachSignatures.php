<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class HFIC_WorksRespect
	{
	private $arr;
	private $strHTML;
	public function __construct($_objKIIM, $_arrData=array(
							'_strTitle'=>'Test',
							'_strDescription'=>'Test description', 
							'_strCopyrightInfo'=>'....Comming soon',
							'_strLogo'=>'/image.png'
							)
				    )
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$this->arr=$_arrData;
		$this->strHTML='
		<HficArtistsRespect
			class="block abs layer_1_2"
			>
			'.$this->arr['_strCopyrightInfo'].'
			</HficArtistsRespect>';
	
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//print_r($this);
		}
	public static function strHTML($_objKIIM, $_strData)
		{
		$objHficArtistsRespect=new HFIC_WorksRespect($_objKIIM, $_strData);
		return $objHficArtistsRespect->strHTML;
		}
	}
?>