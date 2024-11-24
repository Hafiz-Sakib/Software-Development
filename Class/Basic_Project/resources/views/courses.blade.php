<!DOCTYPE html>
<html lang="en">
<head>
    <title>Courses</title>
</head>
<body>
    <h1>Available Courses</h1>
    <ul>
        <li><a href="{{ route('course.details', ['id' => 1]) }}">Learn PHP Basics</a></li>
        <li><a href="{{ route('course.details', ['id' => 2]) }}">Master Laravel</a></li>
        <li><a href="{{ route('course.details', ['id' => 3]) }}">Web Development Fundamentals</a></li>
    </ul>
    <a href="{{ route('home') }}">Back to Homepage</a>
</body>
</html>
