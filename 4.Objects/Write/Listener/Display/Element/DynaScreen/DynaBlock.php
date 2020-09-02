<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class DynaBlock
	{
	private $arr;
	public $strHTML;
	private $strLogo;
	private $strName;
	private $strFile;
	private $strType;
	private $strAudio;
	public function __construct($_objKIIM, $_arrData)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//print_r($_objData);
		//$this->strLogo	=$_arrData['strLogo'];
		$this->strName			=$_arrData['strName'];
		$this->strAudio			=$_arrData['strAudio'];
		$this->strAudioBitrate		=$_arrData['strAudioBitrate'];
		$this->strAudioType		=$_arrData['strAudioType'];
		$this->strGenre			=$_arrData['strGenre'];
		//$this->strFile	=$_objData->strFile;
		//$this->strType	=$_arrData['strType'];
		//print_r($this);
		//exit(0);
		unset($_objData);

		$this->strHTML	='
		<station
			class="block left"
			style="
				width:420px;
				height:180px;
				max-width:99%;
				text-decoration: none;
				border: 1px solid rgb(197, 195, 195);
				background-color: rgba(249, 249, 249, 0.89);
				"
			>
			<dynaBlock
				class="block rel layer_1_1 loading"
				style="
					width:100%;
					height:100%;
					"
				>
				<picture
					class="block left rel"
					style="
						border-right: 1px solid #aaa;
						border-bottom: 1px solid #aaa;
						width:150px;
						height:150px;
						"
					>
					'.
					Image::strHTML($objKIIM, array(
							'_strName'	=>$this->strName,
							'_strLink'	=>$this->strLogo,
							'_bHasShader'	=> true,
							)).
					' '.
					Overlay::strHTML($objKIIM, 'Loading. Please wait.').
					'<player
						class="block abs" 
						style="
							top:0;
							width:150px;
							height:150px;
							"
						>'.
						Player::strHTML($objKIIM, $this->strAudio).
					'</player>'.
					'
				</picture>
				<header
					class="block"
					style="
						color: rgb(255, 255, 255);
						height:50px;
						border-bottom: 1px solid #aaa;
						background-color: rgba(0, 0, 0, 0.9);
						"
					>
					'.
					Header::strHTML($objKIIM,  $this->strName).
					'
				</header>
				<type
					class="block left"
					style="
						"
					>'.
					AudioType::strHTML($objKIIM, $this->strAudioType).
					':'.
				'</type>
				<bitrate
					class="block"
					style="
						"
					>'.
					Bitrate::strHTML($objKIIM, $this->strAudioBitrate).
				'</bitrate>

				<genre
					class="block"
					>'.
					Genre::strHTML($objKIIM, $this->strGenre).
				'</genre>
				'.
				
				//HFIC_CreatorsRespect::strHTML($objKIIM, $this->arr['_strCopyrightInfo']).
				''.
				//Shader::strHTML($objKIIM, $this->strLogo).
				''.
				
				''.
				//Overlay::strHTML($objKIIM, 'Loading. Please wait.').
				'
				<description
					class="block rel layer_1_4"
					>'.
					//$this->arr['_strDescription'].
				'</description>
				
				<!-- <marquee>Сообщения Сообщения Сообщения</marquee> -->
			</dynaBlock>
		</station>';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//print_r($this);
		}
	public static function HTML($_objKIIM, $_objData)
		{
		//$arrData['_strName']=$_objData->strName;
		$objDynaBlock=new DynaBlock($objKIIM, $_objData);
		return $objDynaBlock->strHTML;
		}
	}
?>