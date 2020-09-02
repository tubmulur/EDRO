<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class AudioType
	{
	public $strHTML;
	public function __construct($_objKIIM, $_strData, $_arrSearch='')
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$strData		=$_strData;
				   unset($_strData);
		$strAudioCodec		=str_replace('audio/', '', $strData);
		$arrSearch		=$_arrSearch;
				   unset($_arrSearch);
		
		if($arrSearch['strCodec']==$strAudioCodec)
			{
			$this->strHTML='
			<a
				'.arrEventLink($arrSearch, 'strCodec').'
				class="rel block left sensor border-right TC2 BC2"
				style="
					width		:50px;
					text-align	:center;
					text-decoration	:none;
					"
				>'.
				$strAudioCodec.
				//objSearch.objValueInputCodec.value	=\'\';
			'</a>';
			}
		else
			{
			$this->strHTML='
			<a
				'.arrEventLink($arrSearch, 'strCodec', $strAudioCodec).'
				class="sensor block left border-right TC2 BC2"
				style="
					width		:50px;
					text-align	:center;
					text-decoration	:none;
					"
				>'.
				//objSearch.objValueInputCodec.value	=\''.$strAudioCodec.'\';
				$strAudioCodec.
			'</a>';
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_strData, $_arrSearch='')
		{
		$obj=new AudioType($_objKIIM, $_strData, $_arrSearch);
		return $obj->strHTML;
		}
	}
?>