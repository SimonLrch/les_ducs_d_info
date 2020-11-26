<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
<?php
    $tab =new EJ\Tab("moviesTab"); 
     $tab->templateStart();
     ?>
					<ul>
						<li><a href="#steelman">Man of Steel</a></li>
						<li><a href="#woldwar">World War Z</a></li>
						<li><a href="#unive">Monsters University</a></li>
					</ul>
					<div id="steelman">
							<table>
								<tr>
									<td class="movies-img" valign="top">
										<img src="Content/images/rating/mos.png" alt="mos" />
									</td>
									<td valign="top">
										<div>
											<span class="movie-header">Man of Steel</span><br />
											Rating :
													<br />
                                            <?php
                                            $rating1 =new EJ\Rating("mosRating");
                                            echo $rating1->value(3)->render();
                                            ?>
											<span>Movie Info:</span>
											<p>
												A young boy learns that he has extraordinary powers and is not of this Earth.
											</p>
										</div>
									</td>
								</tr>
							</table>
					</div>
					<div id="woldwar">
						<table>
							<tr>
								<td class="movies-img" valign="top">
									<img src="Content/images/rating/wwz.png" alt="mos" />
								</td>
								<td valign="top">
									<div>
										<span class="movie-header">World War Z</span><br />
										Rating :
												<br />
                                                <?php
                                            $rating2 =new EJ\Rating("wwzRating");
                                            echo $rating2->value(4)->render();
                                            ?>
										<span>Movie Info:</span>
										<p>
											The story revolves around United Nations employee Gerry Lane (Pitt).
										</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<div id="unive">
						<table>
							<tr>
								<td class="movies-img" valign="top">
									<img src="Content/images/rating/mu.png" alt="mos" />
								</td>
								<td valign="top">
									<div>
										<span class="movie-header">Monsters University</span><br />
										Rating :
												<br />
                                                 <?php
                                            $rating3 =new EJ\Rating("univRating");
                                            echo $rating3->value(4)->render();
                                            ?>
										<span>Movie Info:</span>
										<p>
											Mike Wazowski and James P. Sullivan are an inseparable pair, but that wasn't always the case. 
										</p>
									</div>
								</td>
							</tr>
						</table>
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
    .movies-img {
            width: 125px;
        }

        .movie-header {
            font-size: 20px;
            font-weight: 600;
        }
</style>