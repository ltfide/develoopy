const createPostBtn = document.getElementById("create-post");

function getDataPage() {
    const getAjaxCreatePost = new XMLHttpRequest();

    getAjaxCreatePost.open(
        "GET",
        "http://9-space-programming.test/dashboard/posts/create"
    );
    //  getAjaxCreatePost.addEventListener("load", function () {
    //      document.documentElement.innerHTML = getAjaxCreatePost.response;
    //      console.log(getAjaxCreatePost.response);
    //  });

    getAjaxCreatePost.onload = function () {
        document.documentElement.innerHTML = getAjaxCreatePost.response;
    };

    getAjaxCreatePost.send();
}

createPostBtn.addEventListener("click", (e) => {
    e.preventDefault();
    getDataPage();
});
