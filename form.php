<!DOCTYPE html>
<html>
    <head>
        <title> Data Form </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <section class="get_in_touch">
            <h1 class="title">Student Reporting System</h1>
            <h5 class="text-center">Enter Students Details</h5>
            <div class="container">
                <form class="contact-form row" method="post" action="srs.php">
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="name">
                        <label for="name" class="label">Student Name</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <select name="semester" class="input-text" required>
                            <option value="sem1">Sem1</option>
                            <option value="sem2">Sem2</option>
                        </select>
                        <label for="semester" class="label">Semester</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="english" class="input-text" type="text" name="eng">
                        <label for="english" class="label">English Marks</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="maths" class="input-text" type="text" name="maths">
                        <label for="maths" class="label">Maths Marks</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input id="science" class="input-text" type="text" name="sci">
                        <label for="science" class="label">Science Marks</label>
                    </div>
                    <div class="form-field col-lg-12 text-center">
                        <input class="submit-btn" type="submit" value="Add Student" name="add_student">                        
                    </div>                   
                </form>
            </div>
        </section>
    </body>
</html>