<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
class Event extends Design
	{
	public function __construct($_objKIIM)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$strEvent						=strGetEventSetter();
		$arrEventParams						=arrGetEventSetterParams($strEvent);
		if(is_array($this->arrEDRO[$strEvent]))
			{
			$this->arrEDRO						=$this->arrEDRO[$strEvent];
			$this->arrEDRO['arrEvent']['strAction']			=$strEvent;
			$this->arrEDRO['arrEvent']['arrParams']			=arrPrepareEventParams($this->arrEDRO['arrEvent']['arrParams'], $arrEventParams);
			$this->arrEDRO['arrEvent']['bIzDynamic']		=$this->bIsDynamic($objKIIM);
			}
		else
			{
			$objError=new ReportError($objKIIM, $strEvent.' is out of published events.');
			exit(0);
			}
		parent::__construct($objKIIM);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}

	private function bIsDynamic($_objKIIM)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$bIsDynamic=false;
		if(isset($this->objEvent->arrRequest))
			{
			if($this->objEvent->arrRequest=='GetServiceDj')
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
	public static function strDeclareOsciloscope()
		{
		?>
		<script>
			objOscilloscope		=document.getElementById('oscilloscope');
			_Flow1			=setInterval(_FlowSync, 1000);
		</script>
		<?php
		}
	}
?>