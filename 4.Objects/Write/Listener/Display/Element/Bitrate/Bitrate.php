<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class Bitrate
	{
	public $strHTML;
	public function __construct($_strSelected, $_strElementId="", $_arrSearch="")
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$strListElementId=$_strElementId;
		            unset($_strElementId);
		$strSelected=$_strSelected;
		       unset($_strSelected);
		$arrSearch=$_arrSearch;
		     unset($_strSearch);
		
		if($strSelected==0)
			{
			}
		elseif($strSelected==16)
			{
			}
		elseif($strSelected==24)
			{
			}
		elseif($strSelected==32)
			{
			}
		elseif($strSelected==48)
			{
			}
		elseif($strSelected==56)
			{
			}
		elseif($strSelected==64)
			{
			}
		elseif($strSelected==80)
			{
			}
		elseif($strSelected==96)
			{
			}
		elseif($strSelected==112)
			{
			}
		elseif($strSelected==128)
			{
			}
		elseif($strSelected==160)
			{
			}
		elseif($strSelected==192)
			{
			}
		elseif($strSelected==224)
			{
			}
		elseif($strSelected==256)
			{
			}
		elseif($strSelected==320)
			{
			}
		elseif($strSelected==512)
			{
			}
		elseif($strSelected==1024)
			{
			}
		elseif($strSelected==2048)
			{
			}
		elseif($strSelected=='all')
			{
			}
		else
			{
			$selected_another_rate	=$strSelected;
			$selected_another	='selected';
			Report::str($objKIIM, array(
				'_strClass'=>__CLASS__,
				'_strFunction'=>__FUNCTION__,
				'_strMessage'=>'Bitrate is not in list:'.$selected_another_rate,
				));
			}
		if($strElementId)
			{
			//$strElementId='id="'.$strElementId.'"';
			}
		$this->strHTML='
			<bitrate 
				class="sensor block left border-right border-bottom"
				style="
					width		: 120px;
					height		: 100%;
					line-height	: 36px;
					color		: #4d4d4d;
					background-color: #e1dfdf;
					text-decoration	: none;
					text-align	: center;
					"
				>';
				//echo $strSelected;
				$this->strHTML.=SensorList::strHTML(
					array(
						array('_strName'	=>'All' 	,'_strValue'=>'all'),
						array('_strName'	=>'N/A' 	,'_strValue'=>'0'),
						array('_strName'	=>'16'  	,'_strValue'=>'16'),
						array('_strName'	=>'24'  	,'_strValue'=>'24'),
						array('_strName'	=>'32'  	,'_strValue'=>'32'),
						array('_strName'	=>'48'  	,'_strValue'=>'48'),
						array('_strName'	=>'56'  	,'_strValue'=>'56'),
						array('_strName'	=>'64'  	,'_strValue'=>'64'),
						array('_strName'	=>'80'  	,'_strValue'=>'80'),
						array('_strName'	=>'96'  	,'_strValue'=>'96'),
						array('_strName'	=>'128' 	,'_strValue'=>'128'),
						array('_strName'	=>'160' 	,'_strValue'=>'160'),
						array('_strName'	=>'192' 	,'_strValue'=>'192'),
						array('_strName'	=>'224' 	,'_strValue'=>'224'),
						array('_strName'	=>'256' 	,'_strValue'=>'256'),
						array('_strName'	=>'320' 	,'_strValue'=>'320'),
						array('_strName'	=>'512' 	,'_strValue'=>'512'),
						array('_strName'	=>'1024'	,'_strValue'=>'1024'),
						array('_strName'	=>'2048'	,'_strValue'=>'2048')
						),
					array(
						'_strSelected'	=>$strSelected,
						),
					array(
						'_strId'		=>$strListElementId,
						'_strOrientation'	=>'Horizontal',
						'_arrSearch'		=>$arrSearch
						)
					);
				
				$this->strHTML.='
				<unitMeasure
					class="block right"
					>
					<ifRU>';
						$this->strHTML.='КБит/сек';
					$this->strHTML.='
					</ifRU>';

					$this->strHTML.='
					<ifEN>';
						$this->strHTML.='Kbps';
					$this->strHTML.='
					</ifEN>
				</unitMeasure>';
			$this->strHTML.=
			'</bitrate>';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_strSelected, $_strElementId="", $_arrSearch="")
		{
		$obj=new Bitrate($_strSelected, $_strElementId, $_arrSearch);
		return $obj->strHTML;
		}
	}
?>