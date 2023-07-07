const rentButtons = document.querySelectorAll(".rent-car-btn"),
    overlay = document.querySelector('.overlay'),
    selectedCarDisplayer = document.querySelector('.modal-rental-displayer'),
    closeModalBtn = document.querySelector('.close-modal'),
    selectedCarName = document.querySelector('.selected-car-name'),
    selectedCarImage = document.querySelector('.rental-information img');

function rentCar() {

    const modelName = this.parentElement.querySelector('.model-name').textContent;
    const modelImage = this.parentElement.parentElement.parentElement.querySelector('.model-img img').src;

    selectedCarName.textContent = modelName;
    selectedCarImage.src = modelImage;

    overlay.classList.add('active');
    selectedCarDisplayer.classList.add('active');

}

closeModalBtn.addEventListener("click", () => {
    overlay.classList.remove('active');
    selectedCarDisplayer.classList.remove('active');
});

rentButtons.forEach(rentBtn => rentBtn.addEventListener('click', rentCar));