<!DOCTYPE html>
<?php
    include "show-data.php";
?>    
<html>
<head>
    <title>Profile Page</title>

    <!-- Untuk responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!-- MENGHUBUNGKAN STYLE CSS -->    
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    
    
</head>
<body>

        <!-- MENAMPILKAN TOMBOL MENU -->
        <nav>
            <!-- Menu saat responsive -->
            <div class="menu-mobile">                
                <a href="#" onclick="showMenu()">Menu</a>
            </div>
            <ul id="menu">
                <li><a href="#">HOME</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">MY INVENTORY</a></li>
            </ul>
        </nav>
        <!-- END - MENAMPILKAN TOMBOL MENU -->

        <!-- MENAMPILKAN KOTAK PROFILE -->
        <section id="box-profile">

            <!-- MENAMPILKAN GAMBAR PROFILE -->
            <div class="img-profile">
                <div class="photo" style="background-image: url(assets/img/profile.jpg);"></div>
            </div>
            <!-- END- MENAMPILKAN GAMBAR PROFILE -->

            <!-- MENAMPILKAN NAMA, PEKERJAAN, DESCRIPTION -->
            <div class="description">
                <h1 id="pName"><?php echo $nama; ?></h1>
                <p id="pRole"><?php echo $role; ?></p>
                <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
                <a href="#" class="button border-blue">Resume</a>
            </div>
            <!-- END - MENAMPILKAN NAMA, PEKERJAAN, DESCRIPTION -->

            <!-- MENAMPILKAN DATA DATA PROFILE -->
            <div class="information">
                <div class="data">
                    <p class="field">Availability</p>
                    <p id="pAvailable" class="text-gray"><?php echo $availability; ?></p>
                </div>
                <div class="data">
                    <p class="field">Age</p>
                    <p id="pAge" class="text-gray"><?php echo $age; ?></p>
                </div>
                <div class="data">
                    <p class="field">Location</p>
                    <p id="pLocation" class="text-gray"><?php echo $location; ?></p>
                </div>
                <div class="data">
                    <p class="field">Years Experience</p>
                    <p id="pExperience" class="text-gray"><?php echo $experience; ?></p>
                </div>
                <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
                </div>
            </div>
            <!-- END - MENAMPILKAN DATA DATA PROFILE -->

        </section>
        <!-- END -MENAMPILKAN KOTAK PROFILE -->


        <!-- SECTION INPUT FORM -->
        <section id="input-form">
            <form method="#" action="#">
                <div class="form">
                    <label>Nama</label>
                    <input id="inpName" type="text" name="name">
                </div>
                <div class="form">
                    <label>Role</label>
                    <input id="inpRole" type="text" name="role">
                </div>
                <div class="form">
                    <label>Availability</label>
                    <input id="inpAvailability" type="text" name="availability">
                </div>
                <div class="form">
                    <label>Age</label>
                    <input id="inpAge" type="number" name="age">
                </div>
                <div class="form">
                    <label>Location</label>
                    <input id="inpLocation" type="text" name="location">
                </div>
                <div class="form">
                    <label>Years Experience</label>
                    <input id="inpYears" type="number" name="years">
                </div>
                <div class="form">
                    <label>Email</label>
                    <input id="inpEmail" type="email" name="email">
                </div>
                <div class="form">
                    <input onclick="simpanForm()" type="submit" name="submit" value="SUBMIT" class="bg-blue">
                </div>
            </form>
        </section>

        <script>
            var formMenu = document.getElementById("input-form");
            formMenu.style.display = "none";
            
            function editForm(){
                if(formMenu.style.display === "none"){
                    formMenu.style.display = "block";
                }else{
                    formMenu.style.display = "none";
                }

                var name = document.getElementById("pName").innerHTML;
                var role = document.getElementById("pRole").innerHTML;
                var available = document.getElementById("pAvailable").innerHTML;
                var age = document.getElementById("pAge").innerHTML;
                var location = document.getElementById("pLocation").innerHTML;
                var experience = document.getElementById("pExperience").innerHTML;
                var email = document.getElementById("pEmail").innerHTML;

                document.getElementById("inpName").value = name;
                document.getElementById("inpRole").value = role;
                document.getElementById("inpAvailability").value = available;
                document.getElementById("inpAge").value = age;
                document.getElementById("inpLocation").value = location;
                document.getElementById("inpYears").value = experience;
                document.getElementById("inpEmail").value = email;
            }
            
            function showMenu(){
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingtop = "0px";
                }else{
                    menu.style.display = "block";
                    box.style.paddingTop = "125px";
                }
            }
        </script>
    </body>
</html>