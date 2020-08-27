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
class EDRO extends Event
	{
	protected $strBasePath;
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strBasePath		=Reality::strBasePath();

		parent::__construct($objKIIM);
		/*
		echo '<pre>';
			print_r($this);
		echo '</pre>';
		exit(0);
		*/
		FileRead::_GetDesignHTML($objKIIM, $this->arrDesign['strTemplate'], $this);
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}

	public static function strObjectDeclare()
		{
		$str	= <<<oo2oo
		<script>
			console.log('[V]EDRO: Declare');
			class EDRO
				{
				constructor()
					{
					console.log('[Vv]EDRO: Construct');

					//this.K			=0;
					//this.L			=0;
					this.intStep		=0;//Player session operation time
					this.intVector		=0;
					//this.strCurOperID;
					

					console.log('[..]EDRO: Construct');
					}
				}
			console.log('[.]EDRO: Declare');
		</script>
oo2oo;
		return $str;
		}
	public static function strObjectInit()
		{
		$str	= <<<oo2oo
		<script>
			console.log('[V]EDRO: Init');
			objEDRO		=new EDRO();
			console.log('[.]EDRO: Init');
		</script>
oo2oo;
		return $str;
		}
	}