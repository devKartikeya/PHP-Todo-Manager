const button = document.getElementById('button');
const main = document.getElementById('main');
const addCategoryForm = document.getElementById('addForm');

button.addEventListener('click', () => {
    addCategoryForm.classList.add('show');
});

main.addEventListener('click', () => {
    addCategoryForm.classList.remove('show');
});