/* Sample code for parsing RSS */
var parseURL = '<rsslink>', itemLimit = 20;

$.ajax({
    url      : document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num='+ itemLimit + '&callback=?&q=' + encodeURIComponent(parseURL),
    dataType : 'json',
    success  : function (data) {
	if (data.responseData.feed && data.responseData.feed.entries) {
	    $.each(data.responseData.feed.entries, function (i, e) {
		console.log("------------------------");
		console.log("title      : " + e.title);
		console.log("link     : " + e.link);
	    });
	}
    }
})
