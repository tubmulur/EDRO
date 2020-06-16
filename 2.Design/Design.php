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
				}
			}
		</script>
		<?php
		}
	}
?>