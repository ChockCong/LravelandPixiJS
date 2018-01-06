<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/1/4
 * Time: 14:00
 */

?>
<html>

<body>
<form action="{{url('Submiting')}}" method="post" id="form1">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    姓名：<input type="text" name="name" placeholder="请输入姓名"><br />
    密码：<input type="password" name="pwd" placeholder="请输入密码">
    <input type="submit" name="submit">
</form>
</body>
</html>
