<?php
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $linkedin = $_POST["linkedin"];
    $github = $_POST["github"];

    $design = $_POST["design"];


    $technicalSkill1 = $_POST["technicalSkill1"];
    $technicalSkill2 = $_POST["technicalSkill2"];
    $technicalSkill3 = $_POST["technicalSkill3"];
    $technicalSkill4 = $_POST["technicalSkill4"];

    $powerSkill1 = $_POST["powerSkill1"];
    $powerSkill2 = $_POST["powerSkill2"];
    $powerSkill3 = $_POST["powerSkill3"];
    $powerSkill4 = $_POST["powerSkill4"];

    $certification1 = $_POST["certification1"];
    $certification2 = $_POST["certification2"];
    $certification3  = $_POST["certification3"];

    $extraCurricularActivity1 = $_POST["extraCurricularActivity1"];
    $extraCurricularActivity2 = $_POST["extraCurricularActivity2"];
    $extraCurricularActivity3  = $_POST["extraCurricularActivity3"];

    $interest1 = $_POST["interest1"];
    $interest2 = $_POST["interest"];
    $interest3  = $_POST["interest3"];

    $project1 = $_POST["project1"];
    $project2 = $_POST["project2"];
    $project3 = $_POST["project3"];
    $project4 = $_POST["project4"];

    $achievement1 = $_POST["achievement1"];
    $achievement2 = $_POST["achievement2"];

    $education1 = $_POST["education1"];
    $institute1 = $_POST["institute1"];
    $period1 = $_POST["period1"];
    $cgp1 = $_POST["cgp1"];

    $education2 = $_POST["education2"];
    $institute2 = $_POST["institute2"];
    $period2 = $_POST["period2"];
    $cgp2 = $_POST["cgp2"];

    $education3 = $_POST["education3"];
    $institute3 = $_POST["institute3"];
    $period3 = $_POST["period3"];
    $cgp3 = $_POST["cgp3"];

    $education4 = $_POST["education4"];
    $institute4 = $_POST["institute4"];
    $period4 = $_POST["period4"];
    $cgp4 = $_POST["cgp4"];

    $projectPeriod1 = $_POST["projectPeriod1"];
    $domain1 = $_POST["domain1"];
    $specification1a = $_POST["specification1a"];
    $specification2a = $_POST["specification2a"];
    $specification3a = $_POST["specification3a"];

    $projectPeriod2 = $_POST["projectPeriod2"];
    $domain1 = $_POST["domain2"];
    $specification1b = $_POST["specification1b"];
    $specification2b = $_POST["specification2b"];
    $specification3b = $_POST["specification3b"];

    $projectPeriod3 = $_POST["projectPeriod3"];
    $domain1 = $_POST["domain3"];
    $specification1c = $_POST["specification1b"];
    $specification2c = $_POST["specification2b"];
    $specification3c = $_POST["specification3b"];

    $projectPeriod4 = $_POST["projectPeriod4"];
    $domain1 = $_POST["domain4"];
    $specification1d = $_POST["specification1d"];
    $specification2d = $_POST["specification2d"];
    $specification3d = $_POST["specification3d"];


    $technicalSkills = [$technicalSkill1,$technicalSkill2, $technicalSkill3, $technicalSkill4];
  
    $technicalSkills = array_filter($technicalSkills, function($skill) {
        return !empty($skill);
    });
    
    if (!empty($technicalSkills)) {
        $technicalSkill = '';
    
        foreach ($technicalSkills as $skill) {
            $technicalSkill .= '<li>' . $skill . '</li>';
        }
    }


    $powerSkills = [$powerSkill1, $powerSkill2, $powerSkill3, $powerSkill4];

$powerSkills = array_filter($powerSkills, function($skill1) {
    return !empty($skill1);
});

if (!empty($powerSkills)) {
    $powerSkill = '';

    foreach ($powerSkills as $skill1) {
        $powerSkill .= '<li>' . $skill1 . '</li>';
    }
}


$certifications = [$certification1, $certification2, $certification3];

$certifications = array_filter($certifications, function($cert) {
    return !empty($cert);
});

if (!empty($certifications)) {
    $certification = '';

    foreach ($certifications as $cert) {
        $certification .= '<li>' . $cert . '</li>';
    }
}


$extraCurricularActivities = [$extraCurricularActivity1, $extraCurricularActivity2, $extraCurricularActivity3];

$extraCurricularActivities = array_filter($extraCurricularActivities, function($activity) {
    return !empty($activity);
});

if (!empty($extraCurricularActivities)) {
    $extraCurricularActivity = '';

    foreach ($extraCurricularActivities as $activity) {
        $extraCurricularActivity .= '<li>' . $activity . '</li>';
    }
}


$interests = [$interest1, $interest2, $interest3];

$interests = array_filter($interests, function($interest) {
    return !empty($interest);
});

if (!empty($interests)) {
    $interest = '';

    foreach ($interests as $int) {
        $interest .= '<li>' . $int . '</li>';
    }
}


$projects = [
    [
        'project' => $project1,
        'projectPeriod' => $projectPeriod1,
        'domain' => $domain1,
        'specification1' => $specification1a,
        'specification2' => $specification2a,
        'specification3' => $specification3a
    ],
    [
        'project' => $project2,
        'projectPeriod' => $projectPeriod2,
        'domain' => $domain2,
        'specification1' => $specification1b,
        'specification2' => $specification2b,
        'specification3' => $specification3b
    ],
    [
        'project' => $project3,
        'projectPeriod' => $projectPeriod3,
        'domain' => $domain3,
        'specification1' => $specification1c,
        'specification2' => $specification2c,
        'specification3' => $specification3c
    ],
    [
        'project' => $project4,
        'projectPeriod' => $projectPeriod4,
        'domain' => $domain4,
        'specification1' => $specification1d,
        'specification2' => $specification2d,
        'specification3' => $specification3d
    ]
];

$projects = array_filter($projects, function($project) {
    return !empty($project['project']);
});

if (!empty($projects)) {
    $projectDetails = '';

   
foreach ($projects as $project) {
    $projectDetails .= '<li>';
    $projectDetails .= '<strong>' . $project['project'] . '</strong><br>';
    $projectDetails .= '<em>' . $project['projectPeriod'] . '</em><br>';
    $projectDetails .= '<em>Domain: ' . $project['domain'] . '</em><br>';
    $projectDetails .= '<ul>';
    $projectDetails .= '<li>' . $project['specification1'] . '</li>';
    $projectDetails .= '<li>' . $project['specification2'] . '</li>';
    $projectDetails .= '<li>' . $project['specification3'] . '</li>';
    $projectDetails .= '</ul>';
    $projectDetails .= '</li><br>';
}

}

$achievements = [$achievement1, $achievement2];

$achievements = array_filter($achievements, function($achievement) {
    return !empty($achievement);
});

if (!empty($achievements)) {
    $achievementDetails = '';

    foreach ($achievements as $achievement) {
        $achievementDetails .= '<li>' . $achievement . '</li>';
    }
}



$educations = [];

for ($i = 1; $i <= 4; $i++) {
    $educationKey = "education{$i}";
    $instituteKey = "institute{$i}";
    $periodKey = "period{$i}";
    $cgpKey = "cgp{$i}";

    if (!empty($_POST[$educationKey])) {
        $education = $_POST[$educationKey];
        $institute = $_POST[$instituteKey];
        $period = $_POST[$periodKey];
        $cgp = $_POST[$cgpKey];

        $educations[] = [
            'education' => $education,
            'institute' => $institute,
            'period' => $period,
            'cgp' => $cgp,
        ];
    }
}


foreach ($educations as $education) {
    $educationDetails .= '<li>';
    $educationDetails .=   $education['education'] . '<br>';
    $educationDetails .= $education['period'] . '<br>';
    $educationDetails .= $education['institute'] . '<br>';
    $educationDetails .= 'CGPA - ' . $education['cgp'] . '<br>';
    $educationDetails .= '</li>';
    $educationDetails .= '<br>';

}







    $uploadDir = "uplds/"; 
    $fileName = $_FILES["image"]["name"];
    $fileTmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($fileTmp, $uploadDir . $fileName);

    $resume = '
    <!DOCTYPE html>
    <html>
    <head>
        <title>' . $name . '</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body style="margin: 0px 110px;">
    
    <div class="header">
    <div>
        <div class="headDiv">
            <div style="display: flex; align-items: center;margin-left:40px;padding:5px 0px 5px 0px;">
                <img src="phone.png" width="30" class="image">
                <span>' . $phone . '</span>
            </div>
        </div>

        <div class="headDiv">
            <div style="display: flex; align-items: center;margin-left:40px;padding:5px 0px 5px 0px;">
                <img src="email.png" width="30" class="image">
                <span>' . $email . '</span>
            </div>
        </div>

        <div class="headDiv">
            <div style="display: flex; align-items: center;margin-left:40px;padding:5px 0px 5px 0px;;">
                <img src="linkedin.png" width="30" class="image">
                <span>' . $linkedin . '</span>
            </div>
        </div>

        <div class="headDiv">
            <div style="display: flex; align-items: center;margin-left:40px;padding:5px 0px 5px 0px;">
                <img src="github.png" width="30" class="image">
                <span>' . $github . '</span>
            </div>
        </div>

        <div class="headDiv">
            <div style="display: flex; align-items: center;;margin-left:40px;padding:5px 0px 5px 0px;">
                <img src="address.png" width="30" class="image">
                <span>' . $address . '</span>
            </div>
        </div>
    </div>
    <div >
    <h1 style="padding:10px 10px 5px 10px">'.$name.'</h1>
    <h3 style="padding:0px 10px 5px 10px">'.$design.'</h3>
</div>
<div class="header-content">
        <img src="' . $uploadDir . $fileName . '" height="175" width="140" class="image" style="float: right;margin-right:40px;border-radius:110px">
    </div>
</div>


    
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">SUMMARY-------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
            
            '.$summary.'
            
            
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">TECHNICAL SKILLS--------------------------------------------------------------------------------------------------------------------------------------------------</h4>

           

            
            ' . $technicalSkill . ' 
        

            
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">POWER SKILLS------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
            
            ' . $powerSkill . ' 

            
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">CERTIFICATIONS----------------------------------------------------------------------------------------------------------------------------------------------------</h4>
            ' . $certification . ' 

            
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">EXTRA CURRICULAR ACTIVITIES----------------------------------------------------------------------------------------------------------------------------------</h4>
            ' . $extraCurricularActivity . ' 


            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">INTERESTS-----------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
            ' . $interest . ' 



    
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">PROJECTS------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
            
                
                '.$projectDetails.'
            
        

            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">ACHIEVEMENTS------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
            '.$achievementDetails.'
            
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">EDUCATION-----------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
            
            '.$educationDetails.'
            
            <h4 style="color: rgb(205, 155, 38); font-family: Verdana, Geneva, Tahoma, sans-serif;">-------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>
                        
        </div>
<br>
<br>
<br>

  
</body>
    </html>
    ';
} 

?>
