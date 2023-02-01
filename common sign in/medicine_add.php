<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="medicine_add.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Elsie&family=Raleway:wght@800&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    
<?php require_once('./header.php');
    require_once('./navigation.php'); ?>
    
    <div>
        <p class="add_med">Add Medicine</p>
    </div>
    <div class="bg">
        <form action="medicine_add_function.php" id="add-form" method="POST">
            <div class="row">
                <div class="col_1">
                    <label for="medicine_category" >Medicine category</label>
                </div>
                <div class="col_2">
                    <select name="medicine_category" id="medicine_category" onchange="selectChange()">
                        <option value="Medicine">Medicine</option>
                        <option value="Personal_Care">Personal Care</option>
                        <option value="Medical_Devices">Medical Devices</option>
                    </select>
                    <!-- <input type="text" id="medicine_category" name="medicine_category" placeholder="category of the medicine..."> -->
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <label for="medicine_name">Medicine name</label>
                </div>
                <div class="col_2">
                    <input type="text" id="medicine_name" name="medicine_name" placeholder="name of the medicine..." required>
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <label for="generic_name">Generic name</label>
                </div>

                

                <div class="col_2">
                    <select name="generic_name" id="generic_name">
                        <option id="m1" value="Heart">Heart</option>
                        <option id="m2" value="Diabetes">Diabetes</option>
                        <option id="m3" value="Infection">Infection</option>
                        <option id="m4" value="Gastro Infectional System">Gastro Infectional System</option>
                        <option id="m5" value="Muscle and Joint">Muscle and Joint</option>
                        <option id="p1" value="Nourishments" hidden>Nourishments</option>
                        <option id="p2" value="Accessories" hidden>Accessories</option>
                        <option id="p3" value="Skin Care" hidden>Skin Care</option>
                        <option id="p4" value="Women Personal Care" hidden>Women Personal Care</option>
                        <option id="p5" value="Oral Care" hidden>Oral Care</option>
                        <option id="d1" value="First Aid" hidden>First Aid</option>
                        <option id="d2" value="Health Devices" hidden>Health Devices</option>
                        <option id="d3" value="Supports" hidden>Supports</option>
                    </select>

                    <script>
                    function selectChange(){
                        const form = document.getElementById('add-form');
                        const medicine_category = form.elements['medicine_category'];
                        if(medicine_category.value == "Personal_Care")
                        {
                            var op1 = document.getElementById('m1');
                            op1.setAttribute("hidden", true); 
                            op1.removeAttribute("selected");
                            var op2 = document.getElementById('m2');
                            op2.setAttribute("hidden", true); 
                            var op3 = document.getElementById('m3');
                            op3.setAttribute("hidden", true); 
                            var op4 = document.getElementById('m4');
                            op4.setAttribute("hidden", true); 
                            var op5 = document.getElementById('m5');
                            op5.setAttribute("hidden", true); 
                            var op6 = document.getElementById('p1');
                            op6.removeAttribute("hidden");
                            op6.setAttribute("selected", true); 
                            var op7 = document.getElementById('p2');
                            op7.removeAttribute("hidden");
                            var op8 = document.getElementById('p3');
                            op8.removeAttribute("hidden");
                            var op9 = document.getElementById('p4');
                            op9.removeAttribute("hidden");
                            var op10 = document.getElementById('p5');
                            op10.removeAttribute("hidden");
                            var op11 = document.getElementById('d1');
                            op11.setAttribute("hidden", true);
                            op11.removeAttribute("selected");
                            var op12 = document.getElementById('d2');
                            op12.setAttribute("hidden", true);
                            var op13 = document.getElementById('d3');
                            op13.setAttribute("hidden", true);

                        }
                        if(medicine_category.value == "Medical_Devices")
                        {
                            var op1 = document.getElementById('m1');
                            op1.setAttribute("hidden", true); 
                            op1.removeAttribute("selected");
                            var op2 = document.getElementById('m2');
                            op2.setAttribute("hidden", true); 
                            var op3 = document.getElementById('m3');
                            op3.setAttribute("hidden", true); 
                            var op4 = document.getElementById('m4');
                            op4.setAttribute("hidden", true); 
                            var op5 = document.getElementById('m5');
                            op5.setAttribute("hidden", true); 
                            var op6 = document.getElementById('d1');
                            op6.removeAttribute("hidden");
                            op6.setAttribute("selected", true);
                            var op7 = document.getElementById('d2');
                            op7.removeAttribute("hidden");
                            var op8 = document.getElementById('d3');
                            op8.removeAttribute("hidden");
                            var op9 = document.getElementById('p1');
                            op9.setAttribute("hidden", true);
                            op9.removeAttribute("selected"); 
                            var op10 = document.getElementById('p2');
                            op10.setAttribute("hidden", true); 
                            var op11 = document.getElementById('p3');
                            op11.setAttribute("hidden", true); 
                            var op12 = document.getElementById('p4');
                            op12.setAttribute("hidden", true); 
                            var op13 = document.getElementById('p5');
                            op13.setAttribute("hidden", true); 

                        }

                        if(medicine_category.value == "Medicine")
                        {
                            var op1 = document.getElementById('m1');
                            op1.removeAttribute("hidden");
                            op1.setAttribute("selected", true);
                            var op2 = document.getElementById('m2');
                            op2.removeAttribute("hidden"); 
                            var op3 = document.getElementById('m3');
                            op3.removeAttribute("hidden");
                            var op4 = document.getElementById('m4');
                            op4.removeAttribute("hidden");
                            var op5 = document.getElementById('m5');
                            op5.removeAttribute("hidden"); 
                            var op6 = document.getElementById('d1');
                            op6.setAttribute("hidden", true); 
                            op6.removeAttribute("selected"); 
                            var op7 = document.getElementById('d2');
                            op7.setAttribute("hidden", true); 
                            var op8 = document.getElementById('d3');
                            op8.setAttribute("hidden", true); 
                            var op9 = document.getElementById('p1');
                            op9.setAttribute("hidden", true); 
                            op9.removeAttribute("selected");
                            var op10 = document.getElementById('p2');
                            op10.setAttribute("hidden", true); 
                            var op11 = document.getElementById('p3');
                            op11.setAttribute("hidden", true); 
                            var op12 = document.getElementById('p4');
                            op12.setAttribute("hidden", true); 
                            var op13 = document.getElementById('p5');
                            op13.setAttribute("hidden", true); 

                        }
                    }


                </script>
                    <!-- <input type="text" id="generic_name" name="generic_name" placeholder="Generic name of the medicine..."> -->
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <label for="D_O_E">Expiry Date</label>
                </div>
                <div class="col_2">
                    <input type="date" id="D_O_E" name="D_O_E" placeholder="Expiry date of the medicine..." required>
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <label for="quantity">Quantity</label>
                </div>
                <div class="col_2">
                    <input type="text" id="quantity" name="quantity" placeholder="quantity of the medicine..." required>
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <label for="quantity_measurement">Quantity Measurement</label>
                </div>
                <div class="col_2">
                    <input type="text" id="quantity_measurement" name="quantity_measurement" placeholder="quantity measurement of the medicine..." required>
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <label for="price">Price(LKR)</label>
                </div>
                <div class="col_2">
                    <input type="text" id="price" name="price" placeholder="Price of the medicine..."  required>
                </div>
            </div>
            <div class="row">
                <button class="submit-btn" type="submit">Add</button>
            
            </div>
            <div class="row">
                <button class="cancel-btn" type="reset">Cancel</button>
            </div>

        </form>

    </div>
</body>

</html>