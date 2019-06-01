// image array
var travelImages = ["img/travelimg1.jpg", "img/travelimg2.jpg", "img/travelimg3.jpg", "img/travelimg4.jpg", "img/travelimg5.jpg", "img/travelimg6.jpg"];

// image description array
var travelImageDescriptions = ["Road trip through the American dessert states", "Celebrate friendship in San Francisco", "Take a plane anywhere you can dream", "Travel by train through mountain landscapes", "Pack your luggage and explore the world", "Feel the mist of a remote mountain waterfall"];

var travelImageURLs = ["https://www.travelchannel.com/interests/road-trips/photos/most-popular-road-trip-routes-in-the-us", "https://www.tripsavvy.com/san-francisco-tourist-tips-1479070", "http://www.jauntaroo.com/", "https://thesavvybackpacker.com/complete-guide-to-train-travel-in-europe/", "https://www.eaglecreek.com/blog/what-pack-ultimate-travel-packing-checklist.html", "http://banffandbeyond.com/a-trip-planning-guide-for-the-canadian-rocky-mountains/"];

// ------------------------<[ WORKING ]>------------------------ //

	// var table = "<tr>";
	// for (var i = 0; i < travelImages.length; i++) {
	// 	table += "<td><img src='" + travelImages[i] + "' class='tblimg' /></td>";
	// 	table += "<td><span class='imgdesc'>" + travelImageDescriptions[i] + "</span></td>";
	// }
	// table += "</tr>";

	// document.getElementById("imgRow").innerHTML = table;

// ------------------------<[ WORKING ]>------------------------ //

// ------------------------<[ FINAL WORKING ]>------------------------ //
var table = "<ul>";

for (var i = 0; i < travelImageDescriptions.length; i++) {
	table += "<li class='imgSwitch' onmouseover='changeImg(" + i + ")' onclick='imgLink(" + i + ")'>" + travelImageDescriptions[i] + "</li>";
}

table += "</ul>";

document.getElementById("imgRow").innerHTML = table;

function changeImg(i) {
	document.getElementById("changeImg").src = travelImages[i];
}

function imgLink(i) {
	URLwindow = window.open(travelImageURLs[i], "_blank", "toolbar=no,scrollbars=yes,resizable=yes,width=950,height=750");
	setTimeout(function(){ URLwindow.close(); }, 10000);
}