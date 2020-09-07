<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)7874457
Whatsapp: +7(911)7874457
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

class Objects
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>'', '_intShowTempo'=>'' ));
		//echo '<pre>';
		//print_r($this);
		//echo '</pre>';
		//exit;
		//$strSearchName		=сПреобразовать(mb_strtolower(trim($this->arrEvent['arrParams']['strName'])),'вКоманду');
		$strSearchName		='';
		$strSearchStyle		=сПреобразовать(str_replace("\'","'", mb_strtolower(trim($this->arrEvent['arrParams']['strStyle']))),'вКоманду');

		$strSearchBitrate	=сПреобразовать(str_replace("\'","'", mb_strtolower(trim($this->arrEvent['arrParams']['intBitrate']))),'вКоманду');
		if($strSearchBitrate===0)
			{
			$strSearchBitrate='';
			}
		$strSearchCodec		=сПреобразовать(str_replace("\'","'", mb_strtolower(trim($this->arrEvent['arrParams']['strCodec']))),'вКоманду');
		//$сРасположениеКорень	='/home/ЕДРО:ПОЛИМЕР/020.Синтез.ЕДРО/020.Если/020.Действие/020.Реальность/020.Объект/Чтение_Диск/БазаДанных/HiFiIntelligentClub';
		$сРасположениеКорень	='/home/ЕДРО:ПОЛИМЕР/БазаДанных/HiFiIntelligentClub';
		if(empty($strSearchStyle))
			{
			$strSearchPath	='/Stations/unordered';
			if(empty($strSearchBitrate))
				{
				if(empty($strSearchCodec))
					{
					}
				else
					{
					$strSearchPath	='/server_type/unordered';
					}
				}
			else
				{
				$strSearchPath	='/bitrate/unordered';
				$strSearchPath.='/'.$strSearchBitrate.'/unordered';
				if(empty($strSearchCodec))
					{
					}
				else
					{
					$strSearchPath.='/server_type/unordered';
					$strSearchPath.='/'.$strSearchCodec.'/unordered';
					}
				}
			}
		else
			{
			$strSearchPath	='/genre/unordered/'.$strSearchStyle.'/unordered';
			if(empty($strSearchBitrate))
				{
				if(empty($strSearchCodec))
					{
					}
				else
					{
					$strSearchPath	.='/'.$strSearchCodec.'/unordered';
					}
				}
			else
				{
				$strSearchPath.='/bitrate/unordered'.$strSearchBitrate.'/unordered';
				if(empty($strSearchCodec))
					{
					}
				else
					{
					$strSearchPath.='/'.$strSearchCodec.'/unordered';
					}
				}
			};

		$this->arrObjects['сРасположение']		=$сРасположениеКорень.$strSearchPath;
		$this->arrObjects['сРасположениеTotal']		=$this->arrObjects['сРасположение'].'/total.plmr';
		$this->arrObjects['мРасположение']		=Pagination::arr($objKIIM, $this);
		/*echo '<pre>';
		print_r($this);
		echo '</pre>';
		exit;*/
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strObjectInit()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.O: Declare');
			console.log('[.++.+.*.*.++.+.+]EDRO.Event: Init event stream graph circle.');
			objEDRO._CircleControllerGraph	=setInterval(objEDRO.funControllerGraph, 1000);
			console.log('[.]EDRO.O: Declare');
		</script>
oо2оo;
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	=	<<<oо2оo
		<script>
			console.log('[V]EDRO.O: Declare');
			objEDRO.funControllerGraph= function()
				{
				var objDate	=new Date();
				if(objPlayer.bIzPlaying) //!!!    objReality.bIzPlayerPlaying!!!
					{
					document.title	=objPlayer.strStationName+'|HiFiIntelligentClub.com';
					//objPlayer.objVisibleControlsPlayingDuration.innerHTML=objPlayer.intPlayingDuration;
					objPlayer.intPlayingDuration++;
					}
				if(objPlayer.bIzLoading)
					{
					//objPlayer.objVisibleControlsLoadingDuration.innerHTML=objPlayer.intLoadingDuration;
					if(objPlayer.intPlayerLoadingAnim==3)
						{
						objPlayer.intPlayerLoadingAnim	=0;
						objPlayer.strPlayerLoadingAnim	='';
						}
					objPlayer.intPlayerLoadingAnim++;
					objPlayer.strPlayerLoadingAnim	+='.';
					document.title	=objPlayer.strPlayerLoadingAnim+objPlayer.strStationName+'|HiFiIntelligentClub.com';
					objIndicatorMasterClock.objStrServerLoading.innerHTML	=objReality.intMaxLoadingTime+'/'+objReality.intLoadingTime+'/'+objPlayer.intLoadingDuration;
					if(!objPlayer.bIzNeedToBeStoppedEvent)
						{
						//objPlayer.objAudio.load();
						}
					objPlayer.intLoadingDuration++;
					//objPlayer.bIzLoading=false;
					}
				else
					{
					objPlayer.strPlayerLoadingAnim	='';
					}
				if(objReality.bIzLoading)
					{
					objIndicatorMasterClock.objStrServerLoading.innerHTML	=objReality.intMaxLoadingTime+'/'+objReality.intLoadingTime;
					if(objReality.intLoadingTime>=objReality.intMaxLoadingTime)
						{
						objReality.intMaxLoadingTime=objReality.intLoadingTime;
						}
					objReality.intLoadingTime++;
					}
				//if(objPlayer.bIzError)
				//	{
				//	}
				if(objEDRO.intVector==2)
					{
					console.log('[=^Vvv]EDRO.Event: (objEDRO.intVector==2)');
					console.log(objEDRO.intStep);
					objEDRO.intVector	=0;
					objDesign._UpdateDimensions();
					console.log('[[=^...]EDRO.Event: (objEDRO.intVector==2)');
					}
				if(objKIIM_StatisticalMembrane.bIzRunning==true)
					{
					objKIIM_StatisticalMembrane._incTime();
					}
				objIndicatorMasterClock.objStr.innerHTML	=objEDRO.intStep++;
				objEDRO.intVector++;
				objEDRO._CircleControllerGraph;
				return 0;
				}
			console.log('[.]EDRO.O: Declare');
		</script>
oо2оo;
		return $str;
		}
	}
?>