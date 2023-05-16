
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        <!-- Render All Elements Normally -->
        <link rel="stylesheet" href="css/normalize.css" />
        <!-- Font Awesome Library -->
        <link rel="stylesheet" href="css/all.min.css" />
        <!-- Main Template CSS File -->
        <link rel="stylesheet" href="css/checkout.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <title>Checkout</title>
    </head>
    <body>
      <?php include("inc/header.php")?>
         <div class="container">
      <div class="con">
        <form >
        <div class="box1">
          <h2 class="title">Checkout</h2>
          <!-- start info -->
          <div class="info">
            <h3>Contact Information</h3>

            <p class="label">E-mail</p>

            <div class="input-box">
              <input
                type="text"
                name="email"
                placeholder="Enter Your Email .. " 
                required
              />
              <i class="fa-regular fa-envelope"></i>
            </div>

            <p class="label">Phone</p>

            <div class="input-box">
              <input
                type="text"
                name="phone"
                placeholder="Enter Your Phone .. "
                required 
              />
              <i class="fa-solid fa-phone"></i>
            </div>
          </div>
          <!-- end info -->

          <div class="shipping">
            <h3>Shipping address</h3>

            <p class="label">Full name</p>

            <div class="input-box">
              <input
                type="text"
                name="name"
                placeholder="Enter Your Fullname .. "
                required
              
              />
              <i class="fa-solid fa-user"></i>
            </div>

            <p class="label">Address</p>

            <div class="input-box">
              <input
                type="text"
                name="address"
                placeholder="Your Address .. "
                   required
              />
              <i class="fa-solid fa-house"></i>
            </div>

            <p class="label">City</p>

            <div class="input-box" >
              <select>
                <option value="Egypt">Egypt</option>
                <option value="Morocco">Morocco</option>
                <option value="Syria">Syria</option>
                <option value="Palestine">Palestine</option>
                <option value="Algeria">Algeria</option>
                <option value="Tunisia">Tunisia</option>
              </select>
  
              <i class="fa-solid fa-city"></i>
            </div>
            <!-- start last  -->
            <div class="last">
              <div class="separate s1">
                <p class="label">Country</p>
                <div class="input-box">
                  <input
                    type="text"
                    name="country"
                    placeholder="Your Country .. "
                       required
                  />
                  <i class="fa-solid fa-earth-americas"></i>
                </div>
              </div>

              <div class="separate">
                <p class="label">Postal code</p>

                <div class="input-box">
                  <input
                    type="text"
                    name="code"
                    placeholder="Your Postal Code .. "

                  />
                  <i class="fa-solid fa-envelopes-bulk"></i>
                </div>
              </div>
            </div>
            <!-- end last  -->

            <!--  Save this information  -->
           
            <input type="checkbox" name="check" id="check" />
            <label for="check"> Save this information for next time</label>
          
           <input class="btn" type="submit" value="send">
          
          </div>
        </div>
      </div>
      </form>
    </div>
    </body>