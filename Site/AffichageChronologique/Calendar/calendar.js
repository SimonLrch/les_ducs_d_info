function Calendar(element, initDate) {
    this.date = (initDate==null) ? new Date() : initDate;

    this.day = this.date.getDate();
    this.month = this.date.getMonth();
    this.year = this.date.getFullYear();

    this.dateSelected = this.date;
    
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
    this.calendarGridDays = document.createElement("div");

    this.calendarDetailsContainer = document.createElement("div");

    this.calendarMainContainer.id = "calendar-main";
    this.calendarHeaderContainer.id = "calendar-header";
    this.calendarTitle.id = "calendar-title";
    this.calendarPreviousButton.id = "calendar-previous-btn";
    this.calendarNextButton.id = "calendar-next-btn";
    this.calendarDateContainer.id = "calendar-date-container";
    this.calendarGridDays.id = "calendar-grid";
    this.calendarDetailsContainer.id = "calendar-date-details";

    this.initCalendar();
    this.initHeader();
    this.initGrid();
    this.showDates(this.month, this.year);

    this.docElement.appendChild(this.calendarMainContainer);
}

Calendar.prototype.initCalendar = function() {
    let objCalendar = this;
    this.calendarGridDays.addEventListener("click", function(event) {
        let item = event.target;
        if (item.nodeName == objCalendar.calendarGridDays.children[0].nodeName && !item.classList.contains("calendar-date-null")) {
            Array.from(document.querySelectorAll(".calendar-selected")).forEach(element => element.classList.remove("calendar-selected"));
            item.classList.add("calendar-selected");
            objCalendar.dateSelected = new Date(objCalendar.year, objCalendar.month, item.innerText);
            objCalendar.getInfoDate(objCalendar.dateSelected);
        }
    });
}

Calendar.prototype.initHeader = function() {
    //On s'assure que l'élément principal est vide
    this.calendarHeaderContainer.innerHTML = "";

    //On crée le titre
    this.calendarTitle.innerText = this.listMonths[this.month] + " " + this.year;
    
    //On crée les boutons de changement de mois
    let arrowSVG = '<svg enable-background=\"new 0 0 386.257 386.257" viewBox="0 0 492 492" xmlns="http://www.w3.org/2000/svg"><path d="M198.608 246.104L382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"></path></svg>';
    this.calendarPreviousButton.innerHTML = arrowSVG;
    this.calendarNextButton.innerHTML = arrowSVG;
    let objCalendar = this;
    this.calendarHeaderContainer.addEventListener("click", function(event) {
        let item = event.target;
        if(item.closest("#" + objCalendar.calendarPreviousButton.id) != null) {
            //Si le mois correspond à Janvier
            if (objCalendar.month == 0) {
                objCalendar.month = 11;
                objCalendar.year -= 1;
            } else {
                objCalendar.month -= 1;
            }
            objCalendar.update();
        }
        if(item.closest("#" + objCalendar.calendarNextButton.id) != null) {
            //Si le mois correspond à Décembre
            if (objCalendar.month == 11) {
                objCalendar.month = 0;
                objCalendar.year += 1;
            } else {
                objCalendar.month += 1;
            }
            objCalendar.update();
        }
    });
    
    this.calendarHeaderContainer.appendChild(this.calendarPreviousButton);
    this.calendarHeaderContainer.appendChild(this.calendarTitle);
    this.calendarHeaderContainer.appendChild(this.calendarNextButton);

    this.calendarMainContainer.appendChild(this.calendarHeaderContainer);
}

Calendar.prototype.initGrid = function() {
    //On s'assure que l'élément principal est vide
    this.calendarGridDays.innerHTML = "";

    let daysToShow = this.getDaysOfMonth(this.month, this.year);

    //On prends le premier jour du mois
    let firstDay = daysToShow[0].getDay();
    //On converti les Dimanche en numéro 7 (car de base : Dimanche=0)
    firstDay = firstDay == 0 ? 7 : firstDay;

    //On ajoute des éléments null pour mettre des espaces devant le premier jour
    daysToShow = Array(firstDay-1).fill(null).concat(daysToShow);

    daysToShow.forEach(day => {
        let dayElt = document.createElement("span")
        if (day != null) {
            if (this.dateSelected.toString() == day.toString()) {
                dayElt.classList.add("calendar-selected");
            }
            dayElt.innerText = day.toString().split(' ')[2];
        }
        else {
            dayElt.classList.add("calendar-date-null");
        }
        this.calendarGridDays.appendChild(dayElt);
    });

    this.calendarMainContainer.appendChild(this.calendarGridDays);
}

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
    this.date = new Date(this.year, this.month);
    this.day = this.date.getDate();
    this.month = this.date.getMonth();
    this.year = this.date.getFullYear();
    
    this.showDates(this.month, this.year);

    let objCalendar = this;
    window.requestAnimationFrame(function() {
        objCalendar.calendarTitle.innerText = objCalendar.listMonths[objCalendar.month] + " " + objCalendar.year;
        objCalendar.initGrid();
    });
}

Calendar.prototype.showDates = function(month, year) {
    const url = "calendarScript.php?currentMonth="+(month+1)+"&currentYear="+year;
    let objCalendar = this;

    //On récupère les données de la bdd (Fonction asynchrone)
    fetch(url).then(function (response) { //Ensuite on récupère les données de la bdd
        return response.json();
    }).then(function(body) { //Ensuite on afficher le résultat
        console.log(body);
        objCalendar.listDaysContent = body;
        let increment = 0;
        //On regarde chaque date (élément graphique) du calendrier
        Array.from(objCalendar.calendarGridDays.children).forEach(dayHtml => {
            //On vérifie si l'élément HTML correspond bien a une date
            if (!dayHtml.classList.contains("calendar-date-null")) {
                increment++;
                let currentDateStr = objCalendar.getDateText(new Date(objCalendar.year, objCalendar.month, increment));

                //On vérifie si on a la date de l'élément HTML dans notre bdd
                if (objCalendar.listDaysContent.some(item => item.date == currentDateStr)) {
                    dayHtml.classList.add("calendar-date-content");
                }
            }
        });
    }).catch(function(err) { //En cas d'erreur
        console.error("La bdd n'a pas pu être chargé dans le calendrier : " + err);
    });
}

Calendar.prototype.getInfoDate = function(dateParam) {
    const url = "showDetailsDate.php?currentDay="+dateParam.getDate()+"&currentMonth="+(dateParam.getMonth()+1)+"&currentYear="+dateParam.getFullYear();
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
        dateTitle.innerText = dateParam.toUTCString();
        objCalendar.calendarDetailsContainer.appendChild(dateTitle);

        if (body.length != 0) {
            //Pour chaque don trouvé
            Array.from(body).forEach(elt => {
                let detailsContainer = document.createElement("div");

                let detailsTitle = document.createElement("h4");
                detailsTitle.innerText = elt.id;
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