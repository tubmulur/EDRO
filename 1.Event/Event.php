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
class Event extends Design
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		// 0.strNDigit ->  arrAllIncomeActions
		// 0.strNDigit ->  arrAllIncomeParametrs
		$this->arrEvent			=arrGetEventSetter();

		
		$this->arrEvent['bIsDynamic']	=$this->bIsDynamic();
		$this->arrEvent['strObjectParams']='objEvent.arrParams={'.strArrayRec2JS($this->arrEvent, 'arrParams').'};';
		
		
		/*echo '<pre>';
		print_r($this->arrEvent);
		echo '</pre>';
		exit;*/
		
		
		//Event::strObjectDeclare();
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		parent::__construct($objKIIM);

		
		/*$arrAllParams	=
		array(
			'strAppTitle'			=>'',
			'strAppMembrane'		=>'',
			'strAppCRCS'			=>'',
			'intAppETime'			=>0,

			'strPageTitle'			=>'',
			'strPageMembrane'		=>'',
			'strPageCRCS'			=>'',
			'intPageOTime'			=>0,

			'strListenerPlayingStaionId'	=>'',
			'strListenerSearchStaionName'	=>'',
			'strListenerStyle'		=>'',
			'intListenerBitrate'		=>0,
			'intListenerPage'		=>0,
			'intListenerOnPage'		=>0,

			'strEventURL'			=>'',
			'strEventURLD'			=>'',
			'strEventEDRO_URL'		=>'',
			);*/
		}
	private function bIsDynamic()
		{
		$bIsDynamic	=false;
		if(isset($_REQUEST['d']))
			{
			$bIsDynamic	=true;
			}
		return $bIsDynamic;
		}
	public static function strObjectInit()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: Declare');
			var objEvent=new Event();
			console.log('[.]EDRO.Event: Declare');
		</script>
oо2оo;
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: Declare');
			class Event
				{
				constructor()
					{
					console.log('[Vv]EDRO.Event: Constructor');
					//this.strURL		='';
					this.strEvent 		='';
					this.objXHR		=new XMLHttpRequest();
					this.strURL		='';
					this.strURLDyn		='';
//oо2оo;
//		$str	.='this.arrParams={'.strArrayRec2JS(arrGetEventSetter(), 'arrParams').'};';
//		$str	=<<<oо2оo
					/*this.arrParams		={
						'name':'',
						'style':'',
						'bitrate':'',
						'codec':'',
						'page':0,
						'onPage':1,
						'playingStationId':'',
						'playingStationNum':'',
						'strStationId':''
						};*/
					this.strParams		='';
					//console.log(this.arrParams);
					this.objNav		={'HFIC':'ICQR'};
					this._SetLanguageMood();
					this._SetRoleSignal();
					/*window.onpopstate=function(event)
						{
						console.log('[...]EDRO.Event: onpopstate');
						}*/
					this.objXHR.onload		=function()
						{
						console.log('[Vvv]EDRO.Event: objXHR.onload');
						if(objEvent.objXHR.status==200)
							{
							objDesign._UpdateDimensions();
							objEvent.objXHR.response;
							if(objReality.bIzPlayer)
								{
								//console.log(objObjects.objXHR.response);
								var strAudio 		= JSON.parse(objEvent.objXHR.response);
								//alert(strAudio);
								objPlayer.objAudio.src	=strAudio;
								objPlayer.objAudio.load();
								//objPlayer.objVisibleControlsStopped.setAttribute('playerId', strAudio);
								objReality.bIzPlayer		=false;
								objReality.bIzLoading		=false;
								//alert('ok');
								}
							if(objReality.bIzDynaScreen)
								{
								objDynaScreen.objHTML.innerHTML	=objEvent.objXHR.response;
								objReality.bIzHistory		=false;
								objReality.bIzDynaScreen	=false;
								objReality.bIzLoading		=false;
								}
							if(objReality.bIzCheckMaNet)
								{
								objReality.bIzCheckMaNet	=false;
								}
							objReality.bIzPlayer		=false;
							objReality.bIzLoading		=false;
							objReality.bIzHistory		=false;
							objReality.bIzDynaScreen	=false;
							objReality.bIzCheckMaNet	=false;
							objPlayer.updateOnReload();
							objDynaScreenEventIndicator.objHTML.style.display="none";
							}
						else
							{
							objReality.bIzPlayer		=false;
							objReality.bIzLoading		=false;
							objReality.bIzHistory		=false;
							objReality.bIzDynaScreen	=false;
							objReality.bIzCheckMaNet	=false;
							objDynaScreenEventIndicator.objHTML.style.display="none";
							}
						console.log('[...]EDRO.Event: objXHR.onload');
						}
					this.objXHR.onProgress		=function(event)
						{
						console.log('[Vvv]EDRO.Event: objXHR.onProgress');
						if(event.lengthComputable)
							{
							//console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
							}
						else
							{
							//console.log('Получено'+event.loaded+'байт');
							}
						console.log('[...]EDRO.Event: objXHR.onProgress');
						}
					this.objXHR.onError=function()
						{
						console.log('[Vvv]EDRO.Event: objXHR.onError');
						objReality.bIzLoading		=false;
						objReality.bIzPlayer		=false;
						objReality.bIzDynaScreen	=false;
						objReality.bIzCheckMaNet	=false;
						objReality.bIzError		=true;
						
						objDynaScreenEventIndicator.objHTML.style.display="none";
						console.log('[...]EDRO.Event: objXHR.onError');
						}
					console.log('[..]EDRO.Event: Constructor');
					}
				_PlayStation(strPlayerId)
					{
					console.log('[Vv]EDRO.Objects: _PlayStation(strPlayerId)');
					objReality.bIzPlayer			=true;
					objEvent.strEvent			='/getStation';
					objEvent.arrParams.strStationId		=strPlayerId;
					objEvent._RequestURLDyn();
					console.log('[..]EDRO.Objects: _PlayStation(strPlayerId)');
					}
				_Search()
					{
					console.log('[Vv]EDRO.Objects: _Search()');
					objReality.bIzDynaScreen		=true;
					objEvent.strEvent			='/Search';
					objEvent.arrParams.page			=0;
					objDynaScreenEventIndicator.objHTML.style.display="block";
					this._CreateURL();
					//objEvent.PushEvent; ////// ++
					this._Request();
					console.log('[..]EDRO.Objects: _Search()');
					}
				_CheckMaNet()
					{
					console.log('[Vv]EDRO.Objects: _CheckMaNet()');
					objReality.bIzHistory			=false; //objObjects->objReality
					objEvent.strEvent			='/checkMaNet';
					objEvent._CreateURL();			//objObjects->objEvent
					objEvent._Request();			//objObjects->objEvent
					console.log('[..]EDRO.Objects: _CheckMaNet()');
					}
				_CreateParamsStr()
					{
					console.log('[Vv]EDRO.Reality: _CreateParamsStr()');
					//console.log(this.arrParam);
					objEvent.strParams		='';
					Object.keys(objEvent.arrParams).forEach(function(strKey)
						{
						objEvent.strParams	+='&'+strKey+'='+objEvent.arrParams[strKey];
						});
					objEvent.strParams		=objEvent.strParams.substr(1);
					//alert(objEvent.strParams);
					console.log('[..]EDRO.Reality: _CreateParamsStr()');
					}
				_CreateURLDyn()
					{
					console.log('[Vv]EDRO.Objects: _CreateUrl()');
					objEvent._CreateParamsStr();
					objEvent.strURL			=objEvent.strEvent+'?'+objEvent.strParams; //objReality->objObjects
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					console.log('[..]EDRO.Objects: _CreateURL()');
					}
				_RequestURLDyn() //objObjects->objEvent
					{
					console.log('[Vv]EDRO.Objects: _Request()');//objObjects->objEvent
					objReality.bIzHistory					=true;
					objReality.bIzLoading					=true;
					objReality.intLoadingTime				=0;
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objEvent._CreateURLDyn();
					objEvent.objXHR.open('POST', objEvent.strURLDyn);
					objEvent.objXHR.send();
					if(objReality.bIzHistory)
						{
						objEvent.strEvent	='/';
						objEvent._CreateURLDyn();
						history.pushState(objEvent.objNav, objEvent.strEvent, objEvent.strURL);
						}
					console.log('[..]EDRO.Objects: _Request()');//objObjects->objEvent
					}
				_UpdateURLDyn() //objObjects->objEvent 
					{//(CAUTION!!!:Inside of updating object must be information of EDRO DESIGN MATRIX position!!)
					//    //  ///  Don't create functions with declareddestination of the request!! 06.08.2020 ChekMaNet
					console.log('[Vv]EDRO.Objects: _Update()'+objEvent.strURL);//objObjects->objEvent
					objReality.bIzHistory					=true;
					objReality.bIzLoading					=true;
					objReality.bIzDynaScreen				=true;
					objReality.intLoadingTime				=0;
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objEvent._CreateURLDyn();
					if(objReality.bIzHistory)
						{
						history.pushState(objEvent.objNav, objEvent.strEvent, objEvent.strURL);
						}
					objEvent.objXHR.open('POST', objEvent.strURLDyn);
					objEvent.objXHR.send();
					console.log('[..]EDRO.Objects: _Update()'+objEvent.strURL);//objObjects->objEvent4
					}
				/*_PlayStation(strPlayerId)
					{
					}
				_CreateURL()
					{
					}
				_CheckMaNet()
					{
					}
				_CreateURLDyn()
					{
					}
				_CreateParamsStr()
					{
					}
				_GetDimensions()
					{
					}
				_PageTransformation()
					{
					}
				_Request()
					{
					}
				_Search()
					{
					}
				_Send()
					{
					}
				_UpdateDimensions()
					{
					}
				_Push()
					{
					history.pushState(this.objNav, 'Hfic', objReality.strURL);
					}
				*/
				_SetLanguageMood()
					{
					console.log('[Vv]EDRO.Reality: Master Mood SET  _SetLanguageMood');
					document.body.className		+=' '+strSignalLang;
					console.log('[..]EDRO.Reality: Master Mood SET  _SetLanguageMood');
					}
				_SetRoleSignal()
					{
					console.log('[Vv]EDRO.Reality: Master Mood SET  _SetRoleSignal()');
					this.objRoleSignal		=document.getElementById('SignalRole');
					this.objRoleSignal.innerHTML	=strSignalRole;
					console.log('[..]EDRO.Reality: Master Mood SET  _SetRoleSignal()');
					}
				/*_Send()
					{
					console.log('[Vv]EDRO.Event: _Send.');
					if(objReality.bIzHistory)
						{
						console.log('[Vv]EDRO.Event: Push history'+this.strURL);
						//this.objNav.strSearchName		=objSearch.strValueInputName;
						//this.objNav.strSearchStyle		=objSearch.strValueInputStyle;
						//this.objNav.strSearchBitrate		=objSearch.strValueInputBitrate;
						//this.objNav.strSearchCodec		=objSearch.strValueInputCodec;
						history.pushState(this.objNav, 'Search', this.strURL);
						console.log('[..]EDRO.Event: Push history');
						}
					}
				_CheckNetwork()
					{
					
					}*/
				}
			console.log('[.]EDRO.Event: Declare');
		</script>

		return $str;
		}
	public static function strInitStreamClock()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: InitStreamClock');
			console.log('[.++.+.*.*.++.+.+]EDRO.Event: Init event stream graph circle.');
			objEDRO._CircleControllerGraph	=setInterval(objEDRO.funControllerGraph, 1000);
			console.log('[.]EDRO.Event: InitStreamClock');
		</script>
oо2оo;
		return $str;
		}
	public static function strDeclareStreamClock()
		{
		$str	=	<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: _DeclareStreamClock');
			objEDRO.funControllerGraph= function()
				{
				var objDate	=new Date();
				if(objPlayer.bIzPlaying) //!!!    objReality.bIzPlayerPlaying!!!
					{
					
				//	objPlayer.objVisibleControlsPlayingDuration.innerHTML=objPlayer.intPlayingDuration;
					objPlayer.intPlayingDuration++;
					}
				if(objPlayer.bIzLoading)
					{
				//	objPlayer.objVisibleControlsLoadingDuration.innerHTML=objPlayer.intLoadingDuration;
					
					objIndicatorMasterClock.objStrServerLoading.innerHTML	=objReality.intMaxLoadingTime+'/'+objReality.intLoadingTime+'/'+objPlayer.intLoadingDuration;
					if(!objPlayer.bIzNeedToBeStoppedEvent)
						{
						//objPlayer.objAudio.load();
						}
					objPlayer.intLoadingDuration++;
					//objPlayer.bIzLoading=false;
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
				/*if(objPlayer.bIzError)
					{
					}*/
				if(objEDRO.intVector==2)
					{
					console.log('[=^Vvv]EDRO.Event: funControllerGraph');
					console.log(objEDRO.intStep);
					objEDRO.intVector	=0;
					objDesign._UpdateDimensions();
					console.log('[[=^...]EDRO.Event: funControllerGraph');
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
			console.log('[.]EDRO.Event: _DeclareStreamClock');
		</script>
oо2оo;
		return $str;
		}
	}
?>