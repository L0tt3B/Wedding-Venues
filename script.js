
    async function getResults() {
        let date = form.elements["date"].value;
        let partySize = form.elements["partySize"].value;
        let cateringGrade = form.elements["cateringGrade"].value;
      
        //sql query
        fetch(
          "sqlquery.php?date=" +
            date +
            "&partySize=" +
            partySize +
            "&cateringGrade=" +
            cateringGrade
        )
          .then((res) => res.json())
          .then((data) => makeCards(data, date, partySize))
          .catch((error) => console.log(error));
      }
      
      //event listener for submit
      const form = document.getElementById("infoForm");
      form.addEventListener("submit", function (event) {
        event.preventDefault(); //do not refresh page
        getResults();
      });
      
      //function for making result venue cards
      function makeCards(venues, date, partySize) {
        document.getElementById("results").innerHTML = ""; //clear previous results
      
        //if there are no results
        if (venues.length == 0) {
          document.getElementById("results").innerHTML = "No results";
          return;
        }
      
        //loop through every venue
        for (let i = 0; i < venues.length; i++) {
          let venue = venues[i];
      
          const name = venue.name;
          let licensed;
          if (venue.licensed == "0") {
            licensed = "No";
          } else {
            licensed = "Yes";
          }
          const weekdayPrice = venue.weekday_price;
          const weekendPrice = venue.weekend_price;
          const totalBookings = venue.total_bookings;
          const dayMap = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
          const day = dayMap[new Date(date).getDay()];
          let price;
          if (new Date(date).getDay() == 6 || new Date(date).getDay() == 0) {
            //if day is saturday (6) or sunday (0)
            price = weekendPrice;
          } else {
            price = weekdayPrice;
          }

          const total =
            parseInt(price) + parseInt(venue.catering_cost) * parseInt(partySize);
          let picture;
          let stars;
          const venuesPictures = [
            "https://jakeandgenessa.com/wp-content/uploads/2020/10/lagos-dos-cisnes.jpg",
            "https://antiguafabricadeharinas.com/wp-content/uploads/2018/05/fincaparabodasenmadrid7.jpg",
            "https://s.yimg.com/ny/api/res/1.2/jQAtmkdMkgyKrimPuAqStg--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyNg--/https://s.yimg.com/uu/api/res/1.2/5Znd2h981N5U3cG7SO0BaQ--~B/aD00NjY7dz03MDA7YXBwaWQ9eXRhY2h5b24-/http://media.zenfs.com/en_SG/News/jackposttravel/3tw5vf2xwwe8gk4co8c4k0gs0.jpg",
            "https://www.flightcentre.ca/blog/wp-content/uploads/2021/07/fc_blog_beach_wedding_800x450.jpg",
            "https://www.infinity-weddingsandevents.com/wp-content/uploads/2020/09/romantic-castle-garden.jpg",
            "https://www.uniquevenuesoflondon.co.uk/sites/default/files/cover/White%20Tower%20medieval%20dinner%202.JPG",
            "https://bridebook.imgix.net/weddingsuppliers/venue/eenXK64k8R/SideView.jpg?dpr=1&auto=format%2Ccompress%2Cenhance&fm=pjpg&crop=faces&fit=crop&w=820&h=540",
            "https://i0.wp.com/www.theweddingvowsg.com/wp-content/uploads/2020/04/Burj-Al-Arab-Jumeirah-wedding-venues-dubai.jpg?fit=980%2C653&ssl=1",
            "https://www.happybaliwedding.com/wp-content/uploads/2020/05/ubud-forest-theme-wedding-6.jpg",
            "https://i2.wp.com/www.theweddingvowsg.com/wp-content/uploads/2020/04/dwtc-wedding-venues-dubai.jpg?resize=960%2C640&ssl=1",
          ];
      
          if (name == "Central Plaza") {
            picture = venuesPictures[0];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star-o' style='padding-right: 2px;'></i>";
          } else if (name == "Pacific Towers Hotel") {
            picture = venuesPictures[1];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star-half-o' style='padding-right: 2px;'></i>";
          } else if (name == "Sky Center Complex") {
            picture = venuesPictures[2];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star-o' style='padding-right: 2px;'></i>";
          } else if (name == "Sea View Tavern") {
            picture = venuesPictures[3];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star-half-o' style='padding-right: 2px;'></i><i class='fa fa-star-o' style='padding-right: 2px;'></i>";
          } else if (name == "Ashby Castle") {
            picture = venuesPictures[4];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i>";
          } else if (name == "Fawlty Towers") {
            picture = venuesPictures[5];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star-o' style='padding-right: 2px;'></i><i class='fa fa-star-o' style='padding-right: 2px;'></i>";
          } else if (name == "Hilltop Mansion") {
            picture = venuesPictures[6];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star-half-o' style='padding-right: 2px;'></i>";
          } else if (name == "Haslegrave Hotel") {
            picture = venuesPictures[7];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i>";
          } else if (name == "Forest Inn") {
            picture = venuesPictures[8];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star-o' style='padding-right: 2px;'></i>";
          } else {
            picture = venuesPictures[9];
            stars =
              "<i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i><i class='fa fa-star' style='padding-right: 2px;'></i>";
          }
      
          //make the card
          let venueCard = document.createElement("div");
          venueCard.className = "card col col-3 mb-2";
          venueCard.style = "width: 18rem; padding-top: 10px;";
          venueCard.innerHTML = `
                              <img src='${picture}' class='card-img-top' style='width: 280px; height: 180px; padding-right: 20px;' alt='Wedding Picture'>
                              <div class='card-body'>
                                  <h5 class='card-title'>${venue.name}</h5>
                                  <p class='card-text' style='padding-bottom: 0px; color: #646464;'>Capacity: ${venue.capacity} <br />
                                  Weekend Venue Price: £${weekendPrice} <br />
                                  Weekday Venue Price: £${weekdayPrice} <br />
                                  Day: ${day}<br />
                                  Catering Cost Per Person: £${venue.catering_cost} <br />
                                  Total: £${total} <br />
                                  Number of Bookings: ${totalBookings} <br />
                                  Licensed: ${licensed}
                                  </p
                                  <p>${stars}</p>
                                  <a href='#' class='btn btn-primary'>Select Venue</a>
                              </div>`;
      
          //add card to the results div
          document.getElementById("results").appendChild(venueCard);
        }
      }
    