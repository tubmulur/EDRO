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
class HiFiNavigation
	{
	public $strHTML;
	public function __construct($_objKIIM, $_arrPagination, $arrParams)
		{
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$intPage		=$_arrPagination['int0Page'];
		$intStart		=$_arrPagination['int0Start'];
		$intEnd			=$_arrPagination['int0Untill'];
		$intPageParamName	='int0Page';
		$intPages		=$_arrPagination['int0Pages'];
		$intTotal		=$_arrPagination['int0Total'];
		$intNextPage		=($intPage+1);
		$intPrevPage		=($intPage-1);
		?>
		<pageNav
			class="
				fixed V1 block layer_5_nav BC2 TC2 BBV
				"
			style="
				left		:15%;
				width		:70%;
				height		:40px;
				text-align	:center;
				margin		:auto;
				"
			>
			<?php
			if($intPage<$intPages)
				{
			?>
			<a href="<?=strLinkGroove($arrParams, $intPageParamName, $intNextPage, true)?>"
				class="block right BBV BTA BC1 TC1 cursor no-select"
				onclick="
					objEvent.arrParams.<?=$intPageParamName?>='<?=$intNextPage?>';
					objEvent._UpdateURLDyn();
					return false;
					"
				style="
					width		:34%;
					height		:100%;
					text-align	:center;
					text-decoration	:none;
					"
				>
				>>
			</a>
				<?php
				}
			else
				{
				?>
				<stopBlock
				class="block right BBV BTA BC1 TC1 cursor no-select"
				style="
					width		:34%;
					height		:100%;
					text-align	:center;
					text-decoration	:none;
					"
					>
				</stopBlock>
				<?php
				}
				?>
			<pagerNum
				class="fix V1 block right tcenter BC1 TC1 BLL BRJ BBV BTA no-select"
				style="
					left		:36%;
					width		:28%;
					height		:40px;
					"
				>
				<strPage
					class="block tcenter"
					>
					<select
						onChange="
							objEvent.arrParams.<?=$intPageParamName?>=this.value;
							objEvent._UpdateURLDyn();
							return false;
							"
						>
						<?php
						for($intI=0;$intI<=$intPages;$intI++)
							{
							$strSelected='';
							
							if($intPage==$intI)
								{
								$strSelected='selected';
								}
							?>
							<option value="<?=$intI?>" <?=$strSelected?>><?=$intI?>/<?=$intPages?></option>
							<?php
							}
							?>
					</select>
					
				</strPage>
				<strPage
					class="block TC2 BC2" 
					style="
						font-size	:x-small;
						"
					>[<?=$intStart?>-<?=$intEnd ?>][<?=$intTotal-$intEnd?>][<?=$intTotal?>]
				</strPage>
			</pagerNum>
			<?php
			if($intPage<1)
				{
				?>
				<stopBlock
					class="block left BBV BTA BC1 TC1 cursor no-select"
					style="
						width		:34%;
						height		:100%;
						text-align	:center;
						text-decoration	:none;
						"
					>
				</stopBlock>
				<?php
				}
			else
				{
				?>
				<a href="<?=strLinkGroove($arrParams, $intPageParamName, $intPrevPage, true)?>"
				class="block left BBV BTA BC1 TC1 cursor no-select"
				onclick="
					objEvent.arrParams.<?=$intPageParamName?>='<?=$intPrevPage?>';
					objEvent._UpdateURLDyn();
					return false;
					"
				style="
					width		:34%;
					height		:100%;
					text-align	:center;
					text-decoration	:none;
					"
				>
				<<
			</a>
			<?php
				}
			?>
		</pageNav>
		<?php

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strObjectDeclare()
		{
		?>
		<script>

		</script>
		<?php
		}
	public static function strObjectInit()
		{
		?>
		<script>

		</script>
		<?php
		}
	public static function strHTML($_objKIIM, $_arrPagination, $_arrParams)
		{
		$objHiFiNavigation=new HiFiNavigation($_objKIIM, $_arrPagination, $_arrParams);
		return $objHiFiNavigation->strHTML;
		}
	}
?>