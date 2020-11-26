<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">     

        <ul id="ribbonmenu">
        <li><a>FILE</a>
            <ul>
                <li><a>New</a></li>
                <li><a>Open</a></li>                
                <li><a>Save As</a></li>                
            </ul>
        </li>
    </ul> 
				
   <?php
  $ribbon = new  \EJ\Ribbon("defaultRibbon");
  $aTab = new \EJ\Ribbon\ApplicationTab();           
  $aTab->type("menu")->menuItemID("ribbonmenu");
  $hometab  = new \EJ\Ribbon\Tab();
  $clipboard  = new \EJ\Ribbon\Group();
  $grpcontent1 = new \EJ\Ribbon\Content();
  $grpcontentpaste = new \EJ\Ribbon\Content();
  $contentgroup1=new \EJ\Ribbon\ContentGroup();
  $btnsettings1=array('contentType'=>'imageonly','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-ribbonpaste');
  $contentgroup1->id("paste")->text("Paste")->toolTip("Paste")->buttonSettings($btnsettings1);    
  $default2= new \EJ\Ribbon\Defaults();
  $default2->width(60)->height(70)->type("button");

  $contentgroup2=new \EJ\Ribbon\ContentGroup();
  $btnsettings2=array('contentType'=>'textandimage','prefixIcon'=>'e-icon e-ribbon e-ribboncut');
  $contentgroup2->id("cut")->text("Cut")->toolTip("Cut")->buttonSettings($btnsettings2); 
  
  $contentgroup3=new \EJ\Ribbon\ContentGroup();
  $btnsettings3=array('contentType'=>'textandimage','prefixIcon'=>'e-icon e-ribbon e-ribboncopy');
  $contentgroup3->id("copy")->text("Copy")->toolTip("Copy")->buttonSettings($btnsettings3); 

  $contentgroup4=new \EJ\Ribbon\ContentGroup();
  $btnsettings4=array('contentType'=>'textandimage','prefixIcon'=>'e-icon e-ribbon clearAll');
  $contentgroup4->id("clear")->text("Clear")->toolTip("Clear")->buttonSettings($btnsettings4); 

  $default3= new \EJ\Ribbon\Defaults();
  $default3->width(60)->height(25)->type("button");  
  $grpcontentpaste->groups(array($contentgroup1))->defaults($default2);
  $grpcontent1->groups(array($contentgroup2,$contentgroup3,$contentgroup4))->defaults($default3);
  $clipboard->text("Clipboard")->alignType("columns")->content(array($grpcontentpaste,$grpcontent1));

  $clipboard1  = new \EJ\Ribbon\Group();
  $grpcontent = new \EJ\Ribbon\Content();
  $contentgroup=new \EJ\Ribbon\ContentGroup();
  $btnsettings=array('contentType'=>'imageonly','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-new');
  $contentgroup->id("new")->text("New")->toolTip("New")->buttonSettings($btnsettings);  
  $default1= new \EJ\Ribbon\Defaults();
  $default1->width(60)->height(70)->type("button");
  $grpcontent->groups(array($contentgroup))->defaults($default1);
  $clipboard1->text("New")->alignType("rows")->content(array($grpcontent));

  $align  = new \EJ\Ribbon\Group();
  $grpcontent2 = new \EJ\Ribbon\Content();
  $aligncontentgroup1=new \EJ\Ribbon\ContentGroup();
  $alignbtnsettings1=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-bullet');
  $aligncontentgroup1->id("bullet")->text("Bullet Format")->toolTip("Bullet Format")->buttonSettings($alignbtnsettings1);
  
  $aligncontentgroup2=new \EJ\Ribbon\ContentGroup();
  $alignbtnsettings2=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-numbericon');
  $aligncontentgroup2->id("number")->text("Number Format")->toolTip("Number Format")->buttonSettings($alignbtnsettings2);

  $aligncontentgroup3=new \EJ\Ribbon\ContentGroup();
  $alignbtnsettings3=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-indent');
  $aligncontentgroup3->id("textindent")->text("Text Indent")->toolTip("Text Indent")->buttonSettings($alignbtnsettings3);

  $aligncontentgroup4=new \EJ\Ribbon\ContentGroup();
  $alignbtnsettings4=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-outdent');
  $aligncontentgroup4->id("textoudent")->text("Text Oudent")->toolTip("Text Oudent")->buttonSettings($alignbtnsettings4);

  $aligncontentgroup5=new \EJ\Ribbon\ContentGroup();
  $alignbtnsettings5=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-sort');
  $aligncontentgroup5->id("sort")->text("Sort")->toolTip("Sort")->buttonSettings($alignbtnsettings5);

  $aligncontentgroup6=new \EJ\Ribbon\ContentGroup();
  $alignbtnsettings6=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-border');
  $aligncontentgroup6->id("border")->text("Border")->toolTip("Border")->buttonSettings($alignbtnsettings6);

  $aligndefault= new \EJ\Ribbon\Defaults();
  $aligndefault->type("button");
  $grpcontent2->groups(array($aligncontentgroup1,$aligncontentgroup2,$aligncontentgroup3,$aligncontentgroup4,$aligncontentgroup5,$aligncontentgroup6))->defaults(array($aligndefault));
  $aligngrpcontent = new \EJ\Ribbon\Content();
  $aligndefault1= new \EJ\Ribbon\Defaults();
  $aligndefault1->type("button");

  $alignsubgroup1=new \EJ\Ribbon\ContentGroup();
  $leftbtnsettings=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon alignleft');
  $alignsubgroup1->id("alignleft")->text("JustifyLeft")->toolTip("alignleft")->buttonSettings($leftbtnsettings);

  $alignsubgroup2=new \EJ\Ribbon\ContentGroup();
  $centerbtnsettings=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon aligncenter');
  $alignsubgroup2->id("aligncenter")->text("JustifyCenter")->toolTip("alignleft")->buttonSettings($centerbtnsettings);

  $alignsubgroup2=new \EJ\Ribbon\ContentGroup();
  $justbtnsettings=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon justify');
  $alignsubgroup2->id("aligncenter")->text("JustifyCenter")->toolTip("alignleft")->buttonSettings($justbtnsettings);

  
  $alignsubgroup3=new \EJ\Ribbon\ContentGroup();
  $rightbtnsettings=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon alignright');
  $alignsubgroup3->id("alignright")->text("JustifyRight")->toolTip("alignright")->buttonSettings($rightbtnsettings);

  $alignsubgroup4=new \EJ\Ribbon\ContentGroup();
  $justifybtnsettings=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon justify');
  $alignsubgroup4->id("justify")->text("justifyFull")->toolTip("justify")->buttonSettings($justifybtnsettings);

  $alignsubgroup5=new \EJ\Ribbon\ContentGroup();
  $upperbtnsettings=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-uppercase');
  $alignsubgroup5->id("uppercase")->text("Uppercase")->toolTip("uppercase")->buttonSettings($upperbtnsettings);

  $alignsubgroup6=new \EJ\Ribbon\ContentGroup();
  $lowerbtnsettings=array('contentType'=>'imageonly','prefixIcon'=>'e-icon e-ribbon e-lowercase');
  $alignsubgroup6->id("lowercase")->text("Lowercase")->toolTip("lowercase")->buttonSettings($lowerbtnsettings);
  $alignsubgroup6->id("lowercase")->text("Lowercase")->toolTip("lowercase")->buttonSettings($lowerbtnsettings);

  $aligngrpcontent->groups(array($alignsubgroup1,$alignsubgroup2,$alignsubgroup3,$alignsubgroup4,$alignsubgroup5,$alignsubgroup6))->defaults($aligndefault1);
  $align->text("Alignment")->alignType("rows")->content(array($grpcontent2,$aligngrpcontent));

  $action  = new \EJ\Ribbon\Group();
  $actioncontent = new \EJ\Ribbon\Content();
  $actcontentgroup=new \EJ\Ribbon\ContentGroup();
  $actcontentgroup1=new \EJ\Ribbon\ContentGroup();
  $actbtnsettings=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-undo');
  $actcontentgroup->id("undo")->text("Undo")->toolTip("Undo")->buttonSettings($actbtnsettings); 
  $actbtnsettings1=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-redo');
  $actcontentgroup1->id("redo")->text("Redo")->toolTip("Redo")->buttonSettings($actbtnsettings1); 
  $actdefault1= new \EJ\Ribbon\Defaults();
  $actdefault1->width(40)->height(70)->type("button");
  $actioncontent->groups(array($actcontentgroup,$actcontentgroup1))->defaults($actdefault1);
  $action->text("Actions")->alignType("rows")->content(array($actioncontent));

  $hometab->id("home")->text("HOME")->groups(array($clipboard,$align,$action,$clipboard1));
  $inserttab  = new \EJ\Ribbon\Tab();

  $tables  = new \EJ\Ribbon\Group();
  $insertcontent = new \EJ\Ribbon\Content();
  $insertcontentgroup=new \EJ\Ribbon\ContentGroup();
  $insertbtnset=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-table');
  $insertcontentgroup->id("tables")->text("Tables")->toolTip("Tables")->buttonSettings($insertbtnset);  
  $insertdefault= new \EJ\Ribbon\Defaults();
  $insertdefault->width(50)->height(70)->type("button");
  $insertcontent->groups(array($insertcontentgroup))->defaults($insertdefault);
  $tables->text("Table")->alignType("columns")->content(array($insertcontent));

  $Illustrations  = new \EJ\Ribbon\Group();
  $Illustrationsgrp = new \EJ\Ribbon\Content();

  $picturegroup=new \EJ\Ribbon\ContentGroup();
  $picbtnsettings=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-picture');
  $picturegroup->id("pictures")->text("Pictures")->toolTip("Pictures")->buttonSettings($picbtnsettings);

  $videogroup=new \EJ\Ribbon\ContentGroup();
  $vbtnsettings=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-video');
  $videogroup->id("videos")->text("Videos")->toolTip("Videos")->buttonSettings($vbtnsettings);
  
  $shapegroup=new \EJ\Ribbon\ContentGroup();
  $sbtnsettings=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-shape');
  $shapegroup->id("shapes")->text("Shapes")->toolTip("Shapes")->buttonSettings($sbtnsettings);

  $chartgroup=new \EJ\Ribbon\ContentGroup();
  $cbtnsettings=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-chart');
  $chartgroup->id("chart")->text("Chart")->toolTip("Chart")->buttonSettings($cbtnsettings);

  $Illustrationsdeflt= new \EJ\Ribbon\Defaults();
  $Illustrationsdeflt->type("button")->height(70)->width(56);
  
  $Illustrationsgrp->groups(array($picturegroup,$videogroup,$shapegroup,$chartgroup))->defaults($Illustrationsdeflt);
  $Illustrations->text("Illustrations")->alignType("rows")->content(array($Illustrationsgrp));

  $comments  = new \EJ\Ribbon\Group();
  $cmdcontent = new \EJ\Ribbon\Content();
  $cmdcontentgroup=new \EJ\Ribbon\ContentGroup();
  $cmdbtnset=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-comment');
  $cmdcontentgroup->id("comments")->text("Comments")->toolTip("Comments")->buttonSettings($cmdbtnset);  
  $cmddefault= new \EJ\Ribbon\Defaults();
  $cmddefault->width(70)->height(70)->type("button");
  $cmdcontent->groups(array($cmdcontentgroup))->defaults($cmddefault);
  $comments->text("Comments")->alignType("rows")->content(array($cmdcontent));

  $hyperlink  = new \EJ\Ribbon\Group();
  $hypcontent = new \EJ\Ribbon\Content();
  $hypcontentgroup=new \EJ\Ribbon\ContentGroup();
  $hypbtnset=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-hyperlink');
  $hypcontentgroup->id("hyperlink")->text("Hyperlink")->toolTip("Hyperlink")->buttonSettings($hypbtnset);  
  $hypdefault= new \EJ\Ribbon\Defaults();
  $hypdefault->width(70)->height(70)->type("button");
  $hypcontent->groups(array($hypcontentgroup))->defaults($hypdefault);
  $hyperlink->text("Hyperlink")->alignType("rows")->content(array($hypcontent));

  $equation  = new \EJ\Ribbon\Group();
  $eqcontent = new \EJ\Ribbon\Content();
  $eqcontentgroup=new \EJ\Ribbon\ContentGroup();
  $eqbtnset=array('contentType'=>'textandimage','imagePosition'=>'imagetop','prefixIcon'=>'e-icon e-ribbon e-equation');
  $eqcontentgroup->id("equation")->text("Equation")->toolTip("Equation")->buttonSettings($eqbtnset);  
  $eqdefault= new \EJ\Ribbon\Defaults();
  $eqdefault->width(70)->height(70)->type("button");
  $eqcontent->groups(array($eqcontentgroup))->defaults($eqdefault);
  $equation->text("Equation")->alignType("rows")->content(array($eqcontent));

  $inserttab->id("insert")->text("INSERT")->groups(array($tables,$comments,$hyperlink,$equation,$Illustrations));
  echo $ribbon ->width("100%")->applicationTab($aTab)->tabs(array($hometab,$inserttab))->allowResizing("true")->render();
  ?> 
</div>
<script>
 
</script>

<link href="Content/ejthemes/ribbon-css/ej.icons.css" rel="stylesheet" />
   
<style class="cssStyles">

.cols-sample-area {
            width: 500px !important;
			height: 300px !important;
        }
 .e-ribbon .e-New:before {        
            line-height: 32px !important;
            text-indent: -4px !important;
        }
</style>


