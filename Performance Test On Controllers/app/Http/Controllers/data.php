<?php
$names = [
    'Arafat',
    'Tariq',
    'Zahid',
    'Rashid',
    'Sadia',
    'Faizan',
    'Sami',
    'Junaid',
    'Noor',
    'Hafiz',
    'Imran',
    'Rahman',
    'Salma',
    'Zain',
    'Ranya',
    'Mustafa',
    'Aysha',
    'Fahim',
    'Mariam',
    'Arif',
    'Khadija',
    'Reza',
    'Shamim',
    'Samiya',
    'Iqbal',
    'Sumaiya',
    'Alam',
    'Aziz',
    'Nusrat',
    'Hassan',
    'Khalid',
    'Sara',
    'Fahima',
    'Omar',
    'Sabrina',
    'Furqan',
    'Asad',
    'Tasnim',
    'Amin',
    'Farhana',
    'Amina',
    'Zubair',
    'Hossain',
    'Sakib',
    'Tawhid',
    'Rifat',
    'Lubna',
    'Lina',
    'Rashida',
    'Salman'
];

$remarks = ['Excellent', 'Very Good', 'Good', 'Satisfactory', 'Needs Improvement', 'Outstanding', 'Needs Significant Improvement', 'Below Average'];
$locations = [
    'Dhaka',
    'Chittagong',
    'Rajshahi',
    'Khulna',
    'Sylhet',
    'Barisal',
    'Rangpur',
    'Mymensingh',
    'Comilla',
    'Bogura',
    'Narsingdi',
    'Tangail',
    'Feni',
    'Jessore',
    'Narail',
    'Noakhali',
    'Narayanganj',
    'Brahmanbaria',
    'Manikganj',
    'Pabna',
    'Shariatpur',
    'Madaripur',
    'Jamuna',
    'Dinajpur',
    'Kurigram',
    'Moulvibazar',
    'Meherpur',
    'Jhenaidah',
    'Khagrachari',
    'Cox\'s Bazar'
];

$genders = ['Male', 'Female'];
$status = ['Active', 'Inactive'];
$subjects = [
    'Mathematics',
    'Physics',
    'Chemistry',
    'Biology',
    'Computer Science',
    'Electrical Engineering',
    'Mechanical Engineering',
    'Civil Engineering',
    'Architecture',
    'Economics',
    'Psychology',
    'Philosophy',
    'Sociology',
    'Business Administration',
    'Political Science',
    'Law',
    'Linguistics',
    'Environmental Science',
    'International Relations',
    'Statistics'
];

$grades = ['A', 'A-', 'B+', 'B', 'C+', 'C', 'D+', 'D'];

$data = [];
for ($i = 0; $i < 1500; $i++) {
    $name = $names[array_rand($names)];
    $score = rand(60, 100); // Score between 60 and 100
    $age = rand(18, 25); // Age between 18 and 25
    $gender = $genders[array_rand($genders)];
    $location = $locations[array_rand($locations)];
    $userStatus = $status[array_rand($status)];
    $subject = $subjects[array_rand($subjects)];
    $grade = $grades[array_rand($grades)];
    $remark = $remarks[array_rand($remarks)];

    $data[] = [
        'name' => $name,
        'score' => $score,
        'age' => $age,
        'gender' => $gender,
        'location' => $location,
        'subject' => $subject,
        'grade' => $grade,
        'remarks' => $remark,
        'status' => $userStatus
    ];
}

return [
    'status' => 'success',
    'results' => $data
];
