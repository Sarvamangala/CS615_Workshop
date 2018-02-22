<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
 <a href=""><img src="FeedbackBox-small.png" class="img-fluid" alt="feedback box" width="250"</a> 
</div>
  
<!-- new things -->
  <form method = "post" action = "php/feedbackprocessor.php">
    <div class="form-group">
 <label for="module">Module: </label>
 <select class="custom-select" id="module" name="module">
 <option value="CS615">Internet Solutions Engineering</option>
 <option value="CS265">Software Testing</option>
 </select>
</div>
    <div class="form-group">
 <label for="semester">Semester: </label>
 <select class="custom-select" id="semester" name="semester">
 <option value="Sem1_2016-17">Sem 1, 2016/17</option>
 <option value="Sem2_2017">Sem 2, 2017</option>
 <option value="Sem1_2017-18">Sem 1, 2017/18</option>
 </select>
 </div>
    
  <div class = "form-group">
        <label>Feedback:</label>
        <textarea id="" name="" row="3" style="min-width: 100%"> </textarea>
  </div>
    
    <div class="form-group">
 <label class="radio-inline"><input type="radio" name="rating"
value="1">:((</label>
 <label class="radio-inline"><input type="radio" name="rating"
value="2">:(</label>
 <label class="radio-inline"><input type="radio" name="rating"
value="3">:|</label>
 <label class="radio-inline"><input type="radio" name="rating"
value="4">:)</label>
 <label class="radio-inline"><input type="radio" name="rating"
value="5">:))</label>
 </div>
    
  <input id="submit" name="submit" type="submit" value="Drop into Box" class="btn btn-primary">
  </form>
</body>
</html>
