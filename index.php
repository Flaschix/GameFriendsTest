<!doctype html>
<html>
       <head>
              <title>GameFriends</title>
              <meta http-equiv="content-type" content="text/html; charset=UTF-8">
              <meta id="gameViewport" name="viewport" content="width=device-width initial-scale=1">
              <link href="styles.css" rel="stylesheet" type="text/css">
       </head>

       <body>
              <div align="center" id="embed-html"></div>
              <script type="text/javascript" src="html/html.nocache.js"></script>
       </body>

       <script>
              function handleMouseDown(evt) {
                evt.preventDefault();
                evt.stopPropagation();
                window.focus();
              }

              function handleMouseUp(evt) {
                evt.preventDefault();
                evt.stopPropagation();
              }
              document.addEventListener('contextmenu', event => event.preventDefault());
              document.getElementById('embed-html').addEventListener('mousedown', handleMouseDown, false);
              document.getElementById('embed-html').addEventListener('mouseup', handleMouseUp, false);
       </script>
</html>
