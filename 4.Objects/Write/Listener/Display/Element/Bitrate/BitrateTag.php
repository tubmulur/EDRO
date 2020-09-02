<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class BitrateTag
	{
	public $strHTML;
	public function __construct($_objKIIM, $_strData, $_arrSearch='')
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$strData=mb_strtolower($_strData);
		                 unset($_strData);
		           $_arrSearch['page']=0;
		$arrSearch=$_arrSearch;
		     unset($_arrSearch);
		if($arrSearch['intBitrate']==$strData)
			{
			if(!empty($strData)&&strpos('!!',$strData)!==FALSE)
					{
					$strColor='red';
					}
				else
					{
					$strColor='#4d4d4d';
					}
			$this->strHTML=$strData.
			'
			<a
				href="/search'.strLinkGroove($arrSearch, 'intBitrate').'"
				class="sensor block rel right border-right border-bottom "
				style="
					color		:'.$strColor.';
					background-color:#e1dfdf;
					/*padding	:5px;*/
					padding-left	:5px;
					padding-right	:5px;
					text-align	:center;
					height		:20px;
					text-decoration	:none;
					"
				>'.
				//$strData.
				'<overlay 
				class="abs block layer_5_Overlay" 
				style="
					top		:0;
					left		:0;
					text-align	:center;
					width		:100%;
					height		:100%;
					color		:#fff;
					background-color:rgba(240, 240, 240, 0.6);
						"
					onclick="
						objSearch.objValueInputBitrate.value=\'\';
						return false;
						"
				>
					x
				</overlay>'.
			'</a>';
			}
		else
			{
			if(strpos('!!',$strData)!==FALSE)
					{
					$strColor='red';
					}
				else
					{
					$strColor='#4d4d4d';
					}
			$this->strHTML='
			<a
				href="/search'.strLinkGroove($arrSearch, 'intBitrate', $strData).'"
				class="sensor block right border-right border-bottom"
				style="
					color		:'.$strColor.';
					background-color:#e1dfdf;
					/*padding	:5px;*/
					padding-left	:5px;
					padding-right	:5px;
					text-align	:center;
					height		:20px;
					text-decoration	:none;
					"
				onclick="
					objSearch.objValueInputBitrate.value		=\''.str_replace("'","\'", $strData).'\';
					return false;
					"
				>'.
				//$strData.
			'</a>';
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_strData, $_arrSearch='')
		{
		$obj=new BitrateTag($_objKIIM, $_strData, $_arrSearch);
		return $obj->strHTML;
		}
	}
?>