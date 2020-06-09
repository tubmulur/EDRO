<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
class Event
	{
	public function __construct($_objKIIM, $obj)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		//$this->strBasePath	=Reality::strBasePath();
		$strRequest=strGetRequest();
		if(bIzEvent('/robots.txt', $strRequest))
			{
			header('Content-Type: text/plain');
			echo Read::str($objKIIM,'robots.txt');
			exit(0);
			}
		elseif(bIzEvent('/favicon.ico', $strRequest))
			{
			header('Content-Type: image/png');
			echo Read::str($objKIIM,'favicon.jpg');
			exit(0);
			}
		elseif(bIzEvent('/', $strRequest))
			{
			$this->strEvent		=
				array(
					'strName'	=>'',
					'strAction'	=>'/',
					'arrParams'	=>arrGetRequest($strEvent, $strRequest)
					);
			$this->strDesign	=
				array(
					'strBasePath'	=>'/home/EDRO',
					'FileList'	=>
						array(
							'strTitle'	=>'HiFiIntelligentClub',
							'arrElement'	=>
								array(
									//..
									),
							),

					);
			$this->arrReality	=
				array(
					'strBasePath'	=>'/home/EDRO',
					'arrRoles'	=>
						array(
							'Listener'=>
								array(
									'strObject'=>'FileList',
									'strDesign'=>'FileList',
									),
							'Dj'	  =>
								array(
									'strObject'=>'FileList',
									'strDesign'=>'FileList',
									),
							),
					);
			$this->arrObject	=
				array(	'FileList'=>
					array(
						'strClassName'	=>'FileList',
						'strAction'	=>'strGetHTML',
						'strTarget'	=>'/home/EDRO.PolymerConstructor/Main',
						),
					'DjFileList'=>
					array(
						'strClassName'	=>'FileList',
						'strAction'	=>'strGetHTML',
						'strTarget'	=>'/home/EDRO.PolymerConstructor/Main',
						),
					);
			$this->strAction	='/home/EDRO.PolymerConstructor/Main';
			$this->strMethod	='strHTML';
			}
		elseif(bIzEvent('/stationList', $strRequest))
			{
			$this->strEvent		='/stationList';
			$this->strAction	='stationList';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);
			}
		elseif(bIzEvent('/fileList', $strRequest))
			{
			$this->strEvent		='/fileList';
			$this->strAction	='fileList';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);
			}
		elseif(bIzEvent('/station/search', $strRequest))
			{
			$this->strEvent		='/station/search';
			$this->strAction	='station/search';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);

			}
		elseif(bIzEvent('/Master', $strRequest))
			{
			$this->strEvent		='/Master';
			$this->strAction	='Master';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);
			}
		elseif(bIzEvent('/Follow', $strRequest))
			{
			$this->strEvent		='/Follow';
			$this->strAction	='Follow';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);
			}
		elseif(bIzEvent('/News', $strRequest))
			{
			$this->strEvent		='/News';
			$this->strAction	='News';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);
			}
		elseif(bIzEvent('/Podcast', $strRequest))
			{
			$this->strEvent		='/Podcast';
			$this->strAction	='Podcast';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);
			}
		elseif(bIzEvent('/BentleyMusic_Квартирный_Вопрос', $strRequest))
			{
			$this->strEvent		='/BentleyMusic_Квартирный_Вопрос';
			$this->strAction	='BentleyMusic_Квартирный_Вопрос';
			$this->arrParams	=arrGetRequest($strEvent, $strRequest);
			}
		else
			{
			exit(0);
			}

		$this->bIsDynamic=$this->bIsDynamic($objKIIM);
		//$this->arrSetup		=$this->arrRead($objKIIM);
		/*echo'<pre>';
			print_r($this);
		echo'</pre>';*/

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function bIsDynamic($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$bIsDynamic=false;
		if(isset($this->objEvent->arrRequest[0]))
			{
			if($this->objEvent->arrRequest[0]=='GetServiceDj')
				{
				$bIsDynamic=true;
				}
			}
		if(isset($_REQUEST['d']))
			{
			$bIsDynamic=true;
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $bIsDynamic;
		}

	public static function strInitJs()
		{
		//Event.Design.Reality
		?>
		<script>
			var objEvent=new Event();
		</script>
		<?php
		}
	public static function strDeclareJs()
		{
		//Event.Design.Reality
		?>
		<script>
			var objSyncFlow1_KIIM_ElementWaiting;
			var objOscilloscope;
			var _Flow1;
			var intStep		=0;
			
			_FlowSync= function()
				{
				if(objKIIM_StatisticalMembrane.bIzRunning==true)
					{
					objKIIM_StatisticalMembrane._incTime();
					}
				objOscilloscope.innerHTML	=intStep++;
				}
			class Event
				{
				constructor()
					{
					console.log('Event constructor started');
					//this.objXHR			=new XMLHttpRequest();
					this.strURL			='';
					this.strDynaUpdate		='';
					this.bIzHistory			=true;
					this.objNav			={hifi:1};
					console.log('Event constructor finished');
					}
				_Send()
					{
					console.log('Event push event');
					if(this.bIzHistory)
						{
						console.log('Event push history:'+this.strURL);
						history.pushState(objEvent.objNav, 'Search', this.strURL);
						}
					}
				}
		</script>
		<?php
		}
	}
?>
