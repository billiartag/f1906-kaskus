<html lang="en">
<head>
<link rel="icon" href="images/favicon.ico" type="image/ico">
<meta charset="utf-8">
	<title>KASKUS - Berbagi Hobi, Berkomunitas</title>
	<link   href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link   href="{{ asset ('css/mystyle.css') }}" rel="stylesheet" type="text/css">

	<script src ="{{ asset ('js/jquery.js') }}"></script>
	<script src ="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src ="{{ asset ('js/jquery.dataTables.min.js') }}"></script>	
<head>
{{ Form::open(array('url' => 'dashboard')) }}
	<nav class="navbar navbar-default" style="background-color:white">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1;">
			<ul class="nav navbar-nav" style="margin-top:10px">
				<li ><img src="{{ URL::to('/kaskus.png') }}" style='width: 200px;height: 45px;'></li>
				<li ><a href="#" ><strong>Forum</strong></a></li>
				<li><a href="#"><strong>TV</strong></a></li>
				<li><a href="#"><strong>Podcast</strong></a></li>
				<li><a href="#"><strong>Kapten</strong></a></li>
				<li><a href="#"><strong>Jual Beli</strong></a></li>
			</ul>
			
			<div class="col-md-3">
				<form class="navbar-form navbar-left">
					<div class="form-group"style="margin-top:15px">
					<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
			</div>
			<p class="navbar-text">BUAT THREAD</p>
			<button type="button" class="btn btn-default btn-lg">
			  <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
			</button>
			<ul class="nav navbar-nav ">
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Separated link</a></li>
				</ul>
				</li>
			</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		</nav>
	<div class="navbar navbar-default" style="margin-top:-20px;height:10px ;background-color: #1998ed;">
		 <ul class="nav navbar-nav ">
				<li class="dropdown" style="margin-left:90px">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
		</ul>
		<ul class="nav navbar-nav" style="color:white;">
			<li><a href="#" style="margin-right:10px;margin-left:25px;"><strong>STORY</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>HOBBY</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>GAMES</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>ENTERTAINMENT</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>FEMALE</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>TECH</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>AUTOMOTIVE</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>SPORTS</strong></a></li>
			<li><a href="#" style="margin-right:10px;"><strong>FOOD & TRAVEL</strong></a></li>
			<li><a href="#"><strong>NEWS</strong></a></li>              
		</ul>
	</div>
	<div class="container">
		<div style="width:40%;height:75%;position:absolute;margin-left:5%;background-color:white">
			<img src="{{ URL::to('/nama.jpg') }}" style='width: 100%; height: 65px;'>
			<div class="form-group"style="width:100%;">
				<input type="text" class="form-control" placeholder="Isi judul thread">
			</div>
			<div class="form-group">
			  <textarea class="form-control" rows="18" placeholder="Mulai Menulis"></textarea>
			</div>
			<img src="{{ URL::to('/toolbar.jpg') }}" style='width: 100%; height: 30px;'>
		</div>
		<div style="width:20%;height:75%;position:absolute;margin-top:-1%;margin-left:50%;>
			<a href="#"><span class="btn btn-info"><img src="https://s.kaskus.id/assets/web_1.0/images/ic-jualbeli.svg"> Mau Bikin Lapak? Klik dimari Gan!</span></a>
			<div style="background-color:white;height:50px;width:90%;margin-top:20px;margin-bottom:20px">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Draft (0) <span class="caret"></span></a>
			</div>
			<div><div><div style="margin-bottom:6px"><span>Pilih Kategori</span></div><div data-select2-id="5"><div class="Mt(10px)" data-select2-id="4"><select name="forum_id" id="forum_id" class="btn btn-secondary dropdown-toggle" style="width:90%;margin-bottom:20px">
				<option value="0" data-select2-id="2">Pilih Kategori</option>
				<option value="241" disabled="disabled" data-select2-id="13">FORUM</option>
				<option value="34" data-select2-id="14"> - - All About Design</option>
				<option value="671" data-select2-id="15"> - - - - Animasi</option>
				<option value="655" data-select2-id="16"> - - - - Komik &amp; Ilustrasi</option>
				<option value="26" data-select2-id="17"> - - Anime &amp; Manga Haven</option>
				<option value="116" data-select2-id="18"> - - - - AMHelpdesk</option>
				<option value="431" data-select2-id="19"> - - - - Anime</option>
				<option value="552" data-select2-id="20"> - - - - Fanstuff</option>
				<option value="433" data-select2-id="21"> - - - - Manga, Manhua, &amp; Manhwa</option>
				<option value="390" data-select2-id="22"> - - - - TokuSenKa</option>
				<option value="122" data-select2-id="23"> - - - - Western Comic</option>
				<option value="244" data-select2-id="24"> - - - - Latest Release</option>
				<option value="10" data-select2-id="25"> - - Berita dan Politik</option>
				<option value="732" data-select2-id="26"> - - - - Berita Dunia Hiburan</option>
				<option value="746" data-select2-id="27"> - - - - Beritagar.id</option>
				<option value="250" data-select2-id="28"> - - - - Berita Luar Negeri</option>
				<option value="733" data-select2-id="29"> - - - - Citizen Journalism</option>
				<option value="753" data-select2-id="30"> - - - - Gatra.com</option>
				<option value="864" data-select2-id="31"> - - - - IDNTimes</option>
				<option value="857" data-select2-id="32"> - - - - Indonesia Update</option>
				<option value="862" data-select2-id="33"> - - - - Kumparan</option>
				<option value="854" data-select2-id="34"> - - - - Media Indonesia</option>
				<option value="730" data-select2-id="35"> - - - - Medcom.id</option>
				<option value="886" data-select2-id="36"> - - - - SINDOnews.com</option>
				<option value="851" data-select2-id="37"> - - - - Tribunnews.com</option>
				<option value="712" data-select2-id="38"> - - - - Pilkada</option>
				<option value="635" data-select2-id="39"> - - - - Pilih Capres &amp; Caleg</option>
				<option value="30" data-select2-id="40"> - - Bisnis</option>
				<option value="546" data-select2-id="41"> - - - - Dunia Kerja &amp; Profesi</option>
				<option value="277" data-select2-id="42"> - - - - Entrepreneur Corner</option>
				<option value="466" data-select2-id="43"> - - - - Penawaran Kerjasama &amp; Investasi</option>
				<option value="279" data-select2-id="44"> - - - - Forex, Option, Saham, &amp; Derivatifnya</option>
				<option value="467" data-select2-id="45"> - - - - Forex</option>
				<option value="470" data-select2-id="46"> - - - - Forex Broker</option>
				<option value="469" data-select2-id="47"> - - - - Saham</option>
				<option value="468" data-select2-id="48"> - - - - Options</option>
				<option value="278" data-select2-id="49"> - - - - Lowongan Kerja</option>
				<option value="472" data-select2-id="50"> - - - - MLM, Member Get Member, &amp; Sejenisnya</option>
				<option value="572" data-select2-id="51"> - - - - Penawaran Kerjasama, BO, Distribusi, Reseller, &amp; Agen</option>
				<option value="737" data-select2-id="52"> - - - - Reksa Dana</option>
				<option value="571" data-select2-id="53"> - - - - The Exclusive Business Club (ExBC)</option>
				<option value="471" data-select2-id="54"> - - - - The Online Business</option>
				<option value="280" data-select2-id="55"> - - - - HYIP / Money Game / PTC / Autosurf</option>
				<option value="595" data-select2-id="56"> - - - - UKM</option>
				<option value="66" data-select2-id="57"> - - Buku</option>
				<option value="18" data-select2-id="58"> - - Can You Solve This Game?</option>
				<option value="19" data-select2-id="59"> - - Computer Stuff</option>
				<option value="14" data-select2-id="60"> - - - - CCPB - Shareware &amp; Freeware</option>
				<option value="391" data-select2-id="61"> - - - - REQUEST @ CCPB</option>
				<option value="419" data-select2-id="62"> - - - - Taman Bacaan CCPB</option>
				<option value="243" data-select2-id="63"> - - - - Hardware Computer</option>
				<option value="557" data-select2-id="64"> - - - - Hardware Review Lab</option>
				<option value="183" data-select2-id="65"> - - - - Internet Service &amp; Networking</option>
				<option value="397" data-select2-id="66"> - - - - ISP</option>
				<option value="65" data-select2-id="67"> - - - - Linux dan OS Selain Microsoft &amp; Mac</option>
				<option value="383" data-select2-id="68"> - - - - Macintosh</option>
				<option value="569" data-select2-id="69"> - - - - Mac Applications &amp; Games</option>
				<option value="568" data-select2-id="70"> - - - - Mac OSX Info &amp; Discussion</option>
				<option value="176" data-select2-id="71"> - - - - Programmer Forum</option>
				<option value="13" data-select2-id="72"> - - - - Website, Webmaster, Webdeveloper</option>
				<option value="443" data-select2-id="73"> - - - - Hosting Stuff</option>
				<option value="442" data-select2-id="74"> - - - - Templates &amp; Scripts Stuff</option>
				<option value="29" data-select2-id="75"> - - Cooking &amp; Resto Guide</option>
				<option value="62" data-select2-id="76"> - - - - Oriental Exotic (Asian food)</option>
				<option value="248" data-select2-id="77"> - - - - Restaurant Review</option>
				<option value="60" data-select2-id="78"> - - - - Selera Nusantara (Indonesian Food)</option>
				<option value="63" data-select2-id="79"> - - - - The KASKUS Bar</option>
				<option value="61" data-select2-id="80"> - - - - The Rest of the World (International Food)</option>
				<option value="713" data-select2-id="81"> - - Deals</option>
				<option value="191" data-select2-id="82"> - - Debate Club</option>
				<option value="15" data-select2-id="83"> - - Disturbing Picture</option>
				<option value="856" data-select2-id="84"> - - Do It Yourself</option>
				<option value="67" data-select2-id="85"> - - Education</option>
				<option value="247" data-select2-id="86"> - - - - Civitas Academica</option>
				<option value="246" data-select2-id="87"> - - - - Sejarah &amp; Xenology</option>
				<option value="597" data-select2-id="88"> - - - - Sains &amp; Teknologi</option>
				<option value="281" data-select2-id="89"> - - Electronics</option>
				<option value="282" data-select2-id="90"> - - - - Audio &amp; Video</option>
				<option value="673" data-select2-id="91"> - - - - Home Appliance</option>
				<option value="113" data-select2-id="92"> - - English</option>
				<option value="464" data-select2-id="93"> - - - - English Education &amp; Literature</option>
				<option value="465" data-select2-id="94"> - - - - Fun with English</option>
				<option value="474" data-select2-id="95"> - - Event from Kaskuser</option>
				<option value="44" data-select2-id="96"> - - Games</option>
				<option value="722" data-select2-id="97"> - - - - Arcade Games </option>
				<option value="119" data-select2-id="98"> - - - - Console &amp; Handheld Games</option>
				<option value="881" data-select2-id="99"> - - - - eSports</option>
				<option value="720" data-select2-id="100"> - - - - Game News and Events</option>
				<option value="721" data-select2-id="101"> - - - - Mobile Games </option>
				<option value="879" data-select2-id="102"> - - - - AoV</option>
				<option value="865" data-select2-id="103"> - - - - Mobile Legends</option>
				<option value="747" data-select2-id="104"> - - - - Pokemon Go</option>
				<option value="883" data-select2-id="105"> - - - - PUBG-M</option>
				<option value="528" data-select2-id="106"> - - - - PC Games</option>
				<option value="711" data-select2-id="107"> - - - - Dota 2</option>
				<option value="100" data-select2-id="108"> - - - - Online Games</option>
				<option value="878" data-select2-id="109"> - - - - PUBG</option>
				<option value="709" data-select2-id="110"> - - - - Private Servers</option>
				<option value="37" data-select2-id="111"> - - - - Ragnarok Online</option>
				<option value="38" data-select2-id="112"> - - - - Web-based Games</option>
				<option value="678" data-select2-id="113"> - - Gemstone</option>
				<option value="39" data-select2-id="114"> - - Girls &amp; Boys's Corner</option>
				<option value="114" data-select2-id="115"> - - - - Ask da Boys</option>
				<option value="105" data-select2-id="116"> - - - - Ask da Girls</option>
				<option value="630" data-select2-id="117"> - - Green Lifestyle</option>
				<option value="36" data-select2-id="118"> - - Handphone &amp; Tablet </option>
				<option value="577" data-select2-id="119"> - - - - Android</option>
				<option value="880" data-select2-id="120"> - - - - HONOR</option>
				<option value="307" data-select2-id="121"> - - - - BlackBerry Corner</option>
				<option value="672" data-select2-id="122"> - - - - IOS</option>
				<option value="413" data-select2-id="123"> - - - - Featured Phone </option>
				<option value="417" data-select2-id="124"> - - - - Operator CDMA &amp; GSM</option>
				<option value="541" data-select2-id="125"> - - - - Windows Phone</option>
				<option value="94" data-select2-id="126"> - - Health</option>
				<option value="558" data-select2-id="127"> - - - - Fitness &amp; Healthy Body</option>
				<option value="274" data-select2-id="128"> - - - - Fat-loss,Gain-Mass,Nutrisi Diet &amp; Suplementasi Fitness</option>
				<option value="236" data-select2-id="129"> - - - - Muscle Building</option>
				<option value="724" data-select2-id="130"> - - - - Health Consultation</option>
				<option value="725" data-select2-id="131"> - - - - Healthy Lifestyle</option>
				<option value="559" data-select2-id="132"> - - - - Quit Drugs, Alcohol &amp; Smoking</option>
				<option value="16" data-select2-id="133"> - - Heart to Heart</option>
				<option value="49" data-select2-id="134"> - - - - B-Log Collections</option>
				<option value="735" data-select2-id="135"> - - - - B-Log Community</option>
				<option value="734" data-select2-id="136"> - - - - B-Log Personal </option>
				<option value="50" data-select2-id="137"> - - - - Poetry</option>
				<option value="51" data-select2-id="138"> - - - - Stories from the Heart</option>
				<option value="32" data-select2-id="139"> - - Hewan Peliharaan</option>
				<option value="124" data-select2-id="140"> - - - - Burung</option>
				<option value="127" data-select2-id="141"> - - - - Freshwater Fish</option>
				<option value="123" data-select2-id="142"> - - - - Mamalia</option>
				<option value="125" data-select2-id="143"> - - - - Reptil</option>
				<option value="126" data-select2-id="144"> - - - - Saltwater Fish</option>
				<option value="392" data-select2-id="145"> - - Hobby &amp; Community</option>
				<option value="591" data-select2-id="146"> - - - - Jam</option>
				<option value="581" data-select2-id="147"> - - - - Lampu Senter / Flashlight</option>
				<option value="395" data-select2-id="148"> - - - - Mancing</option>
				<option value="393" data-select2-id="149"> - - - - Pisau</option>
				<option value="580" data-select2-id="150"> - - - - Radio Komunikasi</option>
				<option value="394" data-select2-id="151"> - - - - Sepeda</option>
				<option value="674" data-select2-id="152"> - - - - Vaporizer </option>
				<option value="387" data-select2-id="153"> - - Ilmu Marketing</option>
				<option value="388" data-select2-id="154"> - - - - Ilmu Marketing &amp; Research</option>
				<option value="9" data-select2-id="155"> - - Jokes &amp; Cartoon</option>
				<option value="331" data-select2-id="156"> - - - - Pictures</option>
				<option value="689" data-select2-id="157"> - - - - Stand Up Comedy</option>
				<option value="24" data-select2-id="158"> - - Lifestyle</option>
				<option value="306" data-select2-id="159"> - - - - Fashion</option>
				<option value="249" data-select2-id="160"> - - - - Inspirasi</option>
				<option value="275" data-select2-id="161"> - - - - Nightlife &amp; Events</option>
				<option value="723" data-select2-id="162"> - - Liga Mahasiswa ( Lima )</option>
				<option value="594" data-select2-id="163"> - - Melek Hukum</option>
				<option value="575" data-select2-id="164"> - - Militer dan Kepolisian</option>
				<option value="576" data-select2-id="165"> - - - - Kepolisian</option>
				<option value="140" data-select2-id="166"> - - - - Militer</option>
				<option value="491" data-select2-id="167"> - - Mobile Broadband</option>
				<option value="70" data-select2-id="168"> - - Model Kit &amp; R/C</option>
				<option value="252" data-select2-id="169"> - - - - Figures</option>
				<option value="253" data-select2-id="170"> - - - - Gallery &amp; Tutorial</option>
				<option value="251" data-select2-id="171"> - - - - Plamo</option>
				<option value="11" data-select2-id="172"> - - Movies</option>
				<option value="621" data-select2-id="173"> - - - - Film Indonesia</option>
				<option value="619" data-select2-id="174"> - - - - Indie Filmmaker</option>
				<option value="382" data-select2-id="175"> - - - - KASKUS Theater</option>
				<option value="754" data-select2-id="176"> - - - - Star Wars</option>
				<option value="736" data-select2-id="177"> - - - - Series &amp; Film Asia</option>
				<option value="171" data-select2-id="178"> - - - - TV</option>
				<option value="33" data-select2-id="179"> - - Music</option>
				<option value="88" data-select2-id="180"> - - - - Help, Tips &amp; Tutorial Music</option>
				<option value="58" data-select2-id="181"> - - - - KASKUSRadio Archive</option>
				<option value="137" data-select2-id="182"> - - - - KASKUS Tunes</option>
				<option value="87" data-select2-id="183"> - - - - Musician Corner</option>
				<option value="882" data-select2-id="184"> - - - - Musiklopedia</option>
				<option value="28" data-select2-id="185"> - - Otomotif</option>
				<option value="112" data-select2-id="186"> - - - - Kendaraan Roda 2</option>
				<option value="570" data-select2-id="187"> - - - - Kendaraan Roda 4</option>
				<option value="332" data-select2-id="188"> - - - - Racing / Balap</option>
				<option value="685" data-select2-id="189"> - - - - F1 </option>
				<option value="684" data-select2-id="190"> - - - - MotoGP</option>
				<option value="98" data-select2-id="191"> - - Outdoor Adventure &amp; Nature Clubs</option>
				<option value="596" data-select2-id="192"> - - - - Catatan Perjalanan OANC</option>
				<option value="752" data-select2-id="193"> - - - - Outdoor Gear</option>
				<option value="620" data-select2-id="194"> - - Perencanaan Keuangan</option>
				<option value="749" data-select2-id="195"> - - Pajak</option>
				<option value="54" data-select2-id="196"> - - Photography</option>
				<option value="863" data-select2-id="197"> - - POLYTRON</option>
				<option value="715" data-select2-id="198"> - - Sista</option>
				<option value="717" data-select2-id="199"> - - - - Beauty</option>
				<option value="716" data-select2-id="200"> - - - - Fashionista</option>
				<option value="718" data-select2-id="201"> - - - - Women’s Health</option>
				<option value="35" data-select2-id="202"> - - Sports</option>
				<option value="187" data-select2-id="203"> - - - - Airsoft Indonesia</option>
				<option value="440" data-select2-id="204"> - - - - Basketball</option>
				<option value="276" data-select2-id="205"> - - - - Grappling</option>
				<option value="726" data-select2-id="206"> - - - - Liga Mahasiswa ( Lima )</option>
				<option value="144" data-select2-id="207"> - - - - Martial Arts</option>
				<option value="545" data-select2-id="208"> - - - - Pro Wrestling</option>
				<option value="538" data-select2-id="209"> - - - - Racket</option>
				<option value="539" data-select2-id="210"> - - - - Badminton</option>
				<option value="104" data-select2-id="211"> - - - - Soccer &amp; Futsal Room</option>
				<option value="565" data-select2-id="212"> - - - - FutSal</option>
				<option value="748" data-select2-id="213"> - - - - Liga Inggris</option>
				<option value="661" data-select2-id="214"> - - - - Sundul Bola</option>
				<option value="755" data-select2-id="215"> - - - - Liga Italia</option>
				<option value="537" data-select2-id="216"> - - - - Sport Games</option>
				<option value="731" data-select2-id="217"> - - - - Berita Olahraga</option>
				<option value="23" data-select2-id="218"> - - Supranatural</option>
				<option value="389" data-select2-id="219"> - - - - Budaya</option>
				<option value="173" data-select2-id="220"> - - - - Spiritual</option>
				<option value="188" data-select2-id="221"> - - Surat Pembaca</option>
				<option value="192" data-select2-id="222"> - - Tanaman</option>
				<option value="578" data-select2-id="223"> - - Teknik</option>
				<option value="234" data-select2-id="224"> - - - - Arsitektur</option>
				<option value="579" data-select2-id="225"> - - - - Sipil</option>
				<option value="21" data-select2-id="226"> - - The Lounge</option>
				<option value="59" data-select2-id="227"> - - - - Gosip Nyok!</option>
				<option value="186" data-select2-id="228"> - - - - Lounge Pictures</option>
				<option value="688" data-select2-id="229"> - - - - KASKUS Ramadan</option>
				<option value="235" data-select2-id="230"> - - Travellers</option>
				<option value="437" data-select2-id="231"> - - - - Domestik</option>
				<option value="669" data-select2-id="232"> - - - - Cerita Pejalan Domestik </option>
				<option value="439" data-select2-id="233"> - - - - Mancanegara</option>
				<option value="670" data-select2-id="234"> - - - - Cerita Pejalan Mancanegara</option>
				<option value="193" data-select2-id="235"> - - Wedding &amp; Family</option>
				<option value="429" data-select2-id="236"> - - - - Kids &amp; Parenting</option>
				<option value="103" data-select2-id="237"> - - Welcome to KASKUS</option>
				<option value="27" data-select2-id="238"> - - - - Arsip Forum</option>
				<option value="238" data-select2-id="239"> - - - - Recycle Bin</option>
				<option value="22" data-select2-id="240"> - - - - Buat Latihan Posting</option>
				<option value="855" data-select2-id="241"> - - - - KASKUS Kreator Lounge</option>
				<option value="177" data-select2-id="242"> - - - - KASKUS Plus Lounge</option>
				<option value="31" data-select2-id="243"> - - - - Kritik, Saran, Pertanyaan Seputar KASKUS</option>
				<option value="204" data-select2-id="244"> - - - - Jual Beli Feedback &amp; Testimonials</option>
				<option value="270" data-select2-id="245"> - - - - Blacklist Jual Beli </option>
				<option value="136" data-select2-id="246"> - - - - Feedback &amp; Testimonial </option>
				<option value="271" data-select2-id="247"> - - - - Official Testimonials Jual Beli </option>
				<option value="745" data-select2-id="248"> - - - - Peraturan Jual Beli</option>
				<option value="566" data-select2-id="249"> - - - - Surat Terbuka Jual Beli </option>
				<option value="272" data-select2-id="250"> - - - - Tips &amp; Tutorial Jual Beli </option>
				<option value="544" data-select2-id="251"> - - Young on Top KASKUS Community (YOTKC)</option>
				<option value="239" data-select2-id="252"> - - KASKUS Corner</option>
				<option value="629" data-select2-id="253"> - - - - KASKUS Playground</option>
				<option value="240" data-select2-id="254"> - - - - KASKUS Peduli</option>
				<option value="473" data-select2-id="255"> - - - - Gathering, Event Report &amp; Bakti Sosial</option>
				<option value="263" data-select2-id="256"> - - - - KASKUS Celeb</option>
				<option value="435" data-select2-id="257"> - - - - KASKUS Promo</option>
				<option value="479" data-select2-id="258"> - - - - Cinta Indonesiaku</option>
				<option value="663" data-select2-id="259"> - - - - Jual Beli Zone </option>
				<option value="273" data-select2-id="260"> - - - - Product Review </option>
				<option value="72" disabled="disabled" data-select2-id="261">REGIONAL</option>
				<option value="617" data-select2-id="262"> - - America</option>
				<option value="83" data-select2-id="263"> - - - - Canada</option>
				<option value="76" data-select2-id="264"> - - - - USA</option>
				<option value="421" data-select2-id="265"> - - - - Visit USA</option>
				<option value="425" data-select2-id="266"> - - - - Central USA</option>
				<option value="96" data-select2-id="267"> - - - - East USA</option>
				<option value="423" data-select2-id="268"> - - - - West USA</option>
				<option value="109" data-select2-id="269"> - - Asia</option>
				<option value="115" data-select2-id="270"> - - - - China</option>
				<option value="108" data-select2-id="271"> - - - - Japan</option>
				<option value="540" data-select2-id="272"> - - - - Korea Selatan</option>
				<option value="90" data-select2-id="273"> - - - - Malaysia</option>
				<option value="77" data-select2-id="274"> - - - - Singapore</option>
				<option value="477" data-select2-id="275"> - - - - Regional Asia Lainnya </option>
				<option value="74" data-select2-id="276"> - - Australia</option>
				<option value="384" data-select2-id="277"> - - - - Brisbane</option>
				<option value="79" data-select2-id="278"> - - - - Melbourne</option>
				<option value="106" data-select2-id="279"> - - - - Perth</option>
				<option value="80" data-select2-id="280"> - - - - Sydney</option>
				<option value="475" data-select2-id="281"> - - - - Regional Australia Lainnya </option>
				<option value="157" data-select2-id="282"> - - Europe</option>
				<option value="82" data-select2-id="283"> - - - - Germany</option>
				<option value="85" data-select2-id="284"> - - - - Netherlands</option>
				<option value="129" data-select2-id="285"> - - - - United Kingdom</option>
				<option value="476" data-select2-id="286"> - - - - Regional Eropa Lainnya</option>
				<option value="73" data-select2-id="287"> - - Indonesia</option>
				<option value="463" data-select2-id="288"> - - - - Indonesia Timur</option>
				<option value="861" data-select2-id="289"> - - - - Maluku Raya</option>
				<option value="427" data-select2-id="290"> - - - - Papua</option>
				<option value="458" data-select2-id="291"> - - - - Jawa Barat, Jakarta &amp; Banten</option>
				<option value="89" data-select2-id="292"> - - - - Bandung</option>
				<option value="858" data-select2-id="293"> - - - - Banten Kulon</option>
				<option value="405" data-select2-id="294"> - - - - Bekasi</option>
				<option value="107" data-select2-id="295"> - - - - Bogor</option>
				<option value="412" data-select2-id="296"> - - - - Cirebon</option>
				<option value="407" data-select2-id="297"> - - - - Depok</option>
				<option value="654" data-select2-id="298"> - - - - Garut </option>
				<option value="78" data-select2-id="299"> - - - - DKI Jakarta</option>
				<option value="626" data-select2-id="300"> - - - - Karawang</option>
				<option value="585" data-select2-id="301"> - - - - Sukabumi</option>
				<option value="164" data-select2-id="302"> - - - - Tangerang Raya</option>
				<option value="599" data-select2-id="303"> - - - - Tasikmalaya </option>
				<option value="457" data-select2-id="304"> - - - - Jawa Tengah &amp; Yogyakarta</option>
				<option value="181" data-select2-id="305"> - - - - Banyumas</option>
				<option value="653" data-select2-id="306"> - - - - Cilacap</option>
				<option value="627" data-select2-id="307"> - - - - Karesidenan Kedu</option>
				<option value="564" data-select2-id="308"> - - - - Karesidenan Pati</option>
				<option value="598" data-select2-id="309"> - - - - Klaten </option>
				<option value="111" data-select2-id="310"> - - - - Semarang</option>
				<option value="160" data-select2-id="311"> - - - - Solo</option>
				<option value="402" data-select2-id="312"> - - - - Tegal</option>
				<option value="84" data-select2-id="313"> - - - - Yogyakarta</option>
				<option value="459" data-select2-id="314"> - - - - Jawa Timur, Bali &amp; NTB</option>
				<option value="167" data-select2-id="315"> - - - - Bali</option>
				<option value="587" data-select2-id="316"> - - - - Bromo</option>
				<option value="567" data-select2-id="317"> - - - - Gresik</option>
				<option value="555" data-select2-id="318"> - - - - Jember</option>
				<option value="403" data-select2-id="319"> - - - - Banyuwangi</option>
				<option value="651" data-select2-id="320"> - - - - Karesidenan Bojonegoro</option>
				<option value="452" data-select2-id="321"> - - - - Karesidenan Kediri</option>
				<option value="411" data-select2-id="322"> - - - - Karesidenan Madiun</option>
				<option value="652" data-select2-id="323"> - - - - Madura</option>
				<option value="133" data-select2-id="324"> - - - - Malang</option>
				<option value="583" data-select2-id="325"> - - - - Mojokerto</option>
				<option value="860" data-select2-id="326"> - - - - Nusa Tenggara Barat</option>
				<option value="628" data-select2-id="327"> - - - - Sidoarjo</option>
				<option value="92" data-select2-id="328"> - - - - Surabaya</option>
				<option value="461" data-select2-id="329"> - - - - Kalimantan</option>
				<option value="162" data-select2-id="330"> - - - - Kalimantan Barat</option>
				<option value="146" data-select2-id="331"> - - - - Kalimantan Selatan</option>
				<option value="385" data-select2-id="332"> - - - - Kalimantan Tengah</option>
				<option value="91" data-select2-id="333"> - - - - Kalimantan Timur</option>
				<option value="859" data-select2-id="334"> - - - - Kalimantan Utara</option>
				<option value="462" data-select2-id="335"> - - - - Sulawesi</option>
				<option value="584" data-select2-id="336"> - - - - Gorontalo</option>
				<option value="561" data-select2-id="337"> - - - - Kendari</option>
				<option value="170" data-select2-id="338"> - - - - Makassar</option>
				<option value="179" data-select2-id="339"> - - - - Manado</option>
				<option value="166" data-select2-id="340"> - - - - Palu</option>
				<option value="460" data-select2-id="341"> - - - - Sumatera</option>
				<option value="161" data-select2-id="342"> - - - - Aceh</option>
				<option value="97" data-select2-id="343"> - - - - Bangka - Belitung</option>
				<option value="543" data-select2-id="344"> - - - - Batam</option>
				<option value="586" data-select2-id="345"> - - - - Bengkulu</option>
				<option value="548" data-select2-id="346"> - - - - Jambi</option>
				<option value="398" data-select2-id="347"> - - - - Kepulauan Riau</option>
				<option value="145" data-select2-id="348"> - - - - Lampung</option>
				<option value="93" data-select2-id="349"> - - - - Medan</option>
				<option value="156" data-select2-id="350"> - - - - Minangkabau</option>
				<option value="81" data-select2-id="351"> - - - - Palembang</option>
				<option value="117" data-select2-id="352"> - - - - Riau Raya</option>
				<option value="158" data-select2-id="353"> - - Regional Lainnya</option>
				<option value="194" data-select2-id="354"> - - - - Timur Tengah</option>
				</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 268px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-forum_id-container"><span class="select2-selection__rendered" id="select2-forum_id-container" role="textbox" aria-readonly="true" title="Pilih Kategori"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><div id="captcha-newthread" style=""></div><div class="Mt(10px) Bdt(borderSolidLightGrey)"><div class="D(f) Ai(c) Jc(c) Py(20px)"><button type="button" class="btn btn-info" onclick="#"> <span class="">Simpan Draft</span> </button> <button class="btn btn-info" onclick="#"> <span class="">Post</span> </button></div></div></div></div></div>
	</div>
		</div>
		
  </div>
{{ Form::close() }}