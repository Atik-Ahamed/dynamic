<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<ul class="nav nav-pills">
		    <?php 
		    $q="SELECT *FROM pages";
            $r=mysqli_query($dbc, $q);
            
		    ?>
			<li<?php
            if ($pageid == 1) {echo ' class="active"';
            }
			?> >
				<a href="?page=1">Home</a>
				</li>
				<li<?php
                if ($pageid == 2) {echo ' class="active"';
                }
				?> >
					<a href="?page=2">About Us</a>
					</li>

					<li>
						<a href="#">FAQ</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
		</ul>
	</div>
</nav><!---------END nav---------->
