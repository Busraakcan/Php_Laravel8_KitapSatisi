<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
Id no: {{$id}} <br>
Name : {{$name}}
<?php
echo " <br>id Number : ", $id;
echo " <br> Name : ", $name;
for($i=1;$i<=$id;$i++)
{
    echo "<br> $i - $name";
}
?>

<a href="{{route('home')}}">Ana Sayfa</a>

</body>
</html>
