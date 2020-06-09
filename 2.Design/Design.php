<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
class Design
	{
	private $strBasePath;
	public function __construct($_objKIIM, $_obj)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strBasePath	=Reality::strBasePath();
		 $obj=$_obj;
		unset($_obj);

		$strObjectName=ucfirst(substr($obj->objEvent->strAction,1));
		$this->strPath=$this->strBasePath.'/2.Design/.str'.$strObjectName.'.php';
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