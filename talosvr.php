<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="images/talosvr_fav.ico">
		
		<title>Talos VR Speedrunning Resource</title>
		
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
					<div class="subheader">SPEEDRUNNING RESOURCE</div>
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
							<th>Time</th>
							<th class="is-hidden-touch">Platform</th>
							<th class="is-hidden-touch">Date</th>
							<th class="is-hidden-touch lb_note"></th>
						</tr>
					</thead>
					<tbody id="table_body">
						<tr><td colspan=6 class="is-hidden-touch"><center>Loading...</center></td>
							<td colspan=3 class="is-hidden-desktop"><center>Loading...</center></td>
						</tr>
					</tbody>
				</table>
			</section>
			<section class="section">
				<p class="is-hidden-touch title is-2 is-spaced">About</p>
				<center class="is-hidden-desktop"><p class="title is-2 is-spaced">About</p></center>
				<div class="columns">
					<div class="column is-flex">
						<article class="message">
							<div class="message-header">
								<p>What is The Talos Principle?</p>
							</div>
							<div class="message-body">
								<p>TTP is a philosophical puzzle game. The main goal is to collect "sigils" that allow you to unlock doors and puzzle mechanics.</p>
							</div>
						</article>
					</div>
					<div class="column is-flex">
						<article class="message">
							<div class="message-header">
								<p>What's different between Talos flat and Talos VR?</p>
							</div>
							<div class="message-body">
								<p>THe main differences are movement and precision. Many tricks performed in flat speedruns require the runner to do tricks by being in exact positions/lineups. These tricks are very hard/impossible in VR.</p>
								<p>There are certain tricks (ex: Thin wall clip) that can only be done in VR.</p>
							</div>
						</article>
					</div>
				</div>
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
			<section class="section">
				<center>&copy; <?php call_user_func(function($y){$c=date('Y');echo $y.(($y!=$c)?'-'.$c:'');}, 2018); ?> | Run data sourced from <a href="https://www.speedrun.com/talos_principle_vr">SpeedRun.com</a> | View this project on <a href="https://github.com/bigfoott/TalosVRSRResource">GitHub</a> |  Site created by Bigfoot.</center>
			</section>
		</div>
		<script type="text/javascript" src="assets/js/talosvr.js"></script>
	</body>
</html>