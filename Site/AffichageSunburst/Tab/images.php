<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
     <?php
    $tab =new EJ\Tab("iconTab"); 
     $tab->templateStart();
     ?>
        <ul>
                            <li><a href="#India">India</a><span class="flagsimage sprite-India"></span></li>
                            <li><a href="#Australia">Australia</a><span class="flagsimage sprite-Australia"></span></li>
                            <li><a href="#USA">United States</a><span class="flagsimage sprite-USA"></span></li>
                            <li><a href="#France">France</a><span class="flagsimage sprite-France"></span></li>
                        </ul>
                        <div id="India">
                            India officially the Republic of India (Bharat Ganrajya), is a country in South Asia. It is the seventh-largest country by area, the second-most populous country with over 1.2 billion people, and the most populous democracy in the world. Bounded by the Indian Ocean on the south, the Arabian Sea on the south-west, and the Bay of Bengal on the south-east, it shares land borders with Pakistan to the west;China, Nepal, and Bhutan to the north-east; and Burma and Bangladesh to the east. In the Indian Ocean, India is in the vicinity of Sri Lanka and the Maldives; in addition, India's Andaman and Nicobar Islands share a maritime border with Thailand and Indonesia.
                        </div>
                        <div id="Australia">
                            Australia, officially the Commonwealth of Australia, is a country comprising the mainland of the Australian continent, the island of Tasmania and numerous smaller islands. It is the world's sixth-largest country by total area. Neighboring countries include Indonesia, East Timor and Papua New Guinea to the north; the Solomon Islands, Vanuatu and New Caledonia to the north-east; and New Zealand to the south-east.
                        </div>
                        <div id="USA">
                            The United States of America (USA or U.S.A.), commonly called the United States (US or U.S.) and America, is a federal republic consisting of fifty states and a federal district. The 48 contiguous states and the federal district of Washington, D.C. are in central North America between Canada and Mexico. The state of Alaska is west of Canada and east of Russia across the Bering Strait, and the state of Hawaii is in the mid-North Pacific. The country also has five populated and nine unpopulated territories in the Pacific and the Caribbean.
                        </div>
                        <div id="France">
                            France, officially the French Republic is a sovereign state comprising territory in western Europe and several overseas regions and territories. The European part of France, called Metropolitan France, extends from the Mediterranean Sea to the English Channel and the North Sea, and from the Rhine to the Atlantic Ocean; France covers 640,679 square kilometres and as of August 2015 has a population of 67 million, counting all the overseas departments and territories .
                        </div>
    <?php
    $tab->templateEnd();
    echo $tab->width("500px")->render();
    ?>
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    .flagsimage {
            background-image: url("Content/images/tab/flags.png");
            display: inline-block;
            overflow: hidden;
            background-repeat: no-repeat;
            font-size: 0;
            line-height: 0;
            text-indent: -3333px;
            text-align: center;
            vertical-align: middle;
            margin-right: -9px;
            margin-left: 9px;
        }

        .sprite-Australia {
            background-position: 0 -2px;
            width: 16px;
            height: 16px;
            float: left;
            margin-top: 14px;
        }

        .sprite-Germany {
            background-position: 0 -398px;
            width: 16px;
            height: 16px;
            float: left;
        }

        .sprite-India {
            background-position: -3px -462px;
            width: 16px;
            height: 15px;
            margin-top: 14px;
            float: left;
        }

        .sprite-France {
            background-position: 0px -331px;
            width: 16px;
            height: 13px;
            float: left;
            margin-top: 14px;
        }

        .sprite-USA {
            background-position: 0 -1121px;
            width: 16px;
            height: 16px;
            float: left;
            margin-top: 14px;
        }
</style>