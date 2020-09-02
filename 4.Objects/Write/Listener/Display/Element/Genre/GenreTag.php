<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class GenreTag
	{
	public $strHTML;
	public function __construct($_objKIIM, $_strData, $arrSearch='')
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$strDataReal		=$_strData;
		$strData=trim($_strData);
		        unset($_strData);
		$arrSearch['style']=trim($arrSearch['style']);

		if(сДляСравнения($arrSearch['style'])==сДляСравнения($strData))
			{
			/*
			if(!empty($strData)&&strpos('!!',$strData)!==FALSE)
					{
					$strColor='red';
					}
				else
					{
					$strColor='#4d4d4d';
					}
			$this->strHTML=$strDataReal.
			'
			<a
				href="/search'.strLinkGroove($arrSearch, 'style').'"
				class="sensor block rel right border-right border-bottom "
				style="
					color		:'.$strColor.';
					background-color:#e1dfdf;
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
						//objSearch.objValueInputstyle.value=\'\';
						objEvent.arrParams.style=\'\';
						objEvent._UpdateURLDyn();
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
				href="/search'.strLinkGroove($arrSearch, 'style', $strData).'"
				class="sensor block right border-right border-bottom"
				style="
					color		:'.$strColor.';
					background-color:#e1dfdf;
					padding-left	:5px;
					padding-right	:5px;
					text-align	:center;
					height		:20px;
					text-decoration	:none;
					"
				onclick="
					//objSearch.objValueInputstyle.value=\''.$strData.'\';
					objEvent.arrParams.style=\''.$strData.'\';
					objEvent._UpdateURLDyn();
					return false;
					"
				>'.
				//$strData.
			'</a>';
			*/
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_strData, $arrSearch='')
		{
		$obj=new GenreTag($_objKIIM, $_strData, $arrSearch);
		return $obj->strHTML;
		}
	}
?>