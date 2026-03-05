<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <style>
        form{
            border:1px solid black;
            padding:20px;
            width:300px;
        }
    </style>
</head>
<body>
      <?php session_start(); 
        require_once 'employee.php';

        if(!isset($_SESSION['employee'])) {
            $_SESSION['employee'] = [];
        }
    ?>
    
  <div class="form-container">
        <h2>Employee Information</h2>

            <form action="#" method="post">
                <table border="1" cellpadding="10">
                <tr>
                    <td><label for="Lname">Last Name</label></td>
                    <td><input type="text" id="Lname" name="Lname" required></td>
                </tr>

                <tr>
                    <td><label for="Fname">First Name</label></td>
                    <td><input type="text" id="Fname" name="Fname" required></td>
                </tr>

                <tr>
                    <td><label for="age">Age</label></td>
                    <td><input type="number" id="age" name="age" min="1" required></td>
                </tr>

                <tr>
                    <td><label for="position">Position</label></td>
                    <td><input type="text" id="position" name="position" required></td>
                </tr>

                <tr>
                    <td><label for="salary">Salary</label></td>
                    <td><input type="number" id="salary" name="salary" min="1" required></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Save Employee</button>
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['Lname'])) {
            $employees = new Employee($_POST['Lname'],$_POST['Fname'],$_POST['age'],$_POST['position'],$_POST['salary']);

              $_SESSION['employee'][] = [
                    'Lname' => $employees->getLname(),
                    'Fname' => $employees->getFname(),
                    'age' => $employees->getAge(),
                    'position' => $employees->getPosition(),
                    'salary' => $employees->getSalary()
              ];

            }
           
        ?>
    </div>

    <h3 class="form-container">Submitted Data:</h3>

    <div class="form-container">
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($_SESSION['employee'])) { ?>
                  <tr>
                    <td>No data available!</td>
                  </tr>
                <?php }else {
                    foreach($_SESSION['employee'] as $data) { ?>
                     <tr>
                        <td><?php echo $data['Lname']; ?></td>
                        <td><?php echo $data['Fname']; ?></td>
                        <td><?php echo $data['age']; ?></td>
                        <td><?php echo $data['position']; ?></td>
                        <td><?php echo $data['salary']; ?></td>
                     </tr>
                <?php   }
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>