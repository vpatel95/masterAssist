<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
</head>
<body>
	<form action="{{ route('teacher.data') }}" method="POST">
		<input type="text" name="teacher_id" placeholder="id" required>
		<input type="text" name="fname" placeholder="fname" required>
		<input type="text" name="lname" placeholder="lname" required>
		<input type="text" name="branch" placeholder="branch" required>
		<input type="text" name="designation" placeholder="designation" required>
		<input type="hidden" name="user_id" value="{{ $user->id }}">
		<input type="hidden" name="email" value="{{ $user->email }}">
		<input type="hidden" name="_token" value="{{ Session::token() }}">
		<button type="submit">Submit</button>
	</form>
</body>
</html>