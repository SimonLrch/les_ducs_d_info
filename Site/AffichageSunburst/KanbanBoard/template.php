<?php
require_once "../EJ/AutoLoad.php";
?>
<div class="cols-sample-area">
      <script id="cardtemplate" type="text/x-jsrender">             
        <table class="e-templatetable">
           <colgroup>
               <col width="10%">
               <col width="90%">
          </colgroup>
          <tbody>
           <tr>
            <td class="photo">
                <img src="Content/images/kanban/{{:Priority}}.png">
            </td>            
            <td class="details">
                <table>
                    <colgroup>
                        <col width="10%">
                        <col width="90%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td class="CardHeader">   Assignee: </td>
                            <td>{{:Assignee}}</td>
                        </tr>                      
                        <tr>
                            <td class="CardHeader">   Summary: </td>
                            <td>{{:Summary}}</td>
                        </tr>
                        <tr>
                            <td class="CardHeader">   Type: </td>
                            <td>{{:Type}}</td>
                        </tr>                        
                    </tbody>
                </table>
            </td>
           </tr>
        </tbody>
    </table>     
    </script>
    <style type="text/css">  
        .e-templatetable {
            width: 100%;
        }
        .details >table {
            margin-left:2px;            
			border-collapse: separate;
            border-spacing: 2px;
            width: 100%;
        }
	    .details td {
	        vertical-align: top;
	    }
        .details {
            padding: 8px 8px 10px 0;
        }
        .photo {
            padding: 8px 6px 10px 6px;
            text-align: center;
        }
        .CardHeader {
            font-weight: bolder;
            padding-right: 10px;
        }
    </style>
    <?php
    $Json = '[{"Id": 1, "Status": "Open", "Summary": "Analyze the new requirements gathered from the customer.", "Type": "Story", "Priority": "Low", "Tags": "Analyze,Customer", "Estimate": 3.5, "Assignee": "Nancy Davloio", "ImgUrl": "Content/images/kanban/1.png", "RankId":1 }, { "Id": 2, "Status": "InProgress", "Summary": "Improve application performance", "Type": "Improvement", "Priority": "Normal", "Tags": "Improvement", "Estimate": 6, "Assignee": "Andrew Fuller", "ImgUrl": "Content/images/kanban/2.png", "RankId":1 }, { "Id": 3, "Status": "Open", "Summary": "Arrange a web meeting with the customer to get new requirements.", "Type": "Others", "Priority": "Critical", "Tags": "Meeting", "Estimate": 5.5, "Assignee": "Janet Leverling", "ImgUrl": "Content/images/kanban/3.png", "RankId":2 }, { "Id": 4, "Status": "InProgress", "Summary": "Fix the issues reported in the IE browser.", "Type": "Bug", "Priority": "Release Breaker", "Tags": "IE", "Estimate": 2.5, "Assignee": "Janet Leverling", "ImgUrl": "Content/images/kanban/3.png", "RankId":2 }, { "Id": 5, "Status": "Testing", "Summary": "Fix the issues reported by the customer.", "Type": "Bug", "Priority": "Low", "Tags": "Customer", "Estimate": "3.5", "Assignee": "Steven walker", "ImgUrl": "Content/images/kanban/5.png", "RankId":1 }, { "Id": 6, "Status": "Close", "Summary": "Arrange a web meeting with the customer to get the login page requirements.", "Type": "Others", "Priority": "Low", "Tags": "Meeting", "Estimate": 2, "Assignee": "Michael Suyama", "ImgUrl": "Content/images/kanban/6.png", "RankId":1 }, { "Id": 7, "Status": "Validate", "Summary": "Validate new requirements", "Type": "Improvement", "Priority": "Low", "Tags": "Validation", "Estimate": 1.5, "Assignee": "Robert King", "ImgUrl": "Content/images/kanban/7.png", "RankId":1 }, { "Id": 8, "Status": "Close", "Summary": "Login page validation", "Type": "Story", "Priority": "Release Breaker", "Tags": "Validation,Fix", "Estimate": 2.5, "Assignee": "Laura Callahan", "ImgUrl": "Content/images/kanban/8.png", "RankId":2 }, { "Id": 9, "Status": "Testing", "Summary": "Fix the issues reported in Safari browser.", "Type": "Bug", "Priority": "Release Breaker", "Tags": "Fix,Safari", "Estimate": 1.5, "Assignee": "Nancy Davloio", "ImgUrl": "Content/images/kanban/1.png", "RankId":2 }, { "Id": 10, "Status": "Close", "Summary": "Test the application in the IE browser.", "Type": "Story", "Priority": "Low", "Tags": "Testing,IE", "Estimate": 5.5, "Assignee": "Margaret hamilt", "ImgUrl": "Content/images/kanban/4.png", "RankId":3 }, { "Id": 11, "Status": "Validate", "Summary": "Validate the issues reported by the customer.", "Type": "Story", "Priority": "High", "Tags": "Validation,Fix", "Estimate": 1, "Assignee": "Steven walker", "ImgUrl": "Content/images/kanban/5.png", "RankId":1 }, { "Id": 12, "Status": "Testing", "Summary": "Check Login page validation.", "Type": "Story", "Priority": "Release Breaker", "Tags": "Testing", "Estimate": 0.5, "Assignee": "Michael Suyama", "ImgUrl": "Content/images/kanban/6.png", "RankId":3 }, { "Id": 13, "Status": "Open", "Summary": "API improvements.", "Type": "Improvement", "Priority": "High", "Tags": "Grid,API", "Estimate": 3.5, "Assignee": "Robert King", "ImgUrl": "Content/images/kanban/7.png", "RankId":3 }, { "Id": 14, "Status": "InProgress", "Summary": "Add responsive support to application", "Type": "Epic", "Priority": "Critical", "Tags": "Responsive", "Estimate": 6, "Assignee": "Laura Callahan", "ImgUrl": "Content/images/kanban/8.png", "RankId":3 }, { "Id": 15, "Status": "Open", "Summary": "Show the retrieved data from the server in grid control.", "Type": "Story", "Priority": "High", "Tags": "Database,SQL", "Estimate": 5.5, "Assignee": "Margaret hamilt", "ImgUrl": "Content/images/kanban/4.png", "RankId":4 }]';
    $Json = json_decode($Json,true);
    $colormap = '{"#ee4e75": "Bug,Story","#57b94c": "Improvement","#edba3c": "Epic","#5187c6": "Others"}';
    $colormap = json_decode($colormap,true);
    $kanban = new EJ\Kanban("template");
    $column = new EJ\Kanban\Column();
    $column->key("Open")->headerText("Backlog");
    $column1 = new EJ\Kanban\Column();
    $column1->key("InProgress")->headerText("In Progress");
    $column2  = new EJ\Kanban\Column();
    $column2->key("Testing")->headerText("Testing");
    $column3 = new EJ\Kanban\Column();
    $column3->key("Close")->headerText("Done");    
    $cardset = new EJ\Kanban\CardSetting();
    $fields= new EJ\Kanban\Field();
    $fields->primaryKey("Id");
    $cardset->template("#cardtemplate");    
    $columns = array($column,$column1,$column3);
    echo $kanban->keyField("Status")->allowTitle(true)->columns($columns)->enableTouch(false)->fields($fields)->cardSettings($cardset)->dataSource($Json)->render();
    ?>
</div>
<style>
    .cols-sample-area {        
        width: 100%;
    }
</style>