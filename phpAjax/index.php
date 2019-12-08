<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Search Users</title>

        <link rel="stylesheet" href="bootstrap.css">

        <script>

            function showSuggestion(str){
                if(str.length == 0){
                    document.getElementById('output').innerHTML = '';
                } else {
                    // Ajax request:
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            document.getElementById('output').innerHTML = this.responseText;
                        }
                    }

                    xmlhttp.open("GET", "suggest.php?q="+str, true);
                    xmlhttp.send();
                }
            }

        </script>

    </head>

    <body>

        <div class="container">

            <h1>Search Users</h1>

            <form>

                Search Users:
                    <input type="text" class="form-control" onkeyup="showSuggestion(this.value)"/>

            </form>

            <p>

                Suggestions:
                    <span id="output" style="font-weight:bold"></span>

            </p>

        </div>

    </body>

</html>