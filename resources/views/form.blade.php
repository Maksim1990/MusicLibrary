
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="/comment" method="get" enctype="multipart/form-data">

                    <input type="text" id="name" name="name" placeholder="Name..." required><br/>

                    <input type="email" id="email" name="email" placeholder="Your mail..." required><br/>

                                        <textarea id="text_comment" cols="80" rows="20" name="comment"
                                                  placeholder="Your comment..."       required    ></textarea><br/>

                    <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5">
                        <button class=" btn-lg sn button pulse-shrink" type="submit" name="submit" id="submit" value="Send_Mail" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
