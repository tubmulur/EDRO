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
	public function __construct($_objKIIM, $objEDRO)
		{
		$arrPagination		=$this->arrPagination($_objKIIM, $objEDRO);
		//print_r($arrPagination);
		$_SESSION['arrPagination']=$arrPagination;
		//print_r($_SESSION['arrPagination']);
		//exit(0);
		
		for($int0I=$arrPagination['int0Start'];$int0I<=$arrPagination['int0Untill'];$int0I++)
			{
			//echo $int0I;
			//echo'123';
			$objStation	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположение'].'/'.$int0I.'.plmr');
			$arrStatrion=
			array(
				'strName'		=>$objStation->server_name,
				'strAudio'		=>сКодировать($objStation->listen_url, $_сДействие='к', $_сКлючь="HiFiIntelligentClub"),
				'strAudioType'		=>$objStation->server_type,
				'strAudioBitrate'	=>$objStation->bitrate,
				'strStyle'		=>$objStation->genre,
				);
			$arrPagination['int0CurrentStation']=$int0I;

			$this->strHTML.= StationBlock::strHTML($objKIIM, $arrStatrion, $arrPagination, $objEDRO->arrEvent['arrParams']);
			}
		}
	private function arrPagination($_objKIIM, $objEDRO)
		{
		/*echo*/$int0Page	=($objEDRO->arrEvent['arrParams']['int0Page']); //0,1,xxx
		/*echo*/$int1OnPage	=$objEDRO->arrEvent['arrParams']['int1OnPage']; //1-> 8 = 8
		/*echo*/$int0Start	=0+($int0Page*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
		/*echo*/$int1Untill	=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
		/*echo*/$objTotal	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположениеTotal']); //0-lastone
		/*echo*/$int1Total	=($objTotal->total); //Channge in par
		unset($objTotal);
		/*echo*/$int1Pages	=intRoundUp(($int1Total)/$int1OnPage);//totall is not from 0, to find we need to convert ;
		$int0Pages		=($int1Pages-1);
		if($int0Page>$int0Pages)
			{
			$objEDRO->arrEvent['arrParams']['int0Page']	=$int0Pages;
			$int0Page					=$int0Pages;
			/*echo*/ $int0Start	=0+($int0Pages*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
			/*echo*/ $int1Untill	=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
			}
		else
			{
			//$int0Page					=($int1Page-1);
			}
		if(($int1Total-$int1Untill)<0)
			{
			$int0Untill=($int1Total-1);
			}
		else
			{
			$int0Untill=($int1Untill-1);
			}
		if($int1Total<$int1Start)
			{
			$int0Start=($int1OnPage*$int0Page);
			}
		$arrReturn['int0Start']		=$int0Start;
		$arrReturn['int0Page']		=$int0Page;
		$arrReturn['int0Pages']		=$int0Pages;
		$arrReturn['int1OnPage']	=$int1OnPage;
		$arrReturn['int0Untill']	=$int0Untill;
		$arrReturn['int0Total']		=($int1Total-1);

		return $arrReturn;
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
	public function _EDRO($_objKIIM, $_objEDRO)
		{
		$objStationList=new StationList($_objKIIM, $_objEDRO, $arrSearch);
		return $objStationList->strEDRO;
		}
	}
?>