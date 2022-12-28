<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form>
      <input type="text" name="student_id" placeholder="Student ID" />
      <input type="text" name="email" placeholder="Email" />
      <input type="text" name="batch" placeholder="Batch" />

      <select name="department">
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
        <option value="LLB">LLB</option>
        <option value="ENG">ENG</option>
      </select>

      <input type="submit" name="submit" value="Submit" />
    </form>
    <script>
      var form = document.querySelector("form");
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var student_id = document.querySelector(
          "input[name='student_id']"
        ).value;
        var email = document.querySelector("input[name='email']").value;
        var batch = document.querySelector("input[name='batch']").value;
        var department = document.querySelector(
          "select[name='department']"
        ).value;
        var regex = "/\d+(?:st|nd|rd|th)/";
        if (student_id.length != 11) {
          alert("Student ID must be 11 digits");
          return false;
        }
        var atposition = email.indexOf("@");
        var dotposition = email.lastIndexOf(".");
        if (
          atposition < 1 ||
          dotposition < atposition + 2 ||
          dotposition + 2 >= email.length
        ) {
          alert(
            "Please enter a valid e-mail address \n atpostion:" +
              atposition +
              "\n dotposition:" +
              dotposition
          );
          return false;
        }
        if (batch.match(regex)) {
          alert("Please enter a valid batch");
          return false;
        }
        console.log(student_id, email, batch, department);
      });
    </script>
  </body>
</html>