<?php
<form action="action_page.php" method="post">
<div class="imgcontainer">
<img.src="img_avatar2.png" alt="avatar" class="avatar">
</div>
<div class="container">
<label for="uname">
<b>username</b><label>
<input type="text" placeholder="Enter Username" name="uname" required>
<label for="psw">
<b>password</b><label>
<input type="password" placeholder="Enter Password" name="psw" required>
<button type="submit">login</button>
<label>
<input type="checkbox" checked="checked" name="remember"> remember me </label>
</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" class="cancelbt">cancel</button>
<span class="psw">forgot <a herf="#">password</a></span>
</div>
</form>
