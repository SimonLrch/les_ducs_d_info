<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div id="container">
            <div class="e-lv">
                <div class="e-header">
                    <div id="butdrawer"
                        class="drawericon e-icon">
                    </div>
                    <h2>Home</h2>
                </div>
            </div>
            <!--Home page Content-->
            <div id="home">
                <p>
                    The United Kingdom of Great Britain and Northern Ireland, commonly known as the United Kingdom (UK) and Britain, is a sovereign state located off the north-western coast of continental Europe. The country includes the island of Great Britain, the north-eastern part of the island of Ireland and many smaller islands. Northern Ireland is the only part of the UK that shares a land border with another state—the Republic of Ireland. Apart from this land border, the UK is surrounded by the Atlantic Ocean in the west and north, the North Sea in the east, the English Channel in the south and the Irish Sea in the west.
                </p>
            </div>
            <!--People page Content-->
            <div id="people">
                <table cellpadding="5px">
                    <tbody>
                        <tr>
                            <td>
                                <div style="background-image: url('Content/images/Employees/1.png')" class="peopleimage Agatha_ie8">
                                </div>
                                <span>Agatha Jessie</span>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/Employees/2.png')" class="peopleimage Andrew_ie8">
                                </div>
                                <span>Andrew Philip</span>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/Employees/3.png')" class="peopleimage Lilly_ie8">
                                </div>
                                <span>Lilly Thomas</span>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/Employees/4.png')" class="peopleimage Jaden_ie8">
                                </div>
                                <span>Jaden Storm</span>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/Employees/5.png')" class="peopleimage Angel_ie8">
                                </div>
                                <span>Angel Christie</span>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/Employees/6.png')" class="peopleimage Joe_ie8">
                                </div>
                                <span>Joe Michael</span>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/Employees/7.png')" class="peopleimage Marie_ie8">
                                </div>
                                <span>Marie Luke</span>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/Employees/8.png')" class="peopleimage Mage_ie8">
                                </div>
                                <span>Magen Mia</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Profile page Content-->
            <div id="profile">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div style="background-image: url('Content/images/Employees/2.png')" class="profileimage">
                                </div>
                            </td>
                            <td>
                                <h2>Andrew Philip
                                </h2>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <span style="font-weight: bold">Profile</span><br>
                <p>
                    Born on December 25, 1954, in Spokane, Washington. Philip graduated from Texas University in 1978. He started his career as a teacher.
					Later he started business with his friend Paul. They both spent more time together working on business. They earned enough money and spent that for poor and social welfares. Later they together started an organization for children welfare.
                </p>
            </div>
            <!--Photos page Content-->
            <div id="photos">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div style="background-image: url('Content/images/navigationdrawer/photo/01.png')"
                                    class="photoimage photoimage1_ie8">
                                </div>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/navigationdrawer/photo/02.png')"
                                    class="photoimage photoimage2_ie8">
                                </div>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/navigationdrawer/photo/03.png')"
                                    class="photoimage photoimage3_ie8">
                                </div>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/navigationdrawer/photo/04.png')"
                                    class="photoimage photoimage4_ie8">
                                </div>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/navigationdrawer/photo/05.png')"
                                    class="photoimage photoimage5_ie8">
                                </div>
                            </td>
                            <td>
                                <div style="background-image: url('Content/images/navigationdrawer/photo/06.png')"
                                    class="photoimage photoimage6_ie8">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Communities page Content-->
            <div id="communities">
                <h2>Product Breadth
                </h2>
                <p>
                    UI, reporting and business intelligence on any .NET platform, all from one vendor.
                </p>
                <h2>No-Hassle Licensing
                </h2>
                <p>
                    No royalties, run-time, or server-deployment fees means no surprises.
                </p>
                <h2>Uncompromising Quality
                </h2>
                <p>
                    An almost brutal QA process makes our products truly enterprise-quality.
                </p>
                               
            </div>
            <!--Location page Content-->
            <div id="location">
                <div style="background-image: url('Content/images/navigationdrawer/location.png')"
                    class="locationimage">
                </div>
            </div>
      
        <!--Navigation Drawer Control-->
        <div id="content_container">rtwertwertwer</div>

    <?php
      $lvset=array("width"=>"300","selectedItemIndex"=>"0","mouseUp"=>"headChange");
      $itemslist=array(array("text"=>"Home","imageUrl"=>"Content/images/navigationdrawer/home.png","href"=>"#home","id"=>"navhome"),
          array("text"=>"People","imageUrl"=>"Content/images/navigationdrawer/people.png","href"=>"#people","id"=>"navpeople"),
          array("text"=>"Profile","imageUrl"=>"Content/images/navigationdrawer/profile.png","href"=>"#profile","id"=>"navprofile"),
          array("text"=>"Photos","imageUrl"=>"Content/images/navigationdrawer/photo.png","href"=>"#photos","id"=>"navphotos"),
          array("text"=>"Communities","imageUrl"=>"Content/images/navigationdrawer/communities.png","href"=>"#communities","id"=>"navcommunities"),
          array("text"=>"Location","imageUrl"=>"Content/images/navigationdrawer/locations.png","href"=>"#location","id"=>"navlocation"));
    $navdraw=new EJ\NavigationDrawer("navpane");
    echo $navdraw->listViewSettings($lvset)->items($itemslist)->enableListView(true)->templateEnd()->type("overlay")->position("normal")->targetId("butdrawer")->contentId("content_container")->render();
    ?>
</div>
  </div>
<style>    
    .cols-sample-area {
        width:600px;
		min-height:400px;        
        margin:0 auto;
        float:none;
    }
    #navpane_listbox img.e-list-img {
            padding-right: 10px;
        }


        .e-header {
            padding-top: 8px;
            padding-left: 0px;
        }

        #container {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .peopleimage {
            background: none no-repeat scroll center center / 70px 70px rgba(0, 0, 0, 0);
            height: 100px;
            margin: auto;
            width: 100px;
            border: 1px solid #737373;
			background-size: contain;
			background-repeat: no-repeat;
        }

        .profileimage {
            background: none no-repeat scroll center center / 90px 90px rgba(0, 0, 0, 0);
            height: 95px;
            border: 1px solid #b3b3b3;
            margin-right: 12px;
            width: 95px;
			background-size: contain;
			background-repeat: no-repeat;
        }

        #people td {
            border: 1px solid #9f9f9f;
            text-align: center;
            padding: 10px;
        }

        #photos td div {
            background-position: center center;
            background-size: 100% 100%;
            border: 1px solid #b3b3b3;
            margin: 5px;
        }

        .photoimage {
            background: none no-repeat scroll center center / 140px 120px rgba(0, 0, 0, 0);
            height: 125px;
            margin: auto;
            width: 145px;
        }

        .locationimage {
            background: url("img/location.png") no-repeat scroll center center / 300px 200px rgba(0, 0, 0, 0);
            height: 230px;
            margin: auto;
            padding: 10px;
            width: 320px;
        }

        .drawericon {
            background-position: center center;
            background-repeat: no-repeat;
            height: 32px;
            width: 32px;
            background-size: 100% 100%;
			padding-right: 10px;
        }
        navdraw{
        display: block;
    position: relative;
    height: 399px;
    border: 1px solid #c8c8c8;
    }
   #navdraw{
    position: relative;
    height: 100%;
    overflow: hidden;
    }
    #navdrawer_container{
        padding: 10px;
    }
    #navdrawer_container .e-lv.subpage{
        border: none !important;
    }
    #navpane_Overlay{
        z-index: -1;
    }
    #people, #photos{
        overflow:auto;
    }
    #content_container, #container{
        width:inherit;
    }
    sd-navbar{
        display: block;
    }
        .drawericon:before {
            content: "\e76b";
            font-size: 28px;
			height: 26px;
        }
   .subpage {
        padding: 10px;
        text-align: justify;
    }
    
    #navpane .subpage {
        padding: 0px;
    }
        #container {
        height: 400px;
        position: relative;
		padding: 0px;
		overflow: hidden;
		margin: 0px; 
        border: 1px solid gray;
    }
</style>
<script>
    function headChange(e) {
        $("#butdrawer").parent().children("h2").text(e.text);
    }
   
</script>
