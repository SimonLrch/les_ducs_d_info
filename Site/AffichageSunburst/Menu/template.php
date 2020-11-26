<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $menu = new EJ\Menu("template");
    $menu->templateStart();
    ?>
        <li><a>Books</a>
            <ul>
                <li>
                    <div class="temp temp1">
                        <span>BOOKS</span>
                        <ul>
                            <li><a>New Releases</a></li>
                            <li><a>Bestsellers</a></li>
                            <li><a>Upcoming</a></li>
                            <li><a>Box Sets</a></li>
                        </ul>
                        <ul>
                            <li><a>HTML Basics</a></li>
                            <li><a>JavaScript</a></li>
                            <li><a>JQuery</a></li>
                            <li><a>PHP Basics</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li><a>Cameras</a>
            <ul>
                <li>
                    <div class=" temp temp2">
                        <div>
                            <span>CAMERAS</span>
                            <ul>
                                <li><a>Point & Shoots</a></li>
                                <li><a>Digital SLR</a></li>
                                <li><a>Camcorders</a></li>
                                <li><a>Bestsellers</a></li>
                            </ul>
                            <ul>
                                <li><a>Still Camera</a></li>
                                <li><a>Digital Camera</a></li>
                                <li><a>Video Camera</a></li>
                                <li><a>Virtual Camera</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li><a>Movies</a>
            <ul>
                <li>
                    <div class="temp temp3">
                        <div>
                            <span>MOVIES</span>
                            <ul>
                                <li><a>Genobili Actions</a></li>
                                <li><a>Jackie Rocks</a></li>
                                <li><a>Men In Blue</a></li>
                                <li><a>Human vs Alien</a></li>
                            </ul>
                            <ul>
                                <li><a>Million Dreams</a></li>
                                <li><a>Kung-fu</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li><a>Musics</a>
            <ul>
                <li>
                    <div class="temp temp4">
                        <div>
                            <span>MUSICS</span>
                            <ul>
                                <li><a>New Releases</a></li>
                                <li><a>Bestsellers</a></li>
                                <li><a>Devotional</a></li>
                                <li><a>Sufi & Ghazal</a></li>
                            </ul>
                            <ul>
                                <li><a>Pop songs</a></li>
                                <li><a>Rock Music</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li><a>Gaming</a>
            <ul>
                <li>
                    <div class="temp temp5">
                        <div>
                            <span>GAMING</span>
                            <ul>
                                <li><a>Upcoming</a></li>
                                <li><a>PC</a></li>
                                <li><a>PS Vista</a></li>
                                <li><a>PS3</a></li>
                                <li><a>XBox</a></li>
                                <li><a>Consoles</a></li>
                            </ul>
                            <ul>
                                <li><a>FIFA 2999</a></li>
                                <li><a>NBA Actions</a></li>
                                <li><a>Crick Champions</a></li>
                                <li><a>Carom legend</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    
    <?php
    $menu->templateEnd();
    echo $menu->width("100%")->render();
    ?>

</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        height: 350px;
        margin: 0 auto;
        float: none;
    }
    .temp {
                height: 237px;
                width: 375px;
                font-family: segoe UI;
                cursor: default;
            }

                .temp span {
                    color: red;
                    float: left;
                    font-size: 20px;
                    left: 20px !important;
                    position: relative;
                    top: 25px;
                    width: 100px;
                }

                .temp ul {
                    float: left;
                    font-size: 14px;
                    left: -79px !important;
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    position: relative;
                    top: 50px;
                    width: 128px;
                }

                    .temp ul li {
                        font-size: 13px;
                    }

                        .temp ul li a {
                            text-decoration: underline;
                            cursor: pointer;
                            color: #000;
                        }

            .temp1 {
                background-image: url("Content/images/menu/books-bg.png");
            }

            .temp2 {
                background-image: url("Content/images/menu/digital-bg.png");
            }

            .temp3 {
                background-image: url("Content/images/menu/smile-bg.png");
            }

            .temp4 {
                background-image: url("Content/images/menu/mp3-bg.png");
            }

            .temp5 {
                background-image: url("Content/images/menu/toy-bg.png");
            }

            #template > li > ul li:hover {
                background: none;
            }

            #template > li > ul > li div > ul > li a {
                background: none;
            }
</style>