<?php include_once("vars.php") ?>
<?php include_once("main.php") ?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <style>
        .header { grid-area: header; 
            width: 100%;
            padding: 10px;
            background: url("data:image/jpg;base64,<?=$recipeImage?>");
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
    <script data-dapp-detection="">
        !function(){let e=!1;function n(){if(!e){const n=document.createElement("meta");n.name="dapp-detected",document.head.appendChild(n),e=!0}}if(window.hasOwnProperty("ethereum")){if(window.__disableDappDetectionInsertion=!0,void 0===window.ethereum)return;n()}else{var t=window.ethereum;Object.defineProperty(window,"ethereum",{configurable:!0,enumerable:!1,set:function(e){window.__disableDappDetectionInsertion||n(),t=e},get:function(){if(!window.__disableDappDetectionInsertion){const e=arguments.callee;e&&e.caller&&e.caller.toString&&-1!==e.caller.toString().indexOf("getOwnPropertyNames")||n()}return t}})}}();
    </script>
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
            <?=$dbFile?>
             </ul>
        </div>
        <div class="notes">
            <h2>
            <center>
                <b>Notes</b>
            </center>
        </h2>
            <ul>
            <?=$formattedNotes?>
             </ul>
        </div>
        <div class="nutrition">
            <h2>
                <center>
                    <b>Nutrition</b>
                </center>
            </h2>
            <p>
            <?=$nutrition?>
            </p>
        </div>
        <div class="comments">
            <h2>
                <b>Comments</b>
            </h2>
            <p>
            <?=$formattedComments?>
            </p>
        </div>
    </div>
</body>

</html>