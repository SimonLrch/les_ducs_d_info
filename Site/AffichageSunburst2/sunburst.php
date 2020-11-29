<?php include_once("sql_to_json.php"); ?>

<!DOCTYPE html>
<head>
    <script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
    <svg></svg>
</body>

<script>
    // JSON data
    var json = <?php echo $DonJson_Tous ?> ;

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
        .size([2 * Math.PI, radius]); //permet d'avoir un rond

    // Find data root
    var root = d3.hierarchy(json)
        .sum(function (d) { return d.size});

    // Size arcs
    partition(root);
    var arc = d3.arc()
        .startAngle(function (d) { return d.x0 })
        .endAngle(function (d) { return d.x1 })
        .innerRadius(function (d) { return d.y0 })
        .outerRadius(function (d) { return d.y1 });

    // Put it all together
    g.selectAll('path')
        .data(root.descendants())
        .enter().append('path')
        .attr("display", function (d) { return d.depth ? null : "none"; })
        .attr("d", arc)
        .style('stroke', '#fff')
        .style("fill", function (d) { return color((d.children ? d : d.parent).data.name); });
    
// partie affichage au centre + fonction souris 
/*

    // Fade all but the current sequence, and show it in the breadcrumb trail.
function mouseover(d) {

var percentage = (100 * d.value / totalSize).toPrecision(3);
var percentageString = percentage + "%";
if (percentage < 0.1) {
  percentageString = "< 0.1%";
}

d3.select("#percentage")
    .text(percentageString);

d3.select("#explanation")
    .style("visibility", "");

var sequenceArray = d.ancestors().reverse();
sequenceArray.shift(); // remove root node from the array
updateBreadcrumbs(sequenceArray, percentageString);

// Fade all the segments.
d3.selectAll("path")
    .style("opacity", 0.3);

// Then highlight only those that are an ancestor of the current segment.
vis.selectAll("path")
    .filter(function(node) {
              return (sequenceArray.indexOf(node) >= 0);
            })
    .style("opacity", 1);
}

// Restore everything to full opacity when moving off the visualization.
function mouseleave(d) {

// Hide the breadcrumb trail
d3.select("#trail")
    .style("visibility", "hidden");

// Deactivate all segments during transition.
d3.selectAll("path").on("mouseover", null);

// Transition each segment to full opacity and then reactivate it.
d3.selectAll("path")
    .transition()
    .duration(1000)
    .style("opacity", 1)
    .on("end", function() {
            d3.select(this).on("mouseover", mouseover);
          });

d3.select("#explanation")
    .style("visibility", "hidden");
    */
}

</script>

    //affichage du texte au centre
<div id="explanation" style="visibility: hidden, position: absolute, top: 260px, left: 305px, width: 140px,text-align: center, color: #666, z-index: -1;">
          <span id="percentage"></span><br/>
          of visits begin with this sequence of pages
        </div>

</html>