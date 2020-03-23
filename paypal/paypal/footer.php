<?php
if(isset($_SESSION['email']))
{
    $c="<a href=logout.php id=login>Logout</span></a>";
}
else
{
$c="<span style=\"margin-left:20px;\">Login</span>";
}
?>

<!DOCTYPE html>
<html lang="en">
<body id="page-top" class="index">
	<footer>
            <div class="row">
                <div class="col-md-12 text-center" style="background:#333;color:white;padding:1%">
                    <span class="copyright">Copyright &copy; E-Electricity.com 2016</span><br/>
                </div>
            </div>
    </footer>
</body>
</html>