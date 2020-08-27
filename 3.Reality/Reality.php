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
 ////// Энергия                /////  / 
//  2020  /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Reality extends Objects
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*+1+*/	$this->_IsDNT();
	/*+2+*/	$this->_isConsole($objKIIM);

	///////////////////////////////////////////!!!!
		
		$this->arrReality['strListnersPath']		='/home/EDRO.o2o/Listeners/';

								  ЗапомнитьСлушателя::_ЛокалОблако($objKIIM, $this->arrReality['strListnersPath'], $this->arrEvent['arrParams']['style']);
		$this->arrReality['arrCurrentListeners']	=ПрочитатьСлушателей::м($objKIIM, $this->arrReality['strListnersPath']);

		/////////////////////////////////////////////////////////////////////////////////////////////////////////
		$this->arrReality['strListenerId']		=$_SESSION['strListener'];
		$this->arrReality['strRoleSignal']		='Listener';
		$this->arrReality['strRoleLangSignal']		=rmLb(FileRead::str($objKIIM, $this->strBasePath.'/3.Reality/User/'.$this->arrReality['strRoleSignal'].'/.strLang.php'));
		$this->arrReality['strLangSignal']		=strGetDefaultLanguage();
		?>
		<script charset="utf-8">
			var strSignalRole	="<?=$this->arrReality['strRoleLangSignal']?>";
			var strSignalLang	="<?=$this->arrReality['strLangSignal']?>";
		</script>
		<?php

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		parent::__construct($objKIIM);
		}
	public static function strBasePath()
		{
		return'/home/EDRO';
		}
	private function _isConsole($_objKIIM)
		{
		$this->arrReality['bIzConsole']=false;
		if(php_sapi_name()=='cli')
			{
			$this->arrReality['bIzConsole']=true;
			}
		else
			{
			}
		}
	private function _IsDNT()
		{
		if(isset($_SERVER['HTTP_DNT'])&&$_SERVER['HTTP_DNT']==1)
			{
			echo "English and Russian versions are here. Just scrolldown.<br/><br/>
Hello dear listener.<br/>
Welcome to the HiFi Intelligent Club at:<br/>
<br/>
You are reading this message because the DO NOT TRACK option is enabled in your browser. To support international web standards, we are required to support this and other options. But we do not understand how it is possible not to track a visit if it is tracked without our participation, on the way to our site by everyone, including our beloved Apache web server. Therefore, we do not show HiFiIntelligentClub to people who have enabled the \"DO NOT TRACK\" option in order to stay within the framework of international rules and web standards.<br/>

For anonymous use of NIFiInteligentKlub, use the TOR browser in conjunction with the secure TOR, HTTPS everywhere or its equivalent.<br/>

The application is available at the following addresses:<br/>

[Ru, International, developers' native language]  <a href=\"http://HiFiIntelligentClub.Ru\">http://HiFiIntelligentClub.Ru</a><br/>

[En, International, developers' foreign language] <a href=\"http://HiFiIntelligentClub.COM\">http://HiFiIntelligentClub.COM</a>,<br/>

We cannot use the confidentiality of an HTTPS connection for many reasons, one of which is:<br/>
We have no control over audio streams and show you all audio streams without external control and without any third party (external) control.<br/>

This does not mean that: only stations that broadcast the truth are listed on the HiFiIntelligentClub, or here you can find only illegal or only authorized stations.<br/>
<br/>
Not.<br/><br/>

HifiIntelligentClub does not support and removes prohibited stations or stations with shock content, sending a complaint about them to the global web consortium.<br/>

You should write to us a complaint letter if you notice any illegal, illegal or shocking channels.<br/>

After verification and approval, we will remove the station with illegal or shocking content. We are adequate thinking people, it is not our goal to admit any discrimination.<br/>

To maintain your privacy on HTTP, we recommend using the TOR browser (<a href=\"http://torproject.org\">http://torproject.org</a>)<br/>

You can privately use any of these domains through the TOR browser:<br/>

[Ru, International, developers' native language] http://HiFiIntelligentClub.Ru<br/>

[En, International, developers' foreign language] <a href=\"http://HiFiIntelligentClub.COM\">http://HiFiIntelligentClub.COM</a>,<br/>

Private access with additional personal sound assistants and experimental DJ tools (beta mode, works from time to time, more often not than yes today). <a href=\"http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion\">http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion</a><br/>

Please note: we do not support the DO NOT TRACK browser feature. I'm sorry. Anonymity is achieved only when you use the TOP browser to access any of the resources of NIFiInteligentClub.<br/>
 
We collect the history of listening and using our sites and applications without being tied to your name or browser. Each time you visit the resource, you get a new unique identifier, which stays with you until you close the tab with the HiFiIntelligentClub website.<br/>

Today we collect the following: display properties (Length width of the browser window, to populate the list for your window), reports of conflicts and errors, player incompatibilities, listeners selection, network status (latency of connections to our server and broadcast servers), collection statistics on your listening to broadcast channels helps us understand many things and helps us in our efforts to improve the quality of our services.<br/>

Contact email address for communication: assminog@gmail.com [EN] international, tubmulur@yandex.ru [RU] and international, in social networks: <br/>
<a href=\"https://vk.com/HiFiIntelligentClub\">https://vk.com/HiFiIntelligentClub</a> <br/>
<a href=\"https://facebook.com/HiFiIntelligentClub\">https://facebook.com/HiFiIntelligentClub</a><br/>
Telegramm messenger: <a href=\"https://t.me/HficSamin\">https://t.me/HficSamin</a>;<br/>
<br/>
<br/>
Здравствуйте уважаемый слушатель.<br/>
Добро пожаловать в HiFi Intelligent Club по адресу:<br/>

Вы читаете это сообщение, потому что в вашем браузере включена опция НЕ ОТСЛЕЖИВАТЬ. Для поддержки международных веб стандартов мы обязаны поддерживать эту и другие опции. Но мы не понимаем, ка можно не отслеживать посещение, если оно отслеживается без нашего участия, по пути на наш сайт всеми, включая наш любимый веб сервер Апач. Поэтому мы вообще не показываем HiFiIntelligentClub людям включившим опцию \"НЕ ОТСЛЕЖИВАТЬ\", чтобы оставаться в рамках международных правил и веб стандартов.<br/>

Для анонимного использования ХиФиИнтеллигентКлуб, используйте ТОР браузер совместно с безопасным тонелем ТОР,  HTTPS везде или его аналог.<br/>

Приложение доступено по следующим адресам:<br/>

[Ru, International, родной язык разработчиков] <a href=\"http://HiFiIntelligentClub.Ru\">http://HiFiIntelligentClub.Ru</a><br/>

[En, International, иностранный язык разработчиков] <a href=\"http://HiFiIntelligentClub.COM\">http://HiFiIntelligentClub.COM</a>,<br/>

Мы не можем использовать конфиденциальность HTTPS-соединения по многим причинам, одна из которых:<br/>
Мы не контролируем аудиопотоки и показываем вам все аудиопотоки без внешнего управления и без какого-либо стороннего (внешнего) контроля.<br/>

Это не значит что: на HiFiIntelligentClub указаны только станции, которые транслируют правду, либо здесь вы можете найти только нелегальные или только разрешённые станции.<br/>
<br/>
Нет. <br/>
<br/>
HifiIntelligentClub не поддерживает и удаляет запрещенные станции или станции с шоковым содержанием, отправляя на них жалобу в глобальный веб консорциум.<br/>

Вам следует написать нам письмо с жалобой, если вы заметите какие-либо нарушения закона, незаконные или шокирующие каналы.<br/>

После проверки и согласования мы удалим станцию с незаконным или шокирующим контентом. Мы мыслящие адекватно люди, какой-либо дискриминации допускать не является нашей целью.<br/>

Чтобы сохранить вашу конфиденциальность по HTTP, мы рекомендуем использовать браузер TOR (<a href=\"http://torproject.org\">http://torproject.org</a>)<br/>

Вы можете в частном порядке использовать любой из этих доменов через браузер TOR:<br/>

[Ru, International, родной язык разработчиков] <a href=\"http://HiFiIntelligentClub.Ru\">http://HiFiIntelligentClub.Ru</a><br/>

[En, International, иностранный язык разработчиков] <a href=\"http://HiFiIntelligentClub.COM\">http://HiFiIntelligentClub.COM</a>,<br/>

Частный доступ с дополнительными  личными помощниками по звуку и экспериментальными инструментам для диджея (режим бета-тестирования, время от времени работает, чаще нет чем да на сегодня). <a href=\"http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion\">http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion</a><br/>

Пожалуйста, обратите внимание: мы не поддерживаем функцию браузера «НЕ ОТСЛЕЖИВАТЬ». Сожалею. Анонимность достигается только при использовании вами ТОР браузера для доступа к любому из ресурсов ХиФиИнтеллигентКлуб.<br/>
 
Мы собираем историю прослушивания и использования наших сайтов и приложений, не привязываясь к вашему имени или браузеру. Каждый раз заходя на ресурс, вы получаете новый уникальный идентификатор, кроторый остаётся с вами, до тех пор, пока вы не закроете вкладку с сайтом ХиФиИнтеллиджентКлуб. <br/>

Сегодня мы собираем следующее: свойства отображения (Длина ширина браузерного окна, для заполнения списка под ваше окно), отчеты о конфликтах и ошибках, несовместимости проигрывателя, выбор слушателей, состояние сети (время задержки подключения к нашему серверу и широковещательным серверам), сбор статистики вашего прослушивания широковещательных каналов, помогает нам понять многие вещи и помогает нам в попытках улучшить качество наших услуг.<br/>

Контактный адрес электронной почты для связи: assminog@gmail.com [EN] международный, tubmulur@yandex.ru [RU] и международный, в социальных сетях: <br/>
<a href=\"https://vk.com/HiFiIntelligentClub\">https://vk.com/HiFiIntelligentClub</a> <br/>
<a href=\"https://facebook.com/HiFiIntelligentClub\">https://facebook.com/HiFiIntelligentClub</a><br/>
Мессенджер Telegramm: <a href=\"https://t.me/HficSamin\">https://t.me/HficSamin</a>;<br/>

				";
			exit(0);
			}
		}
	public static function strObjectInit()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO.Reality: _Init');
			objReality=new Reality();
			console.log('[.]EDRO.Reality: _Init');
		</script>
oo2oo;
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Reality: Declare');
			class Reality
				{
				constructor()
					{
					console.log('[Vv]EDRO.Reality: Construct');
					//this.arrParamG0.
					//this.strParams		='';
					this.intLoadingTime	=0;
					this.intMaxLoadingTime	=0;
					this.bIzError		=false;
					this.bIzLoading		=false;
					this.bIzHistory		=false;
					this.bIzPlayer		=false;
					this.bIzDynaScreen	=false;
					this.bIzCheckMaNet	=false;
					console.log('[..]EDRO.Reality: Construct');
					}
				}
		console.log('[.]EDRO.Reality: Declare');
		</script>
oo2oo;
		return $str;
		}
	}
?>
