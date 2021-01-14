function Calendar(element, initDate) {
    this.date = (initDate==null) ? new Date(1400, 0) : initDate;

    //date a afficher
    this.day = this.date.getDate();
    this.month = this.date.getMonth();
    this.year = this.date.getFullYear();

    this.dateSelected = null;
    
    this.listDaysContent = null;
    
    this.listDays = [
        "Lundi",
        "Mardi",
        "Mercredi",
        "Jeudi",
        "Vendredi",
        "Samedi",
        "Dimanche",
    ];

    this.listMonths = [
        "Janvier",
        "Février",
        "Mars",
        "Avril",
        "Mai",
        "Juin",
        "Juillet",
        "Août",
        "Septembre",
        "Octobre",
        "Novembre",
        "Décembre",
    ];

    //L'élément où on insère le calendrier
    this.docElement = document.querySelector(element);

    //On crée les elements du calendrier
    this.calendarMainContainer = document.createElement("div");

    this.calendarHeaderContainer = document.createElement("div");
    this.calendarTitle = document.createElement("h3");
    this.calendarPreviousButton = document.createElement("button");
    this.calendarNextButton = document.createElement("button");

    this.calendarDateContainer = document.createElement("div");
    this.calendarGridMonths = document.createElement("div");

    this.calendarDetailsContainer = document.createElement("div");

    this.calendarMainContainer.id = "calendar-main";
    this.calendarHeaderContainer.id = "calendar-header";
    this.calendarTitle.id = "calendar-title";
    this.calendarPreviousButton.id = "calendar-previous-btn";
    this.calendarNextButton.id = "calendar-next-btn";
    this.calendarDateContainer.id = "calendar-date-container";
    this.calendarGridMonths.id = "calendar-grid-months";
    this.calendarDetailsContainer.id = "calendar-date-details";

    //On initialise tout
    this.initCalendar();
    this.initHeader();
    this.initGrid();

    this.docElement.appendChild(this.calendarMainContainer);
}

/**
 * Initialise le calendrier (evenements)
 */
Calendar.prototype.initCalendar = function() {
    //Evénement de lorsqu'on clique sur un mois
    this.calendarGridMonths.addEventListener("click", (event) => {
        let item = event.target;

        //On vérifie si l'élément qu'on a séléctionné est bien une date (un jour) et que ce n'est pas une date vide (pour l'esthétisme)
        if (item.nodeName == this.calendarGridMonths.children[0].children[1].children[0].nodeName && !item.classList.contains("calendar-date-null")) {
            //On enlève la selection sur l'élément qui était précedemment selectionné
            Array.from(document.querySelectorAll(".calendar-selected")).forEach(element => element.classList.remove("calendar-selected"));

            item.classList.add("calendar-selected");

            //On prends la date de l'élément
            let dateTimeHtml = item.dateTime.split("-");
            this.dateSelected = new Date(dateTimeHtml[0], parseInt(dateTimeHtml[1])-1, dateTimeHtml[2]);

            this.getInfoDate(this.dateSelected);
        }
    });
}

/**
 * On initialise l'en-tête (la barre avec l'année)
 */
Calendar.prototype.initHeader = function() {
    //On s'assure que l'élément principal est vide
    this.calendarHeaderContainer.innerHTML = "";

    //On crée le titre
    this.calendarTitle.innerText = "Année " + this.year;
    
    this.calendarHeaderContainer.appendChild(this.calendarTitle);

    this.calendarMainContainer.appendChild(this.calendarHeaderContainer);
}

Calendar.prototype.initGrid = function() {
    //On s'assure que l'élément principal est vide
    this.calendarGridMonths.innerHTML = "";

    //On fait une boucle du nombre de mois que l'on affiche
    for (let monthCount = 0; monthCount < 12; monthCount++) {
        //On dessine un mois
        let listOfDaysGrid = this.drawMonth(this.month+monthCount, this.year);
        let calendarGridDays = document.createElement("div");
        listOfDaysGrid.forEach(day => {
            calendarGridDays.appendChild(day);
        });
        calendarGridDays.classList.add("calendar-grid");

        let calendarMonthTot = document.createElement("div");
        calendarMonthTot.classList.add("calendar-month-container");

        let calendarMonthTitle = document.createElement("div");
        calendarMonthTitle.classList.add("calendar-month-title");
        calendarMonthTitle.innerText = this.listMonths[this.month+monthCount];
        
        calendarMonthTot.appendChild(calendarMonthTitle);
        calendarMonthTot.appendChild(calendarGridDays);

        this.calendarGridMonths.appendChild(calendarMonthTot);

        this.showDatesOfMonth(this.month+monthCount, this.year);
    }
    this.calendarMainContainer.appendChild(this.calendarGridMonths);
}

/**
 * Renvoie l'affichage d'un mois
 * @param {int} month Mois que l'on veut récupérer
 * @param {int} year Année du mois que l'on veut récupérer
 * @return l'affichage du mois
 */
Calendar.prototype.drawMonth = function(month, year) {
    let daysToShow = this.getDaysOfMonth(month, year);

    //On prends le premier jour du mois
    let firstDay = daysToShow[0].getDay();
    //On converti les Dimanche en numéro 7 (car de base : Dimanche=0)
    firstDay = firstDay == 0 ? 7 : firstDay;

    //On ajoute des éléments null pour mettre des espaces devant le premier jour
    daysToShow = Array(firstDay-1).fill(null).concat(daysToShow);

    let calendarGridFinal = [];
    
    //On récupère tous les jours à afficher
    daysToShow.forEach(day => {
        let dayElt = document.createElement("time");

        //Si le jours correspond bien à un jour (pas les espaces devant le premier jours)
        if (day != null) {
            //S'il y a une date de séléctionné et que c'est la date du jours (du foreach)
            if (this.dateSelected != null && this.dateSelected.toString() == day.toString()) {
                //On ajoute la classe qui indique si c'est séléctionné à la date courante (du foreach)
                dayElt.classList.add("calendar-selected");
            }

            //On ajoute la date au contenu et en attribut (attribut de la balise <time>)
            let dayString = day.toString().split(" ")[2];
            dayElt.innerText = dayString;
            dayElt.setAttribute("datetime", this.getDateText(new Date(year, month, dayString)));
        }
        else {
            dayElt.classList.add("calendar-date-null");
        }
        calendarGridFinal.push(dayElt);
    });
    return calendarGridFinal;
}

/**
 * Donne chaque jour du mois et de l'année indiqué
 * @param {int} month numéro du mois désiré
 * @param {int} year numéro de l'année désiré
 * @return liste contenant des objets date de chaque jours du mois
 */
Calendar.prototype.getDaysOfMonth = function(month, year) {
    let listOfDays = [];
    let date = new Date(year, month, 1);

    while (date.getMonth() === month) {
        listOfDays.push(new Date(date));
        date.setDate(date.getDate() + 1);
    }
    return listOfDays;
}

/**
 * Donne la date sous forme de texte, rajoute des 0 et des tirets (ex -> "08-01-1400")
 * @param {Date} date date à récupérer
 */
Calendar.prototype.getDateText = function (date) {
    let dayAsText = (date.getDate()<10) ? "0"+date.getDate() : ""+date.getDate();
    let monthAsText = ((date.getMonth()+1)<10) ? "0"+(date.getMonth()+1) : ""+(date.getMonth()+1);
    let yearAsText = ""+date.getFullYear();

    return yearAsText + "-" + monthAsText + "-" + dayAsText;
}

/**
 * Met à jour le graphique (pas les évenements)
 */
Calendar.prototype.update = function() {
    window.requestAnimationFrame(() => {
        this.calendarTitle.innerText = "Année " + this.year;
        this.initGrid();
    });
}

/**
 * Affiche les dates du mois qui contiennent des données (petits ronds)
 * @param {int} month Mois dont on veut afficher l'indication des données
 * @param {int} year Année du mois dont on veut afficher l'indication des données
 */
Calendar.prototype.showDatesOfMonth = function(month, year) {
    const url = "calendarScript.php?currentMonth="+(month+1)+"&currentYear="+year;
    let objCalendar = this;

    //On récupère les données de la bdd (Fonction asynchrone)
    fetch(url).then(function (response) { //Ensuite on récupère les données de la bdd
        return response.json();
    }).then(function(body) { //Ensuite on afficher le résultat
        objCalendar.listDaysContent = body;
        let dayIncrement = 0;
        //On regarde chaque date (élément graphique) du calendrier
        Array.from(objCalendar.calendarGridMonths.children[month].children[1].children).forEach(dayHtml => {
            //On vérifie si l'élément HTML correspond bien a une date
            if (!dayHtml.classList.contains("calendar-date-null")) {
                dayIncrement++;
                let currentDateStr = objCalendar.getDateText(new Date(year, month, dayIncrement));

                //On vérifie si on a la date de l'élément HTML dans notre bdd
                if (body.some(item => item.date == currentDateStr)) {
                   dayHtml.classList.add("calendar-date-content");
                }
            }
        });
    }).catch(function(err) { //En cas d'erreur
        console.error("La bdd n'a pas pu être chargé dans le calendrier : " + err);
    });
}

/**
 * Selectionne et affiche les données de l'année en paramètre
 * @param {int} dateParam date dont on veut récupérer ses données
 */
Calendar.prototype.getInfoDate = function(dateParam) {
    const url = "getDetailsDate.php?currentDay="+dateParam.getDate()+"&currentMonth="+(dateParam.getMonth()+1)+"&currentYear="+dateParam.getFullYear();
    let objCalendar = this;

    //On récupère les données de la bdd (Fonction asynchrone)
    fetch(url).then(function (response) { //Ensuite on récupère les données de la bdd
        return response.json();
    }).then(function(body) { //Ensuite on afficher le résultat

        //On réinitialise les objets déjà affichés
        objCalendar.calendarDetailsContainer.innerHTML = "";

        //On place le titre indiquant la date sélectionné
        let dateTitle = document.createElement("h4");
        dateTitle.innerText = (body.length >= 2) ? "Dons du " : "Don du ";
        dateTitle.innerText += dateParam.getDate() + " " + objCalendar.listMonths[dateParam.getMonth()] + " " + dateParam.getFullYear();
        objCalendar.calendarDetailsContainer.appendChild(dateTitle);

        //Si on a trouvé au moins une donnée
        if (body.length > 0) {
            //Pour chaque don trouvé on crée l'html pour afficher le don
            Array.from(body).forEach(elt => {
                let detailsContainer = document.createElement("div");

                let detailsTitle = document.createElement("h4");
                detailsTitle.innerHTML = "Don de <a href=\"../Afficher_don.php?id=" + elt.auteurId + "\">" + elt.auteur + "</a>";
                detailsTitle.innerHTML += "à <a href=\"../Afficher_don.php?id=" + elt.beneficiaireId + "\">" + elt.beneficiaire + "</a>";
                detailsContainer.appendChild(detailsTitle);

                let detailsTextContainer = document.createElement("div");
                function createSpanElt(innerText) {
                    let spanElt = document.createElement("span");
                    spanElt.innerText = innerText;
                    detailsTextContainer.appendChild(spanElt);
                }
                createSpanElt("Forme : " + elt.forme);
                createSpanElt("Valeur : " + elt.valeur);
                createSpanElt("Nature : " + elt.nature);
                createSpanElt("Lieu : " + elt.lieu);
                createSpanElt("Source : " + elt.source);
                detailsContainer.appendChild(detailsTextContainer);

                objCalendar.calendarDetailsContainer.appendChild(detailsContainer);
            });
        }
        //Sinon si on ne trouve rien on affiche à l'utilisateur que l'on a rien trouvé
        else {
            let detailsContainer = document.createElement("div");

            let detailsTitle = document.createElement("h4");
            detailsTitle.innerText = "Il n'y a pas de don effectué sur cette date";
            detailsContainer.appendChild(detailsTitle);

            objCalendar.calendarDetailsContainer.appendChild(detailsContainer);
        }
        objCalendar.docElement.appendChild(objCalendar.calendarDetailsContainer);
    }).catch(function(err) { //En cas d'erreur
        console.error("La bdd n'a pas pu être chargé à la date indiqué : " + err);
    });
}