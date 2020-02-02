	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/style-nav.css">
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="#">Home</a></li>
			<li><a href="user-notes.php">My Notes</a></li>	
			<li><a href="home.php">Chat</a></li>
			<li><a href="my.php">Chat History</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>


