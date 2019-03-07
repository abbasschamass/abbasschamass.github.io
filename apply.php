<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
.main{
	background-size: cover!important;
	background-repeat:no repeat;
}
* {
  box-sizing: border-box;
}

.img-container {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	</style>
</head>
<body>
<h2>Responsive Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
  <form method="post" action="welcome.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Your name..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="country">Country</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
      	<option value="country">country</option>
        <option value="lebanon">lebanon</option>
        <option value="syria">syria</option>
        <option value="egypt">egypt</option>
      </select>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="address">address</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="address" placeholder="address..">
  </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="type of insurance">type of insurance</label>
    </div>
    <div class="col-75">
      <select id="type of insurance" name="type of insurance">
      	  <option value="type of insurance">type of insurance insurance</option>
        <option value="type of insurance">life insurance</option>
        <option value="car insurance">car insurance</option>
        <option value="fire insurance">fire insurance</option>
      </select>
    </div>
  </div>
	<div class="row">
	<div class="col-25">
	  <label for="age/id">age/id</label>
	</div>
	 <div class="col-75">
	 </div>
	</div>
		
  <div class="row">
    <div class="col-25">
      <label for="message">message</label>
    </div>
    <div class="col-75">
      <textarea id="message" name="meassage" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>