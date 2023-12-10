<?php
session_start();
if (isset($_SESSION["username"])) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Document Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon and Styles -->
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="styles.css">
    
    <!-- Page Title -->
    <title>GDM RiskWatch - Registration</title>
</head>
<body>
    <header class="fcon align-center justify-between animate fade-down">
        <section class="fcon align-center big-gap">
            <img alt="logo" src="logo.png" id="header-logo"/>
            <h1>GDM RiskWatch</h1>
        </section>
        <section id="boom">
            <?php
                if (isset($_GET['message'])) {
                    echo '<div class="badges"><p class="green">'. $_GET['message'] .'</div></p>';
                }
            ?>
        </section>
        <section>
            <a id="logout" style="text-decoration: none;" class="button" href="logout.php">Logout</a>
        </section>
    </header>
    <main class="fcon center">
        <article id="gdm" class="animate fade-up">
            <section>
                <h2>Gestational Diabetes Mellitus (GDM)</h2>
                <h3>Risk Assessment</h3>
            </section>
            <form action="process.php" method="POST">
                <section id="textboxes">
                    <section>
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="input" placeholder="e.g. John Doe" required>
                        </div>
                        <section>
                            <div>
                                <label for="age">Age:</label>
                                <input type="number" id="age" name="age" class="input" min="0" max="150" placeholder="e.g. 18" required>
                            </div>
                            <div>
                                <label for="birthday">Birthday:</label>
                                <input type="date" id="birthday" name="birthday" class="input" placeholder="Birthday" required>
                            </div>
                        </section>
                    </section>
                    <section>
                        <div>
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" class="input" placeholder="House No., Street, Baranggay, City, Province" required>
                        </div>
                        <div>
                            <label for="contact">Contact Number:</label>
                            <input type="tel" id="contact" name="contact" class="input" pattern="[0-9]{11}" placeholder="e.g. 09123456789" required>
                        </div>
                    </section>
                    <section>
                        <div>
                            <label for="lmp">LMP:</label>
                            <input type="text" id="lmp" name="lmp" class="input" placeholder="LMP" required>
                        </div>
                        <div>
                            <label for="ldc">LDC:</label>
                            <input type="text" id="ldc" name="ldc" class="input" placeholder="LDC" required>
                        </div>
                    </section>
                    <section>
                        <div>
                            <label for="aog">AOG:</label>
                            <input type="text" id="aog" name="aog" class="input" placeholder="AOG" required>
                        </div>
                        <div>
                            <label for="gp">GP:</label>
                            <input type="text" id="gp" name="gp" class="input" placeholder="GP" required>
                        </div>
                    </section>
                </section>
                <fieldset>
                    <legend style="margin: 10px;">Factors</legend>
                    <section id="checkboxes" class="fcon">
                    <section>
                        <div class="checkbox-wrapper">
                            <input id="factor1" name="factor1" type="checkbox" value="YES">
                            <label class="terms-label" for="factor1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">1. Family History of Diabetes</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor2" name="factor2" type="checkbox" value="YES">
                            <label class="terms-label" for="factor2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">2. History of GDM</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor3" name="factor3" type="checkbox" value="YES">
                            <label class="terms-label" for="factor3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">3. History of Macrosomic Baby</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor4" name="factor4" type="checkbox" value="YES">
                            <label class="terms-label" for="factor4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">4. Age of More Than 25 Years Old</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor5" name="factor5" type="checkbox" value="YES">
                            <label class="terms-label" for="factor5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">5. Diagnosis of Polycystic Ovarian Syndrome (PCOS)</span>
                            </label>
                        </div>
                    </section>
                    <section>
                    <div class="checkbox-wrapper">
                            <input id="factor6" name="factor6" type="checkbox" value="YES">
                            <label class="terms-label" for="factor6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">6. Overweight or Obese currently and or prior to Pregnancy</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor7" name="factor7" type="checkbox" value="YES">
                            <label class="terms-label" for="factor7">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">7. Suspected Polyhydramnios</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor8" name="factor8" type="checkbox" value="YES">
                            <label class="terms-label" for="factor8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">8. Suspected Macrosomia</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor9" name="factor9" type="checkbox" value="YES">
                            <label class="terms-label" for="factor9">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">9. Glucose in the Urine</span>
                            </label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="factor10" name="factor10" type="checkbox" value="YES">
                            <label class="terms-label" for="factor10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box" height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                                </svg>
                                <span class="label-text">10. Intake of drugs that may increase blood sugar<br/>(Pills, Steroids, Barbiturates or Thiazide Diuretics)</span>
                            </label>
                        </div>
                    </section>
                </section>
                <label><i>If any of the factors above is present the pregnancy is considered High Risk</i></label>
                </fieldset>
                <hr/>
                <section id="final" class="fcon justify-between">
                    <section>
                        <h3>Risk Assessment:</h3>
                        <section>
                            <div>
                                <input type="radio" id="high" name="risk" value="HIGH" required>
                                <label for="high">High Risk For Immediate OGTT 75g</label>
                            </div>
                            <div>
                                <input type="radio" id="low" name="risk" value="LOW" required>
                                <label for="low">Low Risk For OGTT 75g on 24-28 weeks AOG</label>
                            </div>
                        </section>
                    </section>
                    <section>
                        <label for="asses">Assessed by:</label>
                        <input type="text" id="asses" name="asses" class="input" placeholder="Name" required>
                    </section>
                    <section>
                        <input class="btn" type="submit" name="submit" value="Submit"/>
                    </section>
                </section>
            </form>
        </article>
    </main>
    <footer>
        <p>&copy; GDM RiskWatch 2023 | Programmed by: | BIT34</p>
    </footer>
</body>
</html>
<?php
}
else {
    header("Location: index.php?error=Session Expired!");
    exit();
}
?>