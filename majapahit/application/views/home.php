<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>Majapahit Wars - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/"; ?>jquery-ui-1.10.4.custom.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()."assets/css/"; ?>theme.css" rel="stylesheet">    
  
  </head>

  <body role="document" data-spy="scroll" data-target=".navigation-spy">
	<div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
			<div class="navbar-header">        
        		<a href="#" class="navbar-brand">
                	<img src="<?php echo base_url()."assets/images/"; ?>logo.png" class="img-responsive" id="logo" alt="Majapahit Wars">
                </a> 
 				<button class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
    	        	<span class="icon-bar"></span>
        	        <span class="icon-bar"></span>
            	    <span class="icon-bar"></span>
            	</button>
        	</div>
            <div class="collapse navbar-collapse navigation-spy" id="navHeaderCollapse">        		
                <ul class="nav navbar-nav navbar-left">                
                	<li class="active">
                    	<a href="#section-home" class="navbar-custom">
                    		<span class="glyphicon glyphicon-home glyphicon-custom"></span> <span>Home</span>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                    	
                        <a href="#" class="dropdown-toggle navbar-custom" data-toggle="dropdown">
                        	<span class="glyphicon glyphicon-tree-deciduous glyphicon-custom"></span> <span>About Majapahit</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                        	<li>
                               	<a href="#section-historiography" class="navbar-custom">
                                   	<span class="glyphicon glyphicon-pencil glyphicon-custom"></span> <span>Historiography</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                               	<a href="#section-history" class="navbar-custom">
                                   	<span class="glyphicon glyphicon-flag glyphicon-custom"></span> <span>History</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                               	<a href="#section-culture" class="navbar-custom">
                                   	<span class="glyphicon glyphicon-tower glyphicon-custom"></span> <span>Culture</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                               	<a href="#section-economy" class="navbar-custom">
                                   	<span class="glyphicon glyphicon-usd glyphicon-custom"></span> <span>Economy</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                               	<a href="#section-legacy" class="navbar-custom">
                                   	<span class="glyphicon glyphicon-tags glyphicon-custom"></span> <span>Legacy</span>
                                </a>
                            </li>
                        </ul>
                    </li>                    
                </ul>                
                <ul class="nav navbar-nav navbar-right">                	
                    <li><a href="#signup" data-toggle="modal" class="navbar-custom modal-button"><span class="glyphicon glyphicon-plus glyphicon-custom"></span> <span>Sign Up</span></a></li>
                    <li><a href="#login" data-toggle="modal" class="navbar-custom modal-button"><span class="glyphicon glyphicon-user glyphicon-custom"></span> <span>Login</span></a></li>                    
                </ul>                
            </div>            
        </div>
    </div>
    
    
    
    <div class="container">
    	<section id="section-home">
        <div class="spacer"></div>
        <div class="row">
    		<div class="col-md-12">
            	<div class="jumbotron text-center">
           			<h1>Majapahit Wars</h1>
           			<p>
            			Majapahit Wars is a  browser-based, massively multiplayer, online real-time strategy game developed by Adityo Nugroho. It was originally developed  for research and educational purpose. Majapahit Wars is programmed in PHP and  used MFG engine (it was developed by Adityo Nugroho too) as it core.
           			</p>
               
           			<a class="btn btn-default btn-lg" href="#login" data-toggle="modal">Login</a>
           			<a class="btn btn-info btn-lg" href="#signup" data-toggle="modal">Sign Up</a>
       			</div>
            </div>
        </div>
    	<div class="row">
       		<div class="col-md-3 text-center">
           		<div class=" panel panel-success feature">
           			<div class="panel-body">
           				<h3>MySQL Based Business Process</h3>
               			<p class="text-justify">
                        	All Business Process programmed under MySQL Store Procedure for better performance and multi-platform compatibility. MySQL Event used for required time based processing.
               			</p>
               		</div>
               	</div>
           	</div>
           	<div class="col-md-3 text-center">
           		<div class=" panel panel-info feature">
           			<div class="panel-body">
           				<h3>JSON Output</h3>
               			<p class="text-justify">JSON Output for easy generate to server and easy parse for client platform that programmed under C-family of languages, including C, C++, C#, Java, JavaScript, Perl, Python, and many others. These properties make JSON Output an ideal data-interchange language.  
               			</p>
               		</div>
               	</div>
           	</div>
           	<div class="col-md-3 text-center">
           		<div class=" panel panel-warning feature">
           			<div class="panel-body">
           				<h3>Responsive Design</h3>
               			<p class="text-justify">Use of Responsive web design (RWD) to provide an optimal viewing experience—easy reading and navigation with a minimum of resizing, panning, and scrolling—across a wide range of devices (from mobile phones to desktop computer monitors).
               			</p>
               		</div>
               	</div>
           	</div>
           	<div class="col-md-3 text-center">
           		<div class=" panel panel-danger feature">
           			<div class="panel-body">
           				<h3>Server Push Integration</h3>
               			<p class="text-justify">Use of Server Push for real time data streaming from client web server to browser. data are sent over traditional HTTP. That means they do not require a special protocol or server implementation to get working.
               			</p>
               		</div>
               	</div>
           	</div>
       	</div>    	
    	</section>
    
    	<section id="section-about">
        <div class="spacer"></div>    
    	<div class="row">
           	<div class="col-md-8">
               	<h1>Majapahit</h1>
                <p class="text-justify">
                	Majapahit was a vast archipelagic empire based on the island of <strong>Java</strong> (modern-day Indonesia) from <strong>1293</strong> to around <strong>1500</strong>. Majapahit reached its peak of glory during the era of <strong>Hayam Wuruk</strong>, whose reign from <strong>1350</strong> to <strong>1389</strong> marked by conquest which extended through Southeast Asia. His achievement is also credited to his prime minister, <strong>Gajah Mada</strong>. According to the <strong>Nagarakretagama (Desawarñana)</strong> written in <strong>1365</strong>, Majapahit was an empire of <strong>98</strong> tributaries, stretching from <strong>Sumatra</strong> to <strong>New Guinea</strong>; consisting of present day <strong>Indonesia, Singapore, Malaysia, Brunei, southern Thailand, Sulu Archipelago, Manila, and East Timor</strong>, although the true nature of Majapahit sphere of influence is still the subject of studies among historians.
                </p>
                <p>
                	Majapahit was one of the last major empires of the region and is considered to be one of the greatest and most powerful empires in the history of Indonesia and Southeast Asia, one that is sometimes seen as the precedent for Indonesia's modern boundaries. Its influence extended beyond the modern territory of Indonesia and has been the subject of many studies. German orientalist <strong>Berthold Laufer</strong> suggested that <strong>maja</strong> came from the Javanese name of an Indonesian tree.
                </p>
                <section id="section-historiography">
        		<div class="spacer"></div>
        
            	<h2>Historiography</h2>
                <p>
                	Little physical evidence of Majapahit remains, and some details of the history are rather abstract. The main sources used by historians are: the <strong>Pararaton</strong> ('Book of Kings') written in the <strong>Kawi language</strong> and <strong>Nagarakertagama</strong> in <strong>Old Javanese</strong>. Pararaton is focused upon <strong>Ken Arok</strong> (the founder of Singhasari) but includes a number of shorter narrative fragments about the formation of Majapahit. Nagarakertagama, is an <strong>old Javanese epic poem</strong> written during the Majapahit golden age under the reign of <strong>Hayam Wuruk</strong> after which some events are covered narratively. There are also some inscriptions in Old Javanese and Chinese.
                </p>
                <p>
                	The Javanese sources incorporate some poetic mythological elements, and scholars such as C. C. Berg, a Dutch nationalist, have considered the entire historical record to be not a record of the past, but a supernatural means by which the future can be determined. Despite Berg's approach, most scholars do not accept this view, as the historical record corresponds with Chinese materials that could not have had similar intention. The list of rulers and details of the state structure show no sign of being invented.
                </p>
                <p>
                </p>
                <p>
                	<strong>Ming Dynasty</strong> admiral <strong>Zheng He</strong> visited Majapahit. Zheng He's translator <strong>Ma Huan</strong> wrote a detailed description about Majapahit and where the king of Java lived. New findings in April 2011, indicate the Majapahit capital was much larger than previously believed after some artifacts were uncovered.
                </p>
            
        		</section>
    	    </div>
            <div class="col-md-4">
            	<ul class="list-group">
                	<li class="list-group-item text-center">
                    	<h4>Majapahit Empire</h4>
						<h5>Karaton Mojopahit</h5>
						<h5>Kerajaan Majapahit</h5>                        
                    </li>
                    <li class="list-group-item text-center">
                    	<h4>1293–1527</h4>                    
                    </li>
                    <li class="list-group-item text-center">
                    	<h4>Symbol : Surya Majapahit</h4>
                        <p>(The Sun of Majapahit) is the emblem commonly found in Majapahit ruins. It served as the symbol of the Majapahit empire</p>                    
                    </li>
                    <li class="list-group-item text-center">
                    	<div class="row">
                        	<div class="col-md-6 text-left"><strong>Capital</strong></div>
                            <div class="col-md-6 text-right">Majapahit, Wilwatikta (modern Trowulan)</div>
                        </div>                    
                    </li>
                    <li class="list-group-item text-center">
                    	<div class="row">
                        	<div class="col-md-6 text-left"><strong>Languages</strong></div>
                            <div class="col-md-6 text-right">Old Javanese (main), Sanskrit (religious)</div>
                        </div>                    
                    </li>
                    <li class="list-group-item text-center">
                    	<div class="row">
                        	<div class="col-md-6 text-left"><strong>Religion</strong></div>
                            <div class="col-md-6 text-right">Hinduism, Kejawen, Buddhism, Animism</div>
                        </div>                    
                    </li>
                    <li class="list-group-item text-center">
                    	<div class="row">
                        	<div class="col-md-6 text-left"><strong>Government</strong></div>
                            <div class="col-md-6 text-right">Monarchy</div>
                        </div>                    
                    </li>
                    <li class="list-group-item text-center">
                    	<div class="row">
                        	<div class="col-md-6 text-left"><strong>Currency</strong></div>
                            <div class="col-md-6 text-right">Native gold and silver coins, Kepeng (coins imported from China and later produced locally</div>
                        </div>                    
                    </li>
                </ul>
            </div>
        </div>
    	</section>
        
        <section id="section-history">
        <div class="spacer"></div>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group">
                	<li class="list-group-item text-center">
                    	<h3>List of Rulers</h3>                        
                    </li>
                    <li class="list-group-item text-center">
                    	<p>The rulers of Majapahit was the dynastic continuity of the Singhasari kings, which started by Sri Ranggah Rajasa, the founder of Rajasa dynasty in late 13th century.</p>                    
                    </li>                    
                    <li class="list-group-item text-center">
                    	<dl>
                        	<dt>1294–1309</dt>
                            <dd>Raden Wijaya, styled Kertarajasa Jayawardhana</dd>
                        </dl>
                        <dl>
                        	<dt>1309–1328</dt>
                            <dd>Kalagamet, styled Jayanagara</dd>
                        </dl>
                        <dl>
                        	<dt>1328–1350</dt>
                            <dd>Sri Gitarja, styled Tribhuwana Wijayatunggadewi</dd>
                        </dl>
                        <dl>
                        	<dt>1350–1389</dt>
                            <dd>Hayam Wuruk, styled Sri Rajasanagara</dd>
                        </dl>
                        <dl>
                        	<dt>1389–1429</dt>
                            <dd>Wikramawardhana styled Bhra Hyang Wisesa Aji Wikrama</dd>
                        </dl>
                        <dl>
                        	<dt>1429–1447</dt>
                            <dd>Ratu (queen) Suhita</dd>
                        </dl>
                        <dl>
                        	<dt>1447–1451</dt>
                            <dd>Kertawijaya, styled Brawijaya I</dd>
                        </dl>                    
                    </li>                    
                </ul>
            </div>
        	<div class="col-md-9">
            	<h2>History</h2>
                <h3>Formation</h3>
                <p>
                	After defeating the <strong>Melayu Kingdom</strong> in <strong>Sumatra</strong> in <strong>1290</strong>, <strong>Singhasari</strong> became the most powerful kingdom in the region. <strong>Kublai Khan</strong>, the <strong>Great Khan</strong> of the <strong>Mongol Empire</strong> and <strong>the Emperor of the Mongol Yuan Dynasty</strong>, challenged Singhasari by sending emissaries demanding tribute. Kertanegara, the last ruler of Singhasari, refused to pay the tribute, insulted the Mongol envoy and challenged the Khan instead. As the response, in 1293, Kublai Khan <strong>sent a massive expedition of 1,000 ships to Java</strong>.
                </p>
                <p>
                	By that time, <strong>Jayakatwang</strong>, the <strong>Adipati</strong> (<strong>Duke</strong>) of <strong>Kediri</strong>, a vassal state of Singhasari, had usurped and killed <strong>Kertanagara</strong>. After being pardoned by Jayakatwang with the aid of Madura's regent, <strong>Arya Wiraraja</strong>; <strong>Raden Wijaya</strong>, Kertanegara's <strong>son-in-law</strong>, was given the land of <strong>Tarik timberland</strong>. He then opened that vast timberland and built a new village there. The village was named <strong>Majapahit</strong>, which was taken from a fruit name that had a bitter taste in that timberland (maja is the fruit name and pahit means bitter). When the Mongolian Yuan army sent by Kublai Khan arrived, Wijaya allied himself with the army to fight against Jayakatwang. Once Jayakatwang was destroyed, Raden Wijaya forced his allies to withdraw from Java by launching a surprise attack. Yuan's army had to withdraw in confusion as they were in hostile territory. It was also their last chance to catch the monsoon winds home; otherwise, they would have had to wait for another six months on a hostile island.
                </p>
                <p>
                In <strong>1293</strong>, <strong>Raden Wijaya</strong> founded a stronghold with the capital Majapahit. The exact date used as the birth of the Majapahit kingdom is the day of his coronation, the <strong>15th of Kartika</strong> month in the year <strong>1215</strong> using the <strong>Javanese çaka calendar</strong>, which equates to <strong>November 10, 1293</strong>. During his coronation he was given formal name <strong>Kertarajasa Jayawardhana</strong>. King Kertarajasa took all four daughters of Kertanegara as his wives, his first wife and prime queen consort <strong>Tribhuwaneswari</strong>, and her sisters; <strong>Prajnaparamita</strong>, <strong>Narendraduhita</strong>, and <strong>Gayatri Rajapatni</strong> the youngest. He also took a <strong>Sumatran Malay Dharmasraya</strong> princess named <strong>Dara Petak</strong> as his wife. The new kingdom faced challenges. Some of Kertarajasa's most trusted men, including <strong>Ranggalawe</strong>, <strong>Sora</strong>, and <strong>Nambi</strong> rebelled against him, though unsuccessfully. It was suspected that the mahapati (equal with prime minister) <strong>Halayudha</strong> set the conspiracy to overthrow all of the king's opponents, to gain the highest position in the government. However, following the death of the last rebel Kuti, Halayudha was captured and jailed for his tricks, and then sentenced to death. <strong>Wijaya</strong> himself died in <strong>1309</strong>.
                </p>
                <p>
                According to tradition, Wijaya's son and successor, <strong>Jayanegara</strong> was notorious for immorality. One of his sinful acts was his desire on taking his own stepsisters as wives. He was entitled <strong>Kala Gemet</strong>, or "weak villain". Approximately during Jayanegara's reign, the Italian <strong>Friar Odoric</strong> of <strong>Pordenone</strong> visited Majapahit court in Java. In <strong>1328</strong>, Jayanegara was murdered by his doctor, <strong>Tanca</strong>. His stepmother, <strong>Gayatri Rajapatni</strong>, was supposed to replace him, but Rajapatni retired from court to become a Bhikkhuni. Rajapatni appointed her daughter, <strong>Tribhuwana Wijayatunggadewi</strong>, or known in her formal name as <strong>Tribhuwannottungadewi Jayawishnuwardhani</strong>, as the queen of Majapahit under Rajapatni's auspices. Tribhuwana appointed <strong>Gajah Mada</strong> as the Prime Minister in 1336. During his inauguration Gajah Mada declared his <strong>Sumpah Palapa</strong>, revealing his plan to expand Majapahit realm and building an empire. During Tribhuwana’s rule, the Majapahit kingdom grew much larger and became famous in the area. Tribhuwana ruled Majapahit until the death of her mother in 1350. She abdicated the throne in favour of her son, <strong>Hayam Wuruk</strong>.
                </p>
            </div>
        </div>
        </section>
        <section id="section-culture">
        <div class="spacer"></div>
        <div class="row">
        	<div class="col-md-9">
            	<h2>Culture, art and architecture</h2>
                <p>
                	The main event of the administrative calendar took place on the first day of the month of Caitra (March–April) when representatives from all territories paying tax or tribute to Majapahit came to the capital to pay court. Majapahit's territories were roughly divided into three types: the palace and its vicinity; the areas of east Java and Bali which were directly administered by officials appointed by the king; and the outer dependencies which enjoyed substantial internal autonomy.
                <blockquote class="blockquote-reverse">
                	<p>
                    	"Of all the buildings, none lack pillars, bearing fine carvings and coloured" [Within the wall compounds] "there were elegant pavilions roofed with aren fibre, like the scene in a painting... The petals of the katangga were sprinkled over the roofs for they had fallen in the wind. The roofs were like maidens with flowers arranged in their hair, delighting those who saw them".
                    </p>
                    <footer>
                    	Description of the Majapahit capital from the Old Javanese epic poem Nagarakertagama.
                	</footer>
                </blockquote>
                </p>
                
                <h3>Culture</h3>
                <p>
                	The capital (Trowulan) was grand and known for its great annual festivities. Buddhism, Shaivism, and Vaishnavism were all practiced, and the king was regarded as the incarnation of the three. The Nagarakertagama does not mention Islam, but there were certainly Muslim courtiers by this time.
                
                </p>
                <p>
                	The first European record about Majapahit came from the travel log of the Italian Mattiussi, a Franciscan monk. In his book: "Travels of Friar Odoric of Pordenone", he visited several places in today's Indonesia: Sumatra, Java, and Banjarmasin in Borneo, between 1318–1330. He was sent by the Pope to launch a mission into the Asian interiors. In 1318 he departed from Padua, crossed the Black Sea into Persia, all the way across Calcutta, Madras, and Sri Lanka. He then headed to Nicobar island all the way to Sumatra, before visiting Java and Banjarmasin. He returned to Italy by land through Vietnam, China, all the way through the silkroad to Europe in 1330.
                <blockquote class="blockquote-reverse">
                	<p>
                    	"....the King [of Java] has subject to himself seven crowned kings. [Yet] his island is populous, and is the second best of all island that exist.... The king of this island has a palace which is truly marvelous. For it is very great, the stairs and palace interior were coated with gold and silver, even the roof were gilded with gold. Now the Great Khan of China many a time engaged in war with this king; but this king always vanquished and get the better of him."
                    </p>
                    <footer>
                    	Description of Majapahit by Mattiussi (Friar Odoric of Pordenone).
                	</footer>
                </blockquote>
                </p>
                <p>
                In his book he mentioned that he visited Java without explaining the exact place he had visited. He said that king of Java ruled over seven other kings (vassals). He also mentioned that in this island was found a lot of clove, cubeb, nutmeg and many other spices. He mentioned that the King of Java had an impressive, grand, and luxurious palace. The stairs and palace interior were coated with gold and silver, and even the roof were gilded. He also recorded that the kings of the Mongol has repeatedly tried to attack Java, but always ended up in failure and managed to be sent back to the mainland. The Javanese kingdom mentioned in this record is Majapahit, and the time of his visit is between 1318–1330 during the reign of Jayanegara.
                </p>
                <h3>Art</h3>
                <p>
                The Pala school of art of the Indian Pala Empire influenced the art and architecture of Majapahit.[32] Majapahit art was the continuization of East Javanese art, style and aesthetic developed since 11th century during Kediri and Singhasari period. Unlike the earlier naturalistic, relaxed and flowing figures of classical Central Java style (Sailendra art circa 8th to 10th century), this east Javanese style are somehow demonstrate stiffer pose, stylized and rendered in wayang-like figures, such as those carved on east Javanese temple's bas-reliefs. The bas-reliefs projected rather flat from the background. This style was later preserved in Balinese art, especially in its classical paintings and Balinese wayang. The statues of Hindu gods and Buddhist deities in Majapahit art were also the continuization of its previous Singhasari art. The statues of East Javanese period tends to be stiffer and frontal-formal pose, compared to the statues of Central Javanese art (circa 9th century) that are more Indianized style, relaxed in tribhanga pose. The stiffer pose of Majapahit gods statues are probably in accordance to the statue's function as the deified portrayal self of the dead Majapahit monarch. The carving however, are richly decorated, especially with fine floral carving of lotus plants carved on the stela behind the statue. Examples of Majapahit statues are the Harihara statue from Simping temple, believed to be the dified portrayal of King Kertarajasa, the statue of Parwati believed to be the portrayal of Queen Tribhuwana, and statue of queen Suhita discovered at Jebuk, Kalangbret, Tulungagung, East Java.
                </p>
                <h3>Architecture</h3>
                <p>
                In Yingyai Shenglan, Ma Huan also describes the Majapahit cities, most of them do not have walls surrounding the city or the suburbs. He describes the king's palace in Majapahit. The king’s residence is surrounded with thick red brick walls with more than three chang high (equivalent to 30 feet 7 inches or 9.32 meters), with length of more than 200 paces (340 yards or 310 meters) and on the wall there are two layers of gates, the palace is very well guarded and clean. The king's palace was a two storied building, each of the 3 or 4 chang high (9–14.5 meter), it has wood plank floors and exposed mats made from rattan or reeds (presumably palm leaves), where people sit cross-legged. The roof uses hardwood shingles (Javanese:sirap) arranged like tiles.
                </p>
                <p>
                The houses of commoners using thatched roofs (nipa palm leaves). Every family has a storage shed made of bricks, which is about 3 or 4 Ch'ih (48.9 inches or 1.24 meters above the ground, where they keep the family property, and they live on this building, to sit and sleep.
                </p>
                <p>
                The Majapahit temple architecture follows the east Javanese styles, in contrast of earlier central Javanese style. This east Javanese temple style is also dated back from Kediri period circa 11th century. The shapes of Majapahit temples are tends to be slender and tall, with roof constructed from multiple parts of stepped sections formed a combined roof structure curved upward smoothly creating the perspective illussion that the temple is perceived taller than its actual height. The pinnacle of the temples are usually cube (mostly Hindu temples), sometimes dagoba cylindrical structures (Buddhist temples). Although some of temples dated from Majapahit period used andesite or sandstone, the red bricks is also a popular construction material.
                </p>
            </div>
            <div class="col-md-3">
            	<ul class="list-group">
                    <li class="list-group-item text-center">
                    	<p>
                        Wringin Lawang, the 15.5-meter tall red brick split gate in Trowulan, believed to be the entrance of an important compound.
                        </p>                    
                    </li>                    
                    <li class="list-group-item text-center">
                    	<p>
                        Bas reliefs of Tegowangi temple, dated from Majapahit period, demonstrate the East Javanese style.
                        </p>                                        
                    </li>
                    <li class="list-group-item text-center">
                    	<p>
                        Jabung temple near Paiton, Probolinggo, East Java, dated from Majapahit period.
                        </p>                                        
                    </li>                    
                </ul>
            </div>
        </div>
        </section>
        <section id="section-economy">
        <div class="spacer"></div>
        <div class="row">
        	<div class="col-md-12">
            	<h2>Economy</h2>
                <p>
                Also in Yingyai Shenglan, Ma Huan reported the Javanese economy and market. Rice is harvested twice a year, and its grain is small. They also harvest white sesame and lentils, but there is no wheat. This land produces sapan wood (useful to produce red dye), diamond, sandalwood, incense, puyang pepper, chantarides (green beetle used for medicine), steel, turtles, tortoise shell, strange and rare birds; like a large parrot as big as a hen, red and green parrots, five-colored parrots, (all of them can imitate the human voice), also guinea fowl, ' bird hanging upside down ', five-colored pigeon, peacock, 'betel tree bird', pearl bird, and green pigeons. The beasts here are strange: there are white deer, white monkey, and various other animals. Pigs, goats, cattle, horses, poultries, and there are all types of ducks, however donkeys and geese are not found.
                </p>
                <p>
                For the fruits, there are all kinds of bananas, coconut, sugarcane, pomegranate, lotus seeds, mang-chi-shi (mangosteen), watermelon and lang Ch'a (langsat or lanzones). Mang-chi-shi – is something like a pomegranate, peel it like an orange, it have four lumps white flesh, sweet and sour taste and very delicious. Lang-ch’a is a fruit similar to Loquat, but larger, contained three blocky white flesh with sweet and sour taste. Sugarcane has white stems, large and coarse, with roots reaching 3 chang (30 feet 7 inches). In addition, all types of squash and vegetables are there, just a shortage of peach, plum and leek.
                </p>
                <p>
                Taxes and fines were paid in cash. Javanese economy had been partly monetised since the late 8th century, using gold and silver coins. Previously, the 9th century Wonoboyo hoard discovered in Central Java shows that ancient Javan gold coins were seed-shaped, similar to corn, while the silver coins were similar to buttons. In about the year 1300, in the reign of Majapahit's first king, an important change took place: the indigenous coinage was completely replaced by imported Chinese copper cash. About 10,388 ancient Chinese coins weighing about 40 kg were even unearthed from the backyard of a local commoner in Sidoarjo in November 2008. Indonesian Ancient Relics Conservation Bureau (BP3) of East Java verified that those coins dated as early as Majapahit era.[34] The reason for using foreign currency is not given in any source, but most scholars assume it was due to the increasing complexity of Javanese economy and a desire for a currency system that used much smaller denominations suitable for use in everyday market transactions. This was a role for which gold and silver are not well suited.[27] These kepeng Chinese coins were thin rounded copper coins with a square hole in the center of it. The hole was meant to tie together the money in a string of coins. These small changes—the imported Chinese copper coins—enabled Majapahit further invention, a method of savings by using a slitted earthenware coin containers. These are commonly found in Majapahit ruins, the slit is the small opening to put the coins in. The most popular shape is boar-shaped celengan (piggy bank).
                </p>
            </div>        	
        </div>
        </section>
        <section id="section-legacy">
        <div class="spacer"></div>
        <div class="row">
        	<div class="col-md-12">
            	<h2>Legacy</h2>
                <p>
                In sum, Majapahit was the largest empire ever to form in Southeast Asia. Although its political power beyond the core area in east Java was diffuse, constituting mainly ceremonial recognition of suzerainty, Majapahit society developed a high degree of sophistication in both commercial and artistic activities. Its capital was inhabited by a cosmopolitan population among whom literature and art flourished.
                </p>
                <p>
                Numbers of local legends and folklores in the region had mentioned about the Majapahit kingdom. Most of them mentioned about the incoming Javanese forces to their land, which was probably a local testament of the empire's expansive nature that once dominating the archipelago. The legend of Minangkabau mentioned an invading foreign prince—associated with Javanese Majapahit kingdom—being defeated on buffalo fight. Others than Javanese sources, some regional legends mentioning Majapahit kingdom or its general Gajah Mada, also can be found; from Aceh, Minangkabau, Palembang, Malay Peninsula, Sunda, Brunei, Bali to Sumbawa.
                </p>
                <p>
                Several Javanese legends were originated or become popular during Majapahit period. The Panji cycles, the tale of Sri Tanjung, and the epic of Damarwulan, are popular tales in Javanese and Balinese literatures. The tales of Panji was dated from older period during Kediri kingdom, while the tale of Sri Tanjung and the epic of Damarwulan took place during Majapahit period. These tales has remain a popular theme in Javanese culture of later period during Mataram Sultanate, and often become the source of inspiration for wayang shadow puppet performance, ketoprak and topeng dance drama.
                </p>
                <p>
                Majapahit had a momentous and lasting influence on Indonesian architecture. The descriptions of the architecture of the capital's pavilions (pendopo) in the Nagarakertagama invoke the Javanese Kraton also the Balinese temples and palace compounds of today. The Majapahit architectural style that often employs terracotta and red brick had heavily influenced the architecture of Java and Bali in the later period. The Majapahit style candi bentar split gate, the kori or paduraksa towering red brick gate, and also pendopo pavilion has become ubiquitous in Javanese and Balinese architectural features, as evidence in Menara Kudus Mosque, Keraton Kasepuhan and Sunyaragi park in Cirebon, Mataram Sultanate royal cemetery in Kota Gede, Yogyakarta, and various palaces and temples in Bali.
                </p>
            </div>        	
        </div>
        </section>
        <div class="row">
        	<div class="col-md-12 text-right">
            Source : <a href="http://en.wikipedia.org/wiki/Majapahit">Wikipedia</a>
            </div>
        </div>
        <div class="spacer"></div> 
    </div>
    
	
    <!-- modal -->
    <div class="modal fade" id="signup" role="dialog">
    	<div class="modal-dialog">
        	<div class="modal-content">
            	<div class="form-horizontal" id="signup-form" role="form">
            		<div class="modal-header">
                		<h3>Pendaftaran</h3>
               	 	</div>
                	<div class="modal-body">
                    	
                		<div class="form-group has-feedback">
                        	<label for="signup-username" class="col-lg-4 control-label">Username</label>
                            <div class="col-lg-8">
                            	<input name="username" type="text" autocomplete="off" class="form-control" id="signup-username" placeholder="Enter Username">                                
                            	<span class="help-block" id="signup-username-help"></span>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                        	<label for="signup-password" class="col-lg-4 control-label">Password</label>
                            <div class="col-lg-8">
                            	<input name="password" type="password" class="form-control" id="signup-password" placeholder="Enter Password">
                                <span class="help-block" id="signup-password-help"></span>
                        	</div>
                        </div>
                        <div class="form-group has-feedback">
                        	<label for="signup-password-conf" class="col-lg-4 control-label">Confirm Password</label>
                            <div class="col-lg-8">
                            	<input name="password_conf" type="password" class="form-control" id="signup-password-conf" placeholder="Confirm Password">
                                <span class="help-block" id="signup-password-conf-help"></span>
                            </div>
                        </div>
                	</div>
                	<div class="modal-footer">
                		<button class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" id="signup-button">Daftar</button>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="login" role="dialog">
    	<div class="modal-dialog">
        	<div class="modal-content">
            	<div class="form-horizontal" id="login-form" role="form">
            		<div class="modal-header">
                		<h3>Login</h3>
               	 	</div>
                	<div class="modal-body">
                    	
                		<div class="form-group has-feedback">
                        	<label for="login-username" class="col-lg-4 control-label">Username</label>
                            <div class="col-lg-8">
                            	<input name="username" type="text" autocomplete="off" class="form-control" id="login-username" placeholder="Enter Username">                                
                            	<span class="help-block" id="login-username-help"></span>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                        	<label for="login-password" class="col-lg-4 control-label">Password</label>
                            <div class="col-lg-8">
                            	<input name="password" type="password" class="form-control" id="login-password" placeholder="Enter Password">
                                <span class="help-block" id="login-password-help"></span>
                        	</div>
                        </div>
                	</div>
                	<div class="modal-footer">
                		<button class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" id="login-button">Masuk</button>
                	</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()."assets/js/"; ?>jquery-1.11.0.min.js"></script> 
    <script src="<?php echo base_url()."assets/js/"; ?>bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery.localScroll.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jQueryRotateCompressed.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>custom.js"></script>
    <script>
		$(document).ready(function(){
			
			//change link
			$(".navigation-spy").on('activate.bs.scrollspy', function () {
				var data = {url : "<?php echo base_url() ?>"}
				var page = $(".active:eq(1) > a").attr("href");
				if(page == null){page = $(".active:eq(0) > a").attr("href");}
				history.pushState(data, "page 2", page);
				$("title").text("Majapahit Wars - "+ (page.replace("#","")).charAt(0).toUpperCase() + (page.replace("#","")).slice(1));
			})

			//signup validation
			//username validation
			$("#signup-username").on({
				keydown : function(event){
					if(event.which != "9"){
					$(this).closest(".form-group").removeClass("has-error").addClass("has-warning");
					$(this).closest(".form-group").removeClass("has-success").addClass("has-warning");
					$(this).next(".glyphicon").remove();
					$(this).after('<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');}						
				},
				keyup : function(){
					var username = $(this).val();
					var textbox = $(this);
					
					$.post("<?php echo base_url()."home/username_validation/" ?>",{username : username},function(data){
						//var validation = $.parseJSON(data);
						var validation = data;
						
						if(validation.status == "error")
						{
							textbox.closest(".form-group").removeClass("has-warning").addClass("has-error");
							textbox.next(".glyphicon").remove();
							textbox.after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
							$("#signup-username-help").html(validation.message);
						}
						else
						{
							textbox.closest(".form-group").removeClass("has-warning").addClass("has-success");
							textbox.next(".glyphicon").remove();
							textbox.after('<span class="glyphicon glyphicon-ok form-control-feedback"></span>');
							$("#signup-username-help").html(validation.message);
						}	
					});					
				}
			})
			//password validation
			$("#signup-password").on({
				keydown : function(event){
					if(event.which != "9"){
					$(this).closest(".form-group").removeClass("has-error").addClass("has-warning");
					$(this).closest(".form-group").removeClass("has-success").addClass("has-warning");
					$(this).next(".glyphicon").remove();
					$(this).after('<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');}
				},
				keyup : function(){
					var password = $(this).val();
					var textbox = $(this);
					
					$.post("<?php echo base_url()."home/password_validation/" ?>",{password : password},function(data){
						//var validation = $.parseJSON(data);
						var validation = data;
						
						if(validation.status == "error")
						{
							textbox.closest(".form-group").removeClass("has-warning").addClass("has-error");
							textbox.next(".glyphicon").remove();
							textbox.after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
							$("#signup-password-help").html(validation.message);
						}
						else
						{
							textbox.closest(".form-group").removeClass("has-warning").addClass("has-success");
							textbox.next(".glyphicon").remove();
							textbox.after('<span class="glyphicon glyphicon-ok form-control-feedback"></span>');
							$("#signup-password-help").html(validation.message);
						}	
					});					
				}
			});
			//confirm password validation
			$("#signup-password-conf").on({
				keydown : function(event){
					if(event.which != "9"){
					$(this).closest(".form-group").removeClass("has-error").addClass("has-warning");
					$(this).closest(".form-group").removeClass("has-success").addClass("has-warning");
					$(this).next(".glyphicon").remove();
					$(this).after('<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');}
				},
				keyup : function(){
					var password = $("#signup-password").val();
					var password_conf = $(this).val();
					var textbox = $(this);
					
					$.post("<?php echo base_url()."home/password_conf_validation/" ?>",{password : password, password_conf : password_conf},function(data){
						//var validation = $.parseJSON(data);
						var validation = data;
						
						if(validation.status == "error")
						{
							textbox.closest(".form-group").removeClass("has-warning").addClass("has-error");
							textbox.next(".glyphicon").remove();
							textbox.after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
							$("#signup-password-conf-help").html(validation.message);
						}
						else
						{
							textbox.closest(".form-group").removeClass("has-warning").addClass("has-success");
							textbox.next(".glyphicon").remove();
							textbox.after('<span class="glyphicon glyphicon-ok form-control-feedback"></span>');
							$("#signup-password-conf-help").html(validation.message);
						}	
					});					
				}
			});
			//submit validation
			$("#signup-button").click(function(){
				var username = $("#signup-username").val();
				var password = $("#signup-password").val();
				var password_conf = $("#signup-password-conf").val();
					
				$("#signup-username,#signup-password,#signup-password-conf").trigger("keyup");				
					
				$.post("<?php echo base_url()."home/sign_up/" ?>",{username : username, password : password, password_conf : password_conf},function(data){
					//var validation = $.parseJSON(data);
					var validation = data;
					$("#signup-form > .modal-body > .alert").remove();
						
					if(validation.status == "success")
					{
						$("#signup-username,#signup-password,#signup-password-conf").next(".glyphicon").remove();
						$("#signup-username,#signup-password,#signup-password-conf").val("");
						$("#signup-username,#signup-password,#signup-password-conf").closest(".form-group").removeClass("has-success");
						$("#signup-form > .modal-body").prepend('<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Pendaftaran Sukses</strong> , Silahkan Login Untuk Memulai Permainan</div>');
					}	
				});
				
			});
			//login
			$("#login-button").click(function(){
				var username = $("#login-username").val();
				var password = $("#login-password").val();					
					
				$.post("<?php echo base_url()."home/log_in/" ?>",{username : username, password : password},function(data){
						//var validation = $.parseJSON(data);
					var validation = data;
							
					if(validation.status == "error")
					{
						$("#login-form > .modal-body").prepend('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Login Gagal</strong> , Periksa Kembali Username Dan Password Anda</div>');
					}
					else
					{
						var redirect_url = "<?php echo base_url()."play"; ?>";
						$(location).attr("href",redirect_url);	
					}	
				});
					
			});
			//
			            
        });
	</script>
  </body>
</html>
