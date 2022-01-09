<?php 
 
 require_once('common.php');
 $commons = new Common;
 
// Fetch records from database 

$results = $commons->getAllRow("SELECT employee.id,employee.employee_id,employee.employee_name,employee.employee_email,company.company_name,employee.department,employee.employee_address FROM employee INNER JOIN company ON employee.company=company.company_id ORDER BY employee.id DESC");
 
if($results > 0){ 
    $delimiter = ","; 
    $filename = "data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('StaffID', 'Name', 'Email', 'Company', 'Department', 'Address'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    foreach ($results as $key => $result):
        $lineData = array($result['employee_id'], $result['employee_name'], $result['employee_email'], $result['company_name'], $result['department'], $result['employee_address']); 
        fputcsv($f, $lineData, $delimiter); 
    endforeach;
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>