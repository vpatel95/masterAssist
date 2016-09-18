<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
</head>
<body>
	<form action="{{ route('student.data') }}" method="POST">
		<input type="text" name="student_id" placeholder="Register Number" required>
		<input type="text" name="fname" placeholder="First Name" required>
		<input type="text" name="lname" placeholder="Last Name" required>
		<input type="branch" name="branch" placeholder="Branch" required>
		<input type="number" name="semester" placeholder="semester" maxlength="1" required>
		<input type="number" name="year" placeholder="Year" maxlength="1" required>
		<input type="hidden" name="user_id" value="{{ $user->id }}">
		<input type="hidden" name="email" value="{{ $user->email }}">
		<input type="hidden" value="{{ Session::token() }}" name="_token">
		<button type="submit">Submit</button>
	</form>
</body>
</html>