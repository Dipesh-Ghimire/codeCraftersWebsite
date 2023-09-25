<?php
  include "./loginsystem/subsystem/_dbconnect_futsal.php";
  $sql = "SELECT * FROM futsal_facilities  WHERE 1;";
  $result = mysqli_query($conn,$sql) or die("Query Failed");
?>
<!-- Cards -->
<div class="card-section">
      <div class="cs-heading">
        <h2>Our Futsal Partners</h2>
        <a href="#" class="secondary-button"
          >see more examples <i class="fa-sharp fa-solid fa-right-long"></i
        ></a>
      </div>
      <div class="card-grid">
        <?php
        if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){
            $sql2 = "SELECT image_url FROM `futsal_images` WHERE futsal_id =".$row['futsal_id'];
            $result2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($result2);
            if(mysqli_num_rows($result2)!=1){
              $row2['image_url']="IMG-65102003eeb1d2.74902540.jpg";
            }
        ?>
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img src="components/uploads/<?=$row2['image_url']?>" alt="Image Not Available" />
          </div>

          <div class="card-body">
            <div class="body-header flex">
              <a class="c-white" href="futsal_profile.php?id=<?=$row['futsal_id']?>"
                ><h3 class="futsal-name"><?php echo $row['futsal_name'];?></h3></a
              >
              <div><span class="tertiary-button">Rs.<?php echo $row['price_per_hour'];?>/-</span></div>
            </div>
            <div class="body-header-location">
              <i class="fa-solid fa-location-dot"></i>
              <span class="f-address">&nbsp;<?php echo $row['futsal_address'];?></span>
            </div>
            <?php echo $row['futsal_description'];?>
          </div>

          <div class="card-footer">
            <button class="card-btn">Book Now</button>
            <button class="card-btn card-btn-outline">See More</button>
          </div>
        </div>
        <?php }}?>
        <!-- <div class="card card-shadow">
          <div class="card-header card-image">
            <img src="./Futsal_images/futsalpic.jpg" alt="IMG" />
          </div>

          <div class="card-body">
            <div class="body-header flex">
              <a class="c-white" href="#"
                ><h3 class="futsal-name">DJ Futsal Facility</h3></a
              >
              <div><span class="tertiary-button">Rs.1999/-</span></div>
            </div>
            <div class="body-header-location">
              <i class="fa-solid fa-location-dot"></i>
              <span class="f-address">&nbsp;Thamel, Kathmandu</span>
            </div>
            Whether you're a seasoned football pro or just starting out, our
            futsal center offers a fun and engaging way to enjoy the beautiful
            game indoors.
          </div>

          <div class="card-footer">
            <button class="card-btn">Book Now</button>
            <button class="card-btn card-btn-outline">See More</button>
          </div>
        </div>
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img
              src="./Futsal_images/marsha-dhita-MTJg6XhoJCQ-unsplash.jpg"
              alt="IMG"
            />
          </div>

          <div class="card-body">
            <div class="body-header flex">
              <a class="c-white" href="#"
                ><h3 class="futsal-name">DJ Futsal Facility</h3></a
              >
              <div><span class="tertiary-button">Rs.1999/-</span></div>
            </div>
            <div class="body-header-location">
              <i class="fa-solid fa-location-dot"></i>
              <span class="f-address">&nbsp;Thamel, Kathmandu</span>
            </div>
            Whether you're a seasoned football pro or just starting out, our
            futsal center offers a fun and engaging way to enjoy the beautiful
            game indoors.
          </div>

          <div class="card-footer">
            <button class="card-btn">Book Now</button>
            <button class="card-btn card-btn-outline">See More</button>
          </div>
        </div>
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img src="./Futsal_images/homepage.jpg" alt="IMG" />
          </div>

          <div class="card-body">
            <div class="body-header flex">
              <a class="c-white" href="#"
                ><h3 class="futsal-name">DJ Futsal Facility</h3></a
              >
              <div><span class="tertiary-button">Rs.1999/-</span></div>
            </div>
            <div class="body-header-location">
              <i class="fa-solid fa-location-dot"></i>
              <span class="f-address">&nbsp;Thamel, Kathmandu</span>
            </div>
            Whether you're a seasoned football pro or just starting out, our
            futsal center offers a fun and engaging way to enjoy the beautiful
            game indoors.
          </div>

          <div class="card-footer">
            <button class="card-btn">Book Now</button>
            <button class="card-btn card-btn-outline">See More</button>
          </div>
        </div>
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img src="./Futsal_images/night.jpg" alt="IMG" />
          </div>

          <div class="card-body">
            <div class="body-header flex">
              <a class="c-white" href="#"
                ><h3 class="futsal-name">DJ Futsal Facility</h3></a
              >
              <div><span class="tertiary-button">Rs.1999/-</span></div>
            </div>
            <div class="body-header-location">
              <i class="fa-solid fa-location-dot"></i>
              <span class="f-address">&nbsp;Thamel, Kathmandu</span>
            </div>
            Whether you're a seasoned football pro or just starting out, our
            futsal center offers a fun and engaging way to enjoy the beautiful
            game indoors.
          </div>

          <div class="card-footer">
            <button class="card-btn">Book Now</button>
            <button class="card-btn card-btn-outline">See More</button>
          </div>
        </div>
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img src="./Futsal_images/field.jpg" alt="IMG" />
          </div>

          <div class="card-body">
            <div class="body-header flex">
              <a class="c-white" href="#"
                ><h3 class="futsal-name">DJ Futsal Facility</h3></a
              >
              <div><span class="tertiary-button">Rs.1999/-</span></div>
            </div>
            <div class="body-header-location">
              <i class="fa-solid fa-location-dot"></i>
              <span class="f-address">&nbsp;Thamel, Kathmandu</span>
            </div>
            Whether you're a seasoned football pro or just starting out, our
            futsal center offers a fun and engaging way to enjoy the beautiful
            game indoors.
          </div>

          <div class="card-footer">
            <button class="card-btn">Book Now</button>
            <button class="card-btn card-btn-outline">See More</button>
          </div>
        </div> -->
      </div>
    </div>