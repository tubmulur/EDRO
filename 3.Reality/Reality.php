<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
class Reality extends Objects
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));


		$this->strRealityRoleSignal	='Listener';
		$strRealityRoleLangSignal	=Read::str($objKIIM, $this->strBasePath.'/3.Reality/User/'.$this->strRealityRoleSignal.'/.strLang.php');
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
