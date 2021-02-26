<?php include_once("templateVars.php") ?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title><?=$title?></title>
    <style>
        .header { grid-area: header; 
            width: 100%;
            padding: 10px;
            background-image: url("<?=$recipe->image?>");
            height: 100px;
            background-position: center;
            background-size: cover;
        }
        .ingredients { 
            grid-area: ingredients; 
            background: #eee;
            width: 400px;
            overflow: hidden
        }
        .instructions { 
            grid-area: instructions;
            overflow: hidden;
        }
        .notes { 
            grid-area: notes;
            background: #eee;
            width: 400px;
            overflow: hidden
        }
        .nutrition { 
            grid-area: nutrition;
            background: #eee;
            width: 400px;
            overflow: hidden;
        }
        .comments { 
            grid-area: comments;
        }
        
        .grid-container {
          display: grid;
          grid-template-areas:
            'header header header header header header'
            'ingredients instructions instructions instructions instructions instructions'
            'notes comments comments comments comments comments'
            'nutrition comments comments comments comments comments';
          grid-gap: 10px;
          /*background-color: #2196F3;*/
          padding: 10px;
        }
        
        .grid-container > div {
         /* background-color: rgba(255, 255, 255, 0.8);*/
          padding: 20px 0;
          font-size: 30px;
        }
        
        input[type='checkbox'] {
            -webkit-appearance:none;
            width:30px;
            height:30px;
            background:white;
            border-radius:5px;
            border:2px solid #555;
            float: left;
        }
        
        input[type='checkbox']:checked {
            background: blue;
        }
        
        label {
            display: block;
            margin-left: 24px;
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <div class="header">
            <h1>
                <center>
                    <font color="white">
                        <b><?=$recipe->name?></b>
                    </font>
                </center>
            </h1>
        </div>
        <div class="ingredients">
            <h2>
                <center>
                    <b>Ingredients</b>
                </center>
            </h2>   
            <ul>
            <?=$recipe->ingredients?>
            </ul>
        </div>
        <div class="instructions">
            <h2>
                <b>Instructions</b>
            </h2>
            <ul>
            <?=$recipe->instructions?>
             </ul>
        </div>
        <div class="notes">
            <h2>
            <center>
                <b>Notes</b>
            </center>
        </h2>
            <ul>
            <?=$recipe->notes?>
             </ul>
        </div>
        <div class="nutrition">
            <h2>
                <center>
                    <b>Nutrition</b>
                </center>
            </h2>
            <p>
            <?=$recipe->nutrition?>
            </p>
        </div>
        <div class="comments">
            <h2>
                <b>Comments</b>
            </h2>
            <p>
            <?=$recipe->comments?>
            </p>
        </div>
    </div>
</body>

</html>