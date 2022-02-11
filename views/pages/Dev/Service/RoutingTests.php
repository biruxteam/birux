<script src="https://shop.nikitavasin.ru/js/jquery.js?ver=34"></script>
<script src="/static/js/init.js"></script>
<div class="main">
    <a href="/r1">r1</a>
    <a href="/r1">r2</a>
</div>
<script>
function loadPage(element, page, pageToHighlight, data = {"post": true}, callback = function () {
}) {
    console.log("Load page", page);

    $.ajax({
    url: page,
    type: 'POST',
    data: data,
    beforeSend: function (xhr) {
    xhr.setRequestHeader('Credentials', 'include');
},
    complete: function (jqXHR, status) {
    selectSection(pageToHighlight);
    $("head").append(jqXHR.responseText);
    callback();
}
});
}
    let highlighting_section = 'index';
        let loading_section = 'index';
    function clickSection(element) {
        let data = {post: true};
        let attr = $(element).attr('db-id');
        let url = $(element).attr("section-url");

        if (typeof attr !== typeof undefined && attr !== false) {
            data = {id: $(element).attr('db-id')};
            url = $(element).attr("section-url") + "?id=" + $(element).attr('db-id');
        }

        loadPage($(".main"), url, $(element).attr("highlight-url"), data);
        goTo(url);
    }

    $(document).ready(function () {
        // setInterval(function() {
        //     APIRequest("api/get/this/user", {}, function(data) {
        //         $(".userId").html("<b>userId </b>"+data.response._id);
        //     });
        //
        //     APIRequest("api/get/this/session", {}, function(data) {
        //         $(".sessionId").html("<b>sessionId </b>"+data.response._id);
        //     });
        //
        //     APIRequest("api/get/orders", {}, function(data) {
        //
        //     });
        // }, 1000);

        $('.footer__link').off('click').on('click', function (event) {
            event.preventDefault();

            const url = $(this).attr('href');
            if (url.startsWith("https://")) {
                location.replace(url);
            } else
            loadPage($(".main"), '/' + url, url);
        });
    });
</script>