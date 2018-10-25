<?php 
session_start();

// connect to database
$db = mysqli_connect("shareddb1e.hosting.stackcp.net", "tastyusers-363764d9", "cwzfci6hir", "tastyusers-363764d9");

// variable declaration
$title = "";
$pic = "";
$ingredients = "";
$description = "";
$errors = array();

// call the register() function if register_btn is clicked
if (isset($_POST['new_recipe_btn'])) {
	new_recipe();
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

// return recipe array from their id
function getRecipeById($id){
	global $db;
	$query = "SELECT * FROM recipes WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$recipe = mysqli_fetch_assoc($result);
	return $recipe;
}
// ADD NEW RECIPE
function new_recipe(){
	global $db, $title, $pic, $ingredients, $description, $errors;

	// grap form values
	$title = e($_POST['title']);
	$pic = e($_POST['pic']);
	$ingredients = e($_POST['ingredients']);
	$description = e($_POST['description']);

	// make sure form is filled properly
	if (empty($title)) {
		array_push($errors, "Title is required");
	}
	if (empty($pic)) {
		array_push($errors, "Picture is required");
	}
	if (empty($ingredients)) {
		array_push($errors, "List of ingredients required");
	}
	if (empty($description)) {
		array_push($errors, "Description is required");
	}

	// add recipe to db if there are no errors in the form
	if (count($errors) == 0) {
		
		$query = "INSERT INTO recipes (title, pic, ingredients, description) 
					  VALUES('$title', '$pic', '$ingredients', '$description')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New recipe successfully created!!";
			header('location: ../login/home.php');
	}
	
	
}

