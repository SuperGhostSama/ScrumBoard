<?php
include('scripts.php');
$allTasks = getTasks();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>

<body>

	<!-- BEGIN #app -->
	<div id="app" class="app-without-sidebar">
		<!-- BEGIN #content -->
		<div id="content" class="app-content main-style">
			<div class="navbar">
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">Scrum Board </li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header">
						Scrum Board
					</h1>
					<!-- END page-header -->
				</div>

				<div class="">
					<button type="button" class="btn btn-success rounded-pill" data-bs-toggle="modal" data-bs-target="#modalForm"><i class="pe-1 fa fa-plus"></i> Add Task</button>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-4 mb-3 col-sm-6">
					<div class="card">
						<div class="card-header bg-dark">
							<h4 class="text-white my-auto px-1">To do (<span id="to-do-tasks-count">0</span>)</h4>

						</div>
						<!-- TO DO TASKS HERE -->
						<div class="" id="to-do-tasks">
							<?php
							foreach ($allTasks as $tasks) {
								if ($tasks['statusName'] === 'To Do') {

							?>
									<button class="d-flex  list-group-item w-100 text-start">
										<div class="mt-1">
											<i class="fa-regular fa-circle-question text-success fs-3"></i>
										</div>
										<div class="ms-3">
											<div class="fs-5 fw-bolder"> <?php echo $tasks['title']; ?> </div>
											<div class="">
												<div class="fs-6 fw-light text-muted"> <?php echo $tasks['task_datetime']; ?> </div>
												<div class="fs-6 fw-normal text-truncate" style="max-width: 16rem"> <?php echo $tasks['description']; ?> </div>
											</div>
											<div class="py-1">
												<span class="btn btn-primary py-3px px-5px"> <?php echo $tasks['priorityName']; ?> </span>
												<span class="btn btn-secondary py-3px px-5px"> <?php echo $tasks['typeName']; ?> </span>
											</div>
										</div>
									</button>

							<?php
								}
							}
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 mb-3 ">
					<div class="card">
						<div class="card-header bg-dark">
							<h4 class="text-white my-auto px-1">In Progress (<span id="in-progress-tasks-count">0</span>)</h4>

						</div>
						<!-- IN PROGRESS TASKS HERE -->
						<div class="" id="in-progress-tasks">

						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 mb-3">
					<div class="card">
						<div class="card-header bg-dark">
							<h4 class="text-white my-auto px-1">Done (<span id="done-tasks-count">0</span>)</h4>

						</div>
						<!-- DONE TASKS HERE -->
						<div class=" " id="done-tasks">


						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->


		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->

	<!-- TASK MODAL -->
	<!-- Button trigger modal -->
	<!-- Modal -->
	<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModelLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" id="Form">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModelLabel">Modal title</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="Titel" class="form-label">Titel</label>
							<input type="hidden" id="id">
							<input name="title" class="form-control" id="Title">
						</div>

						<label for="exampleFormControlInput1" class="form-label ">Type</label>
						<div class="form-check my-1 ms-3">
							<input class="form-check-input" type="radio" name="taskType" value="Feature" id="Feature">
							<label class="form-check-label" for="Feature">
								Feature
							</label>
						</div>
						<div class="form-check my-1 ms-3">
							<input class="form-check-input" type="radio" name="taskType" value="Bug" id="Bug" checked>
							<label class="form-check-label" for="Bug">
								Bug
							</label>
						</div>

						<label for="Priority" class="form-label my-1">Priority</label>
						<select class="form-select" aria-label="Default select example" name="taskPriority" id="Priority">
							<option selected disabled>Please select</option>
							<option value="1">Low</option>
							<option value="2">Medium</option>
							<option value="3">High</option>
							<option value="4">Critical</option>
						</select>

						<label for="Status" class="form-label my-1">Status</label>
						<select class="form-select" aria-label="Default select example" name="taskStatus" id="Status">
							<option selected disabled>Please select</option>
							<option value="1">To Do</option>
							<option value="2">In Progress</option>
							<option value="3">Done</option>
						</select>

						<div class="md-form md-outline input-with-post-icon datepicker mb-4">
							<label for="Date" class="form-label my-1">Date</label>
							<input placeholder="Select date" type="date" name="taskDate" id="Date" class="form-control">
						</div>


						<div class="mb-3">
							<label for="Description" class="form-label">Description</label>
							<textarea class="form-control" id="Description" name="taskDescription" rows="3"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" name="saveForm" class="btn btn-primary" id="">Save</button>
						<div id="UpdateAndDelete">
							<button type="submit" name="update" class="btn btn-warning">Update</button>
							<button type="submit" name="delete" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- ================== Jquery ================== -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<!--  ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	<script src="assets/js/data.js"></script>
	<script src="assets/js/app.js"></script>
</body>

</html>