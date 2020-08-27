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

class Objects
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>'', '_intShowTempo'=>'' ));

		//$strSearchName		=сПреобразовать(mb_strtolower(trim($this->arrEvent['arrParams']['strName'])),	'вКоманду');
		$strSearchName		='';
		$strSearchStyle		=mb_strtolower(trim($this->arrEvent['arrParams']['strStyle']));

		$strSearchBitrate	=mb_strtolower(trim($this->arrEvent['arrParams']['intBitrate']));
		$strSearchCodec		=mb_strtolower(trim($this->arrEvent['arrParams']['strCodec']));
		$сРасположениеКорень	='/home/ЕДРО:ПОЛИМЕР/020.Синтез.ЕДРО/020.Если/020.Действие/020.Реальность/020.Объект/Чтение_Диск/БазаДанных/HiFiIntelligentClub';
		
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
					$strSearchPath	.='/server_type/unordered/'.$strSearchCodec.'/unordered';
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
					$strSearchPath.='/server_type/unordered/'.$strSearchCodec.'/unordered';
					}
				}
			};

		$this->arrObjects['сРасположение']		=$сРасположениеКорень.$strSearchPath;
		$this->arrObjects['сРасположениеTotal']		=$this->arrObjects['сРасположение'].'/total.plmr';


		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strObjectInit()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO.Objects: _Init');
			objObjects	=new Objects();
			console.log('[.]EDRO.Objects: _Init');
		</script>
oo2oo;
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Objects: Declare');
		class Objects
			{
			constructor()
				{
				console.log('[Vv]EDRO.Objects: Construct');
				console.log('[..]EDRO.Objects: Construct');
				}
			}
		console.log('[.]EDRO.Objects: Declare');
		</script>
oo2oo;
		return $str;
		}
	}
?>