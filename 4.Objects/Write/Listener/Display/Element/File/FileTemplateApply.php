<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class FileTemplateApply
	{
	public	$strHtml='';
	public function __construct($_objKIIM, $_strFolder)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		
		echo $_strFolder;
		$this->strHtml=$_strFolder;
		//$objEDRO=new EDRO($objKIIM, $_strFolder);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $html;
		}
	public static function strHTML($_objKIIM, $_strFolder)
		{
		$strHtml='';
		$objTemplate=new ApplyTemplate($_objKIIM, $_strFolder);

		$strHtml.=$objTemplate->strHtml;
		return $html;
		}
	}
?>