<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
class Design extends Reality
	{
	public function __construct($_objKIIM)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->arrEDRO['arrDesign'];

		parent::__construct($objKIIM);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strInitJs()
		{
		?>
		<script>
			var objDesign=new Design();
		</script>
		<?php
		}
	public static function strDeclareJs()
		{
		?>
		<script>
		class Design
			{
			constructor()
				{
				console.log('Design constructor started');
				//this.intScreenHeight	=screen.height
				this.intScreenHeight	=objDynaScreen.intHeight;
				this.intScreenWidth	=objDynaScreen.intWidth;
				this.intHorElements	=Math.floor(this.intScreenWidth/419);
				this.intVertElements	=Math.floor(this.intScreenHeight/90);
				this.blockWidth		=Math.floor(this.intScreenWidth/this.intHorElements);
				this.intTotalElements	=(this.intHorElements*this.intVertElements)-(this.intVertElements*2)-1;
				
				if(this.intTotalElements<=0)
					{
					this.intTotalElements=2;
					}
				objSearch.intOnPage	=this.intTotalElements;
				objSearch.intBlockWidth	='';
				objSearch.strEvent	='';
				objSearch._CreateUrl();
				objDynaScreen.strURL		=objSearch.strURL;
				objEvent.strURL			=objSearch.strURL;
				objDynaScreen._Update();

				}
			}
		</script>
		<?php
		}
	}
?>