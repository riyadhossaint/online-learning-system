<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- bootstrap style sheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <section class="container">
    <form action="">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <h6>Course Name</h6>
                <input type="text" name="courseName" placeholder="Course Name" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
            <h6>Category</h6>
                <select name="Category" id="Category" class="form-select">
                    <option disabled selected>select category</option>
                    <option value="Academic">Academic</option>
                    <option value="Skill Development">Skill Development</option>
                    <option value="Job Preparation">Job Preparation</option>
                    <option value="Crash Course">Crash Course</option>
                </select>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <h6>Description</h6>
                <textarea name="textArea" id="textArea" cols="10" rows="2" class="form-control"></textarea>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
            <h6>Teacher Name</h6>
                <input type="text" name="teacherName" id="teacherName" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <h6>Teacher Details</h6>
                <textarea name="teacherTextArea" id="teacherTextArea" cols="10" rows="2" class="form-control"></textarea>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <h6>Course About</h6>
                <textarea name="courseTextArea" id="courseTextArea" cols="10" rows="2" class="form-control"></textarea>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Total Enrolled</h6>
                    <input type="number" name="totalEnrolled" id="totalEnrolled" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Time Required</h6>
                    <input type="number" name="timeRequired" id="timeRequired" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Total Videos</h6>
                    <input type="number" name="totalVideos" id="totalVideos" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Total Quiz</h6>
                    <input type="number" name="totalQuiz" id="totalQuiz" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Total Notes</h6>
                    <input type="number" name="totalNotes" id="totalNotes" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Total Practices</h6>
                    <input type="number" name="totalPractices" id="totalPractices" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Duration Month</h6>
                    <input type="number" name="durationMonth" id="durationMonth" class="form-control">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6>Price</h6>
                    <input type="number" name="price" id="price" class="form-control">
            </div>
            
        </div>
    </form>
  </section>
</body>
</html>