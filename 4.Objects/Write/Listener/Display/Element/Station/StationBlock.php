<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class StationBlock
	{
	public  $strHTML;
	public function __construct($_objKIIM, $arrStatrion, $arrPagination, $arrEventParams)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		/*echo '<pre>';
		print_r($arrStatrion);
		echo '</pre>';*/
		$intListPosition	=$arrPagination['int0CurrentStation'];
		$strName		=$arrStatrion['strName'];
		$strAudio		=$arrStatrion['strAudio'];
		$strAudioType		=$arrStatrion['strAudioType'];
		$strAudioBitrate	=$arrStatrion['strAudioBitrate'];
		$strStyle		=$arrStatrion['strStyle'];
					unset($arrStatrion);


		$this->strHTML	='
		<station
			id	="'.$strAudio.'"
			num	="'.$intListPosition.'"
			class	="block left rel layer_1_1 BLL BRJ TC1 BC1"
			style	="
				width		:398px;
				height		:80px;
				max-width	:99vw;
				text-decoration	:none;
				margin-right	:10px;
				margin-bottom	:10px;
				"
			>
			<header
				class="block BC1 BC1"
				style="
					width		:398px;
					height		:40px;
					"
				>
				<player
					class="left"
					style="
						width		:40px;
						height		:40px;
						"
					>'.
					Player::strHTML($objKIIM, $strAudio).
				'</player>
				<stationName
					class="block left tcol1 bcol1"
					style="
						width		:358px;
						height		:40px;
						"
					>'.
					Header::strHTML($objKIIM,  $strName, $arrEventParams, $strAudioBitrate, $strAudioType).
				'</stationName>
			</header>
			<genre
				class="block scrollerY"
				style="
					height		:40px;
					"
				>'.
				Genre::strHTML($objKIIM, $strStyle, $arrEventParams, 11).
				'
			</genre>
			<ICQR_Setup
				class="block border-bottom"
				style="
					height		:20px;
					width		:100%;
					"
				>
			</ICQR_Setup>
			'.
			//HFIC_CreatorsRespect::strHTML($objKIIM, $this->arr['_strCopyrightInfo']).
			''.
			//Shader::strHTML($objKIIM, $this->strLogo).
			''.
			
			''.
			//Overlay::strHTML($objKIIM, 'Loading. Please wait.').
			'
			<description
				class="block rel layer_1_4"
				style="
					display		:none; /*Disabeled untill 31.08.2020 23:59*/
					"
				>'.
				//$this->arr['_strDescription'].
			'</description>
			<!--marquee>Сообщения Сообщения Сообщения</marquee-->
		</station>';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//print_r($this);
		}
	public static function strHTML($_objKIIM, $arrStatrion, $arrPagination, $arrEventParams)
		{
		$objStationBlock=new StationBlock($_objKIIM, $arrStatrion, $arrPagination, $arrEventParams);
		return $objStationBlock->strHTML;
		}
	}
?>