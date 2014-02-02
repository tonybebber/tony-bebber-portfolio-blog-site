$(document).ready(function() {

    $.getJSON("http://feeds.delicious.com/v2/json/tonybebber?recent&count=1&callback=?", function(data) {
        var deliciousData = data;
        $('#reading p').html('<a href="' + deliciousData[0].u + '">' + deliciousData[0].d + '</a>');
    }).error(function() {
        $('#reading p').html('Sorry...could not load the recommended article.');
    });

});