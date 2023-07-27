const tasksList = document.getElementById('tasks-list');
const newTaskInput = document.getElementById('new-task');

function addTask() {
    const taskName = newTaskInput.value.trim();
    if (taskName !== '') {
        const taskElement = document.createElement('li');
        taskElement.classList.add('task');

        const taskNameElement = document.createElement('span');
        taskNameElement.textContent = taskName;
        taskNameElement.classList.add('task-name');
        taskElement.appendChild(taskNameElement);

        const doneButton = document.createElement('button');
        doneButton.textContent = 'Done';
        doneButton.classList.add('done-button');
        doneButton.classList.add('task-buttons');
        doneButton.addEventListener('click', () => {
            taskNameElement.classList.toggle('done');
        });
        taskElement.appendChild(doneButton);

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.classList.add('delete-button');
        deleteButton.classList.add('task-buttons');
        deleteButton.addEventListener('click', () => {
            tasksList.removeChild(taskElement);
        });
        taskElement.appendChild(deleteButton);

        tasksList.appendChild(taskElement);

        newTaskInput.value = '';
    }
}
