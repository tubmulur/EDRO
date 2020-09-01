<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **>
 //     Jl
//////
//$_arr=array(
//	'val1', 
//	'val2', 
//	...
//	);
//$_arrElement=array(
//	'_strText'		=>$str,
//	'_strColor'		=>($str==$strSelected)?'#000':'#FFF',
//	'_strBackgroundColor'	=>($str==$strSelected)?'#FFF':'#000',
//	'_strWidth'		=>'40px',
//	'_strHeight'		=>'30px',
//	'_strSelected'		=>($str==$strSelected)?'selected':'',
//	)
//$_arrList=array(
//	'_strOrientation'	=>'Horizontal',
//	'_strId'		=>''.
//	)

class SensorList
	{
	public $strHTML;
	public function __construct(
				$_arr, 
				$_arrElementSettings, 
				$_arrListSettings=array(
					'_strOrientation'=>'Horizontal'
					)
			)
		{
		$arr			=$_arr;
				   unset($_arr);
		$arrElementSettings	=$_arrElementSettings;
				   unset($_arrElementSettings);
		$arrListSettings	=$_arrListSettings;
				   unset($_arrListSettings);

		$strListOrientation	=$arrListSettings['_strOrientation'];
		


		$strListId			='';
		$intElementsCount		=count($arr);
		$strElementWidth		='40px';
		$strElementHeight		='100%';
		$strElementColor		='#000';
		$strElementBackgroundColor	='#FFF';
		$strElementSelected		='';

		if(isset($arrElementSettings['_strWidth']))
			{
			$strElementWidth=$arrElementSettings['_strWidth'];
				   unset($arrElementSettings['_strWidth']);
			}
		if(isset($arrElementSettings['_strHeight']))
			{
			$strElementHeight=$arrElementSettings['_strHeight'];
				    unset($arrElementSettings['_strHeight']);
			}

		if(isset($arrElementSettings['_strColor']))
			{
			$strElementColor=$arrElementSettings['_strColor'];
				   unset($arrElementSettings['_strColor']);
			}
		if(isset($arrElementSettings['_strBackgroundColor']))
			{
			$strElementBackgroundColor=$arrElementSettings['_strBackgroundColor'];
					     unset($arrElementSettings['_strBackgroundColor']);
			}

		if(isset($arrElementSettings['_strSelected']))
			{
			$strElementSelected=$arrElementSettings['_strSelected'];
				      unset($arrElementSettings['_strSelected']);
			}

		if(isset($arrListSettings['_strId']))
			{
			$strListId	='id="'.$arrListSettings['_strId'].'"';
					  unset($arrListSettings['_strId']);
			}
		if(isset($arrListSettings['_arrSearch']))
			{
			$arrSearch	=$arrListSettings['_arrSearch'];
				   unset($arrListSettings['_arrSearch']);
			}

		$intElementWidth=preg_replace('/[^0-9]/', '', $strElementWidth);
		$intHorizontalSensorWidth=(($intElementWidth*$intElementsCount)+($intElementsCount*3));
		$this->strHTML=
		'<sensorHorisontalDisplay
			'.$strListId.'
			class	="block"
			style	="
				width:100%;
				height:100%;
				"
			value	="'.$strElementSelected.'"
			>
			<sensorButton
				class	="block left border-right"
				style	="
					width:20px;
					height:100%;
					"
				onClick	="
					var objScroller		=this.nextElementSibling;
					var intCurrentOffset	=objScroller.getAttribute(\'offsetLeft\');
					var intNextOffset		=(intCurrentOffset-'.$intElementWidth.');
					objScroller.scrollTo(intNextOffset,0);
					objScroller.setAttribute(\'offsetLeft\', intNextOffset);
					"
				> <
			</sensorButton>
			<sensorHorizontalRotate
				class	="block left"
				style	="
					width:72px;
					"
				>
				<verticalSensor
					class	="block"
					style	="
						width:'.$intHorizontalSensorWidth.'px;
						height:100%;
						"
					>';
				foreach($arr as $intPos=>$arrSensor)
					{
					$this->strHTML.=Sensor::strHTML(
						array(
							'_strName'		=>$arrSensor['_strName'],
							'_strValue'		=>$arrSensor['_strValue'],
							'_strColor'		=>($arrSensor['_strValue']==$strElementSelected)?$strElementBackgroundColor:$strElementColor,
							'_strBackgroundColor'	=>($arrSensor['_strValue']==$strElementSelected)?$strElementColor:$strElementBackgroundColor,
							'_strWidth'		=>$strElementWidth,
							'_strHeight'		=>$strElementHeight,
							'_strSelected'		=>($arrSensor['_strValue']==$strElementSelected)?'selected':'',
							'_intSelectedOffset'	=>($arrSensor['_strValue']==$strElementSelected)?($intElementWidth*$intPos):'',
							'_arrSearch'		=>$arrSearch
							)
						);
					}
				$this->strHTML.=
				'</verticalSensor>
			</sensorHorizontalRotate>
		<sensorButton
			class="block right border-left"
			style="
				width:20px;
				height:100%;
				"
			onClick	="
				var objScroller		=this.previousElementSibling;
				var intCurrentOffset	=new Number(objScroller.getAttribute(\'offsetLeft\'));
				var intElementWidth	=new Number(\''.$intElementWidth.'\');
				var intNextOffset	=(intCurrentOffset+intElementWidth);
				objScroller.scrollTo(intNextOffset,0);
				objScroller.setAttribute(\'offsetLeft\', intNextOffset);
				"
			> >
		</sensorButton>
		</sensorHorisontalDisplay>';
		}
	public static function strHTML($_arr, $_arrElement, $_arrList=array('_strOrientation'=>'Horizontal'))
		{
		$objSensorList=new SensorList($_arr, $_arrElement, $_arrList);
		return $objSensorList->strHTML;
		}
	}
?>