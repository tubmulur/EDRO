<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
			    //////  /\ RCe:
			       // <  **>
			     //     Jl
			   ////// 2020
class EDRO extends Event
	{
	protected $strBasePath;
	public function __construct($_objKIIM)
		{
		$objKIIM	=$_objKIIM;unset($_objKIIM);
		$objKIIM	=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$this->strBasePath		=Reality::strBasePath();
		//obJSignal_To_Setter=   Human->. ('FileList','Language=EN');

		$this->arrEDRO['/']['arrEvent']=
			array(
				// 'strAction'	=>'/',
				'arrParams'=>array(
					'name'		=>'',
					'style'		=>'',
					'bitrate'	=>'',
					'codec'		=>'',
					'page'		=>0,
					),
			);
		$this->arrEDRO['/']['arrDesign']=
			array(
				'strTemplate'	=>'/home/EDRO/2.Design/.strFileList.php', //+
				'strPos'	=>'Display',
			);
		$this->arrEDRO['/']['arrReality']=
			array(
				'strLang'=>'EN'
			);
		$this->arrEDRO['/']['arrObjects']=
			array(
				'arrSearchBlock'=>array(
					'arrEvent'	=>array(),
					'arrDesign'	=>array(),
					'arrReality'	=>array(),
					'arrObjects'	=>array(
						'arrNameInput'=>array(
							'arrEvent'	=>array(),
							'arrDesign'	=>array(),
							'arrReality'	=>array(
								'strDbStart'	=>'/home/EDRO.Полимер/Name',
								),
							'arrObjects'	=>array(),
							),
						'arrGenreInput'=>array(
							'arrEvent'	=>array(),
							'arrDesign'	=>array(),
							'arrReality'	=>array(
								'strDbStart'	=>'/home/EDRO.Полимер/Genre',
								),
							'arrObjects'	=>array(),
							),
						'arrCodecInput'=>array(
							'arrEvent'	=>array(),
							'arrDesign'	=>array(),
							'arrReality'	=>array(
								'strDbStart'	=>'/home/EDRO.Полимер/Codec',
								),
							'arrObjects'	=>array(),
							),
						'arrBitrateInput'=>array(
							'arrEvent'	=>array(),
							'arrDesign'	=>array(),
							'arrReality'	=>array(
								'strDbStart'	=>'/home/EDRO.Полимер/Bitrate',
								),
							'arrObjects'	=>array(),
							),
						),
					),
				'arrDynaScreen'=>
					array(
					'arrEvent'	=>array(),
					'arrDesign'	=>array(),
					'arrReality'	=>array(),
					'arrObjects'	=>array(
						'arrFileList'=>array(
							'arrEvent'	=>array(),
							'arrDesign'	=>array(),
							'arrReality'	=>array(
								'strDbStart'	=>'/home/EDRO.Полимер/Stations/Name/unordered/',
								),
							'arrObjects'	=>array(
								'arrStation'=>array(),
							),
						),
					),
				),
			);

		parent::__construct($objKIIM);
		//echo'<pre>';
		//	print_r($this);
		//echo'</pre>';
		/*

		*/
		//$this->objEventGetter	=new Event($_objKIIM	,$arrSet);			//HFic++
		//$this->objDesignGetter	=new Design($_objKIIM	,$this, $strObjectName);	//HFic++
		//$this->objRealityGetter	=new Reality($_objKIIM	,$this);			//HFic++
		//$this->objObjectsGetter	=new Objects($_objKIIM	,$this);			//HFic++


		
		Read::strGetDesignHTML($objKIIM, $this->arrEDRO['arrDesign']['strTemplate'], $this->arrEDRO);
		/*
		echo '<objDebug
			class="block fixed layer_5_Debug scrollerY"
			style="
				top		:20px;
				left		:0;
				height		:80vh;
				width		:100vw;
				background-color:#FFF;
				"
			>
			<pre>';
			print_r($this);
		echo ' </pre>
		     </objDebug>
			';*/
		//print_r($this);
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
	//	U->E-> D-> R->O