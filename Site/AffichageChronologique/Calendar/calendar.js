function Calendar(element, initDate) {
    this.date = (initDate==null) ? new Date() : initDate;

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

    this.initCalendar();
    this.initHeader();
    this.initGrid();

    this.docElement.appendChild(this.calendarMainContainer);
}

Calendar.prototype.initCalendar = function() {
    let objCalendar = this;
    this.calendarGridMonths.addEventListener("click", function(event) {
        let item = event.target;
        if (item.nodeName == objCalendar.calendarGridMonths.children[0].children[1].children[0].nodeName && !item.classList.contains("calendar-date-null")) {
            Array.from(document.querySelectorAll(".calendar-selected")).forEach(element => element.classList.remove("calendar-selected"));
            item.classList.add("calendar-selected");
            let dateTimeHtml = item.dateTime.split("-");
            objCalendar.dateSelected = new Date(dateTimeHtml[0], parseInt(dateTimeHtml[1])-1, dateTimeHtml[2]);
            objCalendar.getInfoDate(objCalendar.dateSelected);
        }
    });
}

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

Calendar.prototype.drawMonth = function(month, year) {
    let daysToShow = this.getDaysOfMonth(month, year);

    //On prends le premier jour du mois
    let firstDay = daysToShow[0].getDay();
    //On converti les Dimanche en numéro 7 (car de base : Dimanche=0)
    firstDay = firstDay == 0 ? 7 : firstDay;

    //On ajoute des éléments null pour mettre des espaces devant le premier jour
    daysToShow = Array(firstDay-1).fill(null).concat(daysToShow);

    let calendarGridFinal = [];
    
    daysToShow.forEach(day => {
        let dayElt = document.createElement("time");
        if (day != null) {
            if (this.dateSelected != null) {
                if (this.dateSelected.toString() == day.toString()) {
                    dayElt.classList.add("calendar-selected");
                }
            }
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

Calendar.prototype.getDateText = function (date) {
    // Setting current date as readable text.
    let dayAsText = (date.getDate()<10) ? "0"+date.getDate() : ""+date.getDate();
    let monthAsText = ((date.getMonth()+1)<10) ? "0"+(date.getMonth()+1) : ""+(date.getMonth()+1);
    let yearAsText = ""+date.getFullYear();

    return yearAsText + "-" + monthAsText + "-" + dayAsText;
}

Calendar.prototype.update = function() {
    let objCalendar = this;
    window.requestAnimationFrame(function() {
        objCalendar.calendarTitle.innerText = "Année " + objCalendar.year;
        objCalendar.initGrid();
    });
}

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

Calendar.prototype.getInfoDate = function(dateParam) {
    const url = "getDetailsDate.php?currentDay="+dateParam.getDate()+"&currentMonth="+(dateParam.getMonth()+1)+"&currentYear="+dateParam.getFullYear();
    let objCalendar = this;

    //On récupère les données de la bdd (Fonction asynchrone)
    fetch(url).then(function (response) { //Ensuite on récupère les données de la bdd
        return response.json();
    }).then(function(body) { //Ensuite on afficher le résultat
        console.log("getInfoDate : ");
        console.log(body);

        //On réinitialise les objets déjà affichés
        objCalendar.calendarDetailsContainer.innerHTML = "";

        //On place le titre indiquant la date sélectionné
        let dateTitle = document.createElement("h4");
        dateTitle.innerText = (body.length >= 2) ? "Dons du " : "Don du ";
        dateTitle.innerText += dateParam.getDate() + " " + objCalendar.listMonths[dateParam.getMonth()] + " " + dateParam.getFullYear();
        objCalendar.calendarDetailsContainer.appendChild(dateTitle);

        if (body.length != 0) {
            //Pour chaque don trouvé
            Array.from(body).forEach(elt => {
                let detailsContainer = document.createElement("div");

                let detailsTitle = document.createElement("h4");
                detailsTitle.innerText = "Don de " + elt.auteur + " à " + elt.beneficiaire;
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