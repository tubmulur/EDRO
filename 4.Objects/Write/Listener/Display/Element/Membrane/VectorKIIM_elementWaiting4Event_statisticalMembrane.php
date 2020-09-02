<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////

class VectorKIIM_elementWaiting4Event_statisticalMembrane
	{
	public $strHTML;
	public function __construct()
		{
		$this->strHTML='
			<VectorKIIM_elementWaiting4Event_statisticalMembrane
				class="
					sensor block abs layer_5_Membrane
					Благословенный.RCe.Framework.HTML
					"
				onClick="objPlayer.stop();"
				style="
					/*visibility	:visible;
					opacity		:1;*/
					display		:none;
					width		:100%;
					height		:81px;
					text-align	:left;
					background-color:rgb(38, 38, 38);
					color		:rgb(161, 161, 161);
					"
				>
				<blockHeader
					class="abs block BC3 TC3"
					style="
						top		:0;
						left		:0;
						font-size	:x-small;
						line-height	:10px;
						"
					>
					KIIM:
				</blockHeader>
				<KIIMsDecision
					class		="block left BRJ scrollerY";
					style		="
						width		:90%;
						height		:93%;
						line-height	:19px;
						"
					>

				</KIIMsDecision>
				<maxWaitingTime
					class="block float BBV ML"
					style="
						color		:green;
						font-size	:x-small;
						height		:20px;
						line-height	:19px;
						"
					>0.00</maxWaitingTime>
				<currentWaitingTime 
					class="block float ML"
					style="
						color		:green;
						font-size	:x-small;
						height		:20px;
						line-height	:19px;
						"
					>0.00</currentWaitingTime>
				<errorsCount 
					class="block int BTA ML"
					style="
						color		:green;
						font-size	:x-small;
						height		:20px;
						line-height	:19px;
						color		:red;
						"
					>
					
					<int>0</int>
				</ErrorsCount>
			</VectorKIIM_elementWaiting4Event_statisticalMembrane>';
		}
	public static function strObjectInit()
		{
		$str='
		<script>
			console.log(\'[V]VectorKIIM StatisticalMembrane: Init\');
			var objKIIM_StatisticalMembrane=new KIIM_StatisticalMembrane();
			console.log(\'[.]VectorKIIM StatisticalMembrane: Init\');
		</script>
		';
		return $str;
		}
	public static function strObjectDeclare()
		{
$str	=<<<oo2oo
		<script>
			console.log('[V]VectorKIIM StatisticalMembrane: Declare');
			class KIIM_StatisticalMembrane
				{
				constructor()
					{
					console.log('[Vv=^+v]VectorKIIM: StatisticalMembrane: constructor');
					//this.objTimeFlow		=objSyncFlow1_KIIM_ElementWaiting;

					this.intCurrentWaitingTime	=0;
					this.objMaxWaitingTime 		='';
					this.floatMaxWaitingTime 	=0.0;

					this.objCurrentWaitingTime	='';
					this.floatCurrentWaitingTime	=0.0;

					this.objErrorsCount		='';
					this.objErrorsCountInt		='';
					this.objErrorsCountText		='';
					this.intErrorsCount		=0;
					this.bIzRunning			=false;
					this.bIzError			=false;
					this.bIzStop			=false;
					console.log('[...^..]VectorKIIM: StatisticalMembrane: constructor');
					//objPlayer.objVisibleControlsStat

					//Statistic
					}
				_start(obj)
					{
					/*console.log('[Vv=^+v]VectorKIIM StatisticalMembrane: _start');
					this.bIzRunning				=true;
					console.log('[Vv=^+v]VectorKIIM: bIzRunning=true;');
					this.bIzError				=false;
					console.log('[Vv=^+v]VectorKIIM: .bIzError=false;');
					this.bIzStop				=false;
					console.log('[Vv=^+v]VectorKIIM: .bIzStop=false;');
					if(typeof(this.objVectorKIIM)=='object')
						{
						console.log('[Vv=^+vv]VectorKIIM: hide prev');
						this.objVectorKIIM.style.display	='none';
						console.log('[...^...]VectorKIIM: hide prev');
						}
					console.log('[Vv=^+v]VectorKIIM: hide prev');
					this.objVectorKIIM			=obj.getElementsByTagName('VectorKIIM_elementWaiting4Event_statisticalMembrane')[0];
					this.objMaxWaitingTime			=obj.getElementsByTagName('maxWaitingTime')[0];
					this.objCurrentWaitingTime		=obj.getElementsByTagName('currentWaitingTime')[0];
					this.objErrorsCount			=obj.getElementsByTagName('errorsCount')[0];
					this.objKIIMsDecision			=obj.getElementsByTagName('KIIMsDecision')[0];
					this.objKIIMsDecision.innerHTML		='<ifRU><paragraph></paragraph>Подключаемся к радиостанции.</ifRU><ifEN><paragraph></paragraph>Connecting to radiostation.</ifEN>';
					this.intCurrentWaitingTime		=0;

					this.objVectorKIIM.style.display	='block';

					//this.objTimeFlow			=objKIIM_StatisticalMembrane._incTime();
					this._error();//Inc error, for  catching next iteration as after error in any case.
					console.log('[...^..]VectorKIIM StatisticalMembrane: _start');
					return true;*/
					}
				_incTime()
					{
					/*console.log('[Vv=^+v]VectorKIIM StatisticalMembrane: _incTime');
					this.objCurrentWaitingTime.innerHTML	=this.intCurrentWaitingTime++;
					console.log('[...^..]VectorKIIM StatisticalMembrane: _incTime');*/
					}
				_stop()
					{/*
					console.log('[Vv=^+v]VectorKIIM StatisticalMembrane: _stop');
					this.bIzRunning				=false;
					this.bIzError				=false;
					this.bIzStop				=true;
					this.objVectorKIIM.style.display	='none';
					if(parseFloat(this.objMaxWaitingTime.innerHTML)<parseFloat(this.objCurrentWaitingTime.innerHTML))
						{
						this.objMaxWaitingTime.innerHTML=this.objCurrentWaitingTime.innerHTML;
						}
					console.log('[...^..]VectorKIIM StatisticalMembrane: _stop');*/
					return true;
					}
				_error()
					{/*
					console.log('[Vv=^+v]VectorKIIM StatisticalMembrane: _error');
					this.bIzError			=true;
					console.log('[Vv=^+v]VectorKIIM StatisticalMembrane: bIzError='+this.intErrorsCount);
					this.bIzStop			=false;
					console.log('[Vv=^+v]VectorKIIM StatisticalMembrane: .bIzStop=false');
					//alert(parseInt(this.objErrorsCount.innerHTML));
					//alert(parseInt(1));
					//let strKIIMDecision			='';
					objPlayer.bIzNeedToBeStoppedEvent=true;
					if(this.intErrorsCount==5)
						{
						var strKIIMDecision	='<ifRU><paragraph></paragraph>Пытаюсь переподключиться</ifRU><ifEN><paragraph></paragraph>Trying to reconnect</ifEN>';
						}
					if(this.intErrorsCount==10)
						{
						var strKIIMDecision	='<ifRU><paragraph></paragraph>Количество ошибок подключения:</ifRU><ifEN><paragraph></paragraph>Count of connection tryes > </ifEN>'+this.intErrorsCount;
						}
					if(this.intErrorsCount>=15)
						{
						var strKIIMDecision	='<ifRU><paragraph></paragraph>Не удаётся подключтиться. Возможно радиостанция очень далеко, перегружена или не отвечает. Такое случается, ведь вы слушаете радиостанции целой огромной планеты. Попробуйте включить другую станцию. Для этого просто нажмите на кнопку плей на другой радиостанции.</ifRU><ifEN><paragraph></paragraph>We can not connect. This station could be too far away or overloaded. This could happens, because here you can find radiostations from the whole world. Try to listen another one. To play it, just press play button on another one.</ifEN>';
						if(objPlayer.intPlayingDuration<15)
							{
							objPlayer.stop();
							}
						}
					//objPlayer.objVisibleControlsStat.InnerHtml
					if(typeof(this.objKIIMsDecision)=="object")
						{
						if(typeof(strKIIMDecision)=='string')
							{
							this.objKIIMsDecision.innerHTML	=strKIIMDecision;
							}
						}
					///this.objKIIMsDecision.innerHTML
					this.objErrorsCount.innerHTML		=this.intErrorsCount++;
					console.log('[...^..]VectorKIIM StatisticalMembrane: _error');*/
					return true;
					}
				}
			console.log('[.]VectorKIIM StatisticalMembrane: Declare');
			//objSyncFlow1_ElementWaiting
		</script>
oo2oo;
return $str;
		}
	public static function strHTML($_objKIIM)
		{
		$obj=new VectorKIIM_elementWaiting4Event_statisticalMembrane($_objKIIM);
		return $obj->strHTML;
		}
	}
?>