<!DOCTYPE html>

<html>
<head>
    <link rel="canonical"  />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Sunburst</title>
    <?php
        require_once 'navigation/scriptsection.php';
        error_reporting(0);
    ?>
</head>
<body>
    <div>
        <div id="mainTab" style="visibility: hidden">
            

            <div id="dashboard" hidden="true">
            </div>
            <div id="controls">
                <div id="categories" >
                </div>


                <div id="sampleArea">


                    <div id="scrollcontainer" class="left" hidden="true">
                        <div id="control_list">
                        </div>&
                    </div>
                    <div class="right-align">
                        <div class="panel_container" id="sb_container">
                            
                            <div id="sampleContainer" class="e-box">
                            </div>
                        </div>
                        <span id='controllist_target' onclick="open" class="e-icon e-chevron-right"></span>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/x-jsrender" id="btn_template">
        <ul>
            <li>
                <button data-role="ejbutton" id="{{:id}}" class="{{:cls}}">{{:text}}</button>
            </li>
        </ul>
    </script>
    <div id="sbwaitingTemplate" class="sbloadingtemplate" style="display: none">
        <span class="sbloadingtext">Loading...
        </span>
        <span class="sbloadingimg"></span>
    </div>
</body>
</html>
