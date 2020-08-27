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
class StationList
	{
	public $strHTML;
	private $arrEDRO=
	array(
		'arrE'=>
		array(
			'/','/search'
			),
		'arrD'=>
		array(
			'/home/EDRO/2.Design/.strFileList.php',
			),
		'arrR'=>
		array(
			'arrLang'=>
			array(
				'EN','RU',
			),
			'arrRole'=>
			array(
				'Listener'
				),
			),
		'arrO'=>
		array(
			'strHTML'=>''
			),
		);
	public function __construct($_objKIIM, $_objEDRO)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$objEDRO	=$_objEDRO;
			   unset($_objEDRO);
		$int0_Page	=$objEDRO->arrEvent['arrParams']['intPage']; //0,1,xxx
		$int1_OnPage	=$objEDRO->arrEvent['arrParams']['intOnPage']; //1-> 8 = 8
		$int0_Start	=0+($int0_Page*$int1_OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
		$int0_Untill	=$int0_Start+($int1_OnPage-1);//From 0 to 7 including 7 = 8
		$objTotal	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположениеTotal']); //0-lastone
		$int0_Total	=$objTotal->total; //from 0;
		unset($objTotal);
		$int0_Pages	=intRoundUp(($int0_Total+1)/$int1_OnPage)-1;//totall is not from 0, to find we need to convert ;
		$int0_MaximumAtSession	=0;
		if($int0_Pages<$int0_Page)
			{
			$objEDRO->arrEvent['arrParams']['intPage']	=$int0_Pages;
			$int0_Page					=$int0_Pages;
			}
		if(($int0_Total-$int0_Untill)<0)
			{
			$int0_Untill=$int0_Total;
			}
		echo'<pre>';
		print_r($objEDRO);
		echo'</pre>';
		exit;





		//$intMaxElements		=$intOnPage;


		

		
		
		

		//echo'<script>'.$objEDRO->arrEvent['strObjectParams'].'</script>';
		print_r($objEDRO->arrEvent['strObjectParams']);
		exit;
		//echo $objEDRO->arrObjects['сРасположение'];
		for($intI=$intStart;$intI<$intUntill;$intI++)
			{
			//echo $intI.'<br/>';
			$objStation	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположение'].'/'.$intI.'.plmr');
			$arrData=array(
				'strName'		=>$objStation->server_name,
				'strSearchName'		=>$strSearchName,
				'strAudio'		=>$objStation->listen_url,
				'strAudioType'		=>$objStation->server_type,
				'strSearchCodec'	=>$strSearchCodec,
				'strAudioBitrate'	=>$objStation->bitrate,
				'strSearchBitrate'	=>$strSearchBitrate,
				'strGenre'		=>$objStation->genre,
				'strSearchGenre'	=>$strSearchStyle,
				'intPage'		=>$intPage,
				'intOnPage'		=>$intOnPage,
				'intTotal'		=>$intTotal,
				'intCurrent'		=>$intI,
				'intMaxElements'	=>$intOnPage
				);
			$this->strHTML.= StationBlock::strHTML($objKIIM, $arrData, $arrSearch);
			if($intMaximumAtSession==60)
				{
				break;
				}
			$intMaximumAtSession++;
			if($intTotal==$intI)
				{
				break;
				}
			}
		echo $this->strHTML;
		echo HiFiNavigation::strHTML($objKIIM, $arrData, $arrSearch);
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public function _HTML($_objKIIM, $_objEDRO)
		{
		$objStationList=new StationList($_objKIIM, $_objEDRO, $arrSearch);
		}
	public function strHTML($_objKIIM, $_objEDRO)
		{
		$objStationList=new StationList($_objKIIM, $_objEDRO, $arrSearch);
		return $objStationList->strHTML;
		}
	}
?>