<html>
    <head>
        <title>Professor - Modify Student Enrollment</title>
        <link rel="stylesheet" href="../../presentation/StyleSheets/StyleSheet_Sidebar.css">
        <link rel="stylesheet" href="../../presentation/StyleSheets/StyleSheet_Professor.css">
    </head>
    <body>
        <div class="sidebar">
            <a href="ViewData.php">View Questions</a>
            <a href="AddData.php">Add Questions</a>
            <a href="CreateSyllabus.php">Manage Syllabus</a>
            <a href="ViewCreatedCourses.php">Manage Courses</a>
            <a class="active" href="StudentEnrollment.php">Manage Student Enrollment</a>
            <a class="bottom" href="../../logic/LogoutUser.php">Logout</a>
        </div>

        <div class="content">
            <div class="title">
                <h2>Modify Student Enrollment</h2>
            </div>

            <br>
            <br>

            <form action="" method="post">
                <div class="select_course">
                    <?php if (!empty($classList)) echo(PresentationMethods::displayCurrentEnrolledCourses($classList)); ?>
                    <button type="submit" name="getEnrollment" value="✓">View Course's Enrollment</button>
                </div>

                <br>
                <?php if (!empty($feedback)) echo(PresentationMethods::displayFeedback($feedback)) ?>
                <br>

                <div class="action_result">
                    <?php if (isset($studentList)) echo(PresentationMethods::displayEnrolledStudents($studentList)) ?>
                </div>
            </form>
        </div>
    </body>
</html>