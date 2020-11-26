<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $dialog = new  \EJ\Dialog("lognForm");
    $dialog->title("Login Form")->templateStart();
    ?>
     <form id="form1">
        <table>
        <tr>
            <td>
                <p class="top">Please enter your username and password<p>
            </td>
        </tr>
        <tr>
            <td>
                Username <p class="reqired">*</p>
                <input type="text" id="txtName" name="txtName" class="ejinputtext" required /><br />
            </td>
        </tr>
        <tr>
            <td>
                Password <p class="reqired">*</p>
                <input type="password" id="txtPassword" name="txtPassword" class="ejinputtext" required />
            </td>
        </tr>
        <tr>
            <td>
                 <?php    
                 $chck = new \EJ\CheckBox("txtRember");
                 echo $chck->text("Remember me")->render();
                 ?>           
            
            </td>
        </tr>
        <tr>
            <td align="center">
                <br />
                <?php    
                $dwnbtn = new \EJ\Button("downloadBtn");
                echo $dwnbtn->text("LOGIN")->size("medium")->type("submit")->height("30px")->width("100px")->click("formsubmit")->render();
                ?>
			    <label class="error" for="btn" generated="false"></label>
            </td>
        </tr>
        <tr>
            <td align="center" class="acc">
                Don't have an account ? <a href="#">Signup</a>
            </td>
        </tr>
        </table>
    </form>
    <?php    
    echo $dialog->width("291px")->minHeight("215px")->isResponsive(true)->enableModal(true)->minWidth("310px")->containment(".cols-sample-area")->close("onDialogClose")->templateEnd()->render();

    $btn = new \EJ\Button("btn");
    echo $btn->text("Click to open dialog")->type("button")->height("30px")->width("150px")->click("onOpen")->render();

    ?>

</div>

<script>
 $(function () {

           	//$("#form1").validate({
			//    rules: {
			//        txtPassword: "required",
			//        txtName: "required"
			//    },
			//    messages: {
			//        txtName: { required: "Please enter user name" },
			//        txtPassword: { required: "Please enter password" }
			//    }
            //})
        });
		function formsubmit() {
           // $("#form1").valid();
        }
        function onOpen() {
            $("#btnOpen").hide();
            $("#lognForm").ejDialog("open");
        }
        function coupeClick() {
            $("#r8Coupe").ejDialog("open");
        }
        function spyderClick() {
            $("#r8Spyder").ejDialog("open");
        }
        function onDialogClose(args) {
            $("#btnOpen").show();
        }
    </script>
    <style>
	    .panel_container {
			height:650px;
		}
	    label.error{
           color:red;
        }
        .control {
            height: 500px;
        }

        .ejinputtext {
            height: 25px;
            width: 100%;
            margin-bottom: 10px;
        }

        .row .cols-sample-area {
			height: 550px!important;
			width: 650px;
            padding: 0px;
            margin-bottom: 50px;
            position: relative;
        }
        .cols-sample-area{
			  height: 500px!important;
              width: 650px;
              display: block !important;
	          position:relative; overflow:hidden;
		}
        .acc {
            font-size: 12px;
            padding-top: 8px;
        }

        .top {
            margin-top: 5px;
        }

        .reqired {
            margin: 0 0 3px 0;
            color: red;
            display: inline-block;
        }
div.e-overlay{
    width: 100% !important;
}
    </style>


