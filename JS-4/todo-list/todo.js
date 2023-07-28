const tasksList = document.getElementById('tasks-list');
const newTaskInput = document.getElementById('new-task');

document.addEventListener('DOMContentLoaded', () => {
    const storedTasks = localStorage.getItem('tasks');
    if (storedTasks) {
        const tasks = JSON.parse(storedTasks);
        tasks.forEach(task => {
            createTaskElement(task.name, task.done);
        });
    }
});

function addTask() {
    const taskName = newTaskInput.value.trim();
    if (taskName !== '') {
        createTaskElement(taskName, false);
        newTaskInput.value = '';
    }
}

function createTaskElement(name, done) {
    const taskElement = document.createElement('li');
    taskElement.classList.add('task');

    const taskNameElement = document.createElement('span');
    taskNameElement.textContent = name;
    taskNameElement.classList.add('task-name');
    if (done) {
        taskNameElement.classList.add('done');
    }
    taskElement.appendChild(taskNameElement);

    const doneButton = document.createElement('button');
    doneButton.textContent = 'Done';
    doneButton.classList.add('done-button');
    doneButton.classList.add('task-buttons');
    doneButton.addEventListener('click', () => {
        taskNameElement.classList.toggle('done');
        updateLocalStorage();
    });
    taskElement.appendChild(doneButton);

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.classList.add('delete-button');
    deleteButton.classList.add('task-buttons');
    deleteButton.addEventListener('click', () => {
        tasksList.removeChild(taskElement);
        updateLocalStorage();
    });
    taskElement.appendChild(deleteButton);

    tasksList.appendChild(taskElement);

    updateLocalStorage();
}

function updateLocalStorage() {
    const tasks = [];
    const taskElements = tasksList.querySelectorAll('.task');
    taskElements.forEach(taskElement => {
        const nameElement = taskElement.querySelector('.task-name');
        const done = nameElement.classList.contains('done');
        tasks.push({ name: nameElement.textContent, done: done });
    });
    localStorage.setItem('tasks', JSON.stringify(tasks));
}