<?php
// 1. Gross Salary Calculation
function calculateGrossSalary($basic_salary, $allowance)
{
    return $basic_salary + $allowance;
}

// 2. Bonus Calculation
function calculateBonus($basic_salary)
{
    if ($basic_salary >= 1000) {
        return $basic_salary * 0.10;
    } elseif ($basic_salary >= 500 && $basic_salary < 1000) {
        return $basic_salary * 0.05;
    } else {
        return 0;
    }
}

// 3. Service Benefit Calculation
function calculateServiceBenefit($years_of_service, $basic_salary)
{
    if ($years_of_service >= 5) {
        return $basic_salary * 0.08;
    } elseif ($years_of_service >= 3 && $years_of_service < 5) {
        return $basic_salary * 0.05;
    } else {
        return 0;
    }
}

// 4. Employment Allowance Calculation
function calculateEmploymentAllowance($employment_type, $basic_salary)
{
    if ($employment_type == "full_time") {
        return $basic_salary * 0.06;
    } else {
        return $basic_salary * 0.03;
    }
}

// 5. Total Benefits Calculation
function calculateTotalBenefits($bonus, $service_benefit, $employment_allowance)
{
    return $bonus + $service_benefit + $employment_allowance;
}

// 6. Net Salary Calculation
function calculateNetSalary($gross_salary, $total_benefits, $deduction)
{
    return ($gross_salary + $total_benefits) - $deduction;
}

// 7. Salary Status Classification
function checkSalaryStatus($net_salary)
{
    if ($net_salary >= 1500) {
        return "High Salary";
    } elseif ($net_salary >= 800 && $net_salary < 1500) {
        return "Medium Salary";
    } else {
        return "Low Salary";
    }
}

// 8. Annual Salary Calculation 
function calculateAnnualSalary($net_salary, $months = 12)
{
    return $net_salary * $months;
}
