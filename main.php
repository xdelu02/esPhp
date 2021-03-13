<!DOCTYPE html>
<html lang="en" style="height: 100%" data-theme="blue">

<?php
	require "head.min.php";
?>

<body style="height: 100%">
	
	<div class="limiter" style="height: 100%">
		<div class="container-login100" style="height: 100%">
			<div class="wrap-login100 section-prodotto scroll">
				<div class="prodotto">
                    <center>
                        <img src="images/logo.png"></img>
                    </center>
                    <p><b>TITLE</b></p>
                    <p><i>Description</i></p>
                    <div style="display: flex; flex-flow: column wrap; align-content: flex-end;">
                        <div><p>0000.0000 Euro</p></div>
                    </div>
                </div>
                
                <?php
                    for($i = 0; $i < 30; $i++) {
                        echo '<div class="prodotto">
                                <center>
                                    <img src="images/logo.png"></img>
                                </center>
                                <p><b>TITLE</b></p>
                                <p><i>Description</i></p>
                                <div style="display: flex; flex-flow: column wrap; align-content: flex-end;">
                                    <div><p>0000.0000 Euro</p></div>
                                </div>
                            </div>';
                    }
                ?>
			</div>
		</div>
	</div>
</body>
</html>