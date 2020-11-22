function Calendar(element, initDate) {
    this.date = new Date();

    this.day = this.date.getDate();
    this.month = this.date.getMonth();
    this.year = this.date.getFullYear();

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

    this.calendarMainContainer.id = "calendar-main";
    this.calendarHeaderContainer.id = "calendar-header";
    this.calendarTitle.id = "calendar-title";
    this.calendarPreviousButton.id = "calendar-previous-btn";
    this.calendarNextButton.id = "calendar-previous-btn";
    this.calendarDateContainer.id = "calendar-date-container";
    this.calendarGridDays.id = "calendar-grid";

    this.initHeader();
    this.initGrid();

    this.docElement.appendChild(this.calendarMainContainer);
}

Calendar.prototype.initHeader = function() {
    //On s'assure que l'élément principal est vide
    this.calendarHeaderContainer.innerHTML = "";

    this.calendarTitle.innerText = this.listMonths[this.month] + " " + this.year;
    this.calendarHeaderContainer.appendChild(this.calendarTitle);
    
    let arrowSVG = "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\"><path d=\"M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z\"/></svg>";
    this.calendarPreviousButton.innerHTML = arrowSVG;
    
    this.calendarHeaderContainer.appendChild(this.calendarPreviousButton);

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