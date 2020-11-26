<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <label class="btn_label">Appointment View</label>
        <div class="element">
            <?php
            $data='[{ "text": "Day", "contentType": "textonly" },           
           { "text": "Week","contentType": "textonly" },
           { "text": "Month", "contentType": "textonly", "selected": "selected" },
           { "text": "Year", "contentType": "textonly" }]';
            $data=json_decode($data,true);
            $groupBtn=new EJ\GroupButton("groupBtn");
            echo $groupBtn->groupButtonMode("radiobutton")->dataSource($data)->showRoundedCorner(true)->width("100%")->render();
            ?>
        </div>
    </div>
    <script>
         
    </script>
    <style>
        table {
            margin: auto;
            width: 300px;
        }

        td {
            padding: 11px;
        }

        .btn_label {
            display: inline-block;
            margin-bottom: 20px;
            font-weight: 500;
        }
    </style>
</body>
