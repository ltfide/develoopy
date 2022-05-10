$(document).ready(function () {
    $(document).on("click", ".pagination a", function (e) {
        e.preventDefault();
        var pageNumber = $(this).attr("href").split("page=")[1];
        $("#hidden_page").val(pageNumber);
        getMorePage(pageNumber);
    });

    function getMorePage(pageNumber) {
        $.ajax({
            type: "GET",
            url: "/paginate-more-products-ajax/" + "?page=" + pageNumber,
            data: {},
            success: function (data) {
                $("#post-view").html(data);
            },
        });
    }

    getMorePage(1);
});

// (function () {
//     // DON'T EDIT BELOW THIS LINE
//     var d = document,
//         s = d.createElement("script");
//     s.src = "https://develoopy.disqus.com/embed.js";
//     s.setAttribute("data-timestamp", +new Date());
//     (d.head || d.body).appendChild(s);
// })();
