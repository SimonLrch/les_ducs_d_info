<?php include_once("sql_to_json.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
    	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
		<title >Sunburst</title>
		<script src="https://d3js.org/d3.v4.min.js"></script>
	</head>
	<body>
		<?php include'../include/mainHeader.php' ?>
		<main class="container-main">
			<div class="main">
				<section class="inner-box section-hero">
					<span class="titreSection">Restitution Par Sunburst</span>
				</section>
				<section class="inner-box">
					<div class="RestSunburst">
						<svg id="sunburst-svg"></svg>
						<div>
							<p class="label"></p>
						</div>
						<script>
							// JSON data
							var nodeData = <?php echo $DonJson_Tous ; ?>

							// Variables
							var width = 500;
							var height = 500;
							var radius = Math.min(width, height) / 2;
							var color = d3.scaleOrdinal(d3.schemeCategory20b);

							// Create primary <g> element
							var g = d3.select('#sunburst-svg')
								.attr('width', width)
								.attr('height', height)
								.append('g')
								.attr('transform', 'translate(' + width / 2 + ',' + height / 2 + ')');

							// Data strucure
							var partition = d3.partition()
								.size([2 * Math.PI, radius]);

							// Find data root
							var root = d3.hierarchy(nodeData)
								.sum(function (d) { return d.size});

							// Size arcs
							partition(root);
							var arc = d3.arc()
								.startAngle(function (d) { return d.x0 })
								.endAngle(function (d) { return d.x1 })
								.innerRadius(function (d) { return d.y0 })
								.outerRadius(function (d) { return d.y1 });

								var textLabel = d3.selectAll(".label") 
								.append('text');

							// Put it all together
							var path = g.selectAll('g')
								.data(root.descendants())
								.enter().append('g').attr("class", "node")  // <-- 2
								.append('path')  // <-- 2
								.attr("display", function (d) { return d.depth ? null : "none"; })
								.attr("d", arc)
								.style('stroke', '#fff')
								.style("fill", function (d) { return color((d.children ? d : d.parent).data.name); })
								.on("mouseover" ,mouseOverF) //quand la souris est sur un arc de cercle 
								.on("mouseleave" ,mouseOutF);
								//variable pour label (mouseover)

								//mouseover censé afficher autre chose que data 
								function mouseOverF(d){
									textLabel//.text(function(d) { var d = d3.select(this); return d.depth ? d.data.name : "" }); //prend le nom du parent */
											.text(function(d) {  var d = d3.select(this); return  d.data.name;});              
								};
						
								function mouseOutF(d){
									textLabel.text(function(d) { return  "" ; });              
								};

							/*
							//Compute text
							function computeTextRotation(d) {
							var angle = (d.x0 + d.x1) / Math.PI * 90;  // <-- 1
							// Avoid upside-down labels
							return (angle < 90 || angle > 300) ? angle : angle + 180;  // <--2 "labels aligned with slices"

							// Alternate label formatting
							//return (angle < 180) ? angle - 90 : angle + 90;  // <-- 3 "labels as spokes"
							}

							//Creer les labels
						/* g.selectAll(".node")  // on selection les g de la classe .node
							.append("text") //on créer une balise texte dans g
							.attr("transform", function(d) {
								return "translate(" + arc.centroid(d) + ")rotate(" + computeTextRotation(d) + ")"; })
							.attr("dx","-20") //placement
							.attr("dy",".35em")
							//.style.display = none //rend la balise text cachée
							.text(function(d) { return d.depth ? d.data.name : "" }); //prend le nom du parent 
							*/
						</script>
					</div>
				</section>
			</div>
		</main>
		<?php include'../include/mainFooter.php' ?>
	</body>
</html>

