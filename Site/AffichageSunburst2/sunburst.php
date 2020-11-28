<!DOCTYPE html>
<head>
    <script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
    <svg></svg>
</body>

<script>
    // JSON data
    var json = 
{
    "name": "TOPICS", "children": 
    [
        {
            "name": "Topic A",
            "children": 
            [
                {
                    "name": "Sub A1", "size": 4}, {"name": "Sub A2", "size": 4
                    }
                ]
        }, 
        {
            "name": "Topic B",
            "children": 
            [
                {
                    "name": "Sub B1", "size": 3
                }, 
                {
                    "name": "Sub B2", "size": 3
                },
                {
                    "name": "Sub B3", "size": 3
                }
            ]
        }, 
        {
            "name": "Topic C",
            "children":
            [
                {
                    "name": "Sub C1", 
                    "children" :
                    [
                        { 
                            "name " : "Sub C1a"
                            , "size": 3
                        }
                    ]
                }, 
                {
                    "name": "Sub C2", 
                    "size": 4
                }
            ]
        }
    ]
};

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
</script>


</html>