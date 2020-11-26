<?php
  require_once '../EJ/AutoLoad.php';
?>


<body>
    <div align="center">
        <table style="width:100%;">
            <tr>
                <td align ="center"><i>Mean Working Hours for year</i></td>
                <td>
                    <div id="line" style="width:170px;">
                         <?php
                         $lineSpark =  new EJ\Sparkline("Line");
                         $tooltip = new EJ\Sparkline\Tooltip();
                         $tooltipFont = new EJ\Sparkline\Font();
                         $tooltipFont->size("12px");        
                         $tooltip->visible(true)->font($tooltipFont);
                         $lineSize = new EJ\Sparkline\Size();
                         $lineSize->height(40)->width(170);
                         $dataSource = array(12, 14, 11, 12, 11, 15, 12, 10, 11, 12, 15, 13, 12, 11, 10, 13, 15, 12, 14, 16, 14, 12, 11);

                         echo $lineSpark->dataSource($dataSource)->tooltip($tooltip)->size($lineSize)->type("line")->render();
                         ?>
                    </div>
                </td>
                <tr>
                    <td align="center"><i>Revenue Status</i></td>
                    <td>
                        <div id="column" style="height:100px;width:150px">
                             <?php
                             $lineSpark =  new EJ\Sparkline("Column");
                             $tooltip = new EJ\Sparkline\Tooltip();
                             $tooltipFont = new EJ\Sparkline\Font();
                             $tooltipFont->size("12px");        
                             $tooltip->visible(true)->font($tooltipFont);
                             $lineSize = new EJ\Sparkline\Size();
                             $lineSize->height(100)->width(150);
                             $dataSource = array(2, 6, -1, 1, 12, 5, -2, 7, -3, 5, 8, 10);

                             echo $lineSpark->dataSource($dataSource)->tooltip($tooltip)->size($lineSize)->type("column")->negativePointColor("red")->highPointColor("blue")->render();
                             ?>
                        </div>
                    </td>
                </tr>
            <tr>
                <td align="center"><i>Project Status Tracing</i></td>
                <td>
                    <div id="area" style="height:100px;width:150px">
                         <?php
                         $lineSpark =  new EJ\Sparkline("Area");
                         $tooltip = new EJ\Sparkline\Tooltip();
                         $tooltipFont = new EJ\Sparkline\Font();
                         $tooltipFont->size("12px");        
                         $tooltip->visible(true)->font($tooltipFont);
                         $marker = new EJ\Sparkline\MarkerSetting();
                         $marker->visible(true);
                         $lineSize = new EJ\Sparkline\Size();
                         $lineSize->height(100)->width(150);
                         $dataSource = array(12, -10, 11, 8, 17, 6, 2, -17, 13, -6, 8, 10);

                         echo $lineSpark->dataSource($dataSource)->markerSettings($marker)->opacity(0.5)->tooltip($tooltip)->size($lineSize)->type("area")->lowPointColor("orange")->highPointColor("blue")->render();
                         ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center"><i>Profit Comparison for each months</i></td>
                <td>
                    <div id="winloss" style="height:100px;width:150px">
                         <?php
                         $lineSpark =  new EJ\Sparkline("Winloss");
                         $lineSize = new EJ\Sparkline\Size();
                         $lineSize->height(100)->width(150);
                         $dataSource = array(12, 15, -11, 13, 17, 0, -12, 17, 13, -15, 8, 10);

                         echo $lineSpark->dataSource($dataSource)->size($lineSize)->type("winloss")->render();
                         ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center"><i>Expenditure for a year</i></td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <div id="pie1" style="height:40px;width:40px">
                                     <?php
                                     $lineSpark =  new EJ\Sparkline("Pie1");
                                     $tooltip = new EJ\Sparkline\Tooltip();
                                     $tooltipFont = new EJ\Sparkline\Font();
                                     $tooltipFont->size("12px");        
                                     $tooltip->visible(true)->font($tooltipFont);
                                     $lineSize = new EJ\Sparkline\Size();
                                     $lineSize->height(40)->width(40);
                                     $dataSource = array(4, 6, 7);

                                     echo $lineSpark->dataSource($dataSource)->tooltip($tooltip)->size($lineSize)->type("pie")->render();
                                     ?>
                                </div>
                            </td>
                            <td>
                                <div id="pie2" style="height:40px;width:40px">
                                     <?php
                                     $lineSpark =  new EJ\Sparkline("Pie2");
                                     $tooltip = new EJ\Sparkline\Tooltip();
                                     $tooltipFont = new EJ\Sparkline\Font();
                                     $tooltipFont->size("12px");        
                                     $tooltip->visible(true)->font($tooltipFont);
                                     $lineSize = new EJ\Sparkline\Size();
                                     $lineSize->height(40)->width(40);
                                     $dataSource = array(8, 9, 1);

                                     echo $lineSpark->dataSource($dataSource)->tooltip($tooltip)->size($lineSize)->type("pie")->render();
                                     ?>
                                </div>
                            </td>
                            <td>
                                <div id="pie3" style="height:40px;width:40px">
                                     <?php
                                     $lineSpark =  new EJ\Sparkline("Pie3");
                                     $tooltip = new EJ\Sparkline\Tooltip();
                                     $tooltipFont = new EJ\Sparkline\Font();
                                     $tooltipFont->size("12px");        
                                     $tooltip->visible(true)->font($tooltipFont);
                                     $lineSize = new EJ\Sparkline\Size();
                                     $lineSize->height(40)->width(40);
                                     $dataSource = array(2, 3, 5);

                                     echo $lineSpark->dataSource($dataSource)->tooltip($tooltip)->size($lineSize)->type("pie")->render();
                                     ?>
                                </div>
                            </td>
                            <td>
                                <div id="pie4" style="height:40px;width:40px">
                                     <?php
                                     $lineSpark =  new EJ\Sparkline("Pie4");
                                     $tooltip = new EJ\Sparkline\Tooltip();
                                     $tooltipFont = new EJ\Sparkline\Font();
                                     $tooltipFont->size("12px");        
                                     $tooltip->visible(true)->font($tooltipFont);
                                     $lineSize = new EJ\Sparkline\Size();
                                     $lineSize->height(40)->width(40);
                                     $dataSource = array(10, 12, 11);

                                     echo $lineSpark->dataSource($dataSource)->tooltip($tooltip)->size($lineSize)->type("pie")->render();
                                     ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">Q1</td>
                            <td align="center"> Q2</td>
                            <td align="center"> Q3</td>
                            <td align="center"> Q4</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
   