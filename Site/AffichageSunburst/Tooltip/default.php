<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
            JavaScript is a high-level, dynamic, untyped, and interpreted programming language. It has been standardized in the <a id="link1"><u> ECMAScript </u> </a>language specification. Alongside HTML and CSS, it is one of the three essential technologies of <a id="link2"><u> World&nbsp;Wide&nbsp;Web </u> </a>content production; the majority of websites employ it and it is supported by all modern Web browsers without plug-ins. JavaScript is prototype-based with first-class functions, making it a multi-paradigm language, supporting <a id="link3"> <u>object&nbsp;-&nbsp;oriented </u> </a>, imperative, and functional programming styles.
       
    <?php
    $tooltip1 =new EJ\Tooltip("link1");
    echo $tooltip1->content("ECMAScript (or ES) is a trademarked scripting-language specification standardized by Ecma International in ECMA-262 and ISO/IEC 16262.")->render();
    ?>
    
    <?php
    $tooltip2 =new EJ\Tooltip("link2");
    echo $tooltip2->content("The World Wide Web (WWW) is an information space where documents and other web resources are identified by URLs, interlinked by hypertext links, and can be accessed via the Internet.")->render();
    ?>

    <?php
    $tooltip3 =new EJ\Tooltip("link3");
    echo $tooltip3->content("Object-oriented programming (OOP) is a programming language model organized around objects rather than 'actions' and data rather than logic.")->render();
    ?>
    
</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
</style>