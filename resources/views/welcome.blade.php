@extends('app')

@section('content')

<div class="container">

    <div class="col-md-3">
        <ol class="breadcrumb">
            <li><a href="{{ url('home') }}">Home</a></li>


        </ol>


    </div>
</div>

<div class="container">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Herzlich Willkommen</div>
<div class="panel-body">
    <div class="col-md-9">
        <p>WHasnillkommen  auf den Seiten der Examensanalyse Medizin Essen!</p>
        <p>Auf den folgenden Seiten finden Sie Informationen über die Examensfragen des Zweiten Abschnitts der Ärztlichen Prüfung. Derzeit (Stand: September 2015) befinden sich alle Examensfragen der Examina Herbst 2006 bis Herbst 2013 in unserer Datenbank.
        </p>

        <p>Die Funktionen für Lehrende sind passwortgeschützt. Für einen Zugang kontaktieren Sie bitte <a href="mailto:sophia.falke@uk-essen.de">sophia.falke@uk-essen.de</a>

        <p>
            Falls Sie bereits einen Zugang besitzen kommen Sie <a href="{{ url('startseite_dozent') }}">hier </a>zu weiteren Funktionen.
        </p>
    </div>


    <div class="col-md-3"><img src="{{asset('/img/EXAME.JPG')}}" width="150" height="190">
    </div>
    <div class="col-md-12">

        <h2> Über das Projekt EXAME</h2>
        <p>   Die Examensanalyse ist ein inhaltlich aufbereitetes Angebot, das Lehrbeauftragten der Medizinischen Fakultät der Universität Duisburg-Essen als
        <ul><li>fachbezogene Leistungsrückmeldung der Studierenden der Universität Duisburg-Essen,</li>
            <li> Informationen über die Fragenhäufigkeit und damit inhaltliche Akzentuierung von Krankheitsbildern des Gegenstandskataloges,</li>
            <li> Information über die Fragenanzahl zum eigenen Fachgebiet pro Examen und</li>
            <li> Informationen über die Abweichung vom Schwierigkeitsgrad der Medizinischen Fakultät Duisburg-Essen im Vergleich zum Bundesdurchschnitt</li>
        </ul>
        dienen.
        Die Informationen aus der Analyse werden als graphische Darstellung in der Längsschnittanalyse oder in tabellarischer Form in der Fragensammlung bereit gestellt. Für weitere Informationen über inhaltliche Details, Arbeitsschritte und statistische Aufbereitungen
        klicken Sie  <a href="{{ url('ueber') }}">hier</a>




    </div>

    <div class="col-md-4">
        <h2>Funktionen für Dozenten</h2>



        <div class="col-md-6 ">
            <p class="bg-info">

            <div class="topspace"><a href="{{ url('startseite_dozent') }}" class="btn btn-default"><span class="glyphicon glyphicon-education"></span> Zum Login</a></span>
            </div>
        </div>

        <div class="col-md-6">
            <h3>Lehrende</h3>
            <!-- <hr>
             <p><div class="justify">Fragensammlung alter Examina, Längsschnittanalyse und weiteres.</p></div>
         <hr>
         <a href="{{ url('startseite_dozent') }}">Zu den Funktionen</a> -->
        </div>

        </p>

    </div>
    <!--  <div class="col-md-4">
         <h2>Funktionen für Mitarbeiter</h2>
         <div class="col-md-6">


             <div class="topspace"><a href="{{ url('eingabe') }}" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> Mitarbeiter</a></span>
             </div>
         </div>

         <div class="col-md-6">
             <h3>Mitarbeiter</h3>
             <p></p>




         </div>

     </div>

     <div class="col-md-4">
         <h2>Funktionen für Admins</h2>
         <div class="col-md-6">


             <div class="topspace"><a href="{{ url('admin') }}" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Admin</a></span>
             </div>
         </div>

         <div class="col-md-6">
             <h3>Admin</h3>


         </div>


     </div> -->



</div>


<a name="ueber"></a>

<h1>Über die Arbeit von Exame</h1>

<!--  <div class="col-md-3" >

     <!-- Sidebar left

     <div class="panel panel-default">
         <div class="panel-heading">Menü</div>
         <div class="panel-body-height standard">
             <p> <a href="{{ url('home') }}"> <button type="button" class="btn btn-primary btn-lg btn-block btn-sm">Home</button></a></p>
             <p> <a href="{{ url('ueberuns') }}"> <button type="button" class="btn btn-primary btn-lg btn-block btn-sm">Über Uns</button></a></p>


         </div>
     </div>

 </div>-->
<div class="col-md-12">


<!-- main content -->



<div class="panel panel-default">
    <div class="panel-heading">Über die Arbeit von Exame</div>
    <div class="panel-body">
        <p class="middle">
        <p>Die Examensanalyse an der Medizinischen Fakultät der Universität Duisburg-Essen ist ein deutschlandweit einmaliges Projekt und ein exklusives Angebot für Lehrende vor Ort.

        <h3> Zielsetzung</h3>
        Die Daten aus der Examensanalyse
        <ul><li>treffen Aussagen über den Leistungsverlauf Essener Prüflinge im Examen</li>
            <li>geben Hinweise über die qualitativen und quantitativen Themen in einem Examen</li>
            <li> können von Lehrstühlen als Rückmeldung über die Prüfpraxis des IMPPs geben.</li>
            </p>
            <h3>                    Überblick über die Arbeitsschritte</h3>

            <p>
                <img src="../../img/arbeitsschritte.png" class="img-responsive" alt="Arbeitsschritte">
            </p>
            <p>Die Examensanalyse fasst Ergebnisse aus der Qualitätsbeurteilung des IMPP und inhaltliche Aufbereitungen der Examensfragen zusammen. Die Zuteilung der Examensfragen berücksichtigt sowohl den Fächerkanon, der in §27 ÄAppO

                <a href="#meinModal" data-toggle="modal">*</a>, als auch die Lehrstrukturen an der Medizinischen Fakultät der Universität Duisburg-Essen. Die Weitergabe der Informationen erfolgt seit Oktober 2015 über eine Website. Hier können Lehrende die gesuchten Informationen nach eigenen Kriterien selbst zusammenstellen.
            </p>
            <div class="modal fade" id="meinModal" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="meinModalLabel">Zitat</h4>
                        </div>

                        <div class="modal-body">
                            *Approbationsordnung für Ärzte vom 27. Juni 2002 (BGBl. I S. 2405), die durch
                            Artikel 4 der Verordnung vom 17. Juli 2012 (BGBl. I S. 1539) geändert worden ist

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <img src="../../img/Quellen.png" class="img-responsive" alt="Quellen"></div>
            <div class="col-md-9"><h3> EXAME nutzt Informationen aus verschiedenen Quellen</h3>

                <p> Die Itemanalyse stellt verschiedene deskriptivstatistische Daten zur Verfügung:</p>
                <ul>
                    <li> Unterscheidung des Fragetyps: Einzelfrage, Fallstudie
                    <li><b>Schwierigkeitsgrad in Prozent in der Hochschule</li>

                    <li> Abweichung vom Bundesgebiet</b></li>
                    <li>  davon statistisch signifikante Abweichungen (Signifikanzniveau 5%/1%)</li>
                    <li> Trennschärfeindex in der Hochschule, bezogen auf die Punktzahl im Examen</li>
                    <li>eliminierte Aufgaben</li>
                </ul>

                <p>  Der Schwierigkeitsgrad ist eine Angabe in Prozent. Er zeigt an, welcher Anteil der hochschuleigenen Prüflinge die jeweilige Examensfrage korrekt beantwortet haben.
                    Die Abweichung des Schwierigkeitsgrads der hochschuleigenen Prüflinge vom Bundesgebiet ist die Differenz, die positive (die Hochschule war besser) oder negative (die Hochschule war schlechter) Werte annehmen kann.
                    In der Examensanalyse wird die Abweichung als Differenzwert - abgekürzt: Differenz - mit der inhaltlichen Aufarbeitung jeder Frage verknüpft.</p>

                <p style="color:red">Differenz [%] = richtige Antworten Uni Essen [%] - richtige Antworten Bundesdurchschnitt [%]</p>

            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <p>Vom <b>IMPP</b> bereitgestellte Informationen</p>
                    <ul>
                        <li>Originalfragen</li>
                        <li>Itemanalyse</li>
                        <li>Schwierigkeitsgrad</li>
                    </ul>


                </div>

                <div class="col-md-6">
                    <p>Von <b>EXAME</b> erstellte Inhalte:</p>
                    <ul>
                        <li>Zuordnung jeder Fragen in einen Fachkatalog</li>
                        <li>Kernaussage jeder Frage</li>

                    </ul>


                </div>

            </div>


            <div class="col-md-12">


                <img src="../../img/gpfeil.png" class="img-responsive" alt="Pfeil">


            </div>

            <div class="col-md-12">

                <h2>Exame Datenbank</h2>
            </div>
            <div class="col-md-12">

                <div class="col-md-3">
                    <img src="../../img/Exame_DB.png" class="img-responsive" alt="Struktur">

                </div>

                <div class="col-md-9">
                    <h2> Die Fächer-Struktur in der EXAME-Datenbank</h2>

                    <p>Alle Examensfragen werden einem Fachkatalog zugeordnet. Die Struktur des Fachkatalog</p>

                    <ul>

                        <li>orientiert sich an der derzeit gültigen Approbationsordnung, §27 „Zulassung zum Zweiten Abschnitt der Ärztlichen Prüfung“.</li>
                        <li>Es erfolgt eine stetige Aktualisierung der Datenbank bei Novellierungen der Approbationsordnung (Schmerzmedizin, Palliativmedizin).</li>
                        <li>ist für eine höhere Differenzierung der Themen weiterhin in Oberthemen, Unterthemen und Themen gegliedert. Als Grundlage dient das Inhaltsverzeichnis des Exaplan, 7. Auflage, 2011.</li>
                        <li>Medizinischer Fortschritt sowie inhaltliche Verlagerungen bei den Examensfragen werden in eventuell neue Kategorien eingearbeitet werden.</li>
                        <li>Stetige Überprüfung, ob der Katalog der Lehrpraxis an der Universität entspricht.</li>


                    </ul>

                </div>

            </div>

            <div class="col-md-12">

                <p>Zur weiteren strukturellen Differenzierung ist der Fächerkatalog zusätzlich in Ober- und Unterthemen unterteilt. Jede Examensfrage wird somit nicht nur einem Fach, sondern je nach inhaltlichem Schwerpunkt einem Ober- und Unterthema zugeteilt. Die einzelnen Strukturen sind hierarchisch geordnet; hier ein beispielhafter Aufbau:
                </p>


                <img src="../../img/Exame_struktur.png" class="img-responsive" alt="Struktur">

                <h2>Der Fächerkatalog beinhaltet zur Zeit folgende Kategorien:</h2>


                <img src="../../img/faecherkatalog.png" class="img-responsive" alt="faecher">

                <h2> Die Zuteilung einer Examensfragen zu einem oder mehreren Fach / Fächern</h2>
                <p>Inhaltlich können Examensfragen Lehrinhalte unterschiedlicher Fächer betreffen. Wird beispielsweise eine Multiple Choice-Frage zur medikamentösen Behandlung eines Myokardinfarktes behandelt, so ist eine Zuteilung dieser Examensfrage zum Fach "Herz und Gefäße" als auch "Klinische Pharmakologie" denkbar.
                    Diesem Umstand begegnen wir mit einer möglichen Mehrfachzuordnung. In unserer Datenbank kann eine Examensfrage wird mindestens einem Fach und maximal drei Fächern zugeteilt.</p>

                <h2> Die Kernaussage</h2>
                <p> Die EXAME-Datenbank enthält keine originalen Examensfragen, sondern Kernaussagen. Die Kernaussagen</p>
                <ul>

                    <li>enthalten nur die Informationen einer Examensfrage, die zur richtigen Beantwortung relevant sind</li>
                    <li>werden anhand einer wiederkehrenden Terminologie erstellt</li>
                    <li>haben alle ein einheitliches Layout.</li>

                </ul>

                <p>  In Ihrer individuellen Analyse erhalten Sie somit einen strukturierten Überblick über die Prüfungsinhalte. Die in den Examensfragen enthaltenen Distraktoren sollen möglichst aus der Dozentenanalyse fern bleiben. Die Kernaussagen enthalten also die Informationen, die für die Planung von Lehrveranstaltung von inhaltlicher Relevanz sind.</p>





            </div>




    </div>

</div>

<div class="col-md-12">

    <a name="ueberuns"></a>

    <h1> Über Uns</h1>
    <!-- main content -->
    <div class="panel panel-default">
        <div class="panel-heading">Über das Projekt EXAME
        </div>
        <div class="panel-body">
            <p>Die Examensanalyse ist ein inhaltlich aufbereitetes Angebot, das Lehrbeauftragten der Medizinischen Fakultät der Universität Duisburg-Essen als:</p>
            <ul>
                <li>fachbezogene Leistungsrückmeldung der Studierenden der Universität Duisburg-Essen,</li>
                <li> Informationen über die Fragenhäufigkeit und damit inhaltliche Akzentuierung von Krankheitsbildern des Gegenstandskataloges,</li>
                <li>Information über die Fragenanzahl zum eigenen Fachgebiet pro Examen und</li>
                <li>Informationen über die Abweichung vom Schwierigkeitsgrad der Medizinischen Fakultät Duisburg-Essen im Vergleich zum Bundesdurchschnitt</li>


            </ul>
            <p> dienen.</p>
            <p>Die Informationen aus der Analyse werden als graphische Darstellung in der <a href="{{ url('laengsschnitt') }}">Längsschnittanalyse</a> oder in tabellarischer Form in der  <a href="{{ url('fragensammlung') }}">Fragensammlung </a> bereit gestellt.
                Für weitere Informationen über inhaltliche Details, Arbeitsschritte und statistische Aufbereitungen klicken Sie <a href="{{ url('ueber') }}"> hier </a></p>




            </p>






        </div>


    </div>



    <div class="panel panel-default">
        <div class="panel-heading">Über das Team</div>
        <div class="panel-body-height standard">
            <p class="middle">
                Die <b>Ex</b>amens<b>a</b>nalyse <b>M</b>edizin <b>E</b>ssen (EXAME) ist ein Projekt des Studiendekanats der Medizinischen Fakultät der Universität Duisburg-Essen. Seit 2010 arbeiteten bereits mehrere Ärzte und studentische Hilfskräfte an der Erstellung und dem kontinuierlichen Ausbau von EXAME.
                Die Website und die EDV-technische Aufbereitung der bereits bestehenden Analyse ist das derzeit neueste Projekt, das durch die Medizinische Fakultät finanziert wurde.
            <p> An der Umsetzung des Projekts waren folgende Personen beteiligt:</p>

            <div class="col-md-6">

                <ul> <h2>Ärztliche Mitarbeiter:</h2>




                    <li><a href="{{ url('falke') }}"> Sophia Falke</a></li>
                    <li><a href="{{ url('herbstreit') }}">  Dr. med. Stephanie Herbstreit</a></li>
                </ul></div>
            <div class="col-md-6">
                <ul> <h2> Mitarbeiter des Studiendekanats:</h2>
                    <li><a href="{{ url('maeker') }}"> Daniela Mäker</a></li>
                    <li><a href="{{ url('heue') }}">Matthias Heue</a></li> </ul></div>
            <div class="col-md-6">
                <ul>  <h2>IT-Entwicklung</h2>

                    <li><a href="{{ url('sajad') }}">Sajad Ghawami</a></li>
                    <li><a href="{{ url('philipp') }}">Philipp Knühmann</a></li> </ul></div>
            <div class="col-md-6">
                <ul> <h2> Studentische Hilfskräfte:</h2>
                    <li><a href="{{ url('afhueppe') }}"> Nora Afhueppe</a></li>
                    <li><a href="{{ url('cordes') }}"> Sebastian Cordes</a></li>
                    <li><a href="{{ url('daginus') }}"> Alina Daginnus</a></li>
                    <li><a href="{{ url('hellmich') }}"> Marleen Hellmich</a></li> </ul>

            </div>

            <div class="col-md-12">
                Sollten Sie Fragen oder Anregungen zu EXAME haben, bitten wir Sie um Kontaktaufnahme unter <a href="mailto:sophia.falke@uk-essen.de" title="E-Mail schreiben"> sophia.falke@uk-essen.de</a>.

            </div>





        </div>


    </div>

</div>

</div>



</div>


</div>

</div>

</div>
</div>






@endsection

