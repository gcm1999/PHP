<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            line-height: 24px;
        }
    </style>
</head>

<body>
    <form action="save.php">
        新闻标题:<input type="text" name="title"><br>
        新闻类别:<select name="sort">
            <option value="行业动态">行业动态</option>
            <option value="公司新闻">公司新闻</option>
            <option value="3"></option>
        </select><br>
        新闻内容:<textarea name="context"></textarea>
        <input type="submit" />
    </form>
</body>

</html>