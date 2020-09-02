<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
//$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
class FileTypeApply extends Reality
	{
	public 		$arr		=array();
	public	 	$strName	='';
	public 		$strDir		='';
	public function __construct($_objKIIM, $_strAction='default', $_arrData=array()	)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		parent::__construct($objKIIM, $this);

		$this->strName	= $_arrData['_strName'];
		$this->strDir	= $_arrData['_strDir'];


		$this->arr=$this->arrProcess($objKIIM);
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function arrProcess($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		if(($this->strName!='.'&&$this->strName!='..') && (is_dir($this->strDir.$this->strName)))
			{
			$arr['type']='dir';
			$arr['html']='[+]';
			}
		elseif(is_dir($this->strDir.$this->strName))
			{
			$arr['type']='dirUp';
			$arr['html']='';
			}
		elseif(is_file($this->strDir.$this->strName))
			{
			$arr['type']='file';
			$arr['html']='';
			}
		else
			{
			$arr['type']='error';
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $arr;
		}
	}
?>