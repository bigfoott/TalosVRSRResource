<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="images/favicon.png">
		
		<title>Bigft - Talos VR Resources</title>
		
		<meta content="Bigft.io" property="og:site_name">
		<meta content="Talos VR Speedrunning Resources" property="og:title">
		<meta content="List of known strats, view leaderboards, and more." property="og:description">
		<meta content="#0096cf" name="theme-color">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
		<link rel="stylesheet" href="assets/css/talosvr.css">
	</head>
	<body onload="onLoad()">
		<div class="container">
			<section class="section">
				<div class="is-centered">
					<img id="logo" src="images/talosvr_logo.png"></img>
					<div class="subheader">SPEEDRUNNING RESOURCES</div>
				</div>
			</section>
			<section class="section">
				<p class="is-hidden-touch title is-2 is-spaced">Leaderboards</p>
				<center class="is-hidden-desktop"><p class="title is-2 is-spaced">Leaderboards</p></center>
				<div class="tabs is-boxed leaderboard-tabs">
					<ul>
						<li id="any"><a class="is-tab" onclick="loadBoard('any')">Any%</a></li>
						<li id="all_sigils"><a class="is-tab" onclick="loadBoard('all_sigils')">All Sigils</a></li>
						<li id="geh_any"><a class="is-tab" onclick="loadBoard('geh_any')"><span class="is-hidden-touch">Gehenna Any%</span><span class="is-hidden-desktop">Geh Any%</span></a></li>
						<li id="geh_100"><a class="is-tab" onclick="loadBoard('geh_100')"><span class="is-hidden-touch">Gehenna 100%</span><span class="is-hidden-desktop">Geh 100%</span></a></li>
					</ul>
				</div>
				<table class="table is-fullwidth">
				  <thead>
					<tr>
					  <th>Rank</th>
					  <th>Player</th>
					  <th title="Time w/o loads.&#013;Hover over a time&#013;for time w/ loads. ">Time<span class="is-hidden-touch">*</span></th>
					  <th class="is-hidden-touch">Version</th>	
					  <th class="is-hidden-touch">Platform</th>
					  <th class="is-hidden-touch">Date</th>
					  <th class="is-hidden-touch lb_note"></th>
					</tr>
				  </thead>
				  <tbody id="table_body">
				  </tbody>
				</table>
			</section>
			<section class="section">
				<p class="is-hidden-touch title is-2 is-spaced">Tricks</p>
				<center class="is-hidden-desktop"><p class="title is-2 is-spaced">Tricks</p></center>
				<p class="subtitle is-4">There are some tricks that don't work in VR, and others that <i>only</i> work in VR. Learn about them below.</p>
				<div class="columns">
					<div class="column is-flex">
						<article class="message">
							<div class="message-header">
								<p>Jammer Glitch</p>
							</div>
							<div class="message-body">
								<p>JGing in Talos VR is extremely inconsistent, due to the imprecise nature of VR games. The main problem in this case is it's impossible to tell exactly where the player character is standing, so you can't tell if you're lined up correctly or not to do the glitch.</p>
								<p>The "best" way to get it consistently is to lean forward into the wall so the game teleports you and the character model back to an exact location. If it teleports you and the lineup looks good, there's a good chance that the glitch will work.</p>
								<div class="is-responsive-vid">
									<iframe width="560" height="315" data-src="https://www.youtube.com/embed/c91955d9Svo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</article>
					</div>
					<div class="column is-flex">
						<article class="message">
							<div class="message-header">
								<p>Cube Jump</p>
							</div>
							<div class="message-body">
								<p>CJs are performed the same way that they are performed on the flat version. The main difference is you need to be using classic locomotion for it to work.</p>
								<p>Unfortunately, they are very unreliable and not as useful as they are in the flat game. Due to framerate being locked at 90 fps, you get launched more upward than outward.</p>
								<div class="is-responsive-vid">
									<iframe width="560" height="315" data-src="https://www.youtube.com/embed/Fub-piaj8z4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</article>
					</div>
				</div>
				<div class="columns">
					<div class="column is-flex">
						<article class="message">
							<div class="message-header">
								<p>Wall Clip</p>
							</div>
							<div class="message-body">
								<p>Wall clipping is a new glitch that is only abusable in VR. This allows you to pass objects through thin walls, such as fences.</p>
								<p>To perform the glitch, tilt your controller downward while holding an object and move closer until the placement guide shows it on an angle in the wall. You can then drop it and the object will pass through.</p>
								<div class="is-responsive-vid">
									<iframe width="560" height="315" data-src="https://www.youtube.com/embed/WKpvrzPbLt0?start=36&end=43" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</article>
					</div>
					<div class="column is-flex">
						<article class="message">
							<div class="message-header">
								<p>Teleport Speeds</p>
							</div>
							<div class="message-body">
								<p>Your teleport speed (when using teleport locomotion) is important in several parts of the run. You'd assume that instant is the best, as it's the fastest, but this isn't the case in certain parts. Many spots, specifically where you have to jump-teleport a large distance, instant will actually hinder your progress.</p>
								<p>For example, to make the last jump in Harmony (World 3), you need to make a jump that is farther than the game "should" let you. However, with anything below Instant teleport speed, you can just barely make it over. Another important spot for this jump is Crater (World 2), where you need the slowest teleport speed in order to make the jump.</p>
								<div class="is-responsive-vid">
									<iframe width="560" height="315" data-src="https://www.youtube.com/embed/LXX2H0T_aZY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<section>
				<p class="is-hidden-touch title is-2 is-spaced">Routes</p>
				<center class="is-hidden-desktop"><p class="title is-2 is-spaced">Routes</p></center>
				<p class="subtitle is-4">Due to the difference in tricks and glitches from the flat version, there are different routes for VR.</p>
				<article class="message" style="display:none;">
					<div class="message-header">
						<p>Any%</p>
					</div>
					<div class="message-body">
						<p></p>
					</div>
				</article>
				<article class="message" style="display:none;">
					<div class="message-header">
						<p>All Sigils</p>
					</div>
					<div class="message-body">
						<p></p>
					</div>
				</article>
				<article class="message">
					<div class="message-header">
						<p>Gehenna Any%</p>
					</div>
					<div class="message-body">
						<p class="subtitle is-4">World 3</p>
						<p class="subtitle is-5">Order: BFF -> Ray Trivia -> Pendulum -> Harmony</p>
						
						<div class="columns">
							<div class="column is-flex">
								<article class="message is-nested">
									<div class="message-header">
										<p>BFF</p>
									</div>
									<div class="message-body">
										<p>To solve BFF, jam the barrier directly ahead when you look through the doorway under the turret.</p>
										<p>Then grab a cube and walk around the turret, and then place the cube on the pressure plate and jump on it.</p>
										<p>Position yourself on the back corner of it, and then look towards the corner of the wall, and a guided jump should appear.</p>
										<p>Jump there, then jump across the walls to get to the switch. Then reset to spawn.</p>
									</div>
								</article>
							</div>
							<div class="column is-flex">
								<article class="message is-nested">
									<div class="message-header">
										<p>Ray Trivia</p>
									</div>
									<div class="message-body">
										<p><i>Solved as intended.</i></p>
									</div>
								</article>
							</div>
						</div>
						
						<p class="subtitle is-5">Ray Trivia</p>
						
						
						<p class="subtitle is-5">Pendulum</p>
						<p class="subtitle is-5">Harmony</p>
						
						<p class="subtitle is-4">World 4</p>
						<p class="subtitle is-5">Press and Jam</p>
						<p class="subtitle is-5">Goliath</p>
						<p class="subtitle is-5">Air Delivery</p>
						<p class="subtitle is-5">Colliding Beams</p>
						
						<p class="subtitle is-4">World 1</p>
						<p class="subtitle is-5">The Swapper</p>
						<p class="subtitle is-5">Through a Window</p>
						<p class="subtitle is-5">So Close So Far</p>
						<p class="subtitle is-5">Open Field</p>
						
						<p class="subtitle is-4">World 2</p>
						<p class="subtitle is-5">Bunny Hop</p>
						<p class="subtitle is-5">Static Vexxer</p>
						<p class="subtitle is-5">Hexahedron Driver</p>
						<p class="subtitle is-5">Haircut</p>
						<p class="subtitle is-5">Crater</p>
					</div>
				</article>
				<article class="message" style="display:none;">
					<div class="message-header">
						<p>Gehenna 100%</p>
					</div>
					<div class="message-body">
						<p></p>
					</div>
				</article>
			</section>
			<section class="section">
				<center>&copy; <?php call_user_func(function($y){$c=date('Y');echo $y.(($y!=$c)?'-'.$c:'');}, 2018); ?> | Run data sourced from <a href="https://www.speedrun.com/talos_principle_category_extensions#Talos_VR">SpeedRun.com</a> |  Site created by Bigfoot.</center>
			</section>
		</div>
		<script type="text/javascript" src="assets/js/talosvr.js"></script>
	</body>
</html>