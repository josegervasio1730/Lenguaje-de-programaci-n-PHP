<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$N=30;

for ($i=1;$i<=$N;$i++){
    print "<center>";
	for ($j=1;$j<=$i;$j++){
		print "*";
    }
    print "<BR>\n ";
}
?> 

<?php
$N=30;

for ($i=1;$i<=$N;$i++){
    print "<center>";
	for ($j=1;$j<=$i;$j++){
		print "*";
    }
    print "<BR>\n ";
}
for ($i=$N;$i>=0;$i--){
    print "<center>";
	for ($j=$i;$j>=0;$j--){
		print "*";
    }
    print "<BR>\n ";
}
?> 

</body>
</html>

