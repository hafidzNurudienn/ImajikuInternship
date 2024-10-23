let loadMoreBtn2 = document.querySelector("#load-more-btn2");
let currentItem1 = 4;

loadMoreBtn2.onclick = () => {
    let boxes = [...document.querySelectorAll('.content-box[data-variant="card-show-more-variant-2"] .card-show-more-card .card-box')];

    for (var i = currentItem1; i < currentItem1 + 4 && i < boxes.length; i++) {
        boxes[i].style.display = "inline-block";
    }

    currentItem1 += 4;

    if (currentItem1 >= boxes.length) {
        loadMoreBtn2.style.display = "none";
    }
};
