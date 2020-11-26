<?php
require_once '../EJ/AutoLoad.php';

?>

<script>
    //Binds Custom JSON with node
    function nodeTemplate(diagram, node) {
        node.source = node.ImageUrl;
        node.constraints = ej.datavisualization.Diagram.NodeConstraints.InheritTooltip | ej.datavisualization.Diagram.NodeConstraints.PointerEvents;
    }

    function create(args) {
        $("#diagram1").ejDiagram("instance").fitToPage()
    }

</script>
<script type="text/x-jsrender" id="mouseovertoolTipId">
    <svg style="position: relative; width: 150px; height: 75px;">
        <g>
            <path fill="#FFFFFF" d="M 147 75 H 3 c -1.7 0 -3 -1.3 -3 -2.8 V 2.8 C 0 1.3 1.3 0 3 0 h 144 c 1.7 0 3 1.3 3 2.8 v 69.4 C 150 73.7 148.7 75 147 75 Z" />
            <path d="M 147.2 74 H 2.8 c -1.3 0 -2.3 -0.6 -2.3 -1.4 V 68 h 149 v 4.6 C 149.5 73.3 148.4 74 147.2 74 Z" fill="{{:RatingColor}}" />
            <path style="fill: none; stroke: #D0D0D0; stroke-miterlimit: 10;" d="M 147.2 74.5 H 2.8 c -1.3 0 -2.3 -0.9 -2.3 -2.1 V 2.6 c 0 -1.2 1 -2.1 2.3 -2.1 h 144.5 c 1.3 0 2.3 0.9 2.3 2.1 v 69.8 C 149.5 73.5 148.4 74.5 147.2 74.5 Z" />
            <text transform="matrix(1 0 0 1 61.0801 16.0686)" style="fill: #2D2D2D; font-family: Segoe UI; font-weight: bold; font-size: 10px;">{{:Name}}</text>
            <text transform="matrix(1 0 0 1 61.0801 32.6208)" style="font-size: 10px; fill: #2D2D3A; font-family: Segoe UI; font-size: 9px;">{{:Designation:}}</text>
            <text transform="matrix(1 0 0 1 61.0801 44.4484)" style="font-size: 10px; fill: #2D2D3A; font-family: 'Segoe UI'; font-size: 9px;">xyz@abc.com</text>
            <text transform="matrix(1 0 0 1 61.0801 57.987)" style="font-size: 10px; fill: #2D2D3A; font-family: 'Segoe UI'; font-size: 9px;">456 789</text>
            <image style="overflow: visible; enable-background: new;" width="116" height="121" xlink:href="{{:ImageUrl}}" transform="matrix(0.3763 0 0 0.3798 6.2543 10.1381)">
            </image>
        </g>
    </svg>
</script>

<div class="cols-sample-area">
    <?php

    $localData = array(
        array(
            "Id"=> "parent", "Name"=> "Maria Anders", "Designation"=> "Managing Director",
            "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "true", "RatingColor"=> "#C34444"
        ),
        array(
            "Id"=> 1, "Name"=> "Ana Trujillo", "Designation"=> "Project Manager",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "false",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> "parent"
        ),
        array(
            "Id"=> 2, "Name"=> "Lino Rodri", "Designation"=> "Project Manager",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> "parent"
        ),
        array(
            "Id"=> 3, "Name"=> "Philip Cramer", "Designation"=> "Project Manager",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> "parent"
        ),
        array(
            "Id"=> 4, "Name"=> "Pedro Afonso", "Designation"=> "Project Manager",
            "ImageUrl"=> "Content/images/radialtree/paul.png", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> "parent"
        ),
        array(
            "Id"=> 5, "Name"=> "Anto Moreno", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 1
        ),
        array(
            "Id"=> 6, "Name"=> "Elizabeth Roel", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/maria.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 1
        ),
       array(
           "Id"=> 7, "Name"=> "Aria Cruz", "Designation"=> "Project Lead",
           "ImageUrl"=> "Content/images/radialtree/jenny.png", "IsExpand"=> "false",
           "RatingColor"=> "#93B85A", "ReportingPerson"=> 1
       ),
       array(
           "Id"=> 8, "Name"=> "Eduardo Roel", "Designation"=> "Project Lead",
           "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "true",
           "RatingColor"=> "#93B85A", "ReportingPerson"=> 1
       ),
        array(
            "Id"=> 9, "Name"=> "Howard Snyd", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/jenny.png", "IsExpand"=> "false",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 2
        ),
        array(
            "Id"=> 10, "Name"=> "Daniel Tonini", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "true",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 2
        ),
        array(
            "Id"=> 11, "Name"=> "Nardo Batista", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/maria.png", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 89
        ),
        array(
            "Id"=> 12, "Name"=> "Michael Holz", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 89
        ),
        array(
            "Id"=> 13, "Name"=> "Kloss Perrier", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 90
        ),
        array(
            "Id"=> 14, "Name"=> "Liz Nixon", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/jenny.png", "IsExpand"=> "false",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 3
        ),
         array(
             "Id"=> 15, "Name"=> "Paul Henriot", "Designation"=> "Project Lead",
             "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "false",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 3
         ),
        array(
            "Id"=> 16, "Name"=> "Paula Parente", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/john.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 90
        ),
        array(
            "Id"=> 17, "Name"=> "Matti Kenna", "Designation"=> "Project Lead",
            "ImageUrl"=> "Content/images/radialtree/jenny.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 4
        ),
         array(
             "Id"=> 18, "Name"=> "Laura Callahan", "Designation"=> "Project Lead",
             "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "false",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 4
         ),
         array(
             "Id"=> 19, "Name"=> "Simon Roel", "Designation"=> "Project Lead",
             "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "true",
             "RatingColor"=> "#93B85A", "ReportingPerson"=> 4
         ),
        array(
            "Id"=> 20, "Name"=> "Thomas Hardy", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "false",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 12
        ),
        array(
            "Id"=> 21, "Name"=> "Martín Kloss", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 5
        ),
        array(
            "Id"=> 22, "Name"=> "Maria Larsson", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image51.png", "IsExpand"=> "false",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 6
        ),
        array(
            "Id"=> 23, "Name"=> "Diego Roel", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "false",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 7
        ),
        array(
            "Id"=> 24, "Name"=> "José Pedro ", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "true",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 8
        ),
         array(
             "Id"=> 25, "Name"=> "Manu Pereira", "Designation"=> "Senior S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/image56.png", "IsExpand"=> "None",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 8
         ),
        array(
            "Id"=> 26, "Name"=> "Annette Roel", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 25
        ),
        array(
            "Id"=> 27, "Name"=> "Catherine Kaff", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 8
        ),
        array(
            "Id"=> 28, "Name"=> "Lúcia Carvalho", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 12
        ),
        array(
            "Id"=> 29, "Name"=> "Alej Camino", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 13
        ),
         array(
             "Id"=> 30, "Name"=> "Liu Wong", "Designation"=> "Senior S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "None",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 14
         ),
        array(
            "Id"=> 31, "Name"=> "Karin Josephs", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 14
        ),
        array(
            "Id"=> 32, "Name"=> "Ruby Anabela ", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 16
        ),
        array(
            "Id"=> 33, "Name"=> "Pirkko King", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 17
        ),

        array(
            "Id"=> 34, "Name"=> "Karl Jablonski", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 18
        ),

        array(
            "Id"=> 35, "Name"=> "Zbyszek Yang", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 19
        ),
        array(
            "Id"=> 36, "Name"=> "Nancy", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image56.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 5
        ),
         array(
             "Id"=> 37, "Name"=> "Anne", "Designation"=> "Senior S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "false",
             "RatingColor"=> "#68C2DE", "ReportingPerson"=> 6
         ),
        array(
            "Id"=> 38, "Name"=> "Isabel Castro", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 7
        ),
        array(
            "Id"=> 39, "Name"=> "Nardo Batista", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 9
        ),
         array(
             "Id"=> 40, "Name"=> "Rene Phillips", "Designation"=> "Senior S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "false",
             "RatingColor"=> "#68C2DE", "ReportingPerson"=> 16
         ),
        array(
            "Id"=> 41, "Name"=> "Rita Pfalzheim", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "false",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 9
        ),
        array(
            "Id"=> 42, "Name"=> "Janete Limeira", "Designation"=> "Senior S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 11
        ),
        array(
            "Id"=> 43, "Name"=> "Christina kaff", "Designation"=> "S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 20
        ),
         array(
             "Id"=> 44, "Name"=> "Peter Franken", "Designation"=> "S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "None",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 21
         ),
         array(
             "Id"=> 45, "Name"=> "Carlos Schmitt", "Designation"=> "S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "None",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 23
         ),
        array(
            "Id"=> 46, "Name"=> "Yoshi Wilson", "Designation"=> "S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "false",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 23
        ),
         array(
             "Id"=> 47, "Name"=> "Jean Fresnière", "Designation"=> "S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "false",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 24
         ),
        array(
            "Id"=> 48, "Name"=> "Simon Roel", "Designation"=> "S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 25
        ),
        array(
            "Id"=> 49, "Name"=> "Rene Phillips", "Designation"=> "S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/jenny.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 55
        ),
          array(
              "Id"=> 50, "Name"=> "Paula Wilson", "Designation"=> "S/w Engg",
              "ImageUrl"=> "Content/images/radialtree/eric.PNG", "IsExpand"=> "None",
              "RatingColor"=> "#68C2DE", "ReportingPerson"=> 43
          ),
        array(
            "Id"=> 51, "Name"=> "Jose Pavarotti", "Designation"=> "S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/maria.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 43
        ),
        array(
            "Id"=> 52, "Name"=> "Palle Ibsen", "Designation"=> "S/w Engg",
            "ImageUrl"=> "Content/images/radialtree/image51.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 29
        ),
         array(
             "Id"=> 53, "Name"=> "Lúcia Carvalho", "Designation"=> "S/w Engg",
             "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "None",
             "RatingColor"=> "#93B85A", "ReportingPerson"=> 30
         ),
         array(
             "Id"=> 54, "Name"=> "Hanna Moos", "Designation"=> "Project Trainee",
             "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "true",
             "RatingColor"=> "#D46E89", "ReportingPerson"=> 30
         ),
        array(
            "Id"=> 55, "Name"=> "Peter Citeaux", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 33
        ),
        array(
            "Id"=> 56, "Name"=> "Elizabeth Mary", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 33
        ),
        array(
            "Id"=> 57, "Name"=> "Victoria Ash", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 34
        ),
        array(
            "Id"=> 58, "Name"=> "Janine Labrune", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 35
        ),
         array(
             "Id"=> 59, "Name"=> "Martine Rancé", "Designation"=> "Project Trainee",
             "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
             "RatingColor"=> "#93B85A", "ReportingPerson"=> 11
         ),
        array(
            "Id"=> 60, "Name"=> "Carine Schmitt", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 11
        ),
        array(
            "Id"=> 61, "Name"=> "Paolo Accorti", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 38
        ),
        array(
            "Id"=> 62, "Name"=> "André Fonseca", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/john.png", "IsExpand"=> "true",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 41
        ),
        array(
            "Id"=> 63, "Name"=> "Mario Pontes", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 6
        ),
        array(
            "Id"=> 64, "Name"=> "John Steel", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/maria.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 7
        ),
        array(
            "Id"=> 65, "Name"=> "Renate Jose", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image51.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 42
        ),
        array(
            "Id"=> 66, "Name"=> "Jaime Yorres", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 20
        ),
        array(
            "Id"=> 67, "Name"=> "Alex Feuer", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 21
        ),

        array(
            "Id"=> 68, "Name"=> "Yvonne Wong", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 6
        ),

        array(
            "Id"=> 69, "Name"=> "Yoshi Kenna", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "false",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 40
        ),
        array(
            "Id"=> 70, "Name"=> "Helen Marie", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image51.png", "IsExpand"=> "true",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 24
        ),
        array(
            "Id"=> 71, "Name"=> "Joseph Kaff", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 70
        ),
        array(
            "Id"=> 72, "Name"=> "Horst Kloss", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "None",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 70
        ),
        array(
            "Id"=> 73, "Name"=> "Sergio roel", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image55.PNG", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 37
        ),
        array(
            "Id"=> 74, "Name"=> "Mauri Moroni", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image53.PNG", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 60
        ),
        array(
            "Id"=> 75, "Name"=> "Janete Limeira", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image51.PNG", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 29
        ),
        array(
            "Id"=> 76, "Name"=> "Jonas Bergsen", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image53.PNG", "IsExpand"=> "None",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 18
        ),
        array(
            "Id"=> 77, "Name"=> "Miguel Angel", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/eric.PNG", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 18
        ),
        array(
            "Id"=> 78, "Name"=> "Art Nancy", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "true",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 88
        ),
        array(
            "Id"=> 79, "Name"=> "Pascal Cartrain", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/john.png", "IsExpand"=> "true",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 88
        ),
        array(
            "Id"=> 80, "Name"=> "Helvetis Nagy", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 34
        ),
        array(
            "Id"=> 81, "Name"=> "Rita Müller", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/paul.png", "IsExpand"=> "None",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 35
        ),
        array(
            "Id"=> 82, "Name"=> "Georg Pipps", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 36
        ),
        array(
            "Id"=> 83, "Name"=> "Horst Kloss", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/paul.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 37
        ),
        array(
            "Id"=> 84, "Name"=> "Paula Wilson", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/jenny.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 38
        ),
        array(
            "Id"=> 85, "Name"=> " Jose Michael", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/eric.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 37
        ),
        array(
            "Id"=> 86, "Name"=> "Mauri Moroni", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 40
        ),
        array(
            "Id"=> 87, "Name"=> "Michael Holz", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 41
        ),
        array(
            "Id"=> 88, "Name"=> "Alej Camino", "Designation"=> "Project Trainee",
            "ImageUrl"=> "Content/images/radialtree/image51.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 42
        ),
        array(
            "Id"=> 89, "Name"=> "Jytte Petersen", "Designation"=> "Project Manager",
            "ImageUrl"=> "Content/images/radialtree/image55.PNG", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> "parent"
        ),
        array(
            "Id"=> 90, "Name"=> "Mary Saveley", "Designation"=> "Project Manager",
            "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "false",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> "parent"
        ),
        array(
            "Id"=> 91, "Name"=> "Robert King", "Designation"=> "Project Manager",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "true",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> "parent"
        ),
        array(
            "Id"=> 92, "Name"=> "Francisco Yang", "Designation"=> "CSR",
            "ImageUrl"=> "Content/images/radialtree/image55.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 100
        ),
        array(
            "Id"=> 93, "Name"=> "Yang Wang", "Designation"=> "CSR",
            "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 80
        ),
        array(
            "Id"=> 94, "Name"=> "Ann Devon", "Designation"=> "CSR",
            "ImageUrl"=> "Content/images/radialtree/robin.png", "IsExpand"=> "false",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 80
        ),
        array(
            "Id"=> 95, "Name"=> "Roland Mendel", "Designation"=> "CSR",
            "ImageUrl"=> "Content/images/radialtree/image57.png", "IsExpand"=> "true",
            "RatingColor"=> "#68C2DE", "ReportingPerson"=> 19
        ),
        array(
            "Id"=> 96, "Name"=> "Yoshi Latimer", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/eric.png", "IsExpand"=> "true",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 13
        ),
        array(
            "Id"=> 97, "Name"=> "Patricia Kenna", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/maria.png", "IsExpand"=> "true",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 100
        ),
        array(
            "Id"=> 98, "Name"=> "Helen Bennett", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/image51.png", "IsExpand"=> "None",
            "RatingColor"=> "#D46E89", "ReportingPerson"=> 42
        ),
        array(
            "Id"=> 99, "Name"=> "Carlos Nagy", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/clayton.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 42
        ),
        array(
            "Id"=> 100, "Name"=> "Felipe Kloss", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "false",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 77
        ),
        array(
            "Id"=> 101, "Name"=> "Fran Wilson", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/image53.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 46
        ),
        array(
            "Id"=> 102, "Name"=> "John Rovelli", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/jenny.png", "IsExpand"=> "None",
            "RatingColor"=> "#93B85A", "ReportingPerson"=> 46
        ),
        array(
            "Id"=> 103, "Name"=> "Georg Pipps", "Designation"=> "SR",
            "ImageUrl"=> "Content/images/radialtree/thomas.png", "IsExpand"=> "None",
            "RatingColor"=> "#EBB92E", "ReportingPerson"=> 55
        )
    );

    $diagram=new EJ\Diagram("diagram1");         
    $layout=new EJ\Diagram\Layout();
    $margin=new EJ\Diagram\Margin();
    $margin->top(50);
    $layout->type("radialtree")->horizontalSpacing(30)->verticalSpacing(30);
    
    $pageSettings=new EJ\Diagram\PageSetting();
    $pageSettings->scrollLimit("diagram"); 

    $defaultNode=new EJ\Diagram\Node();
    $defaultNode->width(50)->height(50)->borderColor("transparent")->constraints("InheritTooltip|PointerEvents")->type("image");
    
    $defaultConnector=new EJ\Diagram\Connector(); 
    $defaultConnector->constraints("None");
    
    $toolTip =new EJ\Diagram\Tooltip();
    $alignment = new EJ\Diagram\Alignment();
    $alignment->horizontal("center")->vertical("bottom");
    $toolTip->templateId("mouseovertoolTipId")->alignment($alignment);

    $dataSourceSettings= new EJ\Diagram\DataSourceSetting();
    $dataSourceSettings->dataSource($localData)->id("Id")->parent("ReportingPerson");
    
    $snapSettings =new EJ\Diagram\SnapSetting();
    $snapSettings->snapConstraints("None");
    $defaultSettings=new EJ\Diagram\DefaultSetting();
    $defaultSettings->node($defaultNode)->connector($defaultConnector); 

    echo $diagram->width("100%")
    ->tool(8)
    ->height("600px")
    ->layout($layout)
    ->defaultSettings($defaultSettings)
    ->nodeTemplate("nodeTemplate")
    ->create("create")
    ->dataSourceSettings($dataSourceSettings)
    ->pageSettings($pageSettings)
    ->enableContextMenu(FALSE)
    ->snapSettings($snapSettings)
    ->toolTip($toolTip)
    ->render();
    ?>
</div>


<style>
    .cols-sample-area {
        height: 450px;
        width: 700px;
    }
</style>
