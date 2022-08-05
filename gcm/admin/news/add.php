<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加新闻</title>
</head>
<body>
    <!-- 
        form 表单  
        action 设置提交地址
    -->
   <!-- 
        enctype="multipart/form-data" 
        文件上传需要增加该属性
   -->
    <form action="save.php"
     method="post" 
     enctype="multipart/form-data">
        <!-- 
            input 文本框
            type="text"  默认为文本类型
       -->
        新闻标题: <input type="text" name="title" > <br>
        <!-- type="file" 文件上传类型 -->
        新闻图片: <input type="file" name="pic"><br>
       
        <!-- 
            select 下拉菜单 
            option 下拉菜单的选项 
        -->
        新闻类别: <select name="sort">
                    <option value="公司新闻">公司新闻</option>
                    <option value="行业动态">行业动态</option>
                    <option value="展会新闻">展会新闻</option>
                 </select>  <br>
        <!-- textarea 文本域 -->
        新闻内容：<textarea name="content"></textarea><br>
        <!-- 
            type="submit"  提交按钮
        -->
        <input type="submit" value="提交">         
    </form>
</body>
</html>