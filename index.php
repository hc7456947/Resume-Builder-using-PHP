<!DOCTYPE html>
<html>
<head>
    <title>Resume Builder</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
        .input-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            /* flex:right; */
        }
        .input-container label {
            font-weight: bold;
        }
        .input-container input, .input-container textarea {
            width: 70%;
            padding: 5px;
            :right;
        }
        .required-field {
            color: red;
        }
    </style>
</head>
<body style="margin: 0px 40px; background-color: #280f81;">
    <h1 style="text-align: center; color: rgb(205, 155, 38);">Resume Builder</h1>

    <div class="main-content">
        <div class="left-content" style="flex: 50%">
            <form action="generate.php" method="POST" enctype="multipart/form-data">
            <div>
    <label>
        <input type="radio" name="template" value="template1" checked>
        <img src="template1.png" width="100" class="img1" style="transition: transform 0.2s; cursor: pointer;">
    </label>
    <label>
        <input type="radio" name="template" value="template2">
        <img src="template2.png" width="150" class="img1" style="transition: transform 0.2s; cursor: pointer;">
    </label>
</div>

                <br><br>

                <div class="input-container">
                    <label for="name">Name: <span class="required-field">*</span></label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="input-container">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image">
                </div>

                <div class="input-container">
                    <label for="design">Designation: <span class="required-field">*</span></label>
                    <input type="text" id="design" name ="design" required>
                </div>

                <div class="input-container">
                    <label for="email">Email: <span class="required-field">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-container">
                    <label for="phone">Phone: <span class="required-field">*</span></label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="input-container">
                    <label for="linkedin">LinkedIn: <span class="required-field">*</span></label>
                    <input type="linkedin" id="linkedin" name="linkedin" required>
                </div>

                <div class="input-container">
                    <label for="github">GitHub: <span class="required-field">*</span></label>
                    <input type="github" id="github" name="github" required>
                </div>

                <div class="input-container">
                    <label for="address">Address: <span class="required-field">*</span></label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="input-container">
                    <label for="summary">Summary: <span class="required-field">*</span></label>
                    <textarea id="summary" name="summary" rows="4"  style="width:70%"required></textarea>
                </div>

                <div class="input-container">
                    <label for="technicalSkill1">Technical Skill 1: <span class="required-field">*</span></label>
                    <input type="text" id="technicalSkill1" name="technicalSkill1" required>
                </div>

                <div class="input-container">
                    <label for="technicalSkill2">Technical Skill 2:</label>
                    <input type="text" id="technicalSkill2" name="technicalSkill2">
                </div>

                <div class="input-container">
                    <label for="technicalSkill3">Technical Skill 3:</label>
                    <input type="text" id="technicalSkill3" name="technicalSkill3">
                </div>

                <div class="input-container">
                    <label for="technicalSkill4">Technical Skill 4:</label>
                    <input type="text" id="technicalSkill4" name="technicalSkill4">
                </div>

                <div class="input-container">
                    <label for="powerSkill1">Power Skill 1: <span class="required-field">*</span></label>
                    <input type="text" id="powerSkill1" name="powerSkill1" required>
                </div>

                <div class="input-container">
                    <label for="powerSkill2">Power Skill 2:</label>
                    <input type="text" id="powerSkill2" name="powerSkill2">
                </div>

                <div class="input-container">
                    <label for="powerSkill3">Power Skill 3:</label>
                    <input type="text" id="powerSkill3" name="powerSkill3">
                </div>

                <div class="input-container">
                    <label for="powerSkill4">Power Skill 4:</label>
                    <input type="text" id="powerSkill4" name="powerSkill4">
                </div>

                <div class="input-container">
                    <label for="certification1">Certification 1: <span class="required-field">*</span></label>
                    <input type="text" id="certification1" name="certification1" required>
                </div>

                <div class="input-container">
                    <label for="certification2">Certification 2:</label>
                    <input type="text" id="certification2" name="certification2">
                </div>

                <div class="input-container">
                    <label for="certification3">Certification 3:</label>
                    <input type="text" id="certification3" name="certification3">
                </div>

                <div class="input-container">
                    <label for="extraCurricularActivity1">Extra Curricular Activity 1: <span class="required-field">*</span></label>
                    <input type="text" id="extraCurricularActivity1" name="extraCurricularActivity1" required>
                </div>

                <div class="input-container">
                    <label for="extraCurricularActivity2">Extra Curricular Activity 2:</label>
                    <input type="text" id="extraCurricularActivity2" name="extraCurricularActivity2">
                </div>

                <div class="input-container">
                    <label for="extraCurricularActivity3">Extra Curricular Activity 3:</label>
                    <input type="text" id="extraCurricularActivity3" name="extraCurricularActivity3">
                </div>

                <div class="input-container">
                    <label for="interest1">Interest 1: <span class="required-field">*</span></label>
                    <input type="text" id="interest1" name="interest1" required>
                </div>

                <div class="input-container">
                    <label for="interest2">Interest 2:</label>
                    <input type="text" id="interest2" name="interest2">
                </div>

                <div class="input-container">
                    <label for="interest3">Interest 3:</label>
                    <input type="text" id="interest3" name="interest3">
                </div>

                <div class="input-container">
                    <label for="achievement1">Achievement 1: <span class="required-field">*</span></label>
                    <input type="text" id="achievement1" name="achievement1" required>
                </div>

                <div class="input-container">
                    <label for="achievement2">Achievement 2:</label>
                    <input type="text" id="achievement2" name="achievement2">
                </div>
                <div class="input-container">
        <label for="project1">Project 1: <span class="required-field">*</span></label>
        <input type="text" id="project1" name="project1" required>
    </div>

    <div class="input-container">
        <label for="projectPeriod1">Project Period: <span class="required-field">*</span></label>
        <input type="text" id="projectPeriod1" name="projectPeriod1" required>
    </div>

    <div class="input-container">
        <label for="domain1">Domain: <span class="required-field">*</span></label>
        <input type="text" id="domain1" name="domain1" required>
    </div>

    <div class="input-container">
        <label for="specification1a">Project Specification 1: <span class="required-field">*</span></label>
        <input type="text" id="specification1a" name="specification1a" required>
    </div>

   
</div>
<div class="right-content" style="flex: 50%;">
<div class="input-container">
        <label for="specification2a">Project Specification 2:</label>
        <input type="text" id="specification2a" name="specification2a">
    </div>

    <div class="input-container">
        <label for="specification3a">Project Specification 3:</label>
        <input type="text" id="specification3a" name="specification3a">
    </div>
    <div class="input-container">
        <label for="project2">Project 2:</label>
        <input type="text" id="project2" name="project2">
    </div>

    <div class="input-container">
        <label for="projectPeriod2">Project Period:</label>
        <input type="text" id="projectPeriod2" name="projectPeriod2">
    </div>

    <div class="input-container">
        <label for="domain2">Domain:</label>
        <input type="text" id="domain2" name="domain2">
    </div>

    <div class="input-container">
        <label for="specification1b">Project Specification 1:</label>
        <input type="text" id="specification1b" name="specification1b">
    </div>

    <div class="input-container">
        <label for="specification2b">Project Specification 2:</label>
        <input type="text" id="specification2b" name="specification2b">
    </div>

    <div class="input-container">
        <label for="specification3b">Project Specification 3:</label>
        <input type="text" id="specification3b" name="specification3b">
    </div>

    <!-- Project 3 -->
    <div class="input-container">
        <label for="project3">Project 3:</label>
        <input type="text" id="project3" name="project3">
    </div>

    <div class="input-container">
        <label for="projectPeriod3">Project Period:</label>
        <input type="text" id="projectPeriod3" name="projectPeriod3">
    </div>

    <div class "input-container">
        <label for="domain3">Domain:</label>
        <input type="text" id="domain3" name="domain3">
    </div>

    <div class="input-container">
        <label for="specification1c">Project Specification 1:</label>
        <input type="text" id="specification1c" name="specification1c">
    </div>

    <div class="input-container">
        <label for="specification2c">Project Specification 2:</label>
        <input type="text" id="specification2c" name="specification2c">
    </div>

    <div class="input-container">
        <label for="specification3c">Project Specification 3:</label>
        <input type="text" id="specification3c" name="specification3c">
    </div>

    <!-- Project 4 -->
    <div class="input-container">
        <label for="project4">Project 4:</label>
        <input type="text" id="project4" name="project4">
    </div>

    <div class="input-container">
        <label for="projectPeriod4">Project Period:</label>
        <input type="text" id="projectPeriod4" name="projectPeriod4">
    </div>

    <div class="input-container">
        <label for="domain4">Domain:</label>
        <input type="text" id="domain4" name="domain4">
    </div>

    <div class="input-container">
        <label for="specification1d">Project Specification 1:</label>
        <input type="text" id="specification1d" name="specification1d">
    </div>

    <div class="input-container">
        <label for="specification2d">Project Specification 2:</label>
        <input type="text" id="specification2d" name="specification2d">
    </div>

    <div class="input-container">
        <label for="specification3d">Project Specification 3:</label>
        <input type="text" id="specification3d" name="specification3d">
    </div>

    
    <div class="input-container">
        <label for="education1">Education 1: <span class="required-field">*</span></label>
        <input type="text" id="education1" name="education1" required>
    </div>

    <div class="input-container">
        <label for="institute1">Institute: <span class="required-field">*</span></label>
        <input type="text" id="institute1" name="institute1" required>
    </div>

    <div class="input-container">
        <label for="period1">Period: <span class="required-field">*</span></label>
        <input type="text" id="period1" name="period1" required>
    </div>

    <div class="input-container">
        <label for="cgp1">CGPA: <span class="required-field">*</span></label>
        <input type="text" id="cgp1" name="cgp1" required>
    </div>

    <!-- Education 2 -->
    <div class="input-container">
        <label for="education2">Education 2:</label>
        <input type="text" id="education2" name="education2">
    </div>

    <div class="input-container">
        <label for="institute2">Institute:</label>
        <input type="text" id="institute2" name="institute2">
    </div>

    <div class="input-container">
        <label for="period2">Period:</label>
        <input type="text" id="period2" name="period2">
    </div>

    <div class="input-container">
        <label for="cgp2">CGPA:</label>
        <input type="text" id="cgp2" name="cgp2">
    </div>

   
<div class="input-container">
    <label for="education3">Education 3:</label>
    <input type="text" id="education3" name="education3">
</div>

<div class="input-container">
    <label for="institute3">Institute:</label>
    <input type="text" id="institute3" name="institute3">
</div>

<div class="input-container">
    <label for="period3">Period:</label>
    <input type="text" id="period3" name="period3">
</div>

<div class="input-container">
    <label for="cgp3">CGPA:</label>
    <input type="text" id="cgp3" name="cgp3">
</div>

<div class="input-container">
    <label for="education4">Education 4:</label>
    <input type="text" id="education4" name="education4">
</div>

<div class="input-container">
    <label for="institute4">Institute:</label>
    <input type="text" id="institute4" name="institute4">
</div>

<div class="input-container">
    <label for="period4">Period:</label>
    <input type="text" id="period4" name="period4">
</div>

<div class="input-container">
    <label for="cgp4">CGPA:</label>
    <input type="text" id="cgp4" name="cgp4">
</div>

</div>
</div>

   


</div>
        

        <input type="submit" value="Generate Resume" style=" background-color: #000; color: #fff; font-size: 18px; cursor: pointer;">
    </form>
</body>
</html>

