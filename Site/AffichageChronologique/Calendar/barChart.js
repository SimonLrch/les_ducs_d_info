function BarChart(element, calendar) {
    this.calendar = calendar;
    this.decade = this.getDecadeOfYear(this.calendar.year);

    this.yearSelected = this.calendar.year;

    //Le nombre d'année qu'on affiche en une seul fois
    if (window.innerWidth > 700)
        this.nbYearToShow = 10;
    else {
        this.nbYearToShow = 5;
    }
	this.isWindowSizeSmall = false;

	//L'élément où on insère le graphique
    this.docElement = document.querySelector(element);

    this.barChartMainContainer = document.createElement("div");
    this.barChartDecadeContainer = document.createElement("div");

    this.barChartMainContainer.id = "barChart-main";
    this.barChartDecadeContainer.id = "barChart-decade-container";

    this.initBarChart();
    this.initEvents();

    this.docElement.appendChild(this.barChartMainContainer);
}

BarChart.prototype.getDecadeOfYear = function(year) {
    return Math.trunc(year/10)*10;
}

/**
 * Récupère les données dans la base de données
 * @return objet json représentant les données recherchée
 */
BarChart.prototype.getDataBarChart = async function() {
    const url = "getBarChart.php?currentDecade="+this.decade+"&nbYear="+this.nbYearToShow;

    //On récupère les données de la bdd (Fonction asynchrone)
    const response = await fetch(url);
    const dataJson = await response.json();
    return dataJson;
}

/**
 * On initialise tous les élément graphique de notre barChart
 */
BarChart.prototype.initBarChart = function() {
    //On récupère d'abord les données
    this.getDataBarChart().then((data) => {

        //On prends le plus grand nombre de données (count(don)) pour pouvoir determiner quelle est la barre qui prends toute la hauteur.
        let maxData = null;
        for (const year in data.years) {
            let currMax = Math.max.apply(null, data.years[year]);
            if (maxData == null)
                maxData = currMax;
            maxData = Math.max(maxData, currMax);
        }

        //On s'assure que l'élément principal est vide
        this.barChartDecadeContainer.innerHTML = "";

        //Pour chaque année dans les années que les données a
        for (const year in data.years) {

            let barChartYearContainer = document.createElement("div");
            barChartYearContainer.classList.add("barChart-year-container");

            //On met la class si l'élément correspond à l'année selectionné
            if (this.yearSelected == year) {
                barChartYearContainer.classList.add("barChart-selected");
            }

            //On écrit l'année
            let barChartYearTitle = document.createElement("span");
            barChartYearTitle.classList.add("barChart-year-title");
            barChartYearTitle.innerText = year;
            

            //Partie qui correpond à l'intérieur du cadre contenant toutes les barres verticales
            let barChartMonthContainer = document.createElement("div");
            barChartMonthContainer.classList.add("barChart-month-container");

            //Pour chaque mois dans l'année
            data.years[year].forEach(dataMonth => {
                //On crée les "boites" contenant la barre du mois
                let barChartMonth = document.createElement("div");
                barChartMonth.classList.add("barChart-month");
                let barChartMonthValue = document.createElement("div");
                barChartMonthValue.classList.add("barChart-month-value");

                //On calcule la hauteur de la barre vertical du mois en fonction de la donnée la plus grande de toute la décennie (ou la période selectionné)
                barChartMonthValue.style.height = (dataMonth*100/maxData) + "%";

                barChartMonth.appendChild(barChartMonthValue);
                barChartMonthContainer.appendChild(barChartMonth);
            });

            barChartYearContainer.appendChild(barChartYearTitle);
            barChartYearContainer.appendChild(barChartMonthContainer);
            
            this.barChartDecadeContainer.appendChild(barChartYearContainer);
        }
    }).catch((err) => {
        console.error(err);
    });
}

/**
 * Initialise tous les événements
 */
BarChart.prototype.initEvents = function() {
    /**
     * Determine si un parent du noeud contient la classe en paramètre
     * @param {node} node noeud correspondant à un élément html
     * @param {string} cls classe à trouver
     */
    function findParentByClass(node, cls) {
        function hasClass(elem, cls) {
            var str = " " + elem.className + " ";
            var testCls = " " + cls + " ";
            return(str.indexOf(testCls) !== -1) ;
        }
        while (node && !hasClass(node, cls)) {
            node = node.parentNode;
        }
        return node;    
    }

    //Evénement quand on clique sur une année cela selectionne la date
    this.barChartDecadeContainer.addEventListener("click", (event) => {
        let item = findParentByClass(event.target, "barChart-year-container");
        if (item.className == "barChart-year-container") {
            //On enlève la selection sur l'élément qui était précedemment selectionné
            Array.from(document.querySelectorAll(".barChart-selected")).forEach(element => element.classList.remove("barChart-selected"));
            item.classList.add("barChart-selected");
            //On prends la valeur (l'année) de l'élément qu'on a séléctionné
            this.yearSelected = parseInt(item.getElementsByClassName("barChart-year-title")[0].innerText);

            this.calendar.year = this.yearSelected;
            this.calendar.update();
        }
    });

    //Html des icones flèches
    let arrowSVG = '<svg enable-background=\"new 0 0 386.257 386.257" viewBox="0 0 492 492" xmlns="http://www.w3.org/2000/svg"><path d="M198.608 246.104L382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"></path></svg>';

    //On crée tout l'html necessaire pour les boutons
    let barChartPreviousButton = document.createElement("button");
    let barChartNextButton = document.createElement("button");
    barChartPreviousButton.id = "barChart-previous-btn";
    barChartNextButton.id = "barChart-next-btn";
    barChartPreviousButton.innerHTML = arrowSVG;
    barChartNextButton.innerHTML = arrowSVG;

    //Evénement de quand on clique sur les boutons pour changer de décennie (ou autre période)
    this.barChartMainContainer.addEventListener("click", (event) => {
        let item = event.target;
        if(item.closest("#" + barChartPreviousButton.id) != null) {
            this.decade -= this.nbYearToShow; //nbYearToShow = 10 pour changer de décennie en décennie
            this.update();
        }
        if(item.closest("#" + barChartNextButton.id) != null) {
            this.decade += this.nbYearToShow; //nbYearToShow = 10 pour changer de décennie en décennie
            this.update();
        }
    });

    this.barChartMainContainer.appendChild(barChartPreviousButton);
    this.barChartMainContainer.appendChild(this.barChartDecadeContainer);
    this.barChartMainContainer.appendChild(barChartNextButton);
}

/**
 * Met à jour le graphique (pas les évenements)
 */
BarChart.prototype.update = function() {
    window.requestAnimationFrame(() => {
        this.initBarChart();
    });
}

/**
 * Redimensionne le graphique (à appelé à chaque redimensionnement de fenêtres)
 */
BarChart.prototype.resize = function() {
	window.requestAnimationFrame(() => {
		if (window.innerWidth <= 700 && !this.isWindowSizeSmall) {
			this.isWindowSizeSmall = true;
			this.nbYearToShow = 5;
			reload(this);
		}
		else if (window.innerWidth > 700 && this.isWindowSizeSmall) {
			this.isWindowSizeSmall = false;
			this.nbYearToShow = 10;
			reload(this);
		}

        /**
         * Met à jour le graphique (AVEC les évenements)
         * @param {*} barObj 
         */
		function reload(barObj) {
            barObj.docElement.removeChild(barObj.barChartMainContainer);

			barObj.barChartMainContainer = document.createElement("div");
            barObj.barChartDecadeContainer = document.createElement("div");
			barObj.barChartMainContainer.id = "barChart-main";
            barObj.barChartDecadeContainer.id = "barChart-decade-container";

			barObj.initBarChart();
			barObj.initEvents();
            barObj.docElement.appendChild(barObj.barChartMainContainer);
		}
    });
}