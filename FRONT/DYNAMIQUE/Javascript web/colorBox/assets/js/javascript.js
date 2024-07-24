 // ფერების მასივი
 const colors = [
    '#1abc9c', '#2ecc71', '#3498db', '#9b59b6', '#34495e', 
    '#f1c40f', '#e67e22', '#e74c3c', '#ecf0f1', '#95a5a6',
    '#16a085', '#27ae60', '#2980b9', '#8e44ad', '#2c3e50',
    '#f39c12', '#d35400', '#c0392b', '#bdc3c7', '#7f8c8d'
];

// პატარა კუბიკების შექმნა
const smallBoxesContainer = document.getElementById('small-boxes');
for (let i = 0; i < 20; i++) {
    const smallBox = document.createElement('div');
    smallBox.classList.add('small-box');
    smallBox.style.backgroundColor = colors[i];
    smallBox.addEventListener('click', () => {
        changeLargeBoxColor(colors[i]);
    });
    smallBoxesContainer.appendChild(smallBox);
}

// ფერის ცვლილების ფუნქცია
function changeLargeBoxColor(color) {
    const largeBox = document.getElementById('large-box');
    largeBox.style.backgroundColor = color;
}

// ფუნქცია დიდი კუბიკის ფერის დასაყენებლად
function updateColor() {
    const red = document.getElementById('red-slider').value;
    const green = document.getElementById('green-slider').value;
    const blue = document.getElementById('blue-slider').value;
    
    const color = `rgb(${red}, ${green}, ${blue})`;
    const largeBox = document.getElementById('large-box');
    largeBox.style.backgroundColor = color;
}