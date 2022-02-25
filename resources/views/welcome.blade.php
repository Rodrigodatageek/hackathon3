<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>St. Hector's Veterinary Clinic</title>
    <link rel="stylesheet" href="../style.css">
    
</head>
<body>
    <form action="/animals/search" method="get">
        <div class="form">
        <div class="title">Welcome</div>
        <div class="subtitle">Pet Clinic</div>
        <div class="input-container ic1">
          <input name='owner' id="owner" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="owner" class="placeholder">Search by Owner</label>
        </div>
        <div class="input-container ic2">
          <input name="pet" id="pet" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="pet" class="placeholder">Search by Pet</label>
        </div>
        <div class="input-container ic2">
        <input name="allpets" id="allpets" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="allpets" class="placeholder">List all pets</>
        </div>
        <button type="text" class="submit">submit</button>
      </div>
    </form>

    <div class="input-container ic2">
      
      <div class="cut cut-short">
      <a href="/animals/index">List all of the animals</a>
    </div>
    </div>

    

</body>
</html>