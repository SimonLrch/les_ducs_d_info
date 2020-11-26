<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <table>
        <tr>
            <td valign="top">Full Precision :
            </td>
            <td>
                <?php
                $rating1 =new EJ\Rating("fullRating");
                echo $rating1->value(4)->precision("full")->render();
                ?>
            </td>
        </tr>
        <tr>
            <td valign="top">Half Precision :
            </td>
            <td>
                <?php
                $rating2 =new EJ\Rating("halfRating");
                echo $rating2->value(3.5)->precision("half")->render();
                ?>
            </td>
        </tr>
        <tr>
            <td valign="top">Exact Precision :
            </td>
            <td>
                <?php
                $rating3 =new EJ\Rating("exactRating");
                echo $rating3->value(3.7)->precision("exact")->render();
                ?>
            </td>
        </tr>
    </table>

    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>