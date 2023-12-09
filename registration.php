<!DOCTYPE html>
<html>
<head>
    <title>GDM Risk Assessment</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required><br><br>

        <label for="birthday">Birthday:</label>
        <input type="text" id="birthday" name="birthday" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="contact">Contact No:</label>
        <input type="text" id="contact" name="contact"><br><br>

        <label for="lmp">LMP:</label>
        <input type="text" id="lmp" name="lmp"><br><br>
        
        <label for="lmp">LMP:</label>
        <input type="text" id="2mp" name="lmp"><br><br>

        <label for="ldc">LDC:</label>
        <input type="text" id="ldc" name="ldc"><br><br>

        <label for="aog">AOG:</label>
        <input type="text" id="aog" name="aog"><br><br>

        <label for="gp">GP:</label>
        <input type="text" id="gp" name="gp"><br><br>

        <label>Family History of Diabetes:</label>
        <input type="checkbox" name="family_diabetes"><br><br>

        <label>History of GDM:</label>
        <input type="checkbox" name="history_gdm"><br><br>

        <label>History of macrosomic baby:</label>
        <input type="checkbox" name="history_macrosomic"><br><br>

        <label>Age of more than 25 years old:</label>
        <input type="checkbox" name="age_over_25"><br><br>

        <label>Diagnosis of polycystic ovarian syndrome (PCOS):</label>
        <input type="checkbox" name="pcos_diagnosis"><br><br>

        <label>Overweight or Obese currently and or prior to pregnancy:</label>
        <input type="checkbox" name="overweight_obese"><br><br>

        <label>Suspected polyhydramnios:</label>
        <input type="checkbox" name="suspected_polyhydramnios"><br><br>

        <label>Suspected macrosomia:</label>
        <input type="checkbox" name="suspected_macrosomia"><br><br>

        <label>Glucose in the urine:</label>
        <input type="checkbox" name="glucose_urine"><br><br>

        <label>Intake of drugs that may increase blood sugar:</label><br>
        <input type="checkbox" name="drugs_intake[]" value="Pills">Pills<br>
        <input type="checkbox" name="drugs_intake[]" value="Steroids">Steroids<br>
        <input type="checkbox" name="drugs_intake[]" value="Barbiturates">Barbiturates<br>
        <input type="checkbox" name="drugs_intake[]" value="Thiazide_Diuretics">Thiazide Diuretics<br><br>

        <label>If any of the factors above is present, the pregnancy is considered High Risk:</label>
        <br><br>

        <label>High Risk For immediate OGTT 75g:</label>
        <input type="checkbox" name="high_risk_ogtt"><br><br>

        <label>Low Risk For OGTT 75g on 24-28 weeks AOG:</label>
        <input type="checkbox" name="low_risk_ogtt"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>