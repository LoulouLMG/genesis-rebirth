    	<div id="wrap">
    		<div class="footer">
    			<?php if (Session::get('user_logged_in') == true):?>
        			<?php echo('Tu es CONNECTE')?>        
    			<?php endif; ?>

    			<?php if (Session::get('user_logged_in') == false):?>
        			<?php echo("Tu es NON CONNECTE (normal le login n'est pas encore implementé dude...)")?>
        		<p>Copyright moi, tout droits réservés</p>	
   				<?php endif; ?>
    		</div>
		</div>
	</body>
</html>
