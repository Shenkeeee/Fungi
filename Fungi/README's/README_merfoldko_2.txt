Fungi 2. Mérföldkő. Csapat: Német Tímea és Subicz Máté.

----------------------------------------------------------------------------------------------------------------

A rendelkezésre álló menüpontok minden oldalon láthatóak, a navigáció közöttük megfelelően működik (0/1 pont)
igen, php/tools/navbar.php

A felhasználó mindig tudja, hogy melyik oldalon van éppen (pl. az aktuális menüpont más dizájnnal jelenik meg) (0/1 pont)
igen

A menü interaktív: a kurzor rávitelére változik a menüpont kinézete (0/1 pont)
igen

A menü / oldal fejléc az oldal görgetésénél is látszik (0/1 pont)
igen

Az elkészített weboldalak logikusan vannak felépítve, egyértelmű, hogy milyen műveleteket lehet csinálni, hogyan, egyértelműen jelezve van minden szükséges információ (0/1/3 pont)
igen, mindenhol segítőszövegek és visszajelzések vannak

Az oldalakon minden információ jól olvasható (pl. nem fekete háttéren sötét betűk), nem lógnak egybe a szövegek vagy egyéb elemek, van elegendő hely hagyva az elemek között, stb. (0/1/3 pont)
igen figyeltünk rá

Az oldalon nincsenek hibák: nem jelennek meg warningok, notice-ok, vagy egyéb rosszul beállított elemek (pl. img tag, érvénytelen képpel), minden ott lévő funkció működik (0/3 pont)
ellenőriztük

Az űrlapok intuitívak, és a felhasználó számára jelezve van, hogy mi a követelmény az adott input mezőre nézve (pl. a jelszó legalább 8 karakter), ezek nem az űrlap elküldése után jutnak a felhasználó tudtára (0/3 pont)
jelezve van, és mindegyik php/tools/registerNew.php - ban az errorsban van gyűjtve

A megvalósított funkciók használata kényelmes (0/2/5 pont)
próbáltunk minél több visszajelzést meg gombot meg lehetőséget adni, chatben nem kell újratölteni hogy mással beszélj, megjegyzi hogy kivel beszéltél stb

GET paraméterek megfelelő használata (0/2 pont)
nem használtuk bizalmas adat kezelésére, de több más helyen üzenetek ($uzenet) átadására igen.

Objektumorientáltság megfelelő használata (0/2/4 pont)
nem figyeltünk rá

Sütik értelmes módon való használata (0/3 pont)
a chat megjegyzi hogy kivel beszéltél, Chat.php 41.soránál van a cookie





Van működő regisztráció, a helyes regisztráció hatására az új felhasználó adatai eltárolódnak (0/2 pont)
igen, mysql használata

Minden kötelezően kitöltendő űrlapmező kitöltése szerveroldalon is ellenőrzésre kerül (0/2 pont)
szerveroldalon is, php/tools/registerNew.php-ben

Ha foglalt a felhasználónév (vagy e-mail cím), akkor nem regisztrálja be az új felhasználót (0/2 pont)
nem

A jelszót két alkalommal kell beírni, ezek azonossága vizsgálva van (0/2 pont)
vizsgálva van, még hashelés előtt

Ha valamelyik mezőt rosszul (vagy nem) tölti ki a felhasználó, akkor a weboldal erre figyelmezteti, pontos hibajelzéssel, az összes hibát jelezve (0/2 pont)
ha nem tölti ki azt is jelzi. az errorsban vannak gyűjtve.

A felhasználók jelszavai biztonságosan vannak tárolva (nem plain text) (0/3 pont)
hashelve vannak

Van lehetőség az oldalra való bejelentkezésre (0/2 pont)
van

Ha bejelentkezéskor rossz adatokat adunk meg, akkor megfelelő hibaüzenetet kapunk (0/2 pont)
igen, vagy a jelszó a rossz vagy nincs olyan felhasználó

A bejelentkezett felhasználó olyan (értelmes) oldal(ak)at is elér, amely(ek)et a nem bejelentkezett felhasználó nem (0/2 pont)
profil, users, chat, mások profilja

A bejelentkezéshez kötött oldal(ak) nem elérhető(k), csak a bejelentkezett felhasználóknak, különben átirányít a bejelentkezéshez (0/2 pont)
users, chat átirányít

Működő kijelentkezés (0/2 pont)
igen

A felhasználónak van lehetősége néhány adatának módosítására (pl. jelszó, születési dátum, bemutatkozás, stb.) (0/2/4 pont)
van, profiljában

A felhasználó tud profilképet feltölteni magának, ez a szerveren eltárolódik, le is tudja cserélni, illetve az oldalon meg is jelenik (0/2/4 pont)
igen

A felhasználó tudja törölni a felhasználói fiókját, ilyenkor az összes adata törlődik (0/4 pont)
tudja

A felhasználó meg tudja tekinteni más felhasználók profilját / publikus adatait (pl. felhasználónév, profil kép, leírás, stb.), továbbá beállítható, hogy milyen adatokat szeretnénk publikusan elérhetővé tenni (0/4/8 pont)
meg tudja, usersből, saját profilban be lehet állítani hogy látható e valami

A felhasználó különböző interakcióba léphet a weboldallal, ennek következményei vannak, melyek újbóli bejelentkezés után is megmaradnak (pl. termékeket tud kosárba helyezni, álmeket értékelni 1-5 csillaggal (és ezeket látja is, hogy mennyire értékelte korábban), ismerősként vehet fel más felhasználókat, stb.) (0/4/8 pont)
chatben megmarad hogy kivel beszéltél

A felhasználó tud üzenetet küldeni a többi felhasználónak (vagy néhány felhasználónak), akik ezt láthatják, és válaszolni tudnak neki (0/4/8 pont)
tud, chatsben

Meg vannak valósítva különböző jogosultsági szintek (pl. felhasználó, admin). Az egyes jogosultsági szinttel rendelkező felhasználók több funkciót elérnek (pl. az admin tud letiltani felhasználókat, látja a rendeléseket, stb.) (0/4/8 pont)
az admin tud törölni vagy más role-ját változtatni usersből

Egyéb, a felsoroltakban nem szereplő, megvalósított funkciók (0/4/8 pont)
a chats-ben van egy Mindenkinek küldhető rész is, mint egy fórum.