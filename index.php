
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Data Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf3ff;
            color: #003366;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .container {
            background: white;
            max-width: 550px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 51, 102, 0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type=text],
        input[type=url],
        input[type=tel],
        select,
        textarea,
        input[type=file] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #003366;
            border-radius: 5px;
        }
        textarea {
            resize: none;
            height: 80px;
        }
        .radio-group, .checkbox-group {
            margin-bottom: 15px;
        }
        .radio-group label, .checkbox-group label {
            font-weight: normal;
            margin-right: 15px;
        }
        input[type=submit] {
            background-color: #003366;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
            font-size: 16px;
        }
        input[type=submit]:hover {
            background-color: #0055cc;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mark Santos Form</h1>
    </header>

    <div class="container">
        <h2>Enter Your Information</h2>
        <form action="home.php" method="POST" enctype="multipart/form-data">
            <label>First Name:</label>
            <input type="text" name="fname" required>

            <label>Middle Name:</label>
            <input type="text" name="mname">

            <label>Last Name:</label>
            <input type="text" name="lname" required>

            <label>Age:</label>
           <label for="age">Select Age:</label>
<select id="age" name="age" required>
  <option value="">-- Select Age --</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  <option value="32">32</option>
  <option value="33">33</option>
  <option value="34">34</option>
  <option value="35">35</option>
  <option value="36">36</option>
  <option value="37">37</option>
  <option value="38">38</option>
  <option value="39">39</option>
  <option value="40">40</option>
  <option value="41">41</option>
  <option value="42">42</option>
  <option value="43">43</option>
  <option value="44">44</option>
  <option value="45">45</option>
  <option value="46">46</option>
  <option value="47">47</option>
  <option value="48">48</option>
  <option value="49">49</option>
  <option value="50">50</option>
  <option value="51">51</option>
  <option value="52">52</option>
  <option value="53">53</option>
  <option value="54">54</option>
  <option value="55">55</option>
  <option value="56">56</option>
  <option value="57">57</option>
  <option value="58">58</option>
  <option value="59">59</option>
  <option value="60">60</option>
</select>

            <div class="radio-group">
                <label>Sex:</label><br>
                <input type="radio" name="sex" value="Male" required> Male
                <input type="radio" name="sex" value="Female" required> Female
            </div>

            <div class="checkbox-group">
                <label>Hobbies:</label><br>
                <input type="checkbox" name="hobbies[]" value="Reading"> Reading
                <br>
                <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
                <br>
                <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
                <br>
                <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking
                <br>
                <input type="checkbox" name="hobbies[]" value="Music"> Music
                <br>
<input type="checkbox" name="hobbies[]" value="Basketball"> Basketball 
<br>
<input type="checkbox" name="hobbies[]" value="Motorcycle"> Motorcycle 

            </div>

            <label>Bio:</label>
            <textarea name="bio" placeholder="Write something about yourself..."></textarea>

            <label>Facebook Link:</label>
            <input type="url" name="facebook" placeholder="https://facebook.com/yourprofile">

            <label>Contact Number:</label>
            <input type="tel" name="contact" placeholder="e.g. 09123456789">

            <label>Upload Picture:</label>
            <input type="file" name="picture" accept="image/*" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>