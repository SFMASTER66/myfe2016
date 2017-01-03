<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo site_url() ?>">
    <title>Document</title>
</head>
<body>

<form action="message/show_ResMessage" method="post">
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit">
    <input type="hidden"  name="messageId" value="<?php  echo $this->input->get("messageId");?>">

</form>


</body>
</html>