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
    this.getDataBarChart().then((data) => {
        let maxData = null;
        for (const year in data.years) {
            let currMax = Math.max.apply(null, data.years[year]);
            if (maxData == null)
                maxData = currMax;
            maxData = Math.max(maxData, currMax);
        }

        //On s'assure que l'élément principal est vide
        this.barChartDecadeContainer.innerHTML = "";

        for (const year in data.years) {
            let barChartYearContainer = document.createElement("div");
            barChartYearContainer.classList.add("barChart-year-container");

            if (this.yearSelected == year) {
                barChartYearContainer.classList.add("barChart-selected");
            }

            let barChartYearTitle = document.createElement("span");
            barChartYearTitle.classList.add("barChart-year-title");
            barChartYearTitle.innerText = year;
            
            let barChartMonthContainer = document.createElement("div");
            barChartMonthContainer.classList.add("barChart-month-container");

            data.years[year].forEach(dataMonth => {
                let barChartMonth = document.createElement("div");
                barChartMonth.classList.add("barChart-month");
                let barChartMonthValue = document.createElement("div");
                barChartMonthValue.classList.add("barChart-month-value");

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

BarChart.prototype.initEvents = function() {
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

    this.barChartDecadeContainer.addEventListener("click", (event) => {
        let item = findParentByClass(event.target, "barChart-year-container");
        console.log(item);
        if (item.className == "barChart-year-container") {
            Array.from(document.querySelectorAll(".barChart-selected")).forEach(element => element.classList.remove("barChart-selected"));
            item.classList.add("barChart-selected");
            this.yearSelected = parseInt(item.getElementsByClassName("barChart-year-title")[0].innerText);

            this.calendar.year = this.yearSelected;
            this.calendar.update();
        }
    });

    let arrowSVG = '<svg enable-background=\"new 0 0 386.257 386.257" viewBox="0 0 492 492" xmlns="http://www.w3.org/2000/svg"><path d="M198.608 246.104L382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"></path></svg>';

    let barChartPreviousButton = document.createElement("button");
    let barChartNextButton = document.createElement("button");
    barChartPreviousButton.id = "barChart-previous-btn";
    barChartNextButton.id = "barChart-next-btn";
    barChartPreviousButton.innerHTML = arrowSVG;
    barChartNextButton.innerHTML = arrowSVG;

    this.barChartMainContainer.addEventListener("click", (event) => {
        let item = event.target;
        if(item.closest("#" + barChartPreviousButton.id) != null) {
            this.decade -= this.nbYearToShow;
            this.update();
        }
        if(item.closest("#" + barChartNextButton.id) != null) {
            this.decade += this.nbYearToShow;
            this.update();
        }
    });

    this.barChartMainContainer.appendChild(barChartPreviousButton);
    this.barChartMainContainer.appendChild(this.barChartDecadeContainer);
    this.barChartMainContainer.appendChild(barChartNextButton);
}

BarChart.prototype.update = function() {
    window.requestAnimationFrame(() => {
        this.initBarChart();
    });
}


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