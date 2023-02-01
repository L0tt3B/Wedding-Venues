<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Amour De Ma Vie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>  
    <script>
    </script>
    <style>
    * {
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body>
    <h1 class="center">&#9884; L'Amour De Ma Vie &#9884;</h1>
    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="wedding.php">HOME</a></li>
                    <li><a href="catering.html">CATERING</a></li>
                    <li><a href="capacity.html">CAPACITY</a></li>
                    <li><a href="count.html">COUNT</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h2><em>Where Miracles Come True</em></h1>
                <p>A place where fantasy becomes reality. Come plan your wedding with <em>L'Amour De Ma Vie</em><br>
                    to witness all of our stunning venues, each one altered to suit your tastes. <br> From jaw-dropping
                    waterfalls
                    to top-tier ballrooms. The choice is yours.</p>
        </div>
    </section>
    <!-- Search --->
    <br>
    <br>

    <h2 class="center" style="padding-bottom: 20px;">
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span class="space"></span>
        <span>N</span>
        <span>O</span>
        <span>W</span>
    </h2>
    

    <div class='container col-4 mx-auto' style="border-style: dotted; border-color: black; height: 320px;">
        <form method="get" id="infoForm">
            <h3 style="padding-top: 10px;">Book With Us!</h3>
            <div class='row'>
                <label class="col col-5">Wedding Date:</label>
                <input id="date" class="form-control col" type="date" name="firstDate" value="" required><br>
            </div>
            <div class="row">
                <label class="col col-5">Party Size:</label>
                <input class='form-control col me-4' type="number" id="partySize" min="0" max="1000" name="PartySize" value="" required>
            </div>
            <div class="row">
                <label class="col col-5">Catering Grade:</label>
                <select id="cateringGrade" class='form-select col me-4' name="Selection" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" class="btn mx-auto col-6" value="&#10070; Search &#10070;">
            </div>
        </form>

    </div>


    <br>

    <div class="container col-9 mx-auto">

        <div class="row" id='results'>
            <!-- venue result cards will be put here -->
        </div>



        <!-- ---- Services!! ---- --->
        <section class="services w-100">
            <h2>Services We Offer</h2>
            <p>&#9825; Venues. Prices. Photos. &#9825;</p>

            <div class="row">
                <div class="service-col px-0">
                    <img src="https://i.pinimg.com/originals/e3/ae/a5/e3aea5ba6e00596e40f176895898d836.jpg">
                    <div class="layer">
                        <h3>VENUES</h3>
                    </div>
                </div>

                <div class="service-col px-0">
                    <img src="https://i.pinimg.com/originals/bd/5c/51/bd5c51e23b53b27dd674c97cd0e14df6.jpg">
                    <div class="layer">
                        <h3>PRICES</h3>
                    </div>
                </div>

                <div class="service-col px-0">
                    <img class="w-100"
                        src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/wedding-photographers-2-1585053365.jpg?crop=0.480xw:0.910xh;0.511xw,0.0898xh&resize=640:*">
                    <div class="layer">
                        <h3>PHOTOGRAPHY</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- REVIEWS -->
        <section class="reviews w-100">
            <h2>What Our Customers Have To Say</h2>
            <hr>
            <div class="row">
                <div class="review-col">
                    <img src="./Hossein.jpg" alt="Nevisi">
                    <div>
                        <p>It was great! L'Amour De Ma Vie truly knew how
                            to put all my ideas into one venue without making it tacky!
                            I could not thank them enough for making my day so wonderful.</p>
                        <h3>Dr. Hossein Nevisi</h3>
                        <p class="fa">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                    </div>
                </div>

                <div class="review-col">
                    <img src="./Batmaz.jpg" alt="Batmaz">
                    <div>
                        <p>I've always dreamed of having a Batman themed wedding
                            and the staff created exactly that. Not to mention,
                            they were kind and polite because, and I quote, "you're the boss". Brilliant!</p>
                        <h3>Dr. Firat Batmaz</h3>
                        <p class="fa">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                    </div>
                </div>
            </div>
            <hr>
        </section>
        <br>
    </div>

    <div class="container-fluid">
        <section class="contact">
            <div class="heading">
                <h2 style="font-size: 40px;">Contact Us</h2>
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/689bc9cf-da64-434e-bc24-3ecded5c79be/dcehrlt-018b936d-4ef3-4992-a1a1-aff5d066bc72.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzY4OWJjOWNmLWRhNjQtNDM0ZS1iYzI0LTNlY2RlZDVjNzliZVwvZGNlaHJsdC0wMThiOTM2ZC00ZWYzLTQ5OTItYTFhMS1hZmY1ZDA2NmJjNzIucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.kq9WfooFt2sQ_5WWiPBgNfurLEcPCuF8K1zdsxtrp40"
                    alt="">
            </div>

            <form>
                <div class="inputBox">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Your Email">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Your Number">
                    <input type="text" placeholder="Your Address">
                </div>
                <br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Enter your message!"></textarea>
                <br>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </section>
    </div>
</body>

</html>