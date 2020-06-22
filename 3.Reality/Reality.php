<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
class Reality extends Objects
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$this->_isConsole($objKIIM);

		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		session_start();
		$strListnersPath				='/home/EDRO.o2o/Listeners/';
		$this->arrEDRO['arrReality']['strListnersPath']	=$strListnersPath;
		$strListenerFile				='';
		$intCurrentTime					=floor(microtime(true));
		$strFileSuffix					='_'.$intCurrentTime.'.json';
		//$strFileSuffix					='.json';
		if(isset($_SESSION['intListnerId']))
			{
			$intSafeSessionId		=(integer)$_SESSION['intListnerId'];
			$strListenerFile		=$intSafeSessionId.$strFileSuffix;
			}
		else
			{
			$intListenerCount		=count(scandir($strListnersPath));
			$strListenerFile		=$intListenerCount.$strFileSuffix;
			$_SESSION['intListnerId']	=$intListenerCount;
			}
		$intSafeSessionId=(integer)$_SESSION['intListnerId'];
		exec('rm -f '.$strListnersPath.$intSafeSessionId.'_*'); 
		file_put_contents($this->arrEDRO['arrReality']['strListnersPath'].$strListenerFile, json_encode(array('strStyle'=>$this->arrEDRO['arrEvent']['arrParams']['style'])));
		$arrActiveListeners=scandir($strListnersPath);
		$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnlineCount']		=0;
		$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnline24hCount']	=0;
		foreach($arrActiveListeners as $strFile)
			{
			if($strFile!='..'&&$strFile!='.')
				{
				//echo $strFile;
				$intSessionTime	=preg_replace('/^([0-9]*)\_([0-9]*)(\.json)$/', '$2', $strFile);
				$intSessionId	=preg_replace('/^([0-9]*)\_([0-9]*)(\.json)$/', '$1', $strFile);
				if(($intCurrentTime-(60*60*24))<$intSessionTime)
					{
					$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnline24hCount']++;
					}
				if(($intCurrentTime-300)<$intSessionTime)
					{
					//echo $strFile;
					//echo'<br/>';
					$arrListener=FileRead::arrJSON($objKIIM, $this->arrEDRO['arrReality']['strListnersPath'].$strFile);
					$this->arrEDRO['arrReality']['arrCurrentListeners'][$intSessionId]=$arrListener;
					$this->arrEDRO['arrReality']['arrCurrentListeners']['intOnlineCount']++;
					}
				//echo 
				
				}
			
			}
		/////////////////////////////////////////////////////////////////////////////////////////////////////////

		$this->strRealityRoleSignal	='Listener';
		$strRealityRoleLangSignal	=FileRead::str($objKIIM, $this->strBasePath.'/3.Reality/User/'.$this->strRealityRoleSignal.'/.strLang.php');
		$this->strRealityRoleLangSignal	=rmLb($strRealityRoleLangSignal);
		
		$strLangSignal=strGetDomainName();
		if(strtoupper($strLangSignal)=="COM")
			{
			$strLangSignal	='EN';
			}
		if(strtoupper($strLangSignal)=="RU")
			{
			$strLangSignal	='RU';
			}
		else
			{
			$strLangSignal	='EN';
			}
		$this->strLangSignal	=strtoupper($strLangSignal);

		?>
		<script charset="utf-8">
			var strSignalRole	='<?=$this->strRealityRoleLangSignal?>';
			var strSignalLang	='<?=$this->strLangSignal?>';
		</script>
		<?php
		parent::__construct($objKIIM);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strBasePath()
		{
		return'/home/EDRO';
		}
	private function _isConsole($_objKIIM)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->arrEDRO['arrReality']['bIzConsole']=false;
		if(php_sapi_name()=='cli')
			{
			$this->arrEDRO['arrReality']['bIzConsole']=true;
			}
		else
			{
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strInitJs()
		{
		?>
		<script>
			objReality=new Reality();
		</script>
		<?php
		}
	public static function strDeclareJs()
		{
		?>
		<script>
			class Reality
				{
				constructor()
					{
					console.log('Reality constructor started');
					this._SetLanguageMood();
					this._SetRoleSignal();
					console.log('Reality constructor finished');
					}
				_SetLanguageMood()
					{
					console.log('objReality Master Mood SET  _SetLanguageMood()');
					this.strLang			=strSignalLang;
					document.body.className		+=' '+this.strLang;
					}
				_SetRoleSignal()
					{
					console.log('objReality _SetRoleSignal()');
					this.objRoleSignal		=document.getElementById('SignalRole');
					this.objRoleSignal.innerHTML	=strSignalRole;
					}
				}
		</script>
		<?php
		}
	}
?>
