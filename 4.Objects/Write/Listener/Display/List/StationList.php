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
		/*echo '<pre>';
		print_r($objEDRO);
		echo '</pre>';*/
		/*echo '<pre>';
		print_r($objEDRO->arrEvent['arrParams']);
		echo '</pre>';*/
		//!!echo'<script>'.$objEDRO->arrEvent['strObjectParams'].'</script>'; !!
		//!!echo'<script>objEvent._UpdateURLDyn()</script>'; !!
		//echo '$int0Page';
		/*echo*/ $int0Page	=($objEDRO->arrEvent['arrParams']['int0Page']); //0,1,xxx
		//echo '<br/>';
		//echo '$int1OnPage';
		/*echo*/ $int1OnPage	=$objEDRO->arrEvent['arrParams']['int1OnPage']; //1-> 8 = 8
		//echo '<br/>';
		//echo '$int0Start';
		/*echo*/$int0Start	=0+($int0Page*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
		//echo '<br/>';
		//echo '$int1Untill';
		/*echo*/ $int1Untill	=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
		//echo '<br/>';
		$objTotal	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположениеTotal']); //0-lastone
		//echo '$int1Total';
		/*echo*/ $int1Total	=($objTotal->total); //Channge in par
		//echo '<br/>';
		unset($objTotal);
		//echo '$int1Pages';
		/*echo*/ $int1Pages	=intRoundUp(($int1Total)/$int1OnPage);//totall is not from 0, to find we need to convert ;
		//echo '<br/>';
		if($int0Page>$int1Pages)
			{
			$objEDRO->arrEvent['arrParams']['int0Page']	=($int1Pages-1);
			$int0Page					=($int1Pages-1);
			//echo '$int0Start';
			/*echo*/ $int0Start	=0+($int0Page*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
			//echo '<br/>';
			//echo '$int1Untill';
			/*echo*/ $int1Untill	=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
			//echo '<br/>';
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
			$int1Start=($int1Total-$int1OnPage);
			}
		/*echo'<script>'.$objEDRO->arrEvent['strObjectParams'].'</script>';
		echo'<pre>';
		print_r($objEDRO);
		echo'</pre>';
		exit;*/





		//$intMaxElements		=$intOnPage;


		

		
		
		

		//echo'<script>'.$objEDRO->arrEvent['strObjectParams'].'</script>';
		/*print_r($objEDRO->arrEvent['strObjectParams']);
		exit;*/
		//echo $objEDRO->arrObjects['сРасположение'];
		//echo $int0_Start;
		//echo '<br/>';
		//echo $int0_Untill;
		//echo '<br/>';
		/*echo '$int0Start';
		echo $int0Start;
		echo '<br/>';
		echo '$int0Untill';
		echo $int0Untill;
		echo '<br/>';*/
		for($int0I=$int0Start;$int0I<=$int0Untill;$int0I++)
			{
			//echo $int0I.'<br/>';
			$objStation	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположение'].'/'.$int0I.'.plmr');
			$arrStatrion=
			array(
				'strName'		=>$objStation->server_name,
				'strAudio'		=>сКодировать($objStation->listen_url, $_сДействие='к', $_сКлючь="HiFiIntelligentClub"),
				'strAudioType'		=>$objStation->server_type,
				'strAudioBitrate'	=>$objStation->bitrate,
				'strStyle'		=>$objStation->genre,
				);
			/*echo '<pre>';
			print_r($arrStatrion);
			echo '</pre>';*/
			$arrPagination=
			array(
				
				'int0Page'		=>$int0Page,
				'int1Pages'		=>$int1Pages,
				'int1OnPage'		=>$int1OnPage,
				'int0Total'		=>($int1Total-1),
				'int0CurrentStation'	=>$int0I,
				);
			/*echo '<pre>';
			print_r($arrPagination);
			echo '</pre>';*/
			/*echo '<pre>';
			print_r($objEDRO);
			echo '</pre>';*/
			//$objEDRO;
			//$this->strHTML.= StationBlock::strHTML($objKIIM, $arrStatrion, $arrPagination, $objEDRO);
			/*
			if($intTotal==$intI)
				{
				break;
				}*/
			}
		//echo $this->strHTML;
		echo HiFiNavigation::strHTML($objKIIM, $arrPagination, $objEDRO->arrEvent['arrParams']);
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