<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
class Reality
	{
	public 		$strBasePath;

	public function __construct($_objKIIM, $_obj)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strBasePath	=Reality::strBasePath();

		$this->strRole		='Listener';
		$strRealitySignal=Read::str($objKIIM, $this->strBasePath.'/3.Reality/User/'.$this->strRole.'/.strLang.php');
		$this->strRoleSignal	=rmLb($strRealitySignal);
		
		$strLang=strGetDomainName();
		if(strtoupper($strLang)=="COM")
			{
			$strLang	='EN';
			}
		if(strtoupper($strLang)=="RU")
			{
			$strLang	='RU';
			}
		else
			{
			$strLang	='EN';
			}
		$this->strLang	=strtoupper($strLang);

		?>
		<script charset="utf-8">
			var strSignalRole	='<?=$this->strRoleSignal?>';
			var strSignalLang	='<?=$this->strLang?>';
		</script>
		<?php

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
