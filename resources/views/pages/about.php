<!DOCTYPE html>
<html lang="en">

<head>
    <% include ../partials/header.ejs %>
</head>

<body>

    <html>

    <head>
        <title>File Uploading Form</title>
    </head>

    <body>
        <h3>File Upload:</h3> Select a file to upload:
        <br />
        <form action="/aja" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" size="50" />
            <br />
            <input type="submit" value="Upload File" />
        </form>
    </body>

    </html>

</body>

</html>
