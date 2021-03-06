<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class DynaScreen
	{
	public $strHTML;
	public function __construct($_objKIIM, $_arrData)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		unset($_arrData);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strStart($_objEDRO, $strSearchForm)
		{
		if($_objEDRO->arrEvent['bIsDynamic'])
			{
			$str='<brickTop class="block" style="width:100%;height:60px"></brickTop>';
			}
		else
			{
			require_once('/home/EDRO.SetOfTools/System/4.Styles/0.CSS.Styles.php');
			require_once('/home/EDRO.SetOfTools/System/5.Templates/0.strKIIM.Template.php');
			require_once('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/0.HTML_HeadInterface.php');
			$str		=$_objEDRO->strParamsInit();
			$str		.=$strSearchForm;
			$str		.='
			<dynaScreen
				id	="DynaScreen"
				class	="block layer_2_1"
				style	="
					position		:fixed;
					top			:0;
					left			:0;
					width			:100%;
					height			:100%;
					display			:block;
					"
				>
				<brickTop class="block" style="width:100%;height:60px"></brickTop>
				';
			}
		$str.='<marginTop class="block" style="width:100%;height:2%"></marginTop>';
		$str.='<pageDate id="pageDateTimeServer" style="display:none">'.date('Y-m-d H:i:s').'</pageDate>';

		return $str;
		}
	public static function strEnd($bIsDynamic)
		{
		$str='';
		if($bIsDynamic)
			{
			$str.='<brickBottom class="block" style="width:100%;height:200px"></brickBottom>';
			}
		else
			{
			//$str='<brickBottom class="block" style="width:100%;height:100px"></brickBottom>';
			$str.='</dynaScreen>';
			$str.=DynaScreen::strObjectInit();
			$str.=Design::strObjectInit();
			$str.=Objects::strObjectInit();
			$str.='</body>';
			$str.='</html>';
			}
		return $str;
		}
	public static function strObjectInit()
		{
		$str	= <<<oo2oo
		<script>
			console.log('[V]EDRO.Design.DynaScreen: init');
			var objDynaScreen		= new DynaScreen();
			console.log('[.]EDRO.Design.DynaScreen: init');
		</script>
oo2oo;
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	= <<<oo2oo
		<script>
		console.log('[V]EDRO.Objects: DynaScreen');
		class DynaScreen
			{
			constructor()
				{
				console.log('[Vv]EDRO.Objects.DynaScreen: construct()');
				this.objXHR		=new XMLHttpRequest();
				this.objHTML		=document.getElementById('DynaScreen');
				this.intHeight		=0;
				this.intWidth		=0;
				this._GetDimensions();
				this.objXHR.onload	=function()
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onload');
					if(objDynaScreen.objXHR.status==200)
						{	
						if(objReality.bIzDynaScreen)
							{
							objDynaScreen.objHTML.innerHTML	=objDynaScreen.objXHR.response;
							objReality.bIzHistory		=false;
							objReality.bIzDynaScreen	=false;
							objReality.bIzLoading		=false;
							}
						objReality.bIzLoading		=false;
						objReality.bIzHistory		=false;
						objReality.bIzDynaScreen	=false;
						objPlayer.updateOnReload();
						objDynaScreenEventIndicator.objHTML.style.display="none";
						}
					else
						{
						objReality.bIzLoading		=false;
						objReality.bIzHistory		=false;
						objReality.bIzDynaScreen	=false;
						objDynaScreenEventIndicator.objHTML.style.display="none";
						}
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onload');
					}
				this.objXHR.onProgress		=function(event)
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onProgress');
					if(event.lengthComputable)
						{
						//console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
						}
					else
						{
						//console.log('Получено'+event.loaded+'байт');
						}
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onProgress');
					}
				this.objXHR.onError=function()
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onError');
					objReality.bIzLoading		=false;
					objReality.bIzDynaScreen	=false;
					objReality.bIzError		=true;
					
					objDynaScreenEventIndicator.objHTML.style.display="none";
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onError');
					}
				//this.strEvent		='/search';
				//this.strParametrs	='';
				//this.strDynaUpdate	='';
				//this.strUrl		='';
				//this.bIzHistory		=true;
				console.log('[..]EDRO.Objects: DynaScreen.construct()');
				}
			_GetDimensions()
				{
				console.log('[Vv]EDRO.Objects.DynaScreen:  _GetDimensions()');
				this.intHeight		=this.objHTML.offsetHeight;
				this.intWidth		=this.objHTML.offsetWidth;
				console.log('[..]EDRO.Objects.DynaScreen:  _GetDimensions()');
				}
			}
		console.log('[.]EDRO.Design: DynaScreen');
		</script>
oo2oo;
		return $str;
		}
	public static function strHTML($_objKIIM, $_objData)
		{
		$objDynaScreen=new DynaScreen($objKIIM, $_objData);
		return $objDynaScreen->strHTML;
		}
	}
?>