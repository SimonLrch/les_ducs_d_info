<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $data = array( array ( "Name"=> "Brooke", "Class"=> "brooke", "Designation"=> "HR Assistant", "About"=> "Brooke provides administrative support to the HR office." ),
        array ( "Name"=> "Claire", "Class"=> "claire", "Designation"=> "HR Manager", "About"=> "Claire is responsible for strategic HR planning and budget." ),
        array ( "Name"=> "Erik", "Class"=> "erik", "Designation"=> "Training Specialist", "About"=> "Erik notifies attendees and manages follow up." ),
        array ( "Name"=> "Grace", "Class"=> "grace", "Designation"=> "Development Manager", "About"=> "Grace maintains training plans to achive workforce skill." ),
        array ( "Name"=> "Jacob", "Class"=> "jacob", "Designation"=> "Recruitment Manager", "About"=> "Jacob manages recruitment and prepares key staffing metrics." ));
    $fields=array("text"=> "Texts");
    $listview1=new EJ\ListView("templatelist");
    echo $listview1->dataSource($data)->width(400)->renderTemplate(true)->templateId("Employ")->render();
    ?>
    <script id="Employ" type="text/x-jsrender">
        <div class="cont-bg">
           <div class="{{>Class}}">
           </div>
           <div class="listrightdiv">
               <span class="templatetext">{{>Name}}</span> <span class="designationstyle">{{>Designation}}</span>
               <div class="aboutstyle">
                {{>About}}
               </div>
           </div>
        </div>
    </script>
</div>
<style>    
    .cols-sample-area {
        width:600px;        
        margin:0 auto;
        float:none;
    }
    #templatelist .aboutstyle {
            display: block;
            font-size: 12px;
            line-height: 20px;
            overflow: hidden;
            padding-right: 23px;
            position: relative;
            text-align: justify;
            word-wrap: break-word;
        }

        #templatelist .designationstyle {
            float: right;
            font-size: 12px;
            padding-right: 13px;
            padding-top: 4px;
            position: relative;
            right: 10px;
        }

        #templatelist .templatetext {
            font-size: 15px;
            font-weight: bolder;
            position: relative;
        }

        .listrightdiv {
            left: 10px;
            position: relative;
        }

        .jacob, .grace, .erik, .claire, .brooke {
            background-repeat: no-repeat;
            border: 0px solid #e5e5e5;
            float: left;
            height: 60px;
            padding-left: 8px;
           
            width: 51px;
            background-size: 100% 100%;
        }

        .cont-bg {
            font-size: 17px;
            height: 71px;
            padding-left: 5px;
            padding-top: 10px; margin-bottom:10px;
            width: 100%;
        }

        .brooke {
            background-image: url("Content/images/Employees/6.png");
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src=../Content/images/Employees/6.png, sizingMethod='scale');
        }

        .claire {
            background-image: url("Content/images/Employees/9.png");
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src=../Content/images/Employees/9.png, sizingMethod='scale');
        }

        .erik {
            background-image: url("Content/images/Employees/7.png");
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src=../Content/images/Employees/7.png, sizingMethod='scale');
        }

        .grace {
            background-image: url("Content/images/Employees/8.png");
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src=../Content/images/Employees/8.png, sizingMethod='scale');
        }

        .jacob {
            background-image: url("Content/images/Employees/5.png");
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src=../Content/images/Employees/5.png, sizingMethod='scale');
        }
</style>
