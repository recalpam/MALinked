<?php
use Intervention\Image\ImageManager;
class ProjectsBatch extends Seeder {

	public function run()
	{
		ini_set('memory_limit', '-1');
		$this->command->comment("Truncating projects");
		Project::truncate();
		ProjectFile::truncate();

$student_project = array(
  array('id' => '26','student_id' => '6836','title' => 'Laatkomers','link' => 'https://vimeo.com/108146157','description' => 'De korte film \'Laatkomers\' is één van de vijf filmpjes die deel uitmaakt van de Sense 30 day\'s filmcompetiton. De filmpjes worden gebruik als voorlichting op 500 middelbare scholen in Nederland. Laatkomers gaat over Yara die erachter komt dat ze gevoelens heeft voor een meisje. ','date' => '1425033218'),
  array('id' => '27','student_id' => '6836','title' => 'Uitgesproken ','link' => 'https://vimeo.com/76683546','description' => 'De film is onderdeel van een voorlichtingsprogramma voor jongeren. De vriendschap tussen David en Niels komt onder druk te staan als David ontdekt dat Niels op jongens valt. In hun vriendengroep wordt homoseksualiteit niet getolereerd. Zal David het lef hebben om zich uit te spreken tegen de groep en te kiezen voor zijn vriendschap met Niels?','date' => '1425033218'),
  array('id' => '28','student_id' => '6836','title' => 'Stuk!','link' => 'https://www.youtube.com/watch?v=Ejq7-6A2waw','description' => 'Stuk! is een asgrauwe film. Een spannende maatschappelijk relevante thriller over Elizabeth. Elizabeth wordt getreiterd, aangerand en gruwelijk gepest.We zien hoe ze hier mee omgaat en uiteindelijk de rollen omdraait. ','date' => '1425033218'),
  array('id' => '29','student_id' => '6837','title' => 'Mr. and Mrs. Smith','link' => '','description' => '','date' => '1425151359'),
  array('id' => '30','student_id' => '45','title' => 'Di-vers','link' => 'http://di-vers.com/','description' => 'Een website die ik heb gemaakt bij mijn stage Studio Stomp met een collega.','date' => '1425284314'),
  array('id' => '31','student_id' => '317','title' => 'Boobiehills','link' => 'http://newchique.gallery/product/boobie-hills/','description' => 'Ik werd door New Chique benaderd om mijn werk te verkopen via hun platform. Dit is een van de werken dat ik speciaal voor New Chique heb gemaakt.','date' => '1425295970'),
  array('id' => '34','student_id' => '328','title' => 'Cansu','link' => '','description' => '','date' => '1425296707'),
  array('id' => '35','student_id' => '309','title' => 'Glamcult','link' => 'https://www.youtube.com/watch?v=ooqYfqpIFTk&list=FL-hzMBg6xJkR-WnsE9mXOhg&index=49','description' => '','date' => '1425296963'),
  array('id' => '37','student_id' => '53','title' => 'Easyjet','link' => 'https://www.behance.net/gallery/17577209/easyJet-Out-Of-Office-Campaign','description' => 'Being There , een reclamebureau uit Amsterdam heeft een ‘Out Of Office’ actie bedacht waarbij mensen zich kunnen aanmelden door hun e-mailadres op te geven, vervolgens krijgt de deelnemer een EDM(Electronic Direct Marketing oftewel, een persoonlijke email) met daarin instructies. Deze instructies geven aan dat de deelnemers hun out of office reply aan moeten zetten met een tekst die in de EDM wordt aangeleverd. Vervolgens stuurt easyJet een mailtje naar één of meerdere van de deelnemers, van degene waar ze direct het juiste bericht terug krijgen als out of office reply wint een reis naar een stad in europa.
Voor de realisatie van dit project hebben ze mijn stage benadert, waar ik het project mocht gaan maken.','date' => '1425299123'),
  array('id' => '38','student_id' => '50','title' => 'Concept voorstel Facility Apps','link' => '','description' => 'Dit concept voorstel heb ik gemaakt tijdens mijn stage bij Netexpo Internet. ','date' => '1425300613'),
  array('id' => '39','student_id' => '50','title' => 'WK Promopool website ontwerp','link' => '','description' => 'Dit ontwerp is gemaakt voor de WK Promopool, deze pool was speciaal voor Netexpo Internet (toenmalig mijn stagebedrijf).','date' => '1425300613'),
  array('id' => '40','student_id' => '50','title' => 'Visitekaartje Bright Colour Coaching','link' => '','description' => 'Deze visitekaartjes zijn gemaakt voor een pitch opdracht vanuit school. Een externe opdrachtgever wilde een nieuwe huisstijl voor haar lifecoach bedrijf, en heeft uiteindelijk voor mijn ontwerp gekozen.','date' => '1425300613'),
  array('id' => '41','student_id' => '50','title' => 'Concept voorstel Absoloetly','link' => '','description' => 'Dit conceptvoorstel is gemaakt voor een aanvraag via ontwerpenvoorgeld.nl ','date' => '1425300613'),
  array('id' => '42','student_id' => '321','title' => 'GlamCult','link' => '','description' => 'Restylen van de GlamCult, een independent style paper.
Cover en spread, eigen fotografie.

Leerjaar 4 - Project 3','date' => '1425318156'),
  array('id' => '48','student_id' => '266','title' => 'Uncomfortable Art','link' => '','description' => '','date' => '1425463560'),
  array('id' => '49','student_id' => '266','title' => 'Stedenproject','link' => '','description' => '','date' => '1425463560'),
  array('id' => '50','student_id' => '277','title' => 'Frontline magazine','link' => '','description' => 'Een magazine over de fashionista\'s in utrecht','date' => '1425463906'),
  array('id' => '51','student_id' => '267','title' => 'Het niet-verwachte','link' => 'http://hetniet-verwachte.koenroetman.nl','description' => 'Niet streven maar beleven.','date' => '1425464173'),
  array('id' => '52','student_id' => '267','title' => 'flauwekul','link' => 'http://flauwekul.in','description' => 'Nonsense','date' => '1425464173'),
  array('id' => '53','student_id' => '270','title' => 'moment the momentum','link' => '','description' => '','date' => '1425464276'),
  array('id' => '54','student_id' => '248','title' => 'Uncomfortable Art Biënnale','link' => '','description' => 'Creëer een dynamische huisstijl en promotie voor een kunstexpositie voor oncomfortabele kunst.','date' => '1425464497'),
  array('id' => '58','student_id' => '274','title' => 'Steden Project','link' => '','description' => 'Magazin ontwerpen','date' => '1425467242'),
  array('id' => '59','student_id' => '272','title' => 'Typografisch Magazine','link' => 'https://13672.hosts.ma-cloud.nl/portfolio/?p=316','description' => 'Typografisch Magazine','date' => '1425467803'),
  array('id' => '60','student_id' => '264','title' => 'Wie ben ik ','link' => '','description' => 'Dit is het wie ben ik project. Alles wat ik zie geef ik een kleur vandaar het kleurenpalet in een schilderij geplaatst.','date' => '1425467822'),
  array('id' => '61','student_id' => '256','title' => 'Typografisch magazine','link' => 'http://10987.hosts.ma-cloud.nl/portfolio/?page_id=147','description' => 'Typografisch magazine','date' => '1425467846'),
  array('id' => '62','student_id' => '262','title' => 'Fuck Print','link' => 'https://vimeo.com/home/myvideos','description' => '','date' => '1425467999'),
  array('id' => '65','student_id' => '229','title' => 'Uncomfortable Art Biënnale','link' => '','description' => 'Ontwerp van een van de posters project: UABA
','date' => '1425478293'),
  array('id' => '66','student_id' => '229','title' => 'Magazine | F*CKING UN*QUE','link' => '','description' => 'Ontwerp magazine voor zelfgekozen doelgroep: alternatieve','date' => '1425478293'),
  array('id' => '67','student_id' => '306','title' => 'PUUR, doe maar normaal','link' => '','description' => 'PUUR, doe maar normaal gaat over het bekritiseren van de tegenwoordige hipster cultuur in Nederland. Dit heb ik onderbouwd door teksten te zoeken uit psychologische boeken en beeld wat ik heb gefotografeerd op VOLTT festival en tijdens Vogue fashion night out. ','date' => '1425488289'),
  array('id' => '68','student_id' => '306','title' => 'LE FUCK','link' => '','description' => 'Le fuck gaat over fuck de preutsheid, sex weer tolerant maken in Amsterdam doormiddel van een kunst biennale op de NDSM werf. Ik heb veel gewerkt met de kleuren grijs en roze, die staan voor de tweedeling in sexsualiteit.  Tweedeling zie je hier in dit project meerdere malen terugkomen. Ook zie je veel gekke dingen terug zoals visite kaartjes verpakt als condoom verpakkingen en enveloppen met seksuele likranden.
','date' => '1425488289'),
  array('id' => '69','student_id' => '306','title' => 'VAN OMA VOOR JOU','link' => '','description' => 'Van oma voor jou, gaat over oma\'s in utrecht die voor mensen van buitenaf een onderbroek borduren met een zelf gekozen tekst. Daar tegenover staat dat jij dan met oma koffie gaat drinken of winkelen in utrecht, waarbij de reisgids van capitool weer goed van pas komt!','date' => '1425488289'),
  array('id' => '70','student_id' => '378','title' => 'Venour (showreel)','link' => 'https://vimeo.com/104113807','description' => 'dit is een compilatie video van verschillende projecten waar ik aan heb gewekt tijdens mijn stage bij Venour.','date' => '1425504331'),
  array('id' => '71','student_id' => '303','title' => 'Restafval','link' => '','description' => 'Dit project ging over voedsel verspilling.','date' => '1425509648'),
  array('id' => '72','student_id' => '344','title' => 'Vondelhapp','link' => 'https://www.behance.net/gallery/23402939/Vondelhapp','description' => 'Concept: Let people have their lunch or diner in the Vondelpark (located in Amsterdam). You can order from restaurants around and in the Vondelpark. In a hour they\'ll come to you and you will get your food! It\'s cozy, fun and tasteful.
A whole new concept, based on the regular basic delivery services.','date' => '1425541268'),
  array('id' => '73','student_id' => '344','title' => 'Glamcult restyling','link' => 'https://www.behance.net/gallery/23401771/Glamcult-Restyling','description' => 'As an assignment for school we had to make a restyling of a Dutch Fashion Magazine.
It\'s for men with beards, between 18 and 35 (Hipsters)','date' => '1425541268'),
  array('id' => '74','student_id' => '233','title' => 'Dynamische huisstijl','link' => '','description' => 'Dynamische huisstijl gemaakt voor de Uncomfortable Art Biennale Amsterdam.','date' => '1425542238'),
  array('id' => '75','student_id' => '221','title' => 'Project 4','link' => 'https://vimeo.com/121116352','description' => 'Project 4 Vondelpark','date' => '1425542720'),
  array('id' => '76','student_id' => '305','title' => 'uncomfortable art/ huisstijl project','link' => '','description' => '','date' => '1425548381'),
  array('id' => '77','student_id' => '237','title' => 'Typografisch magazine','link' => '','description' => '','date' => '1425550698'),
  array('id' => '78','student_id' => '243','title' => 'Uncomfortable Art Biënnale Amsterdam','link' => '','description' => 'Dynamische huisstijl ontwerpen voor de Uncomfortable Art Biënnale Amsterdam. 

Mijn concept was een schuifpuzzel. Door de lay-out zo te maken dat er vooral bij de posters dingen wegvallen. Wekt het nieuwsgierigheid op bij de kijker. Zo heeft de kijker het idee om de schuifpuzzel te veranderen. Maaaar! Je kan het natuurlijk alleen maar zien als je naar de Biënnale komt.','date' => '1425551562'),
  array('id' => '79','student_id' => '243','title' => 'Magazine for International Students','link' => '','description' => 'Magazine ontwerpen voor een niche in Utrecht. die je zelf hebt gekozen. Ik had gekozen voor internationale studenten in Utrecht','date' => '1425551562'),
  array('id' => '80','student_id' => '243','title' => 'Fuck Print','link' => 'https://vimeo.com/121031867','description' => 'We moesten een app en website ontwerpen om het Vondelpark te promoten. Dit op een niet commerciële manier. Daarbij hebben we ook een digitale Abri gemaakt. Mijn idee was dat je via de app die ik heb gepubliceerd goederen kan kopen die in het vondelpark worden aangeboden. Door deze producten via de App te kopen steun je ook een goed doel die maandelijks wordt veranderd

Mijn app kan je zien via de Vimeolink.

Abri en Website heb ik allebei een screenshot gemaakt. 

De bedoeling van de abri is dat de teller afloopt van precies 1 maand naar 0 en dat je tegelijkertijd kan zien hoeveel geld er al is ingezameld. ','date' => '1425551562'),
  array('id' => '81','student_id' => '234','title' => 'De Letter','link' => '','description' => 'Magazine over een reis in Barcelona','date' => '1425551669'),
  array('id' => '82','student_id' => '238','title' => 'Magazine','link' => 'http://on.be.net/15XPPDF','description' => 'Magazine over inspireren doormiddel van muziek','date' => '1425552234'),
  array('id' => '83','student_id' => '223','title' => 'Kennismakings Project','link' => '','description' => 'Tijdens het eerste project met je geheel nieuwe klas kon je gelijk jezelf voorstellen d.m.v. het project, hierbij heb ik gekozen om mijn drukke/losse en rustige/nette kant te combineren en te verwerken tot een interview tot hun twee. Ik heb de type\'s tegen over elkaar gezet en met behulp van diverse kledei het geheel nog sterker gemaakt.','date' => '1425553250'),
  array('id' => '84','student_id' => '223','title' => 'Uncomfortable Art Biennale Amsterdam','link' => '','description' => 'Shockeren.. je grens opzoeken, er tegen aan zitten of er overheen. Dit kwam aanbod bij het Uncomfortable art project, zoals de naam het al zegt shockerende kunst verwerkt in een dynamische huisstijl. Het concept achter mijn project is misvorming, een driehoekje is misvorming en een vierkantje duid op normaal persoon, de gekozen kunstenaars creëren wezens die lijken op mens sculpturen.','date' => '1425553250'),
  array('id' => '85','student_id' => '223','title' => 'Fuck Print','link' => '','description' => 'Tijdens het \'Fuck print\' project moest alles digitaal zijn, website, app en de campagne. Het vondelpark stond centraal bij dit project en de omringende bedrijven moest je onderzoeken en die gaan een dienst/product aanbieden in het vondelpark. Mijn concept was Koning(in) Vondel, tijdens alle spel activiteiten kan je punten behalen en als jij de meeste punten haalt mag jij je benoemen tot Koning(in) Vondel!','date' => '1425553250'),
  array('id' => '86','student_id' => '289','title' => 'Taal der vormen','link' => '','description' => 'Een stageverslag project waar bij ik naar mijn persoonlijke stijl opzoek was.','date' => '1425554460'),
  array('id' => '87','student_id' => '220','title' => 'Uncomfortable art biennale','link' => '','description' => 'I had to invent a festival for showing uncomfortable art. This would take place in Amsterdam. The festival is called "Uncomfortable Art Biënnale Amsterdam". The assignment was to create a dynamic corporate identity.','date' => '1425573930'),
  array('id' => '91','student_id' => '362','title' => 'Kennismakingsproject','link' => '','description' => 'Dit is één foto uit de fotoreportage waar tegenstellingen worden getoond van stoer en lief. ','date' => '1425580306'),
  array('id' => '92','student_id' => '362','title' => 'Summerdam Movie Events','link' => 'https://vimeo.com/120188487','description' => 'Het EYE Film en het Vondelpark zijn in samenwerking gekomen en organiseren \'Summerdam Movie Events\'; deze app is speciaal ontwikkelt voor echte filmliefhebbers. ','date' => '1425580306'),
  array('id' => '93','student_id' => '361','title' => 'Winkel \'de Lokatie\' schildering','link' => 'http://www.delokatie.org/','description' => 'In opdracht van \'de Lokatie\' heb ik een schildering gemaakt op een piano. De binnenvoering is uit de piano verwijderd en in ruil voor dit is er een cd bak van gemaakt. Deze piano staat in de winkel en zal verplaatst worden tussen de filialen.','date' => '1425585832'),
  array('id' => '94','student_id' => '361','title' => 'Pyrografie','link' => 'www.mikedevos.nl','description' => 'Op een plank van ongeveer 40 cm breed en 90 cm hoog gemaakt. De tekening is gebrand in het hout.','date' => '1425585832'),
  array('id' => '95','student_id' => '351','title' => 'Art Biënale Amsterdam','link' => '','description' => 'Uncomfortable Art Biënale Amtsterdam.

Er moest een huisstijl gemaakt worden voor oncomfortabele kunst.','date' => '1425586203'),
  array('id' => '96','student_id' => '290','title' => 'Keuzes maken','link' => '','description' => 'Concept: Keuzes maken.

Ik wist niet wat ik na mijn opleiding wilde doen. Daarvoor heb ik een stroomdiagram ontworpen.','date' => '1425588871'),
  array('id' => '97','student_id' => '347','title' => 'uncomfortable art','link' => 'http://12593.hosts.ma-cloud.nl/portfolio/','description' => '','date' => '1425627962'),
  array('id' => '98','student_id' => '352','title' => 'Uncomfortable Art Biennale','link' => '','description' => '','date' => '1425629457'),
  array('id' => '99','student_id' => '352','title' => 'Glamcult','link' => '','description' => 'Magazine Barcelona','date' => '1425629457'),
  array('id' => '100','student_id' => '363','title' => 'Kennismakingsproject','link' => 'http://13375.hosts.ma-cloud.nl/portfolio/?page_id=19','description' => 'Voor het eerste project moest ik een goed concept bedenken wat mij omschreef. Ik had hiervoor gekozen voor het concept “Ik sta niet graag in het middelpunt”. Mijn idee was om juist het tegenovergestelde uit te beelden, dus dat ik wel in het middelpunt sta. Dit wou ik graag uitwerken in combinatie met een paar interesses van mij. Ik heb gekozen voor films, fotografie en cosplay. Mijn idee was dus door middel van fotografie een filmposter te maken waarbij ik een andere filmsposter na doe (het nadoen heeft dan weer temaken met cosplay).','date' => '1425635307'),
  array('id' => '101','student_id' => '363','title' => 'Glamcult','link' => 'http://13375.hosts.ma-cloud.nl/portfolio/?page_id=19','description' => 'Voor het project Glamcult moesten we de hele Glamcult restylen. We moesten 2 verschillende Glamcults maken, de ene over Barcelona en de ander mocht je zelf kiezen, ik heb gekozen om een special te maken over grime. Beide tijdschriften hadden een hoofdartikel nodig, een interview, glamour en een stukje cultuur.','date' => '1425635307'),
  array('id' => '102','student_id' => '363','title' => 'Fuck Print','link' => 'https://vimeo.com/121334047','description' => 'Het project gaat over het maken van een app en website voor het Vondelpark. Hier moet er reclame worden gemaakt voor 5 verschillende winkels (op een manier dat mogelijk is). De doelgroep is mensen tussen de 40-50 jaar en toeristen. Ik had hierbij gekozen voor ouders die te weinig tijd hebben om iets leuks te doen met het kind. Daarvoor wou ik en evenement organiseren om de kinderen en ouders meer samen te brengen. Mijn concept is dan ook: "Samen leuke dingen doen". De winkels voegen ook een hoop toe aan het evenement.','date' => '1425635307'),
  array('id' => '103','student_id' => '236','title' => 'Uncomfortable Art Biennale Amsterdam','link' => '','description' => 'Uncomfortable Art Biennale Amsterdam is een tentoonstelling waar schuurende / schokkende kunstwerken getoond werden. Het does was deze beelden toegankelijker te maken.

Concept: De uitdaging aangaan.

Mijn idee was om de posters met folie te bedekken wat er af gescheurd kon worden. Hier stonden uitlokkende teksten op zoals: "Remove at own risk" of "Warning, may contain shocking images". Dit was om mensen juist nieuwsgierig te maken om het er af te scheuren.

Vanuit daar ben ik verder gegaan om het "folie" in de hele huisstijl door te voeren.  ','date' => '1425636714'),
  array('id' => '104','student_id' => '228','title' => 'Stage verslag Columbus Magazine','link' => '','description' => 'Tijdens mijn stage die ik 5 maanden bij Columbus Magazine gelopen heb, heb ik veel geleerd. In het magazine heb ik gewerkt aan vele plattengronden en repportages.','date' => '1425637928'),
  array('id' => '107','student_id' => '298','title' => 'Fuck Print','link' => 'https://www.youtube.com/watch?v=yEhJQdpV9S4&feature=youtu.be','description' => 'De krant wordt bedreigt uitsterven en dus moet hier een oplossing voor gevonden worden. Het zal de krant van 2020 worden. Hoe ziet deze toekomst er uit?

Geïnspireerd door de bekende film HER heb ik vast gesteld dat de samenleving steeds anti-socialer zal worden. Mensen zitten nu al verstopt in hun telefoon en denken sociaal te zijn door middel van social-media. Kijk maar eens om je heen in de trein, je zult zien dat niemand elkaar aan kijkt.

Dus hoe wordt dit opgelost? Met de nieuwe krant 
"Over morgen". Deze app en website is niet alleen een krant maar ook een discussie starter. Jij kunt je mening kwijt over jouw favorieten artikelen met de mensen in jouw buurt. De discussies hebben handige tips voor een goede conversatie en je kunt ook zelf in een artikel markeren waar je het over wilt hebben. Na afloop van jouw chat kun je sociale punten geven en ontvangen. Deze kun je in de advertentie pagina inwisselen voor persoonlijke kortingscodes.

Maar let op. De discussie via de chat hebben een tijdlimiet van een aantal minuten. Wil jij je discussie verder voort zetten of afmaken? Dan moet diegene face to face aan gaan met de afspreek button.','date' => '1425641183'),
  array('id' => '108','student_id' => '310','title' => 'GlamCult','link' => '','description' => 'GlamCult remake. Concept: Kwetsbaarheid','date' => '1425642659'),
  array('id' => '109','student_id' => '257','title' => 'Uncomfortable Art Biennale Amsterdam','link' => '','description' => 'Dit project is om een Dynamische Huisstijl / Introductiecampagne voor de Biennale te ontwerpen.

Amsterdam wilt zijn naam als tolerante stad herstellen met een Biennale (2jaarlijkse kunstmanifestatie) op het NDSM terrein.','date' => '1425647096'),
  array('id' => '110','student_id' => '232','title' => 'Uncomfortable Art Biennale Amsterdam','link' => '','description' => 'De opdracht van dit project is om een dynamische huisstijl te maken die toepasbaar is op alle media-uitingen, organisatie en campagnes. 
Ook wordt er een sterke visuele introductiecampagne ontworpen die recht doet aan de Biënnale en de stad.
Het doel van de opdracht is het tonen van de ongemakkelijke kant van kunst en het promoten van Amsterdam al tolerante en creatieve stad.','date' => '1425655484'),
  array('id' => '111','student_id' => '357','title' => 'Vrijstaat','link' => '','description' => 'Dit een app die ik ontworpen heb voor het project Fuck Print. Voor dit project moest een app worden gemaakt met als doel dat het Vondelpark gepromoot werd en dat ondernemers daarin in kunnen inspelen. De doelgroep waren mensen tussen de 40 en 50 jaar.

Na onderzoek gedaan te hebben in het park en mensen van de doelgroep geïnterviewd te hebben kwam ik erachter dat het Vondelpark altijd een populaire plek geweest is voor jongeren en dat het park een lange geschiedenis heeft. Ook kwam ik erachter dat muziek belangrijk onderdeel van het park is.

Ik heb het concept naar voren laten door de app op te maken in de stijl van de jaren 80. In 1980 was de doelgroep rond de 20 jaar en dus in de "hoogtepunt" van hun leven. Punk en anarchisme was iets erg leefde in die tijd dus die stijl heb ik toegepast in mijn app. De naam Vrijstaat komt terug dat vroeger alles kon en mocht in het Vondelpark en de mensen dat nu weer kunnen doen.','date' => '1425657652'),
  array('id' => '112','student_id' => '357','title' => 'Illustratie Wolf','link' => '','description' => 'Illustratie die ik gemaakt heb in Adobe Illustrator','date' => '1425657652'),
  array('id' => '113','student_id' => '312','title' => 'GlamCult','link' => '','description' => 'Restyling van de bestaande GlamCult.','date' => '1425660047'),
  array('id' => '114','student_id' => '312','title' => 'Mode Biennale Amsterdam','link' => 'http://joy-voogel.wix.com/modebiennale2014','description' => 'Nieuwe huisstijl ontwikkelen voor de MOBA. ','date' => '1425660047'),
  array('id' => '115','student_id' => '375','title' => 'Commercial','link' => 'https://vimeo.com/80096538','description' => 'Een commercial maken voor een zelf bedacht product. ','date' => '1425663657'),
  array('id' => '116','student_id' => '375','title' => 'Videoclip','link' => 'https://vimeo.com/85145334','description' => 'Een videoclip maken in teamverband. ','date' => '1425663657'),
  array('id' => '117','student_id' => '375','title' => 'Nieuwjaarspromo Wildhitz','link' => '','description' => 'Nieuwjaarspromo voor het bedrijf Wildhitz waar ik op dat moment stage liep.','date' => '1425663657'),
  array('id' => '122','student_id' => '297','title' => 'ATTACK Biënnale Amsterdam','link' => 'https://www.behance.net/gallery/23511601/ATTACK-Biennale-Amsterdam','description' => 'Uncomfortable Art Biënnale Amsterdam.

Amsterdam wil zijn naam als tolerante stad herstellen met een Biënnale op het NDSM terrein.
Creëer hiervoor een huisstijl en een campagne.','date' => '1425681807'),
  array('id' => '123','student_id' => '297','title' => 'Hitchcock Barcelona','link' => 'https://www.behance.net/gallery/24031195/Hitch-Barcelona','description' => 'Steden project.

Promoot Barcelona in een wervings campagne voor reizen voor een jonge doelgroep die geïnteresseerd in nieuwe hot places in de stad.
Doe dit door middel van een spannende vormgeving een een reis brochure.','date' => '1425681807'),
  array('id' => '131','student_id' => '332','title' => '3D Head: Tom Hiddleston (2014)','link' => '','description' => 'Mijn eerste creatie in het 3D programma ZBrush. Model is acteur Tom Hiddleston.','date' => '1425824347'),
  array('id' => '132','student_id' => '332','title' => 'Original Character: Livine Sharpe (2014)','link' => 'https://www.phowd.com/photo/25081/livine-sharpe','description' => 'Fotomanipulatie van de actrice Ashley Rickards, omgebouwd in een eigen fantasie karakter.','date' => '1425824348'),
  array('id' => '133','student_id' => '253','title' => 'Project UABA','link' => 'https://vimeo.com/110591940','description' => 'De opdracht was om een dynamische huisstijl en introductiecampagne te ontwerpen voor het Uncomfortable Art Biennale Amsterdam. Het doel van de opdracht is om Amsterdam als tolerante en creative stad te promoten. 

','date' => '1425851104'),
  array('id' => '134','student_id' => '254','title' => 'Huisstijl - Uncomfortable art biennale','link' => '','description' => '','date' => '1425888926'),
  array('id' => '135','student_id' => '157','title' => 'Frisdrank label','link' => '','description' => 'Moesten een frisdrank label ontwerpen.','date' => '1425889284'),
  array('id' => '136','student_id' => '157','title' => 'Logo ontwerp','link' => '','description' => 'Moesten een logo ontwerpen voor de brede school de spaardammerhout en de wereldschool Amsterdam.','date' => '1425889284'),
  array('id' => '137','student_id' => '337','title' => 'Glamcult','link' => '','description' => '','date' => '1425897162'),
  array('id' => '138','student_id' => '286','title' => 'BeerCraft Utrecht','link' => '','description' => 'Eigen biermerkje gemaakt voor Reisgids project waar het bij mij over liefhebbers van craftbeer ging.','date' => '1425898605'),
  array('id' => '139','student_id' => '222','title' => 'Dynamische Huisstijl','link' => '','description' => 'Bij dit project moest er een huisstijl gemaakt worden voor de Uncomfortable Art Biennale Amsterdam.','date' => '1425906083'),
  array('id' => '140','student_id' => '263','title' => 'Tegeltje','link' => '','description' => 'Tegeltje voor in het jaarboek','date' => '1425912836'),
  array('id' => '141','student_id' => '391','title' => 'Basisschool in Beeld','link' => 'http://www.basisschoolinbeeld.nl','description' => '[Pas binnenkort online te zien! - Deze week!]

Een korte animatie die ik heb ontworpen en gemaakt heb ter promotie van Basisschool in Beeld.','date' => '1425916983'),
  array('id' => '142','student_id' => '391','title' => 'Digitalisering in de Zorg','link' => 'https://vimeo.com/108240499','description' => 'Een korte animatie die ik heb ontworpen en gemaakt heb ter promotie van een Reed Business event.','date' => '1425916983'),
  array('id' => '143','student_id' => '391','title' => 'Animatie Bezorgen Reisdocumenten','link' => 'https://www.youtube.com/watch?v=Haymz5TAYKI','description' => 'Een korte animatie die ik heb ontworpen en gemaakt heb ter promotie van het thuisbezorgen van paspoorten, rijbewijzen en reisdocumenten. Draait tevens momenteel op schermen bij verschillende gemeentehuizen.','date' => '1425916983'),
  array('id' => '144','student_id' => '391','title' => 'Niet Pluis Gevoel Lesmodule','link' => 'https://www.youtube.com/watch?v=vsyd_FiG6kM','description' => 'Om de patiëntveiligheid te waarborgen en daardoor de kwaliteit van zorg te verbeteren, moeten verpleegkundigen hun ‘niet-pluisgevoel’ erkennen en bespreekbaar maken. Hiervoor is een lesmodule ontworpen waarvan een video een groot onderdeel is. Deze lesmodule heb ik voorzien van animaties, daarbij heb ik geassisteerd op de draaidagen en het DVD-menu ontworpen/geprogrammeerd met daarbij passende artwork.','date' => '1425916983'),
  array('id' => '145','student_id' => '391','title' => 'Telecombinatie Televisie Commercial','link' => 'https://www.youtube.com/watch?v=WDxqHRDjsOg','description' => 'Nu een Samsung S5 mini tijdelijk voor maar €20,- per maand! ZOOOO veel korting bij Telecombinatie! www.telecombinatie.nl.

Voor Telecombinatie heb ik tijdens mijn stage vrijwillig in mijn vrije tijd twee geanimeerde commercials gerealiseerd. ','date' => '1425916983'),
  array('id' => '146','student_id' => '280','title' => 'Rebel Uncomfortable Art Biënnale 2015','link' => 'www.quincygilds.com','description' => 'Affiche voor Rebel Uncomfortable Art Biënnale 2015

"ik vind dat elke Uncomfortable Art kunstenaar, rebellen zijn, deze gaan namelijk tegen de regels in/tegendraads.  Ze vechten ervoor om gehoord te worden. Zo ben ik op het concept Rebels gekomen"','date' => '1425942947'),
  array('id' => '147','student_id' => '396','title' => 'KORT 2','link' => 'https://www.youtube.com/watch?v=JO4vS55Ps-o','description' => 'Kort 2 de opvolger van Kort 1 is een opdracht waarbij je een kort speelfilm maakt. De opdracht was heel erg vrij en dat vond ik erg leuk aan deze opdracht!','date' => '1426021480'),
  array('id' => '148','student_id' => '396','title' => 'Videoclip','link' => 'https://www.youtube.com/watch?v=gvBs9Lwa2Dg','description' => 'De opdracht videoclip is niet heel ingewikkeld. Vind een nummer en maak er visuele beeld bij. Dit project vond ik het alle leukst. Ik heb mij super erg vermaakt tijdens deze opdracht!','date' => '1426021480'),
  array('id' => '150','student_id' => '167','title' => 'Showportfolio','link' => '','description' => 'Een showportfolio voor de opleiding allround DTP','date' => '1426243637'),
  array('id' => '153','student_id' => '6803','title' => 'De Mens Achter','link' => '','description' => 'Bij deze opdracht was het de bedoeling een persoon te vinden met een uitgesproken verzameling om vervolgens tentoon te stellen m.b.v. een stand. Daarbij was de verzameling van de persoon noodzakelijk om een zo goed mogelijke presentatie te maken. 

Ik koos mijn oma met haar authentieke klokken. Deze klokken hing ik op aan mijn ontworpen stand die de vormen had van een klokkenkast. De kleuren en effecten maakte het tot een mooi plaatje.
','date' => '1426446330'),
  array('id' => '154','student_id' => '6803','title' => 'Iittala','link' => '','description' => 'Iittala is een Fins bedrijf die zich het meeste kenmerkt in huiselijke producten. Op basis van deze informatie en verder onderzoek heb ik een mooi ontwerp ontwikkelt. De opdracht was om een stand te realiseren waarin klanten hun eigen \'mix & match\' mogelijk konden maken tussen vele verschillende categorieën aan producten. Producten die van verschillende vormen en karakters toch voor een mooie combinatie konden zorgen.','date' => '1426446330'),
  array('id' => '155','student_id' => '6803','title' => 'Nespresso','link' => '','description' => 'Nespresso kent iedereen. Het was leuk hier een ontwerp en uiteindelijke stand voor te ontwikkelen. Bij deze opdracht werd gevraagd om een stand te ontwikkelen waarin het bezoekers makkelijk werd gemaakt om hun eigen smaak in koffie te vinden. Daarbij maakte ze kennis met de vele verschillende smaken en de service van Nespresso. Als concept bedacht ik \'Service\' omdat Nespresso zich het meeste kenmerkt in het gemak van koffie. Daarom ontwierp ik een ronde stand voor het overzicht en de toegankelijkheid. Nespresso heb ik verdeeld onder de 5 meest bekende categorieën. Deze categorieën heb ik onderverdeeld over 5 balies met daarop meer diepte informatie over de smaken.','date' => '1426446330'),
  array('id' => '156','student_id' => '88','title' => 'Sleutel opdracht','link' => 'http://paulbrand.nl/SleutelSheet2.html','description' => '','date' => '1426694938'),
  array('id' => '157','student_id' => '88','title' => 'Mythe','link' => 'http://paulbrand.nl/theseusSheet.html','description' => '','date' => '1426694938'),
  array('id' => '158','student_id' => '88','title' => 'Kids Puzzle','link' => '','description' => '','date' => '1426694938'),
  array('id' => '159','student_id' => '88','title' => 'Stampede','link' => 'http://www.paulbrand.nl/post/105362160282/stampede#disqus_thread','description' => '','date' => '1426694938'),
  array('id' => '160','student_id' => '88','title' => 'Dark','link' => '','description' => '','date' => '1426694938'),
  array('id' => '163','student_id' => '107','title' => 'HostelBB','link' => 'http://www.buter.be','description' => 'Hostel en B&B reserveringsite (+app)','date' => '1427020685'),
  array('id' => '171','student_id' => '56','title' => 'Esclusivo','link' => 'http://www.esclusivo.nl/','description' => 'Deze website heb ik gemaakt in mijn stage periode. Dit was een website voor een kleding winkel. Dit project is in samenwerking gedaan met een webdesigner en ik heb de front-end gedaan van dit project','date' => '1427105176'),
  array('id' => '172','student_id' => '56','title' => 'Portfolio Jesse van Thijn','link' => 'http://jessevanthijn.nl/','description' => 'Dit is mijn portfolio website. Hier ben ik lang mee bezig geweest om een goed ontwerp neer te zetten en een duidelijk portfolio. ','date' => '1427105176'),
  array('id' => '173','student_id' => '39','title' => 'Heineken International','link' => '','description' => 'Opdracht voor de ICT van Heineken International. om een nieuw besturings systeem te promoten.

Gebruikte technieken: Adobe Indesign.','date' => '1427106022'),
  array('id' => '174','student_id' => '39','title' => 'DrankDozijn','link' => 'http://drankdozijn.nl/','description' => 'Banners maken voor de home pagina van DrankDozijn. DEze banners worden bijna elke week vervangen met een ander tema. 

Gebruikte technieken:  Adobe Photoshop.','date' => '1427106022'),
  array('id' => '175','student_id' => '39','title' => 'PaasActie op LeasePlan Occasions','link' => '','description' => 'Met de paasdagen kreeg je bij een occasion auto een oranje koffer. Daar moest een actie voor gemaakt worden. Het is een overlay geworden waarin de koffer sprong en tekst.

Gebruikte technieken: Adobe Adobe Photoshop, Sublime text, JQuery animate.','date' => '1427106022'),
  array('id' => '176','student_id' => '39','title' => 'Prijspatrix','link' => '','description' => 'Op leaseplan.nl moest een Prijspatrix komen die heb ik opgezet in html, css en jquery daarna heeft iemand anders hem afgemaakt.

Gebruikte technieken: Sublime text, JQuery animate.','date' => '1427106022'),
  array('id' => '177','student_id' => '39','title' => 'Flowchart LeasePlanDirect','link' => '','description' => 'Flowchart voor het nieuwe auto samenstellen op LeasePlanDirect

Gebruikte technieken: Adobe Illustrator.','date' => '1427106022'),
  array('id' => '178','student_id' => '6802','title' => 'Nespresso','link' => '','description' => 'Dit was een stand voor Nespresso. Het concept dat ik bedacht had was "van boon tot koffie". En met de doorgaande lijn in mijn stand wilde ik de rode draad van het verhaal van Nespresso verbeelden. ','date' => '1427110119'),
  array('id' => '179','student_id' => '400','title' => 'Videocip','link' => 'www.renevanzon.com','description' => 'Download the song for free at blarsa.com/downloads/you-make-me

Music video created by Tim Hijlkema & Rene van Zon
timhijlkema.nl 
renevanzon.com

Make sure you check out Lars Erik Fjøsne\'s other work at soundcloud.com/livinglars
blarsa.com','date' => '1427185759'),
  array('id' => '180','student_id' => '6832','title' => 'Sophie\'s choice','link' => 'https://www.youtube.com/watch?v=JbOFMUIJRXc&feature=youtu.be','description' => 'Samen met Nelleke Zitman hebben we monologen behandeld in een andere taal dan onze moedertaal.','date' => '1427283125'),
  array('id' => '181','student_id' => '6834','title' => '12','link' => 'https://youtu.be/Ruo0R3sUwxE','description' => 'Het is een persoonlijke korte film. We hebben in de eerste periode van het laatste leerjaar aan gewerkt. 
Heb het script zelf geschreven en het moest iets persoonlijks zijn. Dit gaat over mijn tattoo en over mijn denkwijze over de wereld met het getal 12 als rode draad door de film heen.','date' => '1427283255'),
  array('id' => '182','student_id' => '175','title' => 'Geluksroute Poster','link' => '','description' => 'De locatie waar mijn ma haar behandelingen doet, wilde graag een nieuwe poster hebben. Het was de bedoeling dat er een ander ontwerp zou komen maar na wat meningsverschillen zijn we terug gevallen op het oude ontwerp maar dan met een ander logo en foto\'s.

Het origineel was een PDF dus heb ik de poster in InDesign opnieuw opgemaakt.','date' => '1427289539'),
  array('id' => '183','student_id' => '6821','title' => '3FM Awards On Tour','link' => 'http://www.ustream.tv/recorded/56280985','description' => '(Bekijken vanaf 04:20)
Dit was ons eindproject. Bij dit project heb ik het lichtontwerp gemaakt, de lichttafel geprogrammeerd en de tijdens de show de tafel bediend.
Mijn compagnon tijdens dit project was Simon Stoel. Hij heeft mij continu geassisteerd,','date' => '1427551763'),
  array('id' => '184','student_id' => '6804','title' => 'Nespresso','link' => '','description' => 'Stand ontwerp Nespresso.
Concept: Ontdek je smaak.
','date' => '1427710458'),
  array('id' => '185','student_id' => '6806','title' => 'Nespresso','link' => '','description' => 'Een eilandstand ontwerpen voor Nespresso op de Huis Houd Beurs (HHB). Waarbij het hele assortiment te zien is, waar men koffie kan proeven en zijn of haar eigen smaak kan ontdekken. ','date' => '1427710960'),
  array('id' => '186','student_id' => '6806','title' => 'Hotel','link' => '','description' => 'Er worden een zestal senario’s gefilmd. Die gebaseerd zijn op dialogen uit een bekende film die gefilmd zijn in hotelkamers. Daarbij realiseren wij een hotelset. Waarbij de AV en de acteurs een flimset opbouwen in onze hotelset. Dit moet in 17 dagen gerealiseerd worden.','date' => '1427710960'),
  array('id' => '187','student_id' => '389','title' => 'Kort','link' => 'https://vimeo.com/76757628','description' => 'Bij dit project moesten wij een korte speel film maken ','date' => '1427732283'),
  array('id' => '188','student_id' => '355','title' => 'Fuck Print - Vondelpark > VondelChair','link' => '','description' => 'Voor het schoolproject Fuck Print heb ik de VondelChair bedacht. 
Het doel is om het Vondelpark te promoten en de daarbij de bezoekers naar de omliggende commercie te lokken. Dit heb ik gedaan d.m.v. een unieke conceptcreatie welke tot uiting komt in de app en de website.
VondelChair is een stimulans om te werken, netwerken en genieten in het Vondelpark!','date' => '1427752411'),
  array('id' => '190','student_id' => '182','title' => 'Lettertype project','link' => '','description' => 'Voor dit project moest je een poster maken bij een bepaald lettertype dat je kreeg. Ik had het lettertype Scala. 
Je moest de sfeer van de poster baseren op wat voor sfeer je bij het lettertype vond passen. Deze opdracht heb ik gemaakt in de periode dat ik nog de grafische opleiding deed.','date' => '1427785789'),
  array('id' => '191','student_id' => '6814','title' => 'Drijfveer','link' => '','description' => 'Toelatingsfilm filmacademie (nog niet online)','date' => '1427795046'),
  array('id' => '192','student_id' => '241','title' => 'Abma Kerstkaart','link' => '','description' => '','date' => '1427874203'),
  array('id' => '193','student_id' => '59','title' => 'Ma Jaarboek 2014','link' => 'http://ma-jaarboek.nl/','description' => 'Beschrijving','date' => '1427875353'),
  array('id' => '194','student_id' => '350','title' => 'Glamcult Project','link' => '','description' => '','date' => '1427880704'),
  array('id' => '197','student_id' => '54','title' => 'Unify Media','link' => 'http://www.unifymedia.nl/','description' => 'Unify is een klein grafisch ontwerpbureau met grootse ideeën. Sinds 2011 actief in webdesign en huisstijlontwerp. Wij zijn ervaren in zowel kleine als grote projecten. Doordachte branding is essentieel voor de uitstraling van ieder bedrijf. Wij werken nauw samen om de identiteit vorm te geven. Wij onderzoeken, brainstormen en ontwerpen een idee die jouw bedrijf uniek en onderscheidend maakt.','date' => '1427986857'),
  array('id' => '198','student_id' => '82','title' => 'The Fall','link' => '','description' => 'Plaat voor een studenten project.','date' => '1428056881'),
  array('id' => '199','student_id' => '82','title' => 'The Wall','link' => '','description' => 'Plaat voor een studenten project.','date' => '1428056881'),
  array('id' => '200','student_id' => '82','title' => 'Northern Control Tower','link' => '','description' => 'Plaat voor een studenten project.','date' => '1428056881'),
  array('id' => '201','student_id' => '82','title' => 'Portret / interview','link' => 'https://vimeo.com/69636473','description' => 'Een portret over het leren bij ons op school.','date' => '1428056881'),
  array('id' => '205','student_id' => '89','title' => 'Flappy Christmas','link' => 'http://gamesplaza.com/game/allarcade/arcade/r22419/flappy_christmas','description' => 'Flappy Christmas is een game gebaseerd op Flappy Bird. 
Hier is een game uit gekomen met de characters Atom & Quark. Voor dit project heb ik voornamelijk concept art, assets, splashscreen en de logo\'s gemaakt. gemaakt. De game is tijdens mij stage bij Boostermedia gemaakt.','date' => '1428058793'),
  array('id' => '206','student_id' => '89','title' => 'Jewel ','link' => '','description' => '','date' => '1428058793'),
  array('id' => '207','student_id' => '75','title' => 'Proef- Proeve van Bekwaamheid','link' => '','description' => 'Retro Futuristische game, een variant op Pacman, geprojecteerd in een bol waarbij je de Oculus moet gebruiken om het spel te spelen.','date' => '1428061256'),
  array('id' => '208','student_id' => '84','title' => 'Proef proeve van bekwaamheid','link' => 'http://arjanrobert.com/proeveproeve/proeveproeve_groep_5_playable_game.rar','description' => 'Dit was ons proef examen. Onze game was gemaakt voor de oculus rift. Ons startscherm was een arcade hall environment. De speler zit in een stoel en kan om zich heen kijken om te wennen aan de oculus rift. Zodra je op start drukt word je de game ingezogen. De speler bevond zich dan in een bol met muren die 360 graden om je heen te bekijken is. De speler bestuurt i.p.v. het character de wereld om het character heen om zijn doel te gebruiken.

Het doel van het spel is het zo snel mogelijk oppakken van objecten binnen de gegeven tijd.

Het spel is alleen te spelen met een oculus rift en een xbox controller.','date' => '1428063214'),
  array('id' => '209','student_id' => '84','title' => 'stage project bij LTC Serious Game Center Koninklijke landmacht (defensie)','link' => 'arjanrobert.com','description' => 'Dit was mijn grootste project tijdens mijn stage. Het gemeentehuis van Hilversum moest geheel worden nagebouwd voor een demonstratie voor de Burgermeester van hilversum en de Commandant der strijdkrachten. De boot heb ik in de eerste weken van mijn stage gemaakt om te laten zien wat mijn vaardigheden waren.','date' => '1428063214'),
  array('id' => '210','student_id' => '84','title' => 'Anarchy en yes we can','link' => 'arjanrobert.com','description' => 'Dit waren enkele van mijn school projecten bedoelt om mijn portfolio aan te vullen.','date' => '1428063214'),
  array('id' => '211','student_id' => '105','title' => 'Unlikely','link' => '','description' => 'De afbeelding hoort vorm te geven hoe gaotisch het kan zijn om tussen water en vuur te zijn. 
Ook kan het een metaphoor zijn voor tussen twee strijdende elementen komen. 
','date' => '1428243777'),
  array('id' => '212','student_id' => '178','title' => 'Yves Agnew Triangle face','link' => '','description' => 'Yves Agnew is een Schots fotomodel.

Ik ben al een jaar vrienden met haar sinds we elkaar volgden op Instagram en ze vroeg of ik iets voor dr wilde maken en mijn idee was ervan om dit te gaan maken.

ik ben er 4 uur mee bezig geweest omdat dit me eerste poging was om dit te kunnen maken.','date' => '1428563953'),
  array('id' => '222','student_id' => '152','title' => 'Art Nouveau','link' => '','description' => 'Dit is een klein project genaamd Art Nouveau.
De naam Art Nouveau is afgeleid van het Frans; "Nieuwe Kunst".


Hier vind je illustraties die ik gemaakt heb. :)','date' => '1428904537'),
  array('id' => '223','student_id' => '152','title' => 'Photoshop Work','link' => '','description' => 'photshop dingen','date' => '1428904537'),
  array('id' => '224','student_id' => '6882','title' => 'Aanvang','link' => '','description' => 'Deze foto is gemaakt bij het eindapplaus na de voorstelling Aanvang in het eerste jaar (2011) Dit was het enige project wat we met de hele klas hadden gemaakt. Dit is het leukste project van de afgelopen 5 jaar. ','date' => '1428915451'),
  array('id' => '225','student_id' => '6882','title' => 'London','link' => 'https://www.youtube.com/watch?v=v8Zci-3ZvYg','description' => 'We zijn in 2014 met de examenklas naar London geweest. In London zijn we naar een voorstelling geweest op West End, hebben we een rondleiding gehad bij The Royal Albert Hall en we hebben een rondleiding gehad bij de BBC.','date' => '1428915451'),
  array('id' => '232','student_id' => '38','title' => 'Bob Roulette','link' => 'http://bobroulete.nl','description' => 'Bob Roulette is een product dat is ontwikkeld door mijn stage bedrijf SUE Amsterdam.
Bob Roulette. Twee flesjes. Eén water.
Eén Wodka. Geen keus.

Ik heb de development van deze website gedaan.','date' => '1429185918'),
  array('id' => '233','student_id' => '38','title' => 'Real Men Kitchen','link' => 'http://realmenkitchen.nl','description' => 'Real Men Kitchen is een actie pagina voor Iglo.
Kook ook als een echte man!
Deze website is op mijn stage bedrijf SUE Amsterdam ontwikkeld.

Ik heb de development van deze website gedaan.','date' => '1429185918'),
  array('id' => '234','student_id' => '101','title' => 'Examen','link' => '','description' => 'Examen project waar Adam, Linda, Lars, Paul, Rachael en ik mee bezig zijn. Dit zijn voorbeelden van de Picture frames voor de characters waar wij mee bezig zijn.','date' => '1429259462'),
  array('id' => '235','student_id' => '69','title' => 'Gamejam - WhatsTapp','link' => 'http://2tn.nl/proeve/','description' => 'Sidescrolling progression game, in een korte tijd gemaakt met 1 andere developer & 4 artists.','date' => '1429259732'),
  array('id' => '237','student_id' => '93','title' => 'IkBespaar','link' => '','description' => 'Een bespaar app om beter om te gaan met het milleu en je portomonee','date' => '1429260306'),
  array('id' => '241','student_id' => '79','title' => 'Pixel Wizard','link' => 'https://play.google.com/store/apps/details?id=com.spilgames.pixel_wizard&hl=nl_NL','description' => 'Ready to take it back to the old school? Pixel Wizard Adventure is a brand-new, classic retro-style platform game that’ll take you on a magical adventure of epic proportions! Don your wizard’s hat and grab your magic wand and transport yourself to a magical kingdom for this modern arcade classic. Now available as a downloadable App, Pixel Wizard Adventure is an absolute must-play for any fans of old-school 2D platform and adventure games. If you enjoyed those classic 2D RPG games, then you’re going to love this!
In this fantasy platformer, you’ll find yourself transported to a pixelated kingdom shrouded in mystery. You’ll play as a magical wizard facing a difficult and action-packed task: defeat the monsters, ghouls and goblins standing in your way to make it through all kinds of brainscratchingly puzzling levels. In the midst of this medieval madness, you’ll come up against everything from bats and ghosts, to lava pits and obstacles that your wizard will need to navigate his way around if he’s going to save the kingdom!','date' => '1429260630'),
  array('id' => '244','student_id' => '92','title' => 'Intro Surnet','link' => 'https://www.behance.net/gallery/23332629/Animations','description' => 'Stage bij Mindgame:
Intro animatie voor Surfnet

','date' => '1429260824'),
  array('id' => '245','student_id' => '92','title' => 'Digital art','link' => 'https://tiffanyhardley.carbonmade.com/','description' => 'Dit is mijn digitaal werk.
Hier focus ik met het maken van paintings.','date' => '1429260824'),
  array('id' => '248','student_id' => '96','title' => 'Skip a Beat ','link' => 'https://www.youtube.com/watch?v=ifKvkJAknsc','description' => 'Dit is de \'\'World\'s first mobile game you control with your heart rate \'\' Super leuk !','date' => '1429260893'),
  array('id' => '249','student_id' => '96','title' => 'Digital Work','link' => 'https://www.tumblr.com/blog/luminos-art','description' => 'Mijn eigen werk, dit maak ik in mijn vrije tijd. ','date' => '1429260893'),
  array('id' => '251','student_id' => '74','title' => 'Alien Environment Project','link' => 'http://afeenstra.com/','description' => 'Dit was een project om mij te verdiepen in Concept art, Low Poly 3D modelling, Hand painted texturing en het uitwerken van een kleine 3D scene.','date' => '1429263126'),
  array('id' => '252','student_id' => '74','title' => 'Chinese Props','link' => 'http://afeenstra.com/','description' => 'Mijn doel met dit project was leren modelleren in Autodesk Maya. Ook zijn deze props een test voor een concept dat ik in gedachten heb voor een game die ik later wil maken.','date' => '1429263126'),
  array('id' => '253','student_id' => '74','title' => 'World of Diving - Brony Galleon Ship','link' => 'http://afeenstra.com/','description' => 'Tijdns de opleding heb ik twee stages gelopen van een aantal maanden. De eerste stage was bij Vertigo Games van 3 februari 2014 t/m 26 juni 2014. Mijn grootste opdracht bij deze stage was om een galjoen schip te ontwerpen, te modelleren, en om er een level voor te bouwen en het te plaatsen in dit level voor een klant/ investeerder van de game World of Diving.','date' => '1429263126'),
  array('id' => '255','student_id' => '70','title' => 'Skip a beat','link' => 'https://www.youtube.com/watch?v=H3kGE8P_DtI','description' => 'Skip a beat is een endless runner game waarin je je hartslag als controller gebruikt door middel van je vinger op de camera van je mobiel zetten.','date' => '1429264305'),
  array('id' => '257','student_id' => '85','title' => 'Tiki Tiki','link' => 'http://beauwillems.com/3d-art/','description' => 'Maken van 1 model waar je makkelijk mee varianten kan maken','date' => '1429265616'),
  array('id' => '258','student_id' => '85','title' => 'Droid & Robot1','link' => 'http://beauwillems.com/3d-art/','description' => 'Droid een robot maken van uit een sphere.

Robot 1 maak een robot met een functie','date' => '1429265616'),
  array('id' => '259','student_id' => '76','title' => 'Project Mythe','link' => 'https://www.youtube.com/watch?v=iLGzOcmLSQo','description' => 'Een game over het verhaal van Hans en Grietje, ik heb samen met mijn groep hebben we dit verhaal aangepast zodat een zich in een surrealistisch landschap afspeelt en eigenlijk alles omgedraaid werd. Dit was een erg interessant project om aan te werken','date' => '1429265930'),
  array('id' => '260','student_id' => '60','title' => 'super smash','link' => 'www.kjeldganzevles.eu','description' => 'een school project','date' => '1429267906'),
  array('id' => '263','student_id' => '6840','title' => '\'REMAIN\'','link' => 'http://www.remainshortfilm.com','description' => '‘REMAIN’ gaat over een jongen Aiden die vast zit in zijn eigen wereld. Hij heeft het erg zwaar met het overlijden van zijn moeder en kan het moeilijk een plek geven. Wanneer zijn relatie met Zoe ook nog eens stuk loopt besluit hij zich op te geven voor ‘Remain’, de andere wereld waarin alles van animatie is. Zoe weet net op tijd bij Aiden te komen.','date' => '1429270213'),
  array('id' => '264','student_id' => '6840','title' => '\'Aan het einde van de aspergetijd\'','link' => 'http://hetmeertheater.nl/','description' => 'Als (film)actrice vind ik het belangrijk mij als \'allround\' te vertonen. Daarom heb ik als gekozen voor het theaterstuk: \'Aan het einde van de aspergetijd\'. Geschreven door Frank Houtappels.
Het stuk gaat over 3 volwassen zussen (Aggie, Francien & Kitty) die ieder zo hun problemen hebben. Dit zorgt voor enige rumoer onderling. Sophie, de dochter van Aggie, wilt niets liever dan de wijde wereld in..
Wat zeggen haar moeder en tantes hiervan?


Voorstelling:
\'Aan het einde van de aspergetijd\'.

Waar?
Amsterdam, Hoorn, Enkhuizen, Den Oever, Zwaag, Andijk, Oosterblokker en Wervershoof. En mogelijk ook in Hoogwoud en Bovenkarspel.

Wanneer?
Oktober/november 2015


Kom je kijken? Lijkt me leuk!','date' => '1429270213'),
  array('id' => '265','student_id' => '62','title' => 'Neonic Discharge','link' => 'http://basegames.nl/games/neon.php','description' => 'Een top down neon shooter met dungeon crawler elementen.','date' => '1429277907'),
  array('id' => '266','student_id' => '80','title' => 'Een open dag game voor de Oculus Rift.','link' => 'www.bradleylangguth.com','description' => 'Een game ontworpen voor de Oculus Rift. Deze game speelt zich af in een \'80\'s retro futuristische\' arcade hal.

Zodra je de Oculus Rift op je hoofd zet word je wakker in een arcade hal. Je kunt in deze kamer 360 graden rond kijken naar bijvoorbeeld één van de arcade kasten. Je kunt hier alvast een beetje wennen aan Virtual Reality. 

Als je klaar bent om de game te spelen klik je op de play knop die zich bevind op de arcade kast voor je neus. Hierdoor word je het scherm ingezogen naar de wereld waar de game zich bevindt.','date' => '1429520280'),
  array('id' => '267','student_id' => '80','title' => 'Een open dag game voor de Oculus Rift.','link' => 'www.bradleylangguth.com','description' => 'Een game ontworpen voor de Oculus Rift. Deze game speelt zich af in een \'80\'s retro futuristische\' arcade hal.

Zodra je de Oculus Rift op je hoofd zet word je wakker in een arcade hal. Je kunt in deze kamer 360 graden rond kijken naar bijvoorbeeld één van de arcade kasten. Je kunt hier alvast een beetje wennen aan Virtual Reality. 

Als je klaar bent om de game te spelen klik je op de play knop die zich bevind op de arcade kast voor je neus. Hierdoor word je het scherm ingezogen naar de wereld waar de game zich bevindt.','date' => '1429520280'),
  array('id' => '268','student_id' => '397','title' => 'Videoclip/Dark Sky - Reflex','link' => 'https://www.youtube.com/watch?v=CzgLuCgiZ_I','description' => 'De opdracht was het maken van een videoclip ,voor de rest was je geheel vrij in wat je kon doen.','date' => '1429521165'),
  array('id' => '269','student_id' => '397','title' => 'Comic Animation','link' => 'https://www.youtube.com/watch?v=4Xxq001_o_w','description' => 'Korte strip animatie','date' => '1429521165'),
  array('id' => '270','student_id' => '397','title' => 'Trouwfilm','link' => 'https://www.youtube.com/watch?v=s7qF36JeekA','description' => '','date' => '1429521165'),
  array('id' => '271','student_id' => '399','title' => 'Music Video - Mindless Self Indulgence - Money','link' => 'https://vimeo.com/85679100','description' => 'In het derde jaar hebben we de opdracht videoclip gekregen.

Ik had een video gemaakt voor het nummer Money van Mindless Self Indulgence. In de video zie je een paar schaars geklede glam punks dansen en plezier hebben met geld. Ik heb regie, art-direction en productie gedaan voor dit project. Daarbij heb ik me vooral gericht op art direction. Gregory Samson was DOP en Mathijs Baltus was gaffer. Uiteindelijk is de clip best wel geworden zo als ik ontworpen had dus daar ben ik heel blij mee. Ik vond het ook leuk dat de choreo goed gelukt was. Die hebben de dansers zelf gemaakt. We hebben 3 keer geoefend en ik vertelde welke sfeer of expressie wilde hebben en de dansers maakten daar dan dans bij, dus dat was heel cool. ','date' => '1429521952'),
  array('id' => '272','student_id' => '385','title' => 'Mensely','link' => '','description' => 'Het project mensely ging over arbeidsverzuim en hoe een werkgever zijn eigen verzuimbeleid kan beginnen.
Deze animatiefilm gaf inzicht over hoe een werkgever te werk zou gaan.','date' => '1429525230'),
  array('id' => '273','student_id' => '370','title' => 'Come Follow','link' => 'https://vimeo.com/118627687','description' => 'Videoclip voor Sunnery James en Ryan Marciano gefilmd in Curaçao.','date' => '1429525588'),
  array('id' => '274','student_id' => '372','title' => 'Welke tent ','link' => 'https://www.youtube.com/watch?v=2aWvQsdpVVY','description' => 'Snel ff tussen de les gamaakt ','date' => '1429527248'),
  array('id' => '275','student_id' => '388','title' => 'Een Vrije Ziel','link' => 'https://www.youtube.com/watch?v=Rlnzhcc3Apg','description' => 'korte film in samenwerking met Tim Hijlkema','date' => '1429527402'),
  array('id' => '276','student_id' => '398','title' => 'Stage Thailand','link' => 'https://vimeo.com/121501459','description' => 'Het werk wat in in Thailand gemaakt heb en wat ik zelf gefilmt had.','date' => '1429528523'),
  array('id' => '277','student_id' => '393','title' => 'Pony x Baskèts x Ceizer','link' => 'http://www.blendbureaux.com/pony-x-baskets-x-ceizer-set-to-launch-blue-collar-kings-triple-collab/','description' => 'Bij dit project heb ik de foto\'s geschoten, het was een editorial voor een collab. De collab was tussen het Amerikaanse sneaker merk Pony de Amsterdamse ontwerper Ceizer en de Amsterdamse winkel Baskèts. Deze opdracht heb ik in tijdens mijn 2e stage gemaakt.','date' => '1429529234'),
  array('id' => '278','student_id' => '374','title' => 'Videoclip','link' => 'https://vimeo.com/84675143','description' => '','date' => '1429534155'),
  array('id' => '279','student_id' => '387','title' => 'Banner','link' => '','description' => '','date' => '1429538762'),
  array('id' => '280','student_id' => '381','title' => 'Video game locations ','link' => 'https://www.youtube.com/watch?v=4u-6B_iF5s0','description' => '','date' => '1429597559'),
  array('id' => '281','student_id' => '102','title' => 'Stratego','link' => '','description' => 'Maak een variatie op Stratego.','date' => '1429807509'),
  array('id' => '282','student_id' => '33','title' => 'Breakout4kids','link' => '','description' => 'Breakout4kids helpt kinderen met chronisch zieke ouders.','date' => '1429865577'),
  array('id' => '283','student_id' => '42','title' => 'Juice915','link' => 'http://www.juice915.nl','description' => '','date' => '1429865703'),
  array('id' => '284','student_id' => '51','title' => 'BreakOut4Kids logo\'s','link' => '','description' => 'Logo designs voor stichting BreakOut4Kids','date' => '1429875415'),
  array('id' => '285','student_id' => '51','title' => 'BreakOut4Kids website design #1','link' => '','description' => 'Website design #1 voor stichting BreakOut4Kids','date' => '1429875415'),
  array('id' => '286','student_id' => '51','title' => 'BreakOut4Kids website design #2','link' => '','description' => 'Website design #2 voor stichting BreakOut4Kids','date' => '1429875415'),
  array('id' => '287','student_id' => '369','title' => 'Grolsch 400 Jaar Karakter','link' => 'http://www.thecompound.nl/work/grolsch-400-jaar-karakter','description' => 'Post Productie voor een Grolsch commercial.

Toevoegen en verwijderen van elementen in het beeld. 

','date' => '1429954855'),
  array('id' => '288','student_id' => '369','title' => 'Allsecur - IJsbaan','link' => 'http://www.thecompound.nl/work/allsecur-ijsbaan','description' => 'Post Productie voor een AllSecur commercial.

Toevoegen en verwijderen van elementen in het beeld. ','date' => '1429954855'),
  array('id' => '289','student_id' => '369','title' => 'Mac Donalds - Ontbijt','link' => 'http://delodge.nl/work/27-mcdonalds-ontbijt-making-offje','description' => 'Post Productie voor een Mac Donalds commercial.

Toevoegen en verwijderen van elementen in het beeld. ','date' => '1429954855'),
  array('id' => '290','student_id' => '32','title' => 'DJ NLZ','link' => 'http://djnlz.com','description' => 'DJ NLZ is een Nederlandse DJ/Producer uit Heemskerk. Hij werkt met een groot aantal stijlen zoals Hip Hop, Trap en Urban.','date' => '1430051433'),
  array('id' => '291','student_id' => '32','title' => 'Spoorcollege','link' => '','description' => 'Vrijdag 8 november reed de LSVb samen met het JOB met een speciale eigen trein \'Spoorcollege\' door de randstad, om te protesteren tegen het mogelijke afschaffen van de OV-studentenkaart. De actie was succesvol, de kaart zal blijven.','date' => '1430051433'),
  array('id' => '292','student_id' => '32','title' => 'I/O Academy','link' => 'http://ioacademy.nl/','description' => 'Dit is een plek waar tech-talent zelf creatieve vrijheid krijgt om in hoog tempo hoogwaardige producten te bouwen terwijl zij inspiratie opdoen bij de meest toonaangevende bedrijven ter wereld.','date' => '1430051433'),
  array('id' => '293','student_id' => '46','title' => 'Close Contact mail','link' => '','description' => 'Tijdens mijn stage bij Close Contact kreeg ik de opdracht om deze mail goed zichtbaar op mobiel te maken. Aangezien sommige stukken tekst als afbeelding stonden en om te zorgen dat ik de code beter kon begrijpen ben ik de mail opnieuw gaan maken. Het eindresultaat van de mail ziet u hier. ','date' => '1430241703'),
  array('id' => '294','student_id' => '14','title' => 'Kort','link' => '','description' => 'Voor kort maakten wij een documentaire met het thema vrijheid. Ik heb gekozen om te kiezen voor het onderwerp vrijheid van leven (euthanasie). ','date' => '1431351373'),
  array('id' => '295','student_id' => '158','title' => 'Green day project.','link' => 'http://iconosquare.com/p/543145208300645577_208623530','description' => 'Hobby project die ik 2 jaar geleden gedaan het en waar ik nog steeds trost op ben, omdat Mike Dirnt (bassit van green day het ge reposted hebt om instagram)

','date' => '1431373914'),
  array('id' => '296','student_id' => '158','title' => 'IT\'S JUST A MYTH, IS IT?','link' => 'https://www.talenthouse.com/item/1359182/b5c32e6d','description' => 'Dit project hangt op dit moment in het hoofdkantoor van talenthouse in LA. Ik kreeg vorige maand een e-mail waarin werd gevraagt of ze mijn art mochten gebruiken om in hun nieuwe kantoor te hangen (hier kon ik natuurlijk geen nee tegen zeggen!!)','date' => '1431373914'),
  array('id' => '297','student_id' => '153','title' => 'Portfolio','link' => '','description' => 'Hierbij mijn portfolio','date' => '1431418948'),
  array('id' => '299','student_id' => '27','title' => 'MA Jaarboek','link' => 'http://ma-jaarboek.nl','description' => 'swgsdfgvfx','date' => '1431426709'),
  array('id' => '300','student_id' => '2','title' => 'Alles wat ik niet op school heb geleerd.','link' => 'http://www.coroflot.com/Awkwardx2Productions/ShowReel-Illa-Abels-2014-12','description' => '','date' => '1431520311'),
  array('id' => '301','student_id' => '6843','title' => 'Mixen','link' => '','description' => 'Met de gevormde bandjes een aantal liedjes opnemen en die afmixen.','date' => '1431630405')
);

$student_file = array(
  array('project_id' => '232','file_md5' => '695dd5b1804438999f863c4941ea1a3d','file_extention' => 'png'),
  array('project_id' => '37','file_md5' => '676671928ba7f0d7c20e2d2b25b26ea5','file_extention' => 'jpeg'),
  array('project_id' => '197','file_md5' => 'b18b6b8601e1bcce64ef71d88a0d0196','file_extention' => 'png'),
  array('project_id' => '233','file_md5' => '0dba44463ad12a44ec0b989e05ccabb3','file_extention' => 'png'),
  array('project_id' => '27','file_md5' => '6c8133e56ec42e7d21ac0ada4433f349','file_extention' => 'png'),
  array('project_id' => '28','file_md5' => 'fc79b2d6a73f7991dc2a799a2f76ba66','file_extention' => 'jpeg'),
  array('project_id' => '28','file_md5' => 'c7608ca7f0bf3d5f16671476a748b1de','file_extention' => 'jpeg'),
  array('project_id' => '29','file_md5' => '86082684a7a6969c13fc6a0d6ba44bf9','file_extention' => 'png'),
  array('project_id' => '30','file_md5' => 'cfc8c14205e3ad99df1f39b099d4789d','file_extention' => 'png'),
  array('project_id' => '31','file_md5' => '0bbffd7e5c398d345ecf5d13b535e6b2','file_extention' => 'jpeg'),
  array('project_id' => '34','file_md5' => '8d3ce2b1aa4a47e8c1fd1ae86af56db0','file_extention' => 'jpeg'),
  array('project_id' => '38','file_md5' => '9667f7d315543b206d75de4a0d20150f','file_extention' => 'png'),
  array('project_id' => '39','file_md5' => '61bf68322a71b23e08728d56e87f46aa','file_extention' => 'png'),
  array('project_id' => '40','file_md5' => 'ba0fbe3c6d74522e8e977591762bd5df','file_extention' => 'jpeg'),
  array('project_id' => '41','file_md5' => 'd597a22b8b5692994a7f8e48638efa3d','file_extention' => 'jpeg'),
  array('project_id' => '42','file_md5' => '92e42ff37c5f6363339e562b4e074ed9','file_extention' => 'jpeg'),
  array('project_id' => '42','file_md5' => '2f42006ebb862bb30a1f1cfd33d49a30','file_extention' => 'png'),
  array('project_id' => '48','file_md5' => '9b535df175cd86f55eaaafe0fd843dbc','file_extention' => 'pdf'),
  array('project_id' => '49','file_md5' => '385f935b7e727a7b032efdf03c74fc0e','file_extention' => 'pdf'),
  array('project_id' => '50','file_md5' => '4c5ec2441d2eb85c9bd74be32bcffdd7','file_extention' => 'pdf'),
  array('project_id' => '51','file_md5' => '9547895c3d83ad4d6141bd401599338d','file_extention' => 'jpeg'),
  array('project_id' => '52','file_md5' => '53feceffd1bf177cbedce78ccfbfa7ad','file_extention' => 'jpeg'),
  array('project_id' => '54','file_md5' => '46387541524c6b4adb2b1d01cb5f761a','file_extention' => 'jpeg'),
  array('project_id' => '59','file_md5' => 'd9ecf3e8c6b2cafa8f96f5c2192f6e0e','file_extention' => 'png'),
  array('project_id' => '60','file_md5' => 'b12f931d032493ffa9d24ad3bb6c9247','file_extention' => 'jpeg'),
  array('project_id' => '61','file_md5' => '27336180f9ad4216d692fa67e5c19035','file_extention' => 'jpeg'),
  array('project_id' => '62','file_md5' => 'c1dde13c265497d5f4c076ff603e1bb4','file_extention' => 'jpeg'),
  array('project_id' => '65','file_md5' => '6bd312b90a66db5d7bbaadc82bb592d7','file_extention' => 'jpeg'),
  array('project_id' => '66','file_md5' => '3e53225c918ebedfbd228900417b39f6','file_extention' => 'jpeg'),
  array('project_id' => '67','file_md5' => 'cc0ae5f287d91b042159af3f8feb3cc2','file_extention' => 'jpeg'),
  array('project_id' => '68','file_md5' => '349e6e270cc59ee11474b6157a0b0339','file_extention' => 'jpeg'),
  array('project_id' => '69','file_md5' => '276994090cbf594e8de5ad3117d3443a','file_extention' => 'png'),
  array('project_id' => '71','file_md5' => '765340bd9805bdf1b8ff6f468ee69594','file_extention' => 'jpeg'),
  array('project_id' => '74','file_md5' => '715af5b8cee8068b7af5def0d52ceff4','file_extention' => 'jpeg'),
  array('project_id' => '75','file_md5' => '4ad97bfbf8b6d760691d9c8f2d4fbb16','file_extention' => 'pdf'),
  array('project_id' => '76','file_md5' => 'e5e4cf62fe9d1152c1d97ddb3d1e45ad','file_extention' => 'jpeg'),
  array('project_id' => '76','file_md5' => '6cc07e527dbe2a424ee696fd0b8b9689','file_extention' => 'jpeg'),
  array('project_id' => '77','file_md5' => 'bd5349a0126a95ffbd8eb91e955eed5f','file_extention' => 'png'),
  array('project_id' => '78','file_md5' => 'c6211f155f3ac76b3d718ee03b465e5b','file_extention' => 'jpeg'),
  array('project_id' => '79','file_md5' => '9886f52ab97ef308914dc4930c19b950','file_extention' => 'jpeg'),
  array('project_id' => '80','file_md5' => '27610448125a1b51695c429d5933bb23','file_extention' => 'png'),
  array('project_id' => '81','file_md5' => '6caf7dc55bf6cad425b33a5d9721b7df','file_extention' => 'jpeg'),
  array('project_id' => '82','file_md5' => 'f2c00399fe763008d506698c24d313b8','file_extention' => 'jpeg'),
  array('project_id' => '83','file_md5' => '6ac268a29103394f12b4bf6862c9cdc5','file_extention' => 'jpeg'),
  array('project_id' => '85','file_md5' => '068906b939305976cd3b822877fcdc0b','file_extention' => 'jpeg'),
  array('project_id' => '86','file_md5' => 'aca0c1f9a3601d9de42cdb097d334362','file_extention' => 'png'),
  array('project_id' => '87','file_md5' => '2b6c7811e7abdee08d3f32f4f567ea86','file_extention' => 'jpeg'),
  array('project_id' => '91','file_md5' => '00f4ff52874ffc7e2a29882d450e2b12','file_extention' => 'jpeg'),
  array('project_id' => '92','file_md5' => 'eabfba513ab75b6746525805fcf21733','file_extention' => 'jpeg'),
  array('project_id' => '93','file_md5' => 'e0c889bb27c726bccec0127a371ba0a7','file_extention' => 'jpeg'),
  array('project_id' => '94','file_md5' => '84e98f204cf32b3adbab7f4d174877d8','file_extention' => 'jpeg'),
  array('project_id' => '95','file_md5' => 'edb67ec704615bd26745005f581f6d8c','file_extention' => 'jpeg'),
  array('project_id' => '96','file_md5' => 'e2cda66dee85d73d2255da9df142f9ec','file_extention' => 'pdf'),
  array('project_id' => '97','file_md5' => 'd329c3d6d802a8da096f24f34e95341a','file_extention' => 'jpeg'),
  array('project_id' => '98','file_md5' => 'c862bc8add875a04e92e1ca7783a1e26','file_extention' => 'jpeg'),
  array('project_id' => '99','file_md5' => 'cfcb4afbaca8b95292a81ed97628c830','file_extention' => 'jpeg'),
  array('project_id' => '100','file_md5' => '85c4db18f268e5a7f31c62e315c330a6','file_extention' => 'jpeg'),
  array('project_id' => '101','file_md5' => 'f5dd79dd9a1ebb44bfb033fb240d8654','file_extention' => 'jpeg'),
  array('project_id' => '102','file_md5' => '78d7de1c56c3a06af4144af27ace5cc1','file_extention' => 'png'),
  array('project_id' => '107','file_md5' => 'fa22c10f76db94e05b5a5fc40ece057f','file_extention' => 'jpeg'),
  array('project_id' => '108','file_md5' => 'b571469e9afc53452fd6328fc6f8ace6','file_extention' => 'jpeg'),
  array('project_id' => '109','file_md5' => '832e84fc6978e77b68182e0304a09126','file_extention' => 'jpeg'),
  array('project_id' => '110','file_md5' => 'c7057463ff96614e1502807fb68c65d3','file_extention' => 'pdf'),
  array('project_id' => '111','file_md5' => '3da5bdd707c1d0f94fd7c335f45eee53','file_extention' => 'jpeg'),
  array('project_id' => '112','file_md5' => '7f7909c24c2f3082d9da3e45aa4c2439','file_extention' => 'jpeg'),
  array('project_id' => '113','file_md5' => '04f185bcd75a9f695daed447c2435101','file_extention' => 'jpeg'),
  array('project_id' => '114','file_md5' => 'c412a139b3e49f49579efd0bf0c1b7d3','file_extention' => 'png'),
  array('project_id' => '115','file_md5' => 'd7bf339cbf6a30cb657b0ef8010a555d','file_extention' => 'png'),
  array('project_id' => '116','file_md5' => '212885cd7d692cfd06713f41bc98028f','file_extention' => 'png'),
  array('project_id' => '117','file_md5' => 'c585bfdebd9594b086b59338766f351a','file_extention' => 'png'),
  array('project_id' => '122','file_md5' => '68def55b5abf85e37405195300331594','file_extention' => 'jpeg'),
  array('project_id' => '122','file_md5' => '6243cabc11a6aefab76dbaaeed494eef','file_extention' => 'jpeg'),
  array('project_id' => '122','file_md5' => '250ccd14ebe11a40260c49129138230f','file_extention' => 'jpeg'),
  array('project_id' => '122','file_md5' => '1b9d2908be8d7c26e4d71e29278539ce','file_extention' => 'jpeg'),
  array('project_id' => '122','file_md5' => '819a69324e9309012fc3170cb92292b9','file_extention' => 'jpeg'),
  array('project_id' => '122','file_md5' => '0f6d108e4f8a8baacb3a9391f5d159ac','file_extention' => 'jpeg'),
  array('project_id' => '123','file_md5' => 'beb5b148a2692935e9e7182c8d0cd6d5','file_extention' => 'jpeg'),
  array('project_id' => '123','file_md5' => '67e66e876089917921693dfc1ed71b2f','file_extention' => 'jpeg'),
  array('project_id' => '123','file_md5' => '2223a39b64695eea571edd605ecfc7a2','file_extention' => 'jpeg'),
  array('project_id' => '123','file_md5' => '1417dcee88e805d52f662d16176977c0','file_extention' => 'jpeg'),
  array('project_id' => '123','file_md5' => '862d5456026e80df3d60f07f4bf418bb','file_extention' => 'jpeg'),
  array('project_id' => '123','file_md5' => '91415d687fcfb4cb6934b1421b771c62','file_extention' => 'jpeg'),
  array('project_id' => '131','file_md5' => 'b5b35152a5a67db48a0e9a974f59065a','file_extention' => 'jpeg'),
  array('project_id' => '132','file_md5' => '3206ea5057e4d6538e4afe5cdb90b4b8','file_extention' => 'jpeg'),
  array('project_id' => '133','file_md5' => 'c5dadd24bf8616a29505d54366238d84','file_extention' => 'jpeg'),
  array('project_id' => '134','file_md5' => 'ff9a782b6c63be15f7c8cf07c491c2cc','file_extention' => 'pdf'),
  array('project_id' => '135','file_md5' => '7f16ade613a51b31d1dd1526666ea3f9','file_extention' => 'pdf'),
  array('project_id' => '136','file_md5' => 'dafd82f7b95f59a148d097daeb5ff358','file_extention' => 'pdf'),
  array('project_id' => '137','file_md5' => '467e2f68edcac654c64f4e0fcafb8e73','file_extention' => 'png'),
  array('project_id' => '138','file_md5' => 'd65fb80bee39d758f2861c76ae6d806b','file_extention' => 'png'),
  array('project_id' => '139','file_md5' => 'd1dbe57412284615b43c5318bb731522','file_extention' => 'jpeg'),
  array('project_id' => '139','file_md5' => 'e0737cef262752810a703aa539024c2a','file_extention' => 'jpeg'),
  array('project_id' => '139','file_md5' => 'b4fa7a2ccd0a28d929f560c01e88ae6d','file_extention' => 'jpeg'),
  array('project_id' => '140','file_md5' => '84939f669ab13eebddba2b33e1aaf2eb','file_extention' => 'pdf'),
  array('project_id' => '141','file_md5' => '789935565dddd75b5f0981f8a718026b','file_extention' => 'png'),
  array('project_id' => '142','file_md5' => '3ac687ad570445a76eceb1e7d1bb3588','file_extention' => 'png'),
  array('project_id' => '143','file_md5' => 'ce4bdc08f0bcd62f6c2c510d48cd1934','file_extention' => 'png'),
  array('project_id' => '144','file_md5' => 'db3d4a4c2f5855c510775f862f302c5f','file_extention' => 'png'),
  array('project_id' => '145','file_md5' => 'ad1ef4329449a0b8f4181e37de27c4ca','file_extention' => 'png'),
  array('project_id' => '146','file_md5' => 'cae67ff9be4cc674df007a2b50ef0f13','file_extention' => 'jpeg'),
  array('project_id' => '147','file_md5' => '2c7837390031734bd8157dae93296d54','file_extention' => 'png'),
  array('project_id' => '148','file_md5' => 'ab013142cae6162db481f57347087c0c','file_extention' => 'png'),
  array('project_id' => '150','file_md5' => '5a0ef53bf99f8f869cc62b58d6793653','file_extention' => 'pdf'),
  array('project_id' => '153','file_md5' => '7b6d4877e8ebc42ae20985c419d16a1a','file_extention' => 'jpeg'),
  array('project_id' => '154','file_md5' => 'a1db637f5ca9e340ea8117570812daa2','file_extention' => 'jpeg'),
  array('project_id' => '155','file_md5' => 'fcfa1117e340cc2f6978933022af014e','file_extention' => 'jpeg'),
  array('project_id' => '156','file_md5' => 'bde95cd1e4eff9b8c9efeaabe933e1e1','file_extention' => 'jpeg'),
  array('project_id' => '157','file_md5' => '8e1057107e7e10e7af8f322c1fff9585','file_extention' => 'png'),
  array('project_id' => '158','file_md5' => '85ffa8d4e32d1ef9b60634252ec6c9c9','file_extention' => 'png'),
  array('project_id' => '159','file_md5' => 'a831793731b66db4181c49692aa10d1d','file_extention' => 'png'),
  array('project_id' => '160','file_md5' => 'd6d0f396586ecae89d7e1c72e8ca80b7','file_extention' => 'png'),
  array('project_id' => '163','file_md5' => '1b02d6110a01ac5668e1b57f5f798203','file_extention' => 'jpeg'),
  array('project_id' => '171','file_md5' => '16ba99effaa1cd824fb932870f0e9a28','file_extention' => 'png'),
  array('project_id' => '172','file_md5' => 'b8fbbd396150bd3843e1bd72ccfff9fb','file_extention' => 'jpeg'),
  array('project_id' => '173','file_md5' => '53697d1d599b2c7959c0e1c2893df5b5','file_extention' => 'png'),
  array('project_id' => '175','file_md5' => 'f4fefc6aa0697d97a325b5f733027da4','file_extention' => 'png'),
  array('project_id' => '176','file_md5' => '5bc8615d8f097ff641501bd393997586','file_extention' => 'png'),
  array('project_id' => '177','file_md5' => 'e07807d1c018e890d45714186462b398','file_extention' => 'png'),
  array('project_id' => '178','file_md5' => 'db247a16703e286dbcf4bd21a9e3c195','file_extention' => 'jpeg'),
  array('project_id' => '179','file_md5' => '44def25b3f141ef90f95591e622eb1b5','file_extention' => 'png'),
  array('project_id' => '181','file_md5' => '530cc35318759743ef7efb1db0a8021c','file_extention' => 'jpeg'),
  array('project_id' => '182','file_md5' => 'b461b12b8207f816b14f776569088825','file_extention' => 'pdf'),
  array('project_id' => '183','file_md5' => '786d0dd161ccc713c9e48d28c6bbf6c2','file_extention' => 'jpeg'),
  array('project_id' => '184','file_md5' => '5951502ec1f41b2e8d28bf2324a8e5d6','file_extention' => 'jpeg'),
  array('project_id' => '185','file_md5' => '8692a679c3b23f91e1aabf8a2c14ff46','file_extention' => 'jpeg'),
  array('project_id' => '186','file_md5' => '138745eb6b9c34cefdf67b4ab5632981','file_extention' => 'jpeg'),
  array('project_id' => '187','file_md5' => '76acd8dd0896b5cddfe27bd8f1ef6199','file_extention' => 'jpeg'),
  array('project_id' => '188','file_md5' => '522e48c2abfb1853a6026543833890bd','file_extention' => 'jpeg'),
  array('project_id' => '188','file_md5' => '16ce16799f58c2365ad815683699e329','file_extention' => 'jpeg'),
  array('project_id' => '188','file_md5' => '45e23d612da2cdb7de9d0e33422b2c5b','file_extention' => 'jpeg'),
  array('project_id' => '190','file_md5' => 'e1bb42cb1a85eacff35f68dd517b4dc6','file_extention' => 'jpeg'),
  array('project_id' => '192','file_md5' => 'a9b938eec540987fb655b1787168c2b4','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => '82b238a6d876f5b1f48891bc2fd497d7','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => 'c8045288c96564b1f407bb7759944b48','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => '4eac43a19d18ef3f6e5b83c13bc1d7fb','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => 'f97440d0fa3ff6894c578eec2aaf23fc','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => '0071490c9d9799369962b38960c35fc0','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => 'a2d14f7cd9ed9354d175768ea654b6a0','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => '34395a8e685477604e350956a3e6c86a','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => '17787a96f2123373bbe804c25686760c','file_extention' => 'jpeg'),
  array('project_id' => '194','file_md5' => '735c7e389af839600a8b779c67e1bf65','file_extention' => 'jpeg'),
  array('project_id' => '198','file_md5' => '7433547eb4784b0701d2bc90f7aeaaf5','file_extention' => 'jpeg'),
  array('project_id' => '199','file_md5' => '23d883fcc4387493b33be00774481b67','file_extention' => 'jpeg'),
  array('project_id' => '200','file_md5' => '912a9da299e3f4b6d329d20d589ae600','file_extention' => 'jpeg'),
  array('project_id' => '205','file_md5' => 'be201678b79583beb3e939af682f6c71','file_extention' => 'jpeg'),
  array('project_id' => '207','file_md5' => 'e3d41aadd7be6750001094651e183151','file_extention' => 'png'),
  array('project_id' => '208','file_md5' => 'cd96df690b91207c99d61b6c5c4a956a','file_extention' => 'jpeg'),
  array('project_id' => '209','file_md5' => '6d433dc88fa9751fe96119f8496c4f7e','file_extention' => 'jpeg'),
  array('project_id' => '209','file_md5' => '03ed65fa32f56e64fc67650176a93e5f','file_extention' => 'jpeg'),
  array('project_id' => '209','file_md5' => '0f20fb3b3200066e54722d83a9e59f93','file_extention' => 'jpeg'),
  array('project_id' => '209','file_md5' => 'e1f01a8223ad037ab5d6216534e807b9','file_extention' => 'jpeg'),
  array('project_id' => '209','file_md5' => '601cd2ade34f48ee12f969086ee034d9','file_extention' => 'jpeg'),
  array('project_id' => '209','file_md5' => '38a1ae7fd4e5313a0b246846850c4417','file_extention' => 'jpeg'),
  array('project_id' => '209','file_md5' => '6d25f4b2ce03740df1405f0b0577a6fa','file_extention' => 'jpeg'),
  array('project_id' => '210','file_md5' => '206957851c79e7ea353ab80e870170ff','file_extention' => 'jpeg'),
  array('project_id' => '211','file_md5' => 'a5b8f9bce21e0b7d1323f5df1c0d9f06','file_extention' => 'jpeg'),
  array('project_id' => '212','file_md5' => 'e417dc27f05cc1e82d6300c4abaa8535','file_extention' => 'jpeg'),
  array('project_id' => '222','file_md5' => '95fd19573ebe5ad9ed469e2c0b77abb3','file_extention' => 'png'),
  array('project_id' => '222','file_md5' => '7e25b1e901b6402acde11653f29475b2','file_extention' => 'png'),
  array('project_id' => '223','file_md5' => '35f227a884f898016744583aa3045d7b','file_extention' => 'jpeg'),
  array('project_id' => '222','file_md5' => '8966f117d26be85394b82133cc7f8e96','file_extention' => 'png'),
  array('project_id' => '223','file_md5' => '631ed8f4ff78e8c9b7a34377f148bba8','file_extention' => 'jpeg'),
  array('project_id' => '223','file_md5' => 'b3fe84b88d5e71f9fd17ea4443d39edd','file_extention' => 'jpeg'),
  array('project_id' => '223','file_md5' => '866d7d970f744e0861971b25589ed417','file_extention' => 'jpeg'),
  array('project_id' => '223','file_md5' => 'f80287d2694963c7eac90b2a4ce45dac','file_extention' => 'jpeg'),
  array('project_id' => '222','file_md5' => 'ff2887390a9d7b629926a551514c65f3','file_extention' => 'png'),
  array('project_id' => '222','file_md5' => '73dd2993dccbfdd36b64eccf81749e64','file_extention' => 'png'),
  array('project_id' => '224','file_md5' => 'cae85e7dcbc009a2aef7b424b3a275cd','file_extention' => 'jpeg'),
  array('project_id' => '225','file_md5' => 'a37cad1bc27642753591fc70c2e79adb','file_extention' => 'jpeg'),
  array('project_id' => '234','file_md5' => '4e36c2378cd3d8e2d8e2728b6e8ad30f','file_extention' => 'png'),
  array('project_id' => '235','file_md5' => '9dec6fccfefbe38f5aafe5a9ed36c146','file_extention' => 'png'),
  array('project_id' => '237','file_md5' => 'dba0d151d0f61cac90e90b7c90ab8de3','file_extention' => 'jpeg'),
  array('project_id' => '244','file_md5' => '0f7a2edb7475a5df103e31354efbb3cb','file_extention' => 'png'),
  array('project_id' => '245','file_md5' => '8a3f08e4e239f4e75488e0ba08793cd5','file_extention' => 'jpeg'),
  array('project_id' => '241','file_md5' => 'effb66190ef04e257c1814b971331808','file_extention' => 'png'),
  array('project_id' => '248','file_md5' => '9abe8adbc6eac5394998e3f76ddc23f6','file_extention' => 'jpeg'),
  array('project_id' => '249','file_md5' => 'c7b388e9c16535bffe94014aaf46b090','file_extention' => 'jpeg'),
  array('project_id' => '245','file_md5' => 'be0907870ff54725641eeed2f2653b5a','file_extention' => 'jpeg'),
  array('project_id' => '259','file_md5' => '3cfe68548cb740c1906046705942c60b','file_extention' => 'jpeg'),
  array('project_id' => '251','file_md5' => 'ee640a7e9ade21912bec776d1a7dda2f','file_extention' => 'jpeg'),
  array('project_id' => '252','file_md5' => '481d5a24be6a9d0550a4015720435a42','file_extention' => 'jpeg'),
  array('project_id' => '253','file_md5' => '732da60bd0827c4674528a43a59b74e5','file_extention' => 'jpeg'),
  array('project_id' => '255','file_md5' => 'c08a0a3d1bb463f042b63c369950b722','file_extention' => 'png'),
  array('project_id' => '257','file_md5' => 'de9966ea3dce799c36114d834bb5bd22','file_extention' => 'jpeg'),
  array('project_id' => '257','file_md5' => 'ff1bbba5cdb420640d7887a27f0913b1','file_extention' => 'jpeg'),
  array('project_id' => '258','file_md5' => '52e6633fff6bfcde42c0b2bb09fb29df','file_extention' => 'jpeg'),
  array('project_id' => '258','file_md5' => '2476c581a6e03c7e53ee8023f041bf30','file_extention' => 'jpeg'),
  array('project_id' => '258','file_md5' => '883698a39defa28039e9c5ea595037c9','file_extention' => 'jpeg'),
  array('project_id' => '259','file_md5' => '5ba92ee0e4ca0338a771829d14b1b3f9','file_extention' => 'jpeg'),
  array('project_id' => '259','file_md5' => 'e4d5e4877b19154ac5244f9646be0037','file_extention' => 'jpeg'),
  array('project_id' => '259','file_md5' => 'a9f6ff5fc064f20e0157e7a82c6d9ac8','file_extention' => 'jpeg'),
  array('project_id' => '259','file_md5' => '1405d077fe1b0ff772b60480d3598171','file_extention' => 'jpeg'),
  array('project_id' => '260','file_md5' => '1a8e4bd0c0e5d1b7c7b4a375327e23a7','file_extention' => 'png'),
  array('project_id' => '263','file_md5' => '79f99822dc062d5dc36545f3c9e85d63','file_extention' => 'jpeg'),
  array('project_id' => '264','file_md5' => '4be38d50a4845698356b89bd5f3ca137','file_extention' => 'jpeg'),
  array('project_id' => '266','file_md5' => 'f24b4c9f68b6394518b93f3ef460cae4','file_extention' => 'jpeg'),
  array('project_id' => '266','file_md5' => '2bb71459999d037a6dacf3d3fb8d292a','file_extention' => 'jpeg'),
  array('project_id' => '271','file_md5' => '29b6f34a1b59ae8935d969fb5c14a992','file_extention' => 'jpeg'),
  array('project_id' => '272','file_md5' => 'f7f1dada4b26f95e6246505dfdf8cf87','file_extention' => 'png'),
  array('project_id' => '273','file_md5' => '9c0e92f185eee288afae228a4aad5708','file_extention' => 'png'),
  array('project_id' => '275','file_md5' => '76009a1f54edb7f85da5581adc26d137','file_extention' => 'png'),
  array('project_id' => '277','file_md5' => '528160dbc06aaf2ee660264f6d8071e8','file_extention' => 'jpeg'),
  array('project_id' => '279','file_md5' => 'f3bc3ffba7a1948ea4abd53a25cc790d','file_extention' => 'png'),
  array('project_id' => '280','file_md5' => '287d47343746276ed185ee9bb485fac9','file_extention' => 'png'),
  array('project_id' => '281','file_md5' => '20861d545d561b8b1e3cdf1456ba4cfd','file_extention' => 'jpeg'),
  array('project_id' => '282','file_md5' => '81c13bb1368e466bc18967fe89f7ba70','file_extention' => 'jpeg'),
  array('project_id' => '283','file_md5' => '33ebae75dae4876997086a953ef991f4','file_extention' => 'png'),
  array('project_id' => '284','file_md5' => 'b0d9bde02e5781973fa61ab48272a3ff','file_extention' => 'jpeg'),
  array('project_id' => '285','file_md5' => 'ec2e8c5592a24e79932aad3619c6261a','file_extention' => 'jpeg'),
  array('project_id' => '286','file_md5' => '4a3e4a41bdfec09151870e9d4f46c474','file_extention' => 'jpeg'),
  array('project_id' => '290','file_md5' => '4d75460afcbb38a04cf714d119f599c6','file_extention' => 'png'),
  array('project_id' => '291','file_md5' => '00e4a5bff8c83eb875815eaffc83d4a7','file_extention' => 'png'),
  array('project_id' => '292','file_md5' => 'cd561ebcd6bb9ccc5802af70975f39e5','file_extention' => 'png'),
  array('project_id' => '293','file_md5' => '6e54b806a4591f353ca62ca700bb379f','file_extention' => 'jpeg'),
  array('project_id' => '295','file_md5' => '46f3c42e67e12e32058f10e675793be2','file_extention' => 'jpeg'),
  array('project_id' => '296','file_md5' => 'd18e8b317e8a7f290bbbc63dd4d56f90','file_extention' => 'png'),
  array('project_id' => '297','file_md5' => '14ac2ee119cab7d059420cab91a5373f','file_extention' => 'jpeg'),
  array('project_id' => '301','file_md5' => '47032f175dc1f60e966375f93ec197c7','file_extention' => 'jpeg')
);

		

		$filepath = public_path(). '/dynamic/files/';
		// Create writeable dir if not exists
  	 	if( !file_exists($filepath) ){
  	 		$this->command->info($filepath. ' not found, creating directory..');
  	 		if( mkdir($filepath, 0777, true) ){
  	 			$this->command->info("\t Success");
  	 		} else {
  	 			$this->command->error("\t Failed, aborting operation");
  	 			return false;
  	 		}
  	 	}

  	 	$largepath = public_path(). '/dynamic/files/large/';
		// Create writeable dir if not exists
  	 	if( !file_exists($largepath) ){
  	 		$this->command->info($largepath. ' not found, creating directory..');
  	 		if( mkdir($largepath, 0777, true) ){
  	 			$this->command->info("\t Success");
  	 		} else {
  	 			$this->command->error("\t Failed, aborting operation");
  	 			return false;
  	 		}
  	 	}

  	 	$mediumpath = public_path(). '/dynamic/files/medium/';

  	 	// Create writeable thumbnails dir if not exists
  	 	if( !file_exists($mediumpath) ){
  	 		$this->command->info($mediumpath. ' not found, creating directory..');
  	 		if( mkdir($mediumpath, 0777, true) ){
  	 			$this->command->info("\t Success");
  	 		} else {
  	 			$this->command->error("\t Failed, aborting operation");
  	 			return false;
  	 		}
  	 	}

  	 	$thumbspath = public_path(). '/dynamic/files/thumbnails/';

  	 	// Create writeable thumbnails dir if not exists
  	 	if( !file_exists($thumbspath) ){
  	 		$this->command->info($thumbspath. ' not found, creating directory..');
  	 		if( mkdir($thumbspath, 0777, true) ){
  	 			$this->command->info("\t Success");
  	 		} else {
  	 			$this->command->error("\t Failed, aborting operation");
  	 			return false;
  	 		}
  	 	}


		$count_students = count($student_project);
  		$this->command->info("\n--------------- Starting progress, this might take a while ---------------\n");
		$i = 0;
		$broke = 0;
  	 	$last = -1;

		$this->command->info("Progress: 0%");
		foreach( $student_project as $project ){
			$hash = md5(str_random(40). time());

			 $i++;

			// Percentage counter
			$count_percentage = round(($i/$count_students) *100);
			if( $count_percentage % 25 == 0 && $count_percentage != $last ){
				$this->command->info("Progress: " .$count_percentage . "%");
				$last = $count_percentage;
			}

			$insert = array(
					'student_id' => $project['student_id'],
					'title' => $project['title'],
					'description' => str_replace(array("\n", "\t", "\r"), array("", "", ""), nl2br($project['description'])),
					'url' => $project['link']
				);

			$insertedProject = Project::create($insert);

			foreach( $student_file as $file ){
				if( $file['project_id'] != $project['id']){
					continue;
				}

				if( $file['file_extention'] == 'pdf' ){
					$path = 'pdf/';
				} else {
					$path = 'images/';
				}

				$error = false;
				// Get the image from url
				switch($file['file_extention']){
					case 'png': 
					 $url = "http://inschrijven.ma-jaarboek.nl/uploads/{$path}/{$file['file_md5']}.png";
					 $filename = $hash.'.png';
					 $extention = 'png';
					break;
					case 'jpeg': 
					 $url = "http://inschrijven.ma-jaarboek.nl/uploads/{$path}/{$file['file_md5']}.jpeg";
					 $filename = $hash.'.jpeg';
					 $extention = 'jpeg';
					break;
					case 'pdf': 
					 $url = "http://inschrijven.ma-jaarboek.nl/uploads/{$path}/{$file['file_md5']}.pdf";
					 $filename = $hash.'.pdf';
					 $extention = 'pdf';
					break;
					default:
						$error = true;
					 break;
				}

				if($error){
					$this->command->error("\nUnknown file extension found\nContinuing..\n");
					continue;
				}

				$file = file_get_contents($url);

				if( !strlen($file) ){
					$this->command->error("- Broken file found. ".$filename);
					$this->command->info("continuing..");
					$broke++;
					continue;
				}

				if($extention == 'pdf'){
					$handle = fopen($filepath .$filename, 'w');
					fwrite($handle, $file);
					fclose($handle);
				} else {
					// Save original
					$manager = new ImageManager();
					$thumb = $manager->make($file)->save($filepath .$filename);

					 // Save the file
					$manager = new ImageManager();
					$thumb = $manager->make($file)->fit(500)->save($largepath .$filename);

					// Create thumbnail
					$manager = new ImageManager();
					$thumb = $manager->make($file)->fit(250)->save($mediumpath .$filename, 80);

					// Create icons
					$manager = new ImageManager();
					$thumb = $manager->make($file)->fit(80)->save($thumbspath .$filename, 60);
				}

				$insert = array(
					'fileHash' => $hash,
					'fileExtension' => $extention,
					'fileName' => ''
				);

				$insertedFile = Files::create($insert);

				$insert = array(
					'project_id' => $insertedProject->id,
					'files_id' => $insertedFile->id
				);

				ProjectFile::create($insert);
			}
		}
	}

}