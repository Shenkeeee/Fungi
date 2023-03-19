
Ez a README.txt sorolja fel az oldal funkcióit a webtervezés tárgyhoz, első mérföldkőre készült, Fungi témájú projektmunkához. Csapat: Német Tímea Kata - NOE3GB, és Subicz Máté István - JSGYYU.

A home oldal funkcionál index.html-ként, ott érdemes kezdeni.
A javított részeket csillaggal jeleztem.


----------Általános szempontok ------------------

- A HTML oldalak egységes dizájnnal készültek, minden oldal hasonló felépítésű és egységes dizájnt használ.
Igen, szerintem az. Van hogy a háttér más de az alap színek ugyanazok és egységes a design.


- Az elkészített weboldalak logikusan vannak felépítve, érthető, hogy mi hol található meg, mi hova tartozik.
Érthető, hogy mi hova tartozik, mindenhol főcímek és 1-1 segítő szöveg tud segíteni abban hogy mi hol van. Minden jól el van különítve.


- A weboldalak tartalma esztétikusan van elrendezve, a színek esztétikusan vannak kiválasztva.
Illik ez a zöld design az erdőhöz, esztétikus az elrendezés és szinergikusak az oldalak.

- Az oldalakon minden információ jól olvasható
Igen, Olyan hátterek és betűszín kombóra törekedtünk, hogy jól olvasható legyen.

- Az űrlapok intuitívak, egyértelmű, hogy mi hova tartozik, és hova mit kell beírni.
Igen, mindenhez oda van írva, hogy mi hova tartozik. 

- Az oldal rendelkezik böngészőfülön megjelenő ikonnal.
*Igen, javítva

- Az weboldalak igényesen vannak elkészítve, modernnek néznek ki.
Modern az elrendezés, igényesen vannak elkészítve, kis animációkkal fűszerezve, reszponzívak, stb. (az alap design ötlet a https://www.forestapp.cc/ -n alapult)

- A rendelkezésre álló menüpontok minden oldalon láthatóak, a navigáció közöttük megfelelően működik.
Így van

- A felhasználó mindig tudja, hogy melyik oldalon van éppen
Más a designja az adott oldalnak ahol van igen

- A menü interaktív: a kurzor rávitelére változik a menüpont kinézete.
Igen

- A menü / fejléc az oldal gördítésénél is látszik.
Minden oldalon meg van valósítva a sticky navbar igen

- Az oldal tartalma animálva jelenik meg (pl. az egyes elemek beúsznak, fokozatosan jelennek meg stb.).
aboutFungi.css 14.sor (  animation: slide-up 2s; )

Bár megjelenéshez csak egy elem van, több más animáció miatt dinamikus az oldal, emiatt érdemeljük meg a 6 pontot, de én 3-al számoltam a pontunkat

- Egyéb, igényesen elkészített animáció (elemekre, háttérre stb.).

*contactUs.css 124 és 140. sor (  animation: up 0.15s;  animation: shake 0.7s; )

- Az oldalon lévő egyes elemek (ahol indokolt) a kurzorral interakcióba lépnek (pl. a gombok, kártyák esetén).
typesofFungi.css 156. sor és 69. sor (     transform: scale(2.3);  transform:  translateY(-30px) scale(2.3); )
+ a navbar
+ importancenél meg learningnél is

- Az elkészített HTML oldalak mindegyike reszponzív
Ezt @media (width < 1500px) és társai biztosítják Minden oldalon. A forAll.css minden dokumentumra vonatkozik, ott is ez biztosítja a reszponzivitást.

----------Felhasznált elemek ------------------

- A projekt tartalmaz legalább 1 űrlapot, amelynek van legalább 4 megfelelő módon felhasznált input mezője.
ContactUs- on igen

- Összesen legalább 6 különböző típusú input mező található a projektben.
Nem

- Van olyan űrlap, amelyik tartalmaz elküldés (submit) gombot.
Igen, contacts

- Van olyan űrlap, amelyik tartalmaz alapállapot (reset) gombot.
Igen, contacts

- Van olyan űrlap, amelyik tartalmaz mezőcsoportosítást.
Igen, contacts

- A weboldal HTML5 elemek megfelelő használatával van kialakítva (header, footer, nav, aside, main, section, article). (Ezek mindegyike 1 pont, elérhető max. 3 pont.)
Header Footer és Nav van minden oldalon. A nav css-e a forAll.css ben van. Van amelyiken main vagy section is de inkább divekkel és classokkal oldottuk meg. 

- A projekt tartalmaz legalább 1 táblázatot.
typesban

- Van olyan táblázat, amelynek van fejléce, ami másképpen jelenik meg.
typesban oldalt

- Van olyan táblázat, amely használ headers attribútumot megfelelő módon.
nem

- A projekt tartalmaz legalább 1 CSS fájlt, és az fel is van használva.
Igen

- Elem szelektor van használva legalább 1 helyen.
pl contactUs.css 2. sor

- Class szelektor van használva legalább 1 helyen.
pl contactUs.css 7. sor

- Id szelektor van használva legalább 1 helyen.
pl forAll.css 35. sor

- Attribútum alapján való kijelölés van használva legalább 1 helyen.
pl contactUs.css 115. sor

- Kapcsolat alapján való kijelölés van használva legalább 1 helyen.
pl contactUs.css 24. sor

- A z-index tulajdonság van használva.
importanceofFungi.css 145.sor

- Úsztatás és annak megszüntetése (float és clear).
aboutFungi.css - ben 45.sor clear
contactUs.css -ben 117.sor float

- Pseudo-elemek használata (before, after, selection, first-letter, first-line stb.). (Ezek mindegyike 1 pont, elérhető max. 2 pont).
*importanceofFungi.css ben before 96. sor, és még 4 helyen, forAll.css-ben selection 3. sor, typesofFungi.css- ben after 125. sor

- Van olyan HTML oldal, amelyhez tartozik igényesen elkészített nyomtatási stíluslap.
Mindhez csináltunk, megvalósítva a forAll.css 170. sorában van (@media print)

- Minden HTML oldalhoz van igényesen elkészített nyomtatási stíluslap.
Mindhez csináltunk, megvalósítva a forAll.css 170. sorában van (@media print) -> nem tudom mennyire igényes úgyhogy ezt nem számoltam a max ponthoz

- A projekt tartalmaz multimédiás elemeket (hang- és videóállomány).
hang az aboutFungi-n, videó az importance-n

- Vannak strukturális elemek céljuknak megfelelően használva (pl. címsorok, bekezdések, iframe, strong, em, blockquote, q, code, sub, sup, mark, hr, pre stb.). (Ezek mindegyike 1 pont, elérhető max. 4 pont).
learningAndResources.html 40.sor iframe, div kb mindenhol.
*strong: importanceofFungi.html 94. sor
*q: home.html 32. sor

- Listák használata.
navbar egy lista. Több lista is van használva, csak nagyrészt nem a hagyományos ul és ol-al.
*importanceofFungi.html 93. sor

- Flexbox vagy grid használata.
importanceofFungi.css ben

- Szegély használata (border).
contactUs.css 77. sor

- Lekerekített sarkok használata (border-radius).
contactUs.css 91. sor

- Háttérszín / háttérkép használata.
minden css body első sora kb

- Szövegek formázása (pl. letter-spacing, line-height, text-align, text-decoration).
contactUs.css 28. sor letter-spacing, text-decoration a navbaron, 111.sor text-align, stb

- Pozicionálás (absolute, relative, static, fixed, sticky). (Ezek mindegyike 1 pont, elérhető max. 3 pont).
mindenen van minden. sticky contactUs.css 106.sor, relative contactUs.css 13.sor, fixed forAll.css 45. sor, stb

- Árnyékok használata
importanceofFungi.css 54.sor, 140. sor

- Transzformálás.
importanceofFungi.css 156.sor, typesofFungi 156.sor



-------------------------------



2023. március 16. 