$(document).ready(function() {

    function pageHighlight(loc, clsNm) {
        var pathname = window.location.pathname;
        if (pathname === loc) {
            clsNm.addClass('active');
        }
    }

    pageHighlight("/", $('.home'));
    pageHighlight("/about", $('.about'));
    pageHighlight("/category/blog", $('.blog'));
    pageHighlight("/category/projects", $('.projects'));
    pageHighlight("/github-repos", $('.github-repos'));
    pageHighlight("/resume", $('.resume'));


    if ($('#nav li').attr('class') !== 'active' && $('h2.single').text().indexOf('Projects') > -1) {
        $('.projects').addClass('active');
    } else if ($('#nav li').attr('class') !== 'active' && $('h2.single').text().indexOf('Blog') > -1) {
        $('.blog').addClass('active');
    }

    $('.searchButtonActive').hide();

    function showHideSearch(el1, container, dur) {
        el1.bind('click', function() {
            if (container.css('display') === 'none') {
                el1.addClass('activeSearch');
                container.slideDown(dur);
            } else {
                el1.removeClass('activeSearch');
                container.slideUp(dur);
            }
        });
    }

    showHideSearch($('.searchButton'), $('#searchContainer'), 250);

    $.getJSON("http://feeds.delicious.com/v2/json/tonybebber?recent&count=1&callback=?", function(data) {
        var deliciousData = data;
        $('#reading p').html('<a href="' + deliciousData[0].u + '">' + deliciousData[0].d + '</a>');
    }).error(function() {
        $('#reading p').html('Sorry...could not load the recommended article.');
    });

    hljs.initHighlightingOnLoad();

});