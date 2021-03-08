@extends('layout.layoutAdminDashboard')

@section('adminDashboard')
<div class="" id="home">
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="/">
                <h1 class="tm-site-title mb-0">Love Tea Company</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="color: white;">
                            <i class="fas fa-tachometer-alt" style="color: white;"></i> Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-book-open"></i>
                            <span>
                               Catalog <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/product-category">Products & Categories</a>

                            <a class="dropdown-item" href="/inventory-category">Inventory</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/promotion">
                            <i class="fas fa-tags"></i> Promotions
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin-order">
                            <i class="fas fa-truck"></i> Orders
                        </a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-block" href="/login">
                            Admin, <b>Logout</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="container">
        <div class="row">
            <br>
            <div class="col"><br><br>
                <p style="color: black;">Welcome back, <b>Admin</b></p>
            </div>
        </div>
        <!-- row -->
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">


                    <div class="wrapper">
                        <header>Things to do</header>
                        <div class="inputField">
                            <input type="text" placeholder="Add your new todo">
                            <button><i class="fas fa-plus"></i></button>
                        </div>
                        <ul class="todoList">
                            <!-- data are comes from local storage -->
                        </ul>
                        <div class="footer">
                            <span>You have <span class="pendingTasks"></span> pending tasks</span>
                            <button>Clear All</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                    <h2 class="tm-block-title">Notification List</h2>
                    <div class="tm-notification-items">
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="claire.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Claire</b> and <b>6 others</b> sent you new <a href="#" class="tm-notification-link">product updates</a>. Check new orders.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="jo.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Joana Too</b> and <b>6 others</b> sent you existing <a href="#" class="tm-notification-link">product updates</a>. Read more reports.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="merv.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Mervin</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">order updates</a>. Read order information.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="gio.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Gio</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">product records</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="gab.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Gab</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">order stuffs</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="aljhon.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Aljhon</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">product updates</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                    <h2 class="tm-block-title">Order List</h2>
                    <table class="table table-hover tm-table-small tm-product-table">



                        <thead>


                            <tr>

                                <th scope="col">Order ID </th>
                                <th scope="col">CUSTOMER</th>
                                <th scope="col">UNITS</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">DATE ORDERED</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">MODE OF PAYMENT</th>
                                <th scope="col">ORDER STATUS</th>
                                <th scope="col">PAYMENT STATUS</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody style="color: black;" id="myTable">
                            <tr>


                                <td>#132487</td>
                                <td>Joana Mea Francisco</td>
                                <td>5</td>
                                <td>Zamboanga City</td>
                                <td>January 9, 2021</td>
                                <td>500</td>
                                <td>COD</td>
                                <td>Complete</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>#147659</td>
                                <td>Claire Villamor</td>
                                <td>2</td>
                                <td>Zamboanga Sibugay</td>
                                <td>January 12, 2021</td>
                                <td>398</td>
                                <td>COD</td>
                                <td>Processing</td>
                                <td>Processing</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>#154214</td>
                                <td>Mervin Naguio</td>
                                <td>7</td>
                                <td>Zamboanga City</td>
                                <td>January 15, 2021</td>
                                <td>978</td>
                                <td>Gcash</td>
                                <td>Pending</td>
                                <td>Processing</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>#184937</td>
                                <td>Sherard Banquerigo</td>
                                <td>6</td>
                                <td>Zamboanga City</td>
                                <td>January 15, 2021</td>
                                <td>785</td>
                                <td>Gcash</td>
                                <td>Processing</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>#154214</td>
                                <td>Sherica Jaafar</td>
                                <td>7</td>
                                <td>Zamboanga City</td>
                                <td>January 16, 2021</td>
                                <td>930</td>
                                <td>COD</td>
                                <td>Complete</td>
                                <td>Processing</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>#176382</td>
                                <td>Vinczar Jailani</td>
                                <td>2</td>
                                <td>Zamboanga City</td>
                                <td>January 16, 2021</td>
                                <td>390</td>
                                <td>COD</td>
                                <td>Pending</td>
                                <td>Processing</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>#143289</td>
                                <td>Realyn Lumigan</td>
                                <td>5</td>
                                <td>Zamboanga City</td>
                                <td>January 17, 2021</td>
                                <td>645</td>
                                <td>Gcash</td>
                                <td>Processing</td>
                                <td>Paid</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>#189536</td>
                                <td>Baron Rabadon</td>
                                <td>5</td>
                                <td>Zamboanga Sibugay</td>
                                <td>January 17, 2021</td>
                                <td>779</td>
                                <td>Gcash</td>
                                <td>Processing</td>
                                <td>Processing</td>
                                <td>
                                    <a href="#">
                                        <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                    </a>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="js/moment.min.js"></script>
<!-- https://momentjs.com/ -->
<script src="js/Chart.min.js"></script>
<!-- http://www.chartjs.org/docs/latest/ -->
<script src="js/bootstrap.min.js"></script>
<!-- https://getbootstrap.com/ -->
<script src="js/tooplate-scripts.js"></script>
<script>
    Chart.defaults.global.defaultFontColor = 'white';
    let ctxLine,
        ctxBar,
        ctxPie,
        optionsLine,
        optionsBar,
        optionsPie,
        configLine,
        configBar,
        configPie,
        lineChart;
    barChart, pieChart;
    // DOM is ready
    $(function() {
        drawLineChart(); // Line Chart
        drawBarChart(); // Bar Chart
        drawPieChart(); // Pie Chart

        $(window).resize(function() {
            updateLineChart();
            updateBarChart();
        });
    })
</script>
<script type="text/javascript" src="app.js"></script>
<script>
    var taskInput = document.getElementById("new-task"); //Add a new task.
    var addButton = document.getElementsByTagName("button")[0]; //first button
    var incompleteTaskHolder = document.getElementById("incomplete-tasks"); //ul of #incomplete-tasks
    var completedTasksHolder = document.getElementById("completed-tasks"); //completed-tasks


    //New task list item
    var createNewTaskElement = function(taskString) {

        var listItem = document.createElement("li");

        //input (checkbox)
        var checkBox = document.createElement("input"); //checkbx
        //label
        var label = document.createElement("label"); //label
        //input (text)
        var editInput = document.createElement("input"); //text
        //button.edit
        var editButton = document.createElement("button"); //edit button

        //button.delete
        var deleteButton = document.createElement("button"); //delete button

        label.innerText = taskString;

        //Each elements, needs appending
        checkBox.type = "checkbox";
        editInput.type = "text";

        editButton.innerText = "Edit"; //innerText encodes special characters, HTML does not.
        editButton.className = "edit";
        deleteButton.innerText = "Delete";
        deleteButton.className = "delete";



        //and appending.
        listItem.appendChild(checkBox);
        listItem.appendChild(label);
        listItem.appendChild(editInput);
        listItem.appendChild(editButton);
        listItem.appendChild(deleteButton);
        return listItem;
    }



    var addTask = function() {
        console.log("Add Task...");
        //Create a new list item with the text from the #new-task:
        var listItem = createNewTaskElement(taskInput.value);

        //Append listItem to incompleteTaskHolder
        incompleteTaskHolder.appendChild(listItem);
        bindTaskEvents(listItem, taskCompleted);

        taskInput.value = "";

    }

    //Edit an existing task.

    var editTask = function() {
        console.log("Edit Task...");
        console.log("Change 'edit' to 'save'");


        var listItem = this.parentNode;

        var editInput = listItem.querySelector('input[type=text]');
        var label = listItem.querySelector("label");
        var containsClass = listItem.classList.contains("editMode");
        //If class of the parent is .editmode
        if (containsClass) {

            //switch to .editmode
            //label becomes the inputs value.
            label.innerText = editInput.value;
        } else {
            editInput.value = label.innerText;
        }

        //toggle .editmode on the parent.
        listItem.classList.toggle("editMode");
    }




    //Delete task.
    var deleteTask = function() {
        console.log("Delete Task...");

        var listItem = this.parentNode;
        var ul = listItem.parentNode;
        //Remove the parent list item from the ul.
        ul.removeChild(listItem);

    }


    //Mark task completed
    var taskCompleted = function() {
        console.log("Complete Task...");

        //Append the task list item to the #completed-tasks
        var listItem = this.parentNode;
        completedTasksHolder.appendChild(listItem);
        bindTaskEvents(listItem, taskIncomplete);

    }


    var taskIncomplete = function() {
        console.log("Incomplete Task...");
        //Mark task as incomplete.
        //When the checkbox is unchecked
        //Append the task list item to the #incomplete-tasks.
        var listItem = this.parentNode;
        incompleteTaskHolder.appendChild(listItem);
        bindTaskEvents(listItem, taskCompleted);
    }



    var ajaxRequest = function() {
        console.log("AJAX Request");
    }

    //The glue to hold it all together.


    //Set the click handler to the addTask function.
    addButton.onclick = addTask;
    addButton.addEventListener("click", addTask);
    addButton.addEventListener("click", ajaxRequest);


    var bindTaskEvents = function(taskListItem, checkBoxEventHandler) {
        console.log("bind list item events");
        //select ListItems children
        var checkBox = taskListItem.querySelector("input[type=checkbox]");
        var editButton = taskListItem.querySelector("button.edit");
        var deleteButton = taskListItem.querySelector("button.delete");


        //Bind editTask to edit button.
        editButton.onclick = editTask;
        //Bind deleteTask to delete button.
        deleteButton.onclick = deleteTask;
        //Bind taskCompleted to checkBoxEventHandler.
        checkBox.onchange = checkBoxEventHandler;
    }

    //cycle over incompleteTaskHolder ul list items
    //for each list item
    for (var i = 0; i < incompleteTaskHolder.children.length; i++) {

        //bind events to list items chldren(tasksCompleted)
        bindTaskEvents(incompleteTaskHolder.children[i], taskCompleted);
    }




    //cycle over completedTasksHolder ul list items
    for (var i = 0; i < completedTasksHolder.children.length; i++) {
        //bind events to list items chldren(tasksIncompleted)
        bindTaskEvents(completedTasksHolder.children[i], taskIncomplete);
    }
</script>
<script>
    // getting all required elements
    const inputBox = document.querySelector(".inputField input");
    const addBtn = document.querySelector(".inputField button");
    const todoList = document.querySelector(".todoList");
    const deleteAllBtn = document.querySelector(".footer button");

    // onkeyup event
    inputBox.onkeyup = () => {
        let userEnteredValue = inputBox.value; //getting user entered value
        if (userEnteredValue.trim() != 0) { //if the user value isn't only spaces
            addBtn.classList.add("active"); //active the add button
        } else {
            addBtn.classList.remove("active"); //unactive the add button
        }
    }

    showTasks(); //calling showTask function

    addBtn.onclick = () => { //when user click on plus icon button
        let userEnteredValue = inputBox.value; //getting input field value
        let getLocalStorageData = localStorage.getItem("New Todo"); //getting localstorage
        if (getLocalStorageData == null) { //if localstorage has no data
            listArray = []; //create a blank array
        } else {
            listArray = JSON.parse(getLocalStorageData); //transforming json string into a js object
        }
        listArray.push(userEnteredValue); //pushing or adding new value in array
        localStorage.setItem("New Todo", JSON.stringify(listArray)); //transforming js object into a json string
        showTasks(); //calling showTask function
        addBtn.classList.remove("active"); //unactive the add button once the task added
    }

    function showTasks() {
        let getLocalStorageData = localStorage.getItem("New Todo");
        if (getLocalStorageData == null) {
            listArray = [];
        } else {
            listArray = JSON.parse(getLocalStorageData);
        }
        const pendingTasksNumb = document.querySelector(".pendingTasks");
        pendingTasksNumb.textContent = listArray.length; //passing the array length in pendingtask
        if (listArray.length > 0) { //if array length is greater than 0
            deleteAllBtn.classList.add("active"); //active the delete button
        } else {
            deleteAllBtn.classList.remove("active"); //unactive the delete button
        }
        let newLiTag = "";
        listArray.forEach((element, index) => {
            newLiTag += `<li>${element}<span class="icon" onclick="deleteTask(${index})"><i class="fas fa-trash"></i></span></li>`;
        });
        todoList.innerHTML = newLiTag; //adding new li tag inside ul tag
        inputBox.value = ""; //once task added leave the input field blank
    }

    // delete task function
    function deleteTask(index) {
        let getLocalStorageData = localStorage.getItem("New Todo");
        listArray = JSON.parse(getLocalStorageData);
        listArray.splice(index, 1); //delete or remove the li
        localStorage.setItem("New Todo", JSON.stringify(listArray));
        showTasks(); //call the showTasks function
    }

    // delete all tasks function
    deleteAllBtn.onclick = () => {
        listArray = []; //empty the array
        localStorage.setItem("New Todo", JSON.stringify(listArray)); //set the item in localstorage
        showTasks(); //call the showTasks function
    }
</script>
<div class="footer" style="text-align: center;">



    <a style="color: white; font-size: 12px; text-align: center; padding: 1px;">© 2021 Copyright: A.N. Corp</a>
</div>
@endsection