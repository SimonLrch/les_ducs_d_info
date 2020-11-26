<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $empList = array(
       array('text'=> "Erik Linden", 'eimg'=> "3", 'desig' => "Representative", 'country' => "England"),
       array('text'=> "John Linden", 'eimg'=> "6", 'desig' => "Representative", 'country' => "Norway"),
       array('text'=> "Louis", 'eimg'=> "7", 'desig' => "Representative", 'country' => "Australia"),
       array('text'=> "Lawrence", 'eimg'=> "5", 'desig' => "Representative", 'country' => "India"),
       );
    $combobox =new EJ\ComboBox("skillsets");
    echo $combobox->dataSource($empList)->width("100%")->headerTemplate("<div class='head'>  Photo  <span style='padding-left:20px'> Contact Info </span></div>")->itemTemplate("<div><img class='eimg' src='Content/images/Employees/" + ${eimg} + "'.png' alt='employee'/> <div class='ename'> " + ${text} +"</div><div class='temp'> "+ ${country} +" </div></div>")->footerTemplate("<div class='Foot'> Total Items Count: 4 </div>")->placeholder("Select an employee")->render();
    ?>
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    .head {
            background-color: #a9a9a9;
            height: 35px;
            font-weight: bold;
            padding: 10px 0 0 18px;
            font-size: 15px;
        }
        
        .Foot {
            background-color: #dadada;
            vertical-align: middle;
            padding: 16px;
            font-weight: bold;
            font-size: 15px;
        }
        
        .ename {
            font-weight: bold;
            display: block !important;
            opacity: .87;
        }
        
        .tempName {
            padding: 5px 42px;
            opacity: .87;
        }
        
        .temp {
            margin-top: -10px;
            opacity: .54;
        }
        
        .eimg {
            border-radius: 50%;
            padding: 10px 16px;
            width: 40px;
            height: 40px;
            float: left;
        }
        
        .tempImg {
            padding-bottom: 3px;
            border-radius: 50%;
            float: left;
        }
        
        .e-dropdownbase .e-list-item * {
            display: block;
        }
</style>