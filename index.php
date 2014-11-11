<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>shanet</title>
    <link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.5.min.css">
    <script type="text/javascript" charset="utf-8" src="jquery_1.5.2.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="ShaNet.js"></script>
</head>
<body>
<form>
  <p>
  <label><label>Please Fill up the form and submit.<br />
  </label>Name
  <input type="text" name="name" id="name" placeholder="Please Input Name" />
    </label>
  </p>
  <p>
    <label>Age
        <input type="number" name="age" value="25" id="age" placeholder="Please Input Age" />
    </label>
  </p>
  <p>
    <label>
      <input type="button" name="submit" id="submit" value="Submitush" />
    </label>
  </p>

</form>
  <?php
   class Emp {
       public $name = "";
       public $hobbies  = "";
       public $birthdate = "";
   }
   $e = new Emp();
   $e->name = "sachin";
   $e->hobbies  = "sports";
   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

   echo json_encode($e);
?>
</body>
</html>
