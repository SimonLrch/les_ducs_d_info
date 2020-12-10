<?php include_once("sql_to_json.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<head>
    <title >Sunburst</title>
    <script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
<?php include'../include/mainHeader.php' ?>
<br/>
    <svg></svg>
</body>

<script>

    // JSON data
    var nodeData = <?php echo $DonJson_Tous ; ?>

    // Variables
    var width = 500;
    var height = 500;
    var radius = Math.min(width, height) / 2;
    var color = d3.scaleOrdinal(d3.schemeCategory20b);

    // Create primary <g> element
    var g = d3.select('svg')
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

    // Put it all together
    g.selectAll('g')
        .data(root.descendants())
        .enter().append('g').attr("class", "node")  // <-- 2
        .append('path')  // <-- 2
        .attr("display", function (d) { return d.depth ? null : "none"; })
        .attr("d", arc)
        .style('stroke', '#fff')
        .style("fill", function (d) { return color((d.children ? d : d.parent).data.name); });


    //Compute text
    function computeTextRotation(d) {
    var angle = (d.x0 + d.x1) / Math.PI * 90;  // <-- 1
    // Avoid upside-down labels
    return (angle < 90 || angle > 300) ? angle : angle + 180;  // <--2 "labels aligned with slices"

    // Alternate label formatting
    //return (angle < 180) ? angle - 90 : angle + 90;  // <-- 3 "labels as spokes"
    }

    //Creer les labels
    g.selectAll(".node")  // on selection les g de la classe .node
    .append("text") //on créer une balise texte dans g
    .attr("transform", function(d) {
        return "translate(" + arc.centroid(d) + ")rotate(" + computeTextRotation(d) + ")"; })
    .attr("dx","-20") //placement
    .attr("dy",".35em")
    //.style.display = none //rend la balise text cachée
    .text(function(d) { return d.depth ? d.data.name : "" }); //prend le nom du parent



</script>


   <!--affichage du texte au centre-->
   <div id="explanation" style="visibility: hidden, position: absolute, top: 260px, left: 305px, width: 140px,text-align: center, color: #666, z-index: -1;">
          <br/>
        </div>

</html>

