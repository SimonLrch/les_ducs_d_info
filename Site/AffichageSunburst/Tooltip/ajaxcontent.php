<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div id="frame" class="frame table-responsive">
        <table id="details table">
            <tr>
                <th>EmployeeID</th>
                <th>Name</th>
                <th>Designation</th>
            </tr>
            <tr>
                <td>SF6089</td>
                <td><a href="#" class="e-info" title="Davolio">Davolio</a></td>
                <td>Software Engineer</td>
            </tr>
            <tr>
                <td>SF6073</td>
                <td> <a href="#" class="e-info" title="Leverling">Leverling </a> </td>
                <td>Tester</td>
            </tr>
            <tr>
                <td>SF6073</td>
                <td> <a href="#" class="e-info" title="Suyama"> Suyama </a> </td>
                <td>Content Writer</td>
            </tr>
            <tr>
                <td>SF7896</td>
                <td> <a href="#" class="e-info" title="Buchanan"> Buchanan </a> </td>
                <td>Graphics Designer</td>
            </tr>
        </table>
    </div>

    <?php
    $tooltip =new EJ\Tooltip("frame");
    $pos = new EJ\Tooltip\Position();
    $tar = new EJ\Tooltip\Target();
    $stem = new EJ\Tooltip\Stem();
    $tar->horizontal("right")->vertical("bottom");
    $stem->horizontal("left")->vertical("top");
    $pos->target($tar)->stem($stem);
    echo $tooltip->width("350px")->height("128px")->containment(".cols-sample-area")->target(".e-info")->position($pos)->beforeOpen("onOpen")->render();
    ?>
				
</div>

<script>
    var target, content;
    target = $("#frame").data("ejTooltip");
          
    function onOpen(args) {
        target = $("#frame").data("ejTooltip");
        proxy = args;
        $.ajax({
            dataType: "json",
            url: "Scripts/tooltipData.js",
            success: function (result) {
                var emp = [
                    { photo: "Content/images/grid/Employees/2.png" },
                    { photo: "Content/images/grid/Employees/4.png" },
                    { photo: "Content/images/grid/Employees/8.png" },
                    { photo: "Content/images/grid/Employees/3.png" },
                    { photo: "Content/images/grid/Employees/1.png" },
                    { photo: "Content/images/grid/Employees/6.png" },
                ];
                for (i = 0; i < result.length ; i++) {
                    if (result[i].LastName == $(proxy.event.target).attr("data-content"))
                        content = '<div class="main"> <img src=' + emp[i].photo + ' class="logo"/><div class="des"><table class="tab"> <tr> <th> ' + result[i].TitleOfCourtesy+' '+result[i].LastName + '</th> </tr> <tr> <td> Title </td> <td>&nbsp;&nbsp;: ' + result[i].Title + '</td> </tr> <tr><td> Address</td><td>&nbsp;&nbsp;: ' + result[i].Address + '</td> </tr><tr> <td> City </td> <td>&nbsp;&nbsp;: ' + result[i].City + '</td> </tr> <tr> <td> PostalCode </td> <td>&nbsp;&nbsp;: ' + result[i].PostalCode + '</td> </tr> </table></div></div>';
                }
                target.setModel({ content: content });

            }
        });
        target.show(args.event.target);
        args.cancel = true;
    }

</script>
<style>
    .cols-sample-area
    {
        width: 900px;
        margin: 0 auto;
        float: none;
		height: 280px;
    }
    .frame {
        width: 550px;
        box-sizing: border-box;
        border: none;
    }

    .frame table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid grey;
        box-sizing : border-box;
    }

    .frame th, .frame td {
        text-align: left;
        padding: 8px;
    }

    .logo {
        float: left;
        width: 100px;
        height: 114px;
    }

    .frame tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .frame th {
        background-color: #4CAF50;
        color: white;
    }
    
    .des {
        width: 230px;
        float: right;
        line-height: 24px;
    }
    .tab{
        font-size: 13px;
    }
</style>