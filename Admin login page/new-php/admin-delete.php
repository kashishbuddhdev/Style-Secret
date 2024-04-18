<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Nunito Sans', sans-serif;
    background-color: #f5ecdf;
        }
         /* nav-css */
         .all-a-tags{
   background-color:#541a2b;
   padding: 12px;
   display: flex;
   justify-content: space-evenly;
}
.all-a-tags a{
    color:white;
    text-decoration: none;
    font-size: 17px;   
}
/* end */
        input {
            border: none;
            padding-top: 17px;
            padding-bottom: 10px;
            border-bottom: 1px solid gray;
            width: 100%;
            background-color: #f1f1f1f1;

        }
        .delete-form {
           padding: 10px 244px;
            width: 60%;
        }

        .delete-details{
            margin-top: 30px;
        }
        .delete-details button{
            border-radius: 5px;
            padding: 6px; 
            color: white;
            background-color:#541a2b;
        }
        .delete-page h2{
            text-align: center;
            padding: 30px;
            font: 500 2.25rem/1 orpheuspro,Arial,sans-serif;
   font-size: 30px;
        }
        @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/972118/000000000000000000016ea6/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/972118/000000000000000000016ea6/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3)
            format("woff"),
          url(https://use.typekit.net/af/972118/000000000000000000016ea6/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3)
            format("opentype");
        font-weight: 700;
        font-style: normal;
        font-display: auto;
      }
      @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/320790/000000000000000000015d5b/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/320790/000000000000000000015d5b/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3)
            format("woff"),
          url(https://use.typekit.net/af/320790/000000000000000000015d5b/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3)
            format("opentype");
        font-weight: 400;
        font-style: italic;
        font-display: auto;
      }
      @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/07139b/000000000000000000016ea5/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/07139b/000000000000000000016ea5/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3)
            format("woff"),
          url(https://use.typekit.net/af/07139b/000000000000000000016ea5/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3)
            format("opentype");
        font-weight: 400;
        font-style: normal;
        font-display: auto;
      }
      @font-face {
        font-family: orpheuspro;
        src: url(https://use.typekit.net/af/3fe6c5/00000000000000003b9aff70/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3)
            format("woff2"),
          url(https://use.typekit.net/af/3fe6c5/00000000000000003b9aff70/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3)
            format("woff"),
          url(https://use.typekit.net/af/3fe6c5/00000000000000003b9aff70/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3)
            format("opentype");
        font-weight: 500;
        font-style: normal;
        font-display: auto;
      }
    </style>
</head>

<body>
<div class="admin-nav">
<div class="all-a-tags">
        <a href="kd.php">Home</a>
            <a href="admin-insert.php">Insert</a>
            <a href="admin-update.php">Update</a>
            <a href="admin-delete.php">Delete</a>
            <a href="admin-reqpage.php">Request Page</a>
            <a href="admin-search.php">Search</a>
        </div>
        </div>
    </div>
    <div class="delete-page">
        <h2>Delete Form</h2>
    </div>
    <div class="delete-form">
        <form action="admin-subscriber-delete.php" method="get">
            <div class="delete-details">
                Designer's ID<br><input type="number" name="D_ID" placeholder="Your ID" required><br>
                
            </div>
            <div class="delete-details">
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>

</html>