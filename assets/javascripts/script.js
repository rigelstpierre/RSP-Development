$(document).ready(function(){
	$('div#lastfm').lastFM({
		username: 'rigelstpierre',
		apikey: 'ed47128394b0e23302e67ef10724fbb4',
		number: 3,
		onComplete: function(){
			//Done
		}
	});
	$("#twitter").getTwitter({
		userName: "rigelstpierre",
		numTweets: 4,
		loaderText: "Loading tweets...",
		slideIn: false,
		slideDuration: 750,
		showHeading: true,
		showProfileLink: false,
		showTimestamp: false
	});
});