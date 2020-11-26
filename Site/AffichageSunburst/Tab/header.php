<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
     <?php
    $tab =new EJ\Tab("directionTab"); 
     $tab->templateStart();
     ?>
        <ul>
                            <li><a href="#rome">Rome</a></li>
                            <li><a href="#paris">Paris</a></li>
                            <li><a href="#london">London</a></li>
                        </ul>
                        <div id="rome">
                            Rome is one of the world's most fascinating cities. The old adage that Rome was not built in a day — and that you won't see it in one or even in three — is true. For the intrepid traveler who can keep pace, here is a list of must-sees. But remember what the Romans say: "Even a lifetime isn't enough to see Rome."
                        </div>
                        <div id="paris">
                            Paris, the city of lights and love - this short guide is full of ideas for how to make the most of the romanticism that oozes from every one of its beautiful corners.You couldn't possibly visit Paris without seeing the Eiffel Tower. Even if you do not want to visit this world famous structure, you will see its top from all over Paris. The tower rises 300 meters tall (984 ft); when it was completed at the end of the nineteenth century.
                        </div>
                        <div id="london">
                            London is one of the most popular tourist destinations in the world for a reason. A cultural and historical hub, London has an excellent public transportation system that allows visitors to see all the fantastic sights without spending a ton of money on a rental car.London contains four World Heritage Sites: the Tower of London; Kew Gardens; the site comprising the Palace of Westminster, Westminster Abbey, and St Margaret's Church.
                        </div>
    <?php
    $tab->templateEnd();
    echo $tab->width("500px")->headerPosition("left")->heightAdjustMode("auto")->render();
    ?>
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>