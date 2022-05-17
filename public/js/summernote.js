$(document).ready(function () {
    $("#summernote").summernote();
});

var markupStr = $("#summernote").summernote(".note-icon-arrows-alt");
// console.log(markupStr);

window.addEventListener("showModal", (event) => {
    $(".modal-open").on("click", toggleModal());
});

var openmodal = document.querySelectorAll(".modal-open");
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener("click", function (event) {
        event.preventDefault();
        toggleModal();
    });
}

// const overlay = document.querySelector(".modal-overlay");
// overlay.addEventListener("click", toggleModal);

var closemodal = document.querySelectorAll(".modal-close");
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener("click", toggleModal);
}

document.onkeydown = function (evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = evt.key === "Escape" || evt.key === "Esc";
    } else {
        isEscape = evt.keyCode === 27;
    }
    if (isEscape && document.body.classList.contains("modal-active")) {
        toggleModal();
    }
};

function toggleModal() {
    const body = document.querySelector("body");
    const modal = document.querySelector(".modal");
    modal.classList.toggle("opacity-0");
    modal.classList.toggle("pointer-events-none");
    body.classList.toggle("modal-active");
}

let fulltombol = document.querySelector(".btn-fullscreen");
// btnFullScreen.onclick = () => {
//    console.log('ok');
// }
fulltombol.onclick = () => {
    document
        .querySelector(".note-editable")
        .classList.toggle("fullscreen-active");
};

// const toolBar = document.querySelector(".note-toolbar");

// // create new div.note-btn-group
// const newDiv = document.createElement("div");
// newDiv.setAttribute("class", "note-btn-group");

// // create button arrow
// const panahBtn = document.createElement("div");
// panahBtn.setAttribute(
//     "class",
//     "arrow-btn w-6  mx-auto text-center cursor-pointer"
// );
// panahBtn.id = "arrow-button";

// // const icon button
// const arrowIcon = document.createElement("img");
// arrowIcon.src = "http://9-space-programming.test/img/icons/up-arrow-hand.svg";
// arrowIcon.setAttribute("class", "block w-full ease-in duration-500");

// panahBtn.append(arrowIcon);
// newDiv.append(panahBtn);
// toolBar.append(newDiv);

const noteView = document.querySelector(".note-view");

const newButton = document.createElement("button");
newButton.type = "button";
newButton.setAttribute("class", "note-btn arrow-button");
newButton.id = "arrow-button";

const arrowIcon = document.createElement("i");
// arrowIcon.src = "http://9-space-programming.test/img/icons/up-arrow-hand.svg";
arrowIcon.setAttribute(
    "class",
    "note-icon-arrow-circle-up up-down arrow-button"
);

newButton.append(arrowIcon);
noteView.append(newButton);

console.log(noteView);

document.addEventListener("click", async function (e) {
    if (e.target.classList.contains("arrow-button")) {
        e.target.addEventListener("click", () => {
            document.getElementById("inputs").classList.toggle("hidden");
            // arrowBtn.querySelector('img').classList.toggle('rotate-180');
        });
    }
});
