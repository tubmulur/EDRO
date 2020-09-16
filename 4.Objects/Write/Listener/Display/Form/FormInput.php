<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class FormInput
	{
	public $strHTML;
	public function __construct($_objKIIM, $_arrName, $_arrParams, $_arrFormSetup=array('bIzEq'=>false))
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$arrName['RU']	=$_arrName['_RU'];
		$arrName['EN']	=$_arrName['_EN'];
			   unset($_strName);

		$arrParams['strValue']		=$_arrParams['_strValue'];
		$arrParams['strInputName']	=$_arrParams['_strInputName'];
		$arrParams['strInputType']	=empty($_arrParams['_strInputType'])?'text':$_arrParams['_strInputType'];
					         unset($_arrParams);

		$bIzShowEq			=$_arrFormSetup['bIzEq'];
					   unset($_arrFormSetup);
		$strShowEq	='';
		$strInputWidth	='72%';
		if($bIzShowEq)
			{
			$strShowEq='
			<select
				name	="strBitrateEq"
				class	="block left tcenter     "
				style	="
					font-size	:larger;
					width		:20%;
					height		:100%;
					"
				onChange="
					objSearch.intPage=this.value;
					//objSearch._CreateUrl();
					//objDynaScreen.strURL=objSearch.strURL;
					//objEvent.strURL=objSearch.strURL;
					//objDynaScreen._Update();
					//return false;
					"
				>
				<option value="gt"><ifRU>Обычное</ifRU><ifEN>Often</ifEN></option>
				<option value="sl"><ifRU>Высокое</ifRU><ifEN>Hi</ifEN></option>
				<option value="eq" selected><ifRU>Высокое2</ifRU><ifEN>Hi2</ifEN></option>
			</select>';
			$strInputWidth='62%';
			}

		$this->strHTML='
			<input'.$arrParams['strInputName'].'
				class="rel block BBV layer_4"
				style="
					height			:35px;
					margin-top		:2px;
					background-color	:#333;
					color			:#fff;
					"
				>
				<ifRU
					class="block left no-select"
					style="
						width		:25%;
						height		:35px;
						line-height	:33px;
						text-align	:right;
						"
					>
					'.$arrName['RU'].':
				</ifRU>
				<ifEN
					class="block left no-select"
					style="
						width		:25%;
						height		:35px;
						line-height	:33px;
						text-align	:right;
						"
					>
					'.$arrName['EN'].':
				</ifEN>'.
				$strShowEq.
				'
				<input 
					id=		"SearchBy'.$arrParams['strInputName'].'"
					size		="40"
					maxlength	="40"
					name		="'.strtolower($arrParams['strInputName']).'"
					type		="'.$arrParams['strInputType'].'"
					onchange	="
							objEvent.arrParams[\''.$arrParams['strInputName'].'\']	=encodeURIComponent(this.value);
							objEvent._UpdateURLDyn();
							"
					value		="'.сПреобразовать($arrParams['strValue'], 'вСтроку').'"
					class		="abs block layer_4 HR0 LTR_RTL"
					style		="
							width		:'.$strInputWidth.';
							text-align	:center;
							height		:35px;
							padding		:0;
							border		:0px;
							font-size	:x-large;
							"
						/>
				<resetButton
					class="abs layer_4_1 block sensor TC1 HR0"
					style="
						width			:35px;
						height			:35px;
						text-align		:right;
						margin-bottom		:5px;
						line-height		:15px;
						"
					onclick="
						objSearch.objValueInput'.$arrParams['strInputName'].'.value	=\'\';
						objEvent.arrParams.'.$arrParams['strInputName'].'=\'\';
						this.previousElementSibling.focus();
						objEvent._UpdateURLDyn();
						";
					>
					<ifRU	title="Сбросить"
						>
						x
					</ifRU>
					<ifEN
						title="Reset"
						>
						x
					</ifEN>
				</resetButton>

			</input'.$arrParams['strInputName'].'>
			';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_arrName, $_arrParams, $_arrFormSetup=array('bIzEq'=>false))
		{
		$objFormInput=new FormInput($_objKIIM, $_arrName, $_arrParams, $_arrFormSetup);
		return $objFormInput->strHTML;
		}
	}
?>