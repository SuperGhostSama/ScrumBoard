/**
 * In this file app.js you will find all CRUD functions name.
 * 
 */
 let ToDo = document.getElementById("to-do-tasks");
 let InProgress = document.getElementById("in-progress-tasks");
 let Done = document.getElementById("done-tasks");

 reloadTasks() 

                           
function createTask() {
    // initialiser task form

    // Afficher le boutton save

    // Ouvrir modal form
    
}

function saveTask() {
    // Recuperer task attributes a partir les champs input

    // Créez task object

    // Ajoutez object au Array

    // refresh tasks
    
}

function editTask(index) {
    // Initialisez task form

    // Affichez updates

    // Delete Button

    // Définir l’index en entrée cachée pour l’utiliser en Update et Delete

    // Definir FORM INPUTS

    // Ouvrir Modal form
}

function updateTask() {
    // GET TASK ATTRIBUTES FROM INPUTS

    // Créez task object

    // Remplacer ancienne task par nouvelle task

    // Fermer Modal form

    // Refresh tasks
    
}

function deleteTask() {
    // Get index of task in the array

    // Remove task from array by index splice function

    // close modal form

    // refresh tasks
}

function initTaskForm() {
    // Clear task form from data

    // Hide all action buttons
}

function reloadTasks() {
    // Remove tasks elements
     document.getElementById("to-do-tasks").innerHTML="";
     document.getElementById("in-progress-tasks").innerHTML="";
     document.getElementById("done-tasks").innerHTML="";
    // Set Task count
    tasks.forEach(task => {
        if(task.status==="To Do"){
        ToDo.innerHTML +=           `<button class="d-flex  list-group-item w-100 text-start">
                                        <div class="mt-1">
                                            <i class="fa-regular fa-circle-question text-success fs-3"></i>
                                        </div>
                                        <div class="ms-3">
                                            <div class="fs-5 fw-bolder">${task.title}</div>
                                            <div class="">
                                                <div class="fs-6 fw-light text-muted">${task.date}</div>
                                                <div class="fs-6 fw-normal text-truncate" style="max-width: 16rem">${task.description}</div>
                                            </div>
                                            <div class="py-1">
                                                <span class="btn btn-primary py-3px px-5px">${task.priority}</span>
                                                <span class="btn btn-secondary py-3px px-5px">${task.type}</span>
                                            </div>
                                        </div>
                                    </button>`;
                            }
        if(task.status==="In Progress"){
        InProgress.innerHTML +=         `<button class="d-flex  list-group-item w-100 text-start">
                                            <div class="spinner-border spinner-border-sm text-success mt-1" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <div class="ms-3">
                                            <div class="fs-5 fw-bolder">${task.title}</div>
                                            <div class="">
                                                <div class="fs-6 fw-light text-muted">${task.date}</div>
                                                <div class="fs-6 fw-normal text-truncate" style="max-width: 16rem">${task.description}</div>
                                            </div>
                                            <div class="py-1">
                                                <span class="btn btn-primary py-3px px-5px">${task.priority}</span>
                                                <span class="btn btn-secondary py-3px px-5px">${task.type}</span>
                                            </div>
                                        
                                            </div>
                                        </button>`
                    }
        else if (task.status==="Done"){
        Done.innerHTML  +=          `<button class="d-flex  list-group-item w-100 text-start">
                                    <div class="mt-1">
                                        <i class="fa-regular fa-circle-check text-success fs-2"></i>
                                    </div>
                                    <div class="ms-3">
                                    <div class="fs-5 fw-bolder">${task.title}</div>
                                    <div class="">
                                        <div class="fs-6 fw-light text-muted">${task.date}</div>
                                        <div class="fs-6 fw-normal text-truncate" style="max-width: 16rem">${task.description}</div>
                                    </div>
                                    <div class="py-1">
                                        <span class="btn btn-primary py-3px px-5px">${task.priority}</span>
                                        <span class="btn btn-secondary py-3px px-5px">${task.type}</span>
                                    </div>
                                
                                    </div>
                                    </button>`
        }
      });
}