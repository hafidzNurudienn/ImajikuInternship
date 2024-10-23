let loadMoreBtnShowMore1 = document.querySelector("#load-more-btn1");
let currentItemShowMore1 = 3;

loadMoreBtnShowMore1.onclick = () => {
    let boxes = [...document.querySelectorAll('.content-box[data-variant="card-show-more-variant-1"] .card-show-more-card .card-box')];

    for (var i = currentItemShowMore1; i < currentItemShowMore1 + 3 && i < boxes.length; i++) {
        boxes[i].style.display = "inline-block";
    }

    currentItemShowMore1 += 3;

    if (currentItemShowMore1 >= boxes.length) {
        loadMoreBtnShowMore1.style.display = "none";
    }
};