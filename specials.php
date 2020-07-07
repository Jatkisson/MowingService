<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Lawn Care by James Atkisson</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
</head>
<body>
    <div id="grid">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="specials.html">Monthly Specials</a></li>
                <li><a href="equipment.html">My Equipment</a></li>
                <li><a href="process.html">Booking Process</a></li>
                <li><a href="booking.html">Book a Service</a></li>
                <li><a href="news.html">Recent News</a></li>
                <li><a href="leaveReview.html">Leave a Review</a></li>
                <li><a href="aboutMe.html">About Me</a></li>
            </ul>
        </nav>
        <header>
            <h1>Lawn Care by James Atkisson</h1>
        </header>
        <main>
            <form method="POST" id="monthlySpecials">
                <fieldset>
                    <legend>Choose a Month to Find Certain Specials</legend>
                    <label for="specials">Select a Month</label>
                        <select name="specials" id="specials">
                          <option selected="selected">July</option>
                          <option>August</option>
                          <option>September</option>
                          <option>October</option>
                          <option>November</option>
                        </select>
                </fieldset>
                <button type="submit">Check Special</button>
            </form>
            <h2>
                <?php

                $month = htmlspecialchars($_GET["specials"]);

                if ($month == "July")
                {
                    echo "July Specials.";
                }
                else if ($month == "August")
                {
                    echo "August Specials.";
                }
                ?>
                    <!-- <script>
                        // special()
                        // if (document.forms[0].monthlySpecials.value == "July") {
                        //     document.write("There is a buy one mowing, trimming, and blowing and automatically get a second for free special!")
                        // else (document.forms[0].monthlySpecials.value == "August") {
                        //     document.write("No special")
                        // }
                        var specials = $_POST['specials'];

                        switch(specials) {
                            case "July":
                                document.write("July Specials")
                                break;
                            case "August":
                                document.write("August Specials")
                                break;
                            default:
                                document.write("No Specials")
                            }

                        // document.getElementById("specials").onsubmit = function special() {
                        //     switch(document.getElementById('specials').value) {
                        //     case "July":
                        //         document.write("July Specials")
                        //         break;
                        //     case "August":
                        //         document.write("August Specials")
                        //         break;
                        //     default:
                        //         document.write("No Specials")
                        //     }
                        // };

                    </script> -->
                    </h2>
        </main>
        <aside>
                <h2 style="text-decoration: underline; font-size: 2em; text-align: center;">Recent News</h2>
                <h2>
                        <script>
                            document.write(title[0]);
                        </script>
                    </h2>
                    <p>
                        <script>
                            document.write(content[0]);
                        </script>
                    </p>
                    <h2>
                            <script>
                                document.write(title[1]);
                            </script>
                        </h2>
                        <p>
                            <script>
                                document.write(content[1]);
                            </script>
                        </p>
        </aside>
    
        <footer>
            <p>Copyright &copy; 2018 James Atkisson</p>
            &nbsp
            <p>This web page was last modified on </p>
            <script>
            document.write(document.lastModified);
            </script>
        </footer>
    </div>
</body>
</html>
