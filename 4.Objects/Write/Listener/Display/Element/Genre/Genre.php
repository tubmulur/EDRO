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
		//print_r($мФразы);
		foreach($мФразы as $сФраза)
			{
			$this->strReality	=$сФраза;
			//echo '<br/>';
			$this->strHTML		.=$this->strObject();
			}
/*-[.]*/	}
/*-[E]*/private function strEvent()
		{
		//echo 'strEvent';
		//echo '<br/>';

		if(сДляСравнения($this->arrParams['strStyle'])==сДляСравнения($this->strReality))
			{
			$arrEventLink	=arrEventLink($this->arrParams, 'strStyle', '', 		false, 0);
			$strE	.=$arrEventLink['strHref'];
			$strE	.=$arrEventLink['strOnClick'];
			}
		else
			{
			$arrEventLink	=arrEventLink($this->arrParams, 'strStyle', $this->strReality(), false, 0);
			$strE	.=$arrEventLink['strHref'];
			$strE	.=$arrEventLink['strOnClick'];
			}
		return $strE;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		
		if(сДляСравнения($this->arrParams['strStyle'])==сДляСравнения($this->strReality))
			{
			$strD	=' '.'class	="sensor block rel left BC2 TC2 BRJ2 BBV layer_'.$this->intLayer.'"'.' ';
			$strD	.=' '.'style	="
				padding-left	:5px;
				padding-right	:5px;
				text-align	:center;
				font-size	:medium;
				height		:19px;
				text-decoration	:none;
				"'.' ';
			}
		else
			{
			$strD	=' '.'class	="sensor block rel left BRJ2 BBV layer_'.$this->intLayer.'"'.' ';
			$strD	.=' '.'style	="
				color		:#4d4d4d;
				background-color:#e1dfdf;
				padding-left	:5px;
				padding-right	:5px;
				text-align	:center;
				font-size	:medium;
				height		:19px;
				text-decoration	:none;
				"'.' ';
			}
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