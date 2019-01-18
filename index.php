
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<meta charset="utf-8"/>
<title>第一个PHP</title>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<body>

<?php
//echo "Hello World!";
?>

<form action="a.php" method="post">
    <label>用户</label>
    <input type="text" name="username" id="username"></form>
    <p>
        <label>密码</label>
        <input type="text" name="username"/>
    </p>
    <input type="submit" value="提交" id="btn"></input>
</form>
<script type="text/javascript">
    $('#btn').click(function (e) {
        e.preventDefault();
        $.ajax({
            url:"a.php",
            data:{
                username:$('#username').val()
            },
            dataType: "json",
            type:"get",
            success:function (data) {
                alert(data.msg);
            },
            error:function (data) {
                alert(data.msg);
            }
        });
    });
</script>

</body>
</html>