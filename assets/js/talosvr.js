var any;
var all_sigils;
var geh_any;
var geh_100;

function onLoad()
{
	fetchData();
	
	if (!any || !all_sigils || !geh_any || !geh_100)
	{
		var interval = setInterval(function() {
		if (!any || !all_sigils || !geh_any || !geh_100) return;
		clearInterval(interval);

		if (window.location.hash == '')
			loadBoard('any');
		else
		{
			var h = window.location.hash.toLowerCase().slice(1);
			if (h == "any" || h == "all_sigils" || h == "geh_any" || h == "geh_100")
			{
				loadBoard(h);
			}
			else
				loadBoard('any');
		}
		
		}, 10);
	}
	
	var vidDefer = document.getElementsByTagName('iframe');
	for (var i=0; i<vidDefer.length; i++)
		if(vidDefer[i].getAttribute('data-src'))
			vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
}

function fetchData()
{
	// any
	var result = fetch("https://www.speedrun.com/api/v1/leaderboards/j1ne7491/category/n2y30lmd?embed=players,platforms,variables&var-j84krwjn=21ggvjm1", {
      method: "get",
      dataType: "json",
      headers: {
        "Accept": "application/json",
      }
    })
	.then(res => res.json())
	.then(data => any = data);
	
	// all_sigils
	result = fetch("https://www.speedrun.com/api/v1/leaderboards/j1ne7491/category/n2y30lmd?embed=players,platforms,variables&var-j84krwjn=jqz486ml", {
      method: "get",
      dataType: "json",
      headers: {
        "Accept": "application/json",
      }
    })
	.then(res => res.json())
	.then(data => all_sigils = data);
	
	// geh_any
	result = fetch("https://www.speedrun.com/api/v1/leaderboards/j1ne7491/category/n2y30lmd?embed=players,platforms,variables&var-j84krwjn=klr7vz2q", {
      method: "get",
      dataType: "json",
      headers: {
        "Accept": "application/json",
      }
    })
	.then(res => res.json())
	.then(data => geh_any = data);
	
	// geh_100
	result = fetch("https://www.speedrun.com/api/v1/leaderboards/j1ne7491/category/n2y30lmd?embed=players,platforms,variables&var-j84krwjn=21dd92j1", {
      method: "get",
      dataType: "json",
      headers: {
        "Accept": "application/json",
      }
    })
	.then(res => res.json())
	.then(data => geh_100 = data);
}

function loadBoard(board)
{
	var json;
	
	if (board == "any")
	{
		document.getElementById("any").classList.add("is-active");
		document.getElementById("all_sigils").classList.remove("is-active");
		document.getElementById("geh_any").classList.remove("is-active");
		document.getElementById("geh_100").classList.remove("is-active");
		
		//location.href = "#any";
		
		json = any;
	}
	else if (board == "all_sigils")
	{
		document.getElementById("any").classList.remove("is-active");
		document.getElementById("all_sigils").classList.add("is-active");
		document.getElementById("geh_any").classList.remove("is-active");
		document.getElementById("geh_100").classList.remove("is-active");
		
		//location.href = "#all_sigils";
		
		json = all_sigils;
	}
	else if (board == "geh_any")
	{
		document.getElementById("any").classList.remove("is-active");
		document.getElementById("all_sigils").classList.remove("is-active");
		document.getElementById("geh_any").classList.add("is-active");
		document.getElementById("geh_100").classList.remove("is-active");
		
		//location.href = "#geh_any";
		
		json = geh_any;
	}
	else if (board == "geh_100")
	{
		document.getElementById("any").classList.remove("is-active");
		document.getElementById("all_sigils").classList.remove("is-active");
		document.getElementById("geh_any").classList.remove("is-active");
		document.getElementById("geh_100").classList.add("is-active");
		
		//location.href = "#geh_100";
		
		json = geh_100;
	}
	
	var array = [];
	var players = json.data.players.data;
	var platforms = json.data.platforms.data;
	var variables = json.data.variables.data;
	
	for (var i = 0; i < json.data.runs.length; i++)
	{
		array.push(json.data.runs[i]);
	}
	
	array = array.sort(function(a, b) { return a.place - b.place; });
	var html = '';
	for (var i = 0; i < array.length; i++)
	{
		var place = '';
		if (array[i].place == 1)
			place = '<img class="placeimg" src="https://www.speedrun.com/themes/talos_principle_category_extensions/1st.png"></img> ';
		else if (array[i].place == 2)
			place = '<img class="placeimg" src="https://www.speedrun.com/themes/talos_principle_category_extensions/2nd.png"></img> ';
		else if (array[i].place == 3)
			place = '<img class="placeimg" src="https://www.speedrun.com/themes/talos_principle_category_extensions/3rd.png"></img> ';
		place += array[i].place + nth(array[i].place)
		
		var player;
		for (var k = 0; k < players.length; k++)
		{
			if (players[k].id == array[i].run.players[0].id)
			{
				player = players[k];
				break;
			}
		}
		
		var platform;
		for (var k = 0; k < platforms.length; k++)
		{
			if (platforms[k].id == array[i].run.system.platform)
			{
				platform = platforms[k];
				break;
			}
		}
		
		var time = (array[i].run.times.realtime_noloads).replace('PT','').replace('H','h ').replace('M','m ').replace('S','s');
		var time_loads = (array[i].run.times.realtime).replace('PT','').replace('H','h ').replace('M','m ').replace('S','s');
		
		var date = new Date();
		if (array[i].run.date != null)
			date = new Date(array[i].run.date);
		else
			date = new Date(array[i].run.submitted);
		
		html += `<tr>
		<td>${place}</td>
		<td><a href="${player.weblink}">${player.names.international}</a></td>
		<td title="With loads: ${time_loads}">${time}</td>
		<td class="is-hidden-touch">${variables[0].values.values[array[i].run.values['9l73xj7n']].label}</td>
		<td class="is-hidden-touch">${platform.name}</td>
		<td title="${date}" class="is-hidden-touch">${timeAgo(date)}</td>
		<td class="lb_note is-hidden-touch"><i title="${array[i].run.comment}" class="far fa-sticky-note"></i> <a href="${array[i].run.weblink}" class="fas fa-link"></a></td></tr>`;
	}
	if (html == '')
		html = "<tr><td colspan=7><center>There are no runs in this category.</center></td></tr>";
	document.getElementById("table_body").innerHTML = html;
}

const NOW = new Date()
const times = [["second", 1], ["minute", 60], ["hour", 3600], ["day", 86400], ["week", 604800], ["month", 2592000], ["year", 31536000]]

function timeAgo(date) {
    var diff = Math.round((NOW - date) / 1000)
    for (var t = 0; t < times.length; t++) {
        if (diff < times[t][1]) {
            if (t == 0) {
                return "Just now"
            } else {
                diff = Math.round(diff / times[t - 1][1])
                return diff + " " + times[t - 1][0] + (diff == 1?" ago":"s ago")
            }
        }
    }
}

function nth(d) {
  if (d > 3 && d < 21) return 'th'; 
  switch (d % 10) {
    case 1:  return "st";
    case 2:  return "nd";
    case 3:  return "rd";
    default: return "th";
  }
}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
function getUrlParam(parameter, defaultvalue) {
    var urlparameter = defaultvalue;
    if(window.location.href.indexOf(parameter) > -1){
        urlparameter = getUrlVars()[parameter];
        }
    return urlparameter;
}

function collapse(id) {
	var div = document.getElementById(`col_${id}`);
	if (div.style.display == "none")
		div.style.display = "block";
	else
		div.style.display = "none";
}