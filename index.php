<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body dir="rtl">
<section class="section-form">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 ">

				<div class="col-sm-12">
				  <div class="row">
					<div class="col-sm-12"><img src="logo.png" class="rounded mx-auto d-block" ></div>
				  </div>
				</div>

				<div class="col-12 text-center tit">
					<h3>ملتقى العمداء في الجامعات السعودية الرابع والعشرين</h3>
				</div>

				<div class="col-sm-8 forms">
					<form >
						<div class="form-group row">
							<label class="col-sm-3"></label>
							<div class="col-sm-7">
								<input type="text" name="" class="form-control" placeholder="الاسم ">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3">الجامعة</label>
							<div class="col-sm-7">
								<select class="form-control">
									<option>جامعة حائل </option>
								</select> 
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3"></label>
							<div class="col-sm-7">
								<input type="text" name="" class="form-control" placeholder="رقم الجوال
">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3"></label>
							<div class="col-sm-7">
								<input type="text" name="" class="form-control" placeholder="البريد الالكتروني">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3"></label>
							<div class="col-sm-7">
								<input type="text" name="" class="form-control" id="datepicker" placeholder="موعد الوصول">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3">وقت الوصول </label>
							<div class="col-sm-3">
								<input type="text" name="" class="form-control" placeholder="وقت الوصول
">
							</div>
							<div class="col-sm-3">
								<select class="form-control">
									<option>صباح</option>
									<option>مساء </option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3"></label>
							<div class="col-sm-7">
								<input type="submit" name="submit" class="btn btn-block btn-info" value="حفظ">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</section>

</body>
</html>