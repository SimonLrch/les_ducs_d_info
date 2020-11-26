<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $rte =new EJ\RTE("rteSample");
    $rte->templateStart();
    ?>
                  &lt;p&gt;&lt;b&gt;Description:&lt;/b&gt;&lt;/p&gt;
    &lt;p&gt;The Rich Text Editor (RTE) control is an easy to render in
    client side. Customer easy to edit the contents and get the HTML content for
    the displayed content. A rich text editor control provides users with a toolbar
    that helps them to apply rich text formats to the text entered in the text
    area. &lt;/p&gt;
    &lt;p&gt;&lt;b&gt;Functional
    Specifications/Requirements:&lt;/b&gt;&lt;/p&gt;
    &lt;ol&gt;&lt;li&gt;&lt;p&gt;Provide
    the tool bar support, it’s also customizable.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Options
    to get the HTML elements with styles.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Support
    to insert image from a defined path.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Footer
    elements and styles(tag / Element information , Action button (Upload, Cancel))&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Re-size
    the editor support. &lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Provide
    efficient public methods and client side events.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Keyboard
    navigation support.&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;
     <?php
    $rte->templateEnd();
    echo $rte->isResponsive(true)->width("100%")->locale("de-DE")->minWidth("300px")->render();
    ?>
    
    
</div>

<style>
    .cols-sample-area
    {
        width: 750px;
        margin: 0 auto;
        float: none;
    }
    
    #rteSample{
        display: none;
    }
</style>

<script>

        ej.RTE.Locale["de-DE"] = {
            bold: "fett",
            italic: "kursiv",
            underline: "unterstreichen",
            strikethrough: "Durchgestrichen",
            superscript: "Überschrift",
            subscript: "Index",
            justifyCenter: "Text-Zentrum",
            justifyLeft: "Ausrichten von Text links",
            justifyRight: "Ausrichten von Text rechts",
            justifyFull: "rechtfertigen",
            fileBrowser: "Datei-Browser",
            unorderedList: "Legen Sie ungeordnete Liste",
            orderedList: "Geordnete Liste einfügen",
            indent: "Einzug",
            outdent: "Einzug verkleinern",
			cut: "schneiden",
			copy: "Kopieren",
			paste: "Paste",
            undo: "lösen",
            redo: "Wiederherstellen",
			upperCase: "Großbuchstaben",
			lowerCase: "Kleinbuchstaben",
            clearAll: "Alles",
            clearFormat: "Klar Format",
            createLink: "Einfügen / Hyperlink Bearbeiten",
			removeLink:"fjern Hyperlink",
			tableProperties: "Tabelleneigenschaften",
			insertTable: "Einfügen",
			deleteTables: "Löschen",
			imageProperties: "Bildeigenschaften",
			openLink: "Verbindung öffnen",
            image: "Bild einfügen",
            video: "Legen Video",
            embedVideo: "Fügen Sie den Embed-Code unten",
            viewHtml: "Blick HTML",
			fontName: "Wählen Sie Schriftfamilie",
			fontSize: "Wählen Sie Schriftgröße",
			fontColor: "Wählen Sie die Farbe",
            format: "Format",
			backgroundColor: "Hintergrundfarbe",
			style: "Styles",
            deleteAlert: "Sind Sie sicher, dass Sie alle Inhalte löschen?",
			copyAlert: "Ihr Browser unterstützt leider keinen direkten Zugriff auf die Zwischenablage. Bitte verwenden Sie die Ctrl + C -Tastatur statt Kopiervorgang Verknüpfung .",
			pasteAlert:"Ihr Browser unterstützt leider keinen direkten Zugriff auf die Zwischenablage. Bitte verwenden Sie die Ctrl + V Tastenkombination statt Einfügen.",
			cutAlert:"Ihr Browser unterstützt leider keinen direkten Zugriff auf die Zwischenablage. Bitte verwenden Sie die Ctrl + X Tastenkombination statt Schneidevorgang.",
            videoError: "Der Textbereich darf nicht leer sein",
            imageWebUrl: "Webadresse",
            imageAltText: "Bildbeschreibung",
            dimensions: "Größe",
            constrainProportions: "Proportionen",
            linkWebUrl: "Webadresse",
            linkText: "Text",
            linkTooltipLabel: "Tooltip",
            html5Support: "Dieses Werkzeug-Symbol nur in HTML5 aktiviert unterstützten Browser",
            linkOpenInNewWindow: "Link in einem neuen Fenster",
            tableColumns: "Spalten",
            tableRows: "Zeilen",
            solid: "solide",
            dashed: "gestippelde",
            dotted: "stippel",
            doubled: "dubbele",
            buttonApply: "toepassen",
            buttonCancel: "annuleren",
            closeIcon: "dicht",
            tableWidth: "Tischbreite",
            tableHeight: "Tischhöhe",
            tableCellSpacing: "Zellenabstand",
            tableCellPadding: "Zellauffüllung",
            tableBorder: "Grenze",
            tableCaption: "Beschriftung",
            tableAlignment: "Ausrichtung",
            dialogUpdate: "Aktualisierung",
            dialogInsert: "einfügen",
            dialogCancel: "stornieren",
            dialogOk: "Ok",
            createTable: "Tabelle erstellen",
            addColumnLeft: "Spalte links hinzufügen",
            addColumnRight: "In Spalte auf der rechten",
            addRowAbove: "Zeile hinzufügen oben",
            addRowBelow: "Zeile hinzufügen unten",
            deleteRow: "Löschen Sie die Zeile",
            deleteColumn: "Löschen Sie die Spalte",
            deleteTable: "Löschen Sie die Tabelle",
			insertTable:"Einfügen",
            customTable: "von benutzerdefinierten Tabelle",
            characters: "Charaktere",
            dialogApply: "anwenden",
            textAlign: "Text ausrichten",
            imageLink: "Bild als Link zu",
            imageBorder: "Bild Rand",
            imageStyle: "Stil",
            editTable: "Tabelle Eigenschaften bearbeiten",
			words: "Wörter",
            general: "allgemein",
            advanced: "fortgeschritten",
            table: "Tisch",
            row: "Reihe",
            column: "Spalte",
            cell: "Zelle",
			maximize:"Maximieren",
		    resize: "Minimieren",
			swatches: "Farbfelder",
			paragraph:"Absatz",
		    quotation:"Zitat",
		    heading1:"Kopf 1",
		    heading2:"Kopf 2",
		    heading3:"Kopf 3",
		    heading4:"Kopf 4",
		    heading5:"Kopf 5",
		    heading6:"Kopf 6",
			disc:"Scheibe",
		    circle:"Kreis",
		    square:"Platz",
		    number:"Anzahl",
		    loweralpha:"Lower Alpha",
		    upperalpha:"Ober Alpha",
		    lowerroman:"Lower Roman",
		    upperroman:"Ober Roman",
		    none:"Keine",
			linkTooltip:"ctrl + Klick Link zu folgen",
			charSpace: "Zeichen (mit Leerzeichen )",
			charNoSpace: "Zeichen (ohne Leerzeichen)",
			wordCount: "Wortzahl",
			right:"Recht",
			left:"links",
			center:"Center",
			FindAndReplace:"Suchen und Ersetzen",
			Find:"Finden",
			MatchCase:"Kleinschreibung",
			WholeWord:"Ganze Welt",	
			ReplaceWith:"Ersetzen mit",		
			Replace:"Ersetzen",
			ReplaceAll:"Alles ersetzen",
			FindErrorMsg:"Konnte den angegebenen Wort gefunden .",
			customFontColor:"Mehr Farben...",
		    customBGColor:"Mehr Farben...",
			TransBGColor:"Transparent",
			w:"W",
		    c:"C"
			
			
        };
</script>