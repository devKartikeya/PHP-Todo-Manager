const button = document.getElementById('button');
const main = document.getElementById('main');
const addCategoryForm = document.getElementById('addForm');

button.addEventListener('click', (e) => {
    addCategoryForm.style.visibility = "visible";
});

main.addEventListener('click', (e) => {
    addCategoryForm.style.visibility = "hidden";
})