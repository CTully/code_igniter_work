<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>CI Series</title>
        <style>
            body{background:#F20A0A;}
            #wrapper{width:980px; margin:0 auto; background:#9E0606;padding:10px;}
            #navcontainer ul
            {
                padding-left:0;
                margin-left:0;
                background-color: #036;
                color:white;
                float:left;
                width:100%;
                font-family:arial,helvetica,sans-serif;
                
            }
            
            #navcontainer ul li{display:inline;}
            #navcontainer ul li a{
                padding:0.2em 1em;
                background-color:#036;
                color: white;
                text-decoration:none;
                float:left;
                border-right:1px solid #fff;
                
            }
            
          
            
            
        </style>
    </head>
    <body>
        
           <div id="wrapper">
            <h1>Chris Tully's blog</h1>
            <div id="container">
                <form action="<?base_url()?>posts/new_post" method="post">
                    <p>Title: <input name="title" type="text" /></p>
                    <p>Description: <br /><textarea name="post"></textarea></p>
                    <p><input type="submit" value="Add post" /></p>
                </form>
                
            </div>
           </div>
    </body>
    </html>