<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
//$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
/*
$arrFile=array(
	'arr@strFile'=>array(
		''
	)
)
$_strAction= default/html/json/array;
$arr= array('arr@strType'	=>array(
			arr@strLang	=>array(
				'strName'=>'',
				'strHtml'=>'',
				)
			),
		);

$arrType=array(	'dir'	=>array(
			'RU'=>array(
				'strName'=>'',
				'strHtml'=>'',
				),
			),
		'dirUp'	=>array(
			'RU'=>array(
				'strName'=>'',
				'strHtml'=>'',
				),
			),
		'file'	=>array(
			'RU'=>array(
				'strName'=>'',
				'strHtml'=>'',
				),
			),
		'song'	=>array(
			'RU'=>array(
				'strName'=>'',
				'strHtml'=>'',
				),
			),
		);
*/
class File extends FilePathsValidate
	{
	public $strName		='';
	public $strFile		='';
	public $strDir		='';
	public $strHTML		='';


	public function __construct($_objKIIM, $_arrData=array(), $_strAction='default')
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strFile		= $_arrData['_strFile'];

		$this->strDir		= $_arrData['_strDir'];

		$this->strName 		= $_arrData['_strName'];

		parent::__construct($objKIIM);
		//echo $this->strName;
	
		$htmlDesign=DynaBLock::HTML($objKIIM, $this);
		echo $htmlDesign;
		//print_r($objDesign);
		//print_r($this);
		//exit(0);

/*		$objType		=new FileType($_objKIIM, 'default', $_arrData);
		$this->arr['arrType']	=$objType->arr;
		$objInfo		=new FileInfo($_objKIIM, 'default', $_arrData);
		$this->arr['arrInfo']	=$objInfo->arr;

		$this->strHTML=$objBlock->strHTML;
*/

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
?>