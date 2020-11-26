<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <div class="frame">
            <div class="radioalign">
                <br />
                Category
              <br />
                <br />
                       <div class='chkrad'>
                            <?php
                            $radio=new EJ\RadioButton('fresher');
                            echo  $radio->name('category')->checked(true)->render()
                            ?>
                            <label for='fresher' class='clslab'>Fresher</label>
                        </div>
                        <div class='chkrad'>
                            <?php
                            $radio=new EJ\RadioButton('experienced');
                            echo $radio->name('category')->render()
                            ?>
                            <label for='experienced' class='clslab'>Experienced</label>
                        </div>
                    <br />
                <br />
                <span class='btn_label'>Experienced</span>
                <br />
                <br />
                   <div class='chkrad'>
                            <?php
                            $radio=new EJ\RadioButton('Radio2');
                            echo  $radio->name('experience')->checked(true)->render();
                            ?>
                            <label for='Radio2' class='clslab'>1+ years</label>
                        </div>
                        <div class='chkrad'>
                            <?php
                            $radio=new EJ\RadioButton('Radio4');
                            echo   $radio->size('medium')->name('experience')->render()
                            ?>
                            <label for='Radio4' class='clslab'>2.5+years</label>
                        </div>
                        <div class='chkrad'>
                            <?php
                            $radio=new EJ\RadioButton('Radio5');
                            echo $radio->size('medium')->name('experience')->render()
                            ?>
                            <label for='Radio5' class='clslab'>5+years</label>
                        </div>
						
                   <br />
            </div>
        </div>
		 <style>
            .frame {
                width: 100%;
            }

            .chkrad {
                white-space: nowrap;
                display: inline-block;
            }
        </style>
</body>
