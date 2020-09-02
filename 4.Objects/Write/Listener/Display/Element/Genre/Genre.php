<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class Genre
	{
	public 		$strHTML;
	private 	$strReality;
	private		$strDesignTag;
	private		$arrParams;
	private 	$strLayer;
	public function __construct($_objKIIM, $_strStyle, $arrParams, $_intLayer)
		{
		$this->arrParams	=$arrParams;
		$this->intLayer		=$_intLayer;
		$мФразы			=мСобратьФразы($_strStyle);
		foreach($мФразы as $сФраза)
			{
			$this->strReality	=$сФраза;
			$this->strHTML		.=$this->strObject();
			}
/*-[.]*/	}
/*-[E]*/private function strEvent()
		{
		//onStartLoading		=""
		//onFinishLoading		=""
		$strE	.=' '.'onClick="
			//objSearch.objValueInputStyle.value	=\'__STR_REALITY__\';
			objEvent.arrParams.strStyle		=\'__STR_REALITY__\';
			objEvent._UpdateURLDyn();
			return false;
			"'.' ';
		if(сДляСравнения($this->arrParams['strStyle'])==сДляСравнения($this->strReality))
			{
			$strE	.=' '.arrEventLink($this->arrParams, 'strStyle', $this->strReality()).'"'.' ';
			$strE	=str_replace('__STR_REALITY__', $this->strReality(), $strE);
			}
		else
			{
			$strE	=' '.arrEventLink($this->arrParams, 'strStyle', '').'"'.' ';
			$strE	=str_replace('__STR_REALITY__', '', $strE);
			}
		
		return $strE;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		$strD	=' '.'class	="sensor block rel left BRJ2 BBV layer_'.$this->intLayer.'"'.' ';
		//$strD	.="\n";
		$strD	.=' '.'style	="
					color		:#4d4d4d;
					background-color:#e1dfdf;
					padding-left	:5px;
					padding-right	:5px;
					text-align	:center;
					height		:20px;
					text-decoration	:none;
				"'.' ';
		return $strD;
/*-[.]*/	}
/*-[R]*/private function strReality()
		{
		$strR=$this->strReality;
		//$strR='Reality';
		return $strR;
		}
/*-[O]*/private function strObject()
		{
		$strOpen="<";
		$strClose=">";
		$strO=$strOpen.'a ';
				$strO.=$this->strEvent();
				$strO.=$this->strDesign();
			//	}
			//else
			//	{
			//	$strO.=$this->strEvent();
			//	$strO.=$this->strDesign();
			//	}
			$strO.=$strClose;
			$strO.=$this->strReality();
		$strO.=$strOpen.'/'.'a'.$strClose;
		return $strO;
/*-[.]*/	}
/*-[R]*/public static function strHTML($_objKIIM, $_strStyle, $arrParams, $_intLayer)
		{
		$obj=new Genre($_objKIIM, $_strStyle, $arrParams, $_intLayer);
		return $obj->strHTML;
/*-[.]*/	}
	}
?>