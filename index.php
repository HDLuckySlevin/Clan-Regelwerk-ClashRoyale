<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Philippe Müller" />
    <title>CLAN-REGELN</title>
  <style>
  .weiß{
    color: white;
  }        
  .center {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
    background: rgba(255,255,255,0.5);
  }                          
  #clan td{
    padding: 5px;
  }
  .regeln td{
    padding: 10px;
  }
  .regeln tr:nth-child(even) {
    background-color: #dddddd;
  }
  
  @media (max-width: 768px) {
    .center {
      width:80%;
    }        
    .clan{
      font-size:x-small;
    }
  }
  </style>
  </head>
  <body background="background.png">
        <?php
        /*
          Hier den ClashRoyale API-Token rein!
          BAERER AUTH TOKEN!
        */
          $token = "";
          //setup für den Request. alternativ: CURLOPT_URL
          $ch = curl_init('https://api.clashroyale.com/v1/clans/%232URVCLLQ');
          
          // return: data/output als string, anstatt von "raw" data
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          
          //Auth Header
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
             'Content-Type: application/json',
             'Authorization: Bearer ' . $token
             ));
          
          // stringified data/output. siehe CURLOPT_RETURNTRANSFER
          $data = curl_exec($ch);
          
          // infos über Request
          $info = curl_getinfo($ch);
          
          // curl schließen, um system resourcen tu "free"'n
          curl_close($ch);
          $clanInfo_json = json_decode($data, true);
          
        ?>
  <h1 style="color: white;" align="center">
      <?php echo $clanInfo_json['name']; ?>-Regeln!
    </h1>
    <h3 style="margin-top: -25px;" align="center">
      <?php echo "(". $clanInfo_json['tag'].")";?>
    </h3>
    <div class="center clan" id="claninfo">
      <div style="width: 85%; margin: 0 auto; background-color: grey;">
        <?php echo $clanInfo_json['description']; ?>
      </div>
      <div style="width: 85%; margin: 0 auto;">
        <table class="clan" align="center">
          <tr>
            <td>Mitglieder:</td>
            <td><?php echo $clanInfo_json['members']."/50"; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td>ClanScore:</td>
            <td><?php echo $clanInfo_json['clanScore']; ?></td>
          </tr>
          <tr>
            <td>Zutritt:</td>
            <td><?php echo $clanInfo_json['type']; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Location:</td>
            <td><?php echo $clanInfo_json['location']['name']; ?></td>
          </tr>
          <tr>
            <td>requ. Trophies</td>
            <td><?php echo $clanInfo_json['requiredTrophies']; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td>wöchtent. Spenden</td>
            <td><?php echo $clanInfo_json['donationsPerWeek']; ?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="center" id="tableregel" style="overflow: scroll; height: 75%;">
      <table class="regeln clan">
        <tr>
          <th>Nr.</th>
          <th>Beschreibung</th>
        </tr>
        <tr style="background: rgba(255, 255, 0, 0);">
          <td></td>
          <td style="background-color: #13528b;">
            <p class="weiß">Generelles-Regelwerk!</p>
          </td>
        </tr>
        <tr>
          <td>§1</td>
          <td>
            Dies ist das aktuelle Regelwerk von den "CrazYClasheR" (<?php echo $clanInfo_json['tag'] ?>).
            Jedes Mitglied ist, automatisch, mit diesem Regelwerk einverstanden.
            Bei jeglicher Missachtung dieser Regeln, wird das Mitglied,
            entsprechend dem Paragraphen, bestraft. Dabei ist es egal, welchen
            Rang der Spieler im Clan hat.
            <b
              >Es wird ausnahmslos jedes Mitglied, bei Missachtung der Regeln,
              bestraft</b
            >.
          </td>
        </tr>
        <tr>
          <td>§2</td>
          <td>
            <b>Fair Play</b> wird bei uns GROß geschrieben. Verhaltet euch im
            Chat also bitte immer Fair - auch in den Matches!
          </td>
        </tr>
        <tr>
          <td>§2.1</td>
          <td>
            Beleidigungen werden nicht toleriert! Dabei entscheidet natürlich
            der Kontext! Achtet bitte darauf, dass eure Aussagen nicht falsch
            verstanden werden können.
          </td>
        </tr>
        <tr>
          <td>§2.2</td>
          <td>
            Wir sind zwar ein deutscher Clan, ABER wir haben Mitglieder mit
            verschiedenen Nationalitäten und Religionen. Bitte respektiert euch
            gegenseitig und achtet auf ein harmonisches Miteinander. Sollten mal
            Diskrepanzen entstehen, wendet euch euch bitte (in Line) an einen
            der Leader/Vize. Wir werden uns schnellsten um den Misstand kümmern
            und, wenn nötig, schlichten!
          </td>
        </tr>
        <tr>
          <td>§2.3</td>
          <td>
            Sollten wir englisch-sprachige Mitglieder haben, dann kommuniziert,
            wenn möglich auch auf Englisch (zumindest mit diesem Mitglied).
          </td>
        </tr>
        <tr>
          <td>§3</td>
          <td>
            Für eine gute Kommunikation brauchen wir ein gutes
            Kommunikations-Tool. Wir haben uns für den Messenger "LINE"
            entschieden. Dieser ist im Grunde wie WhatsApp, nur, dass wir hier
            keine Telefonnummern benötigen, sondern eure "LINE-ID". In der Regel
            gestalltet ihr diese ID selbst. Um euch vernünftig zuordnen zu
            können, nehmt als ID bitte euren InGame-Nickname. Nur so kann eine
            barrierefreie Kommunikation gewährleistet sein. Zurzeit bitten wir
            alle Mitglieder in den LINE-Channel zu kommen. Pflicht ist dies,
            BISHER, noch nicht.
          </td>
        </tr>
        <tr>
          <td>§4</td>
          <td>
            Zurzeit ist der Clan auf "Required Trophies:
            <?php echo $clanInfo_json['requiredTrophies']."*" ?>" eingestellt.
            In der Regel wird diese Einstellung(Anzahl) beibehalten. Für aktive
            und langjährige Mitglieder können Ausnahmen gemacht werden, wodurch
            diese dann (weniger starke) Freunde einladen können. Dies muss aber
            mit der Führungsetage abgesprochen werden, damit wir nicht im Chaos
            versinken. <br />Zu jedem Zeitpunkt kann diese Einstellung nach
            oben/unten korrigiert werden! <br />
            *Diese Zahl wird automatisch aus dem Spiel übernommen.
            Dementsprechend ist diese Zahl zu jedem Zeitpunkt aktuell!
          </td>
        </tr>
        <tr>
          <td>§5</td>
          <td>
            Jedes Mitglied hat dafür Sorge zu tragen, dass er/sie die
            Mindestanzahl an Trophäen zu jeglichem Zeitpunkt über (oder gleich)
            der in §4 angesprochenen Zahl hält. Sollte der Spieler
            darunterfallen, dann ist dies per se nicht schlimm, ABER der Spieler
            sollte versuchen, so schnell wie möglich, diese Anzahl zu erreichen,
            um den Clan nicht zu schaden.
          </td>
        </tr>
        <tr style="background: rgba(255, 255, 0, 0);">
          <td></td>
          <td style="background-color: #13528b;">
            <p class="weiß">Kick- und Common-Regeln (Anwärter)</p>
          </td>
        </tr>
        <tr>
          <td>§6</td>
          <td>
            Jeder Anwärter hat eine Trial-Zeit von 2 Monaten. Diese Zeitspanne
            kann angepasst werden, sollte es von Nöten sein. Mitglieder die aus-
            und wieder eintreten, werden mit dieser Trial-Zeit nicht
            konfrontiert, außer sie wurden gekickt.
          </td>
        </tr>
        <tr>
          <td>§6.1</td>
          <td>
            Anwärter, die in der Trial-Zeit an jedem Clan-War teilgenommen
            haben, werden zum "Ältesten" erklärt.
          </td>
        </tr>
        <tr>
          <td>§6.2</td>
          <td>
            Anwärter, die in der Trial-Zeit an einem Clan-War
            -<b>unentschuldigt</b>- nicht teilgenommen haben, werden gekickt.
          </td>
        </tr>
        <tr>
          <td>§6.2</td>
          <td>
            Anwärter, werden gekickt, wenn sie: <br />
            <ul>
              <li>
                am Clan-War-Sammeltag teilnehmen, aber dann nicht am Clan-War
                (absprachen mit der Leitung sind möglich!)
              </li>
              <li>
                am ganzen Clan-War nicht teilgenommen, UND sich nicht abgemeldet
                haben
              </li>
              <li>
                an Clan-War-Tagen mehrfach mit Decks verloren haben, ohne sie
                vorher zu testen
              </li>
              <li>
                (können gekickt werden, wenn sie) am Sammeltag nicht 3/3 Matches
                absolviert haben
              </li>
              <li>
                <b
                  >bei einer gerichteten Tauschanfrage dazwischendrängen ("kick
                  wegen klau")</b
                >
              </li>
            </ul>
          </td>
        </tr>
        <tr style="background: rgba(255, 255, 0, 0);">
          <td></td>
          <td style="background-color: #13528b;">
            <p class="weiß">Kick- und Common-Regeln (Älteste und Vize)</p>
          </td>
        </tr>
        <tr>
          <td>§7</td>
          <td>
            Älteste und Vize-Leader könnnen, nach Regelwerk, ebenfalls
            degradiert werden. Ist dies der Fall, dann werden sie auf die nächst
            kleinere Stufe degradiert. <b>Vize -> Ältester -> Anwärter*.</b>
            <br />*Als Anwärter haben die Mitglieder wieder den 2 monatigen
            Trial-Status
          </td>
        </tr>
        <tr>
          <td>§8</td>
          <td>
            Älteste und Vize werden degradiert, wenn sie <br />
            <ul>
              <li>
                am Clan-War-Sammeltag teilnehmen, aber dann nicht am CW
                (absprachen mit der Leitung sind möglich!)
              </li>
              <li>
                am ganzen Clan-War nicht teilgenommen, UND sich nicht abgemeldet
                haben
              </li>
              <li>
                an Clan-War-Tagen mehrfach mit Decks verloren haben, ohne sie
                vorher zu testen
              </li>
              <li>
                (können degradiert werden, wenn sie) am Sammeltag nicht 3/3
                Matches absolviert haben
              </li>
              <li>
                <b
                  >bei einer gerichteten Tauschanfrage dazwischendrängen ("kick
                  wegen klau")</b
                >
              </li>
            </ul>
          </td>
        </tr>
        <tr style="background: rgba(255, 255, 0, 0);">
          <td></td>
          <td style="background-color: #13528b;">
            <p class="weiß">Weitere Regeln</p>
          </td>
        </tr>
        <tr>
          <td>§9</td>
          <td>
            WICHTIG!!! --> Tauschgeschäfte bitte wie folgt ausführen:
            <ul>
              <li>
                im Chat (oder am besten via LINE) kommunizieren, dass man
                tauschen möchte
              </li>
              <li>
                mit möglichem Tausch-Partner einen genauen Deal absprechen ("wer
                gibt was?")
              </li>
              <li>
                Aktiv tauschender Spieler: beim Erstellen der Tausch-Anfrage
                <b>UNBEDINGT</b> den Namen des Tausch-Mates in das Feld
                schreibn<b>!!!!!!</b>
              </li>
              <li>den Tausch durchführen und sich bedanken! :)</li>
              <li>...</li>
              <li>
                <b
                  >ist die Anfrage nicht mit Namen versehen, dann gilt diese als
                  "Frei"</b
                >
              </li>
            </ul>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
