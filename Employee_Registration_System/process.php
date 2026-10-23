<?php
require_once "functions.php";

if (isset($_POST['submit'])) {

    // Soo qaadashada xogta
    $FullName      = $_POST["fullname"];
    $ID            = $_POST["ID"];
    $Gender        = $_POST["gender"];
    $Department    = $_POST["department"];
    $Emp_Type      = $_POST["Employment_Type"];
    $Basic_Salary  = $_POST["basic_salary"];
    $Allowance     = $_POST["Allowance"];
    $Deduction     = $_POST["Deduction"];
    $YearOfService = $_POST["Years_of_Service"];

    // Xogta Faylka
    $file_name = $_FILES['EmployeeDocument']['name'];
    $file_size = $_FILES['EmployeeDocument']['size'];
    $file_tmp  = $_FILES['EmployeeDocument']['tmp_name'];
    $file_type = $_FILES['EmployeeDocument']['type'];
    $max_size = 2 * 1024 * 1024;


    // Xisaabinta  
    $GrossSalary        = calculateGrossSalary($Basic_Salary, $Allowance);
    $Bonus              = calculateBonus($Basic_Salary);
    $ServiceBenefits    = calculateServiceBenefit($YearOfService, $Basic_Salary);
    $EmployeeAllowance  = calculateEmploymentAllowance($Emp_Type, $Basic_Salary);
    $TotalBenefits      = calculateTotalBenefits($Bonus, $ServiceBenefits, $EmployeeAllowance);

    // Xaqiijinta (Validation)
    if (empty($FullName)) {
        echo "<p>Employee Name must not be empty.</p>";
    } elseif (empty($ID)) {
        echo "<p>Employee ID must not be empty.</p>";
    } elseif (empty($Gender)) {
        echo "<p>Gender must be selected.</p>";
    } elseif (empty($Department)) {
        echo "<p>Department must be selected.</p>";
    } elseif (empty($Emp_Type)) {
        echo "<p>Employment Type must be selected.</p>";
    } elseif ($Basic_Salary <= 0) {
        echo "<p>Basic Salary must be greater than zero.</p>";
    } elseif ($Allowance < 0) {
        echo "<p>Allowance cannot be negative.</p>";
    } elseif ($Deduction < 0) {
        echo "<p>Deduction cannot be negative.</p>";
    } elseif ($YearOfService < 0) {
        echo "<p>Years of Service cannot be negative.</p>";
    } elseif ($Deduction > ($GrossSalary + $TotalBenefits)) {
        echo "<p>Deduction cannot exceed Gross Salary plus Total Benefits.</p>";
    } elseif (!empty($file_name)) {
        echo "<p>An employee document must be selected.</p>";
    } else {

        $folder = "/uploads";
        

        $destination = $folder . $file_name;

        if ($file_size > $max_size) {
            echo "<p>File-ku wuu ka weyn yahay 2MB.</p>";
        } elseif (file_exists($destination)) {
            echo "<p>Faylkaan horay ayuu u jiray.</p>";
        } else {
            if (move_uploaded_file($file_tmp, $destination)) {
                $upload_status = "Uploaded Successfully";

                $NetSalary    = calculateNetSalary($GrossSalary, $TotalBenefits, $Deduction);
                $SalaryStatus = checkSalaryStatus($NetSalary);
                $AnnualSalary = calculateAnnualSalary($NetSalary);

                echo "<p>Employee Full Name: " . $FullName . "</p>";
                echo "<p>Employee ID: " . $ID . "</p>";
                echo "<p>Gender: " . $Gender . "</p>";
                echo "<p>Department: " . $Department . "</p>";
                echo "<p>Employment Type: " . $Emp_Type . "</p>";
                echo "<p>Years of Service: " . $YearOfService . "</p>";

                echo "<p>Basic Salary: " . $Basic_Salary . "</p>";
                echo "<p>Allowance: " . $Allowance . "</p>";
                echo "<p>Gross Salary: " . $GrossSalary . "</p>";
                echo "<p>Bonus: " . $Bonus . "</p>";
                echo "<p>Service Benefit: " . $ServiceBenefits . "</p>";
                echo "<p>Employment Allowance: " . $EmployeeAllowance . "</p>";
                echo "<p>Total Benefits: " . $TotalBenefits . "</p>";
                echo "<p>Deduction: " . $Deduction . "</p>";
                echo "<p>Net Salary: " . $NetSalary . "</p>";
                echo "<p>Salary Status: " . $SalaryStatus . "</p>";
                echo "<p>Annual Salary: " . $AnnualSalary . "</p>";

                echo "<p>Uploaded Document Name: " . $file_name . "</p>";
                echo "<p>Document Type: " . $file_type . "</p>";
                echo "<p>Document Size: " . $file_size . " bytes</p>";
                echo "<p>Upload Status: " . $upload_status . "</p>";
            } else {
                echo "<p>Faylka lama wareejin karin, cilad ayaa dhacday.</p>";
            }
        }
    }

    echo "<p><a href='index.html'>Back to Registration Form</a></p>";
}
