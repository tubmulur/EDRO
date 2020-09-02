<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class Image
	{
	public $strHTML;
	public function __construct($_objKIIM, $_arrData=array(
			'_strName'	=>'',
			'_strLink'	=>'',
			'_strAlt'	=>'',
			'_strTitle'	=>''
			)
		)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$strName	=$_arrData['_strName'];
		$strAlt		=$_arrData['_strName'];
		$strLink	=$_arrData['_strLink'];
		$bHasShader	=$_arrData['_bHasShader'];
		if(!$strLink)
			{
			//$this->strHTML='
			//	<img 
			//		src="https://sun9-2.userapi.com/c857732/v857732477/1c4842/20Wss9qXdwQ.jpg" 
			//		onload="setLoadedFlag(this);"
			//		title="'.$strName.'"
			//		alt="'.$strAlt.'"
			//		style="width:100%""
			//	/>';
			}
		else
			{
			//$this->strHTML='
			//	<img 
			//		src="'.$strLink.'" 
			//		onload="setLoadedFlag(this);"
			//		title="'.$strName.'"
			//		alt="'.$strAlt.'"
			//		style="width:100%""
			//	/>';
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_arrData)
		{
		$objImage=new Image($_objKIIM, $_arrData);
		return $objImage->strHTML;
		}
	}
?>