<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <h1>Attendance Register</h1>

       
           
        <form id="attendance-form" method="POST" action="{{route('create_registration')}}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Enter your name" required name="name">
            <!--<i class='bx bxs-user'></i>-->

        <form id="attendance-form">
            <label for="name">Course:</label>
            <input type="text" id="course" placeholder="Enter your Course" required name="course">
           
        <form id="attendance-form">
            <label for="name">Registration No:</label>
            <input type="number" id="registration" placeholder="Enter your Reg No" name="reg_no">    
     
        <form id="attendance-form">
            <label for="name">Class No:</label>
            <input type="number" id="classss" placeholder="Enter your class No" required name="class_no">

        <form id="attendance-form">
            <label for="name">Username:</label>
            <input type="text" id="username" placeholder="Enter your Username" required name="username">

        <form id="attendance-form">
            <label for="name">Department:</label>
            <input type="text" id="department" placeholder="Enter your Department" required name="department">

            <label for="status">Attendance Status:</label>
            <select id="status" required name="status">
                <option value="">Select Status</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
                <option value="Late">Late</option>
            </select>
            
            <button type="submit">Add</button>
        </form>

       
    </div>
    <script src="registration.js"></script>
</body>
</html>
