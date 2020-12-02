var title = document.title,
    header = document.getElementsByTagName("header"),
    footer = document.getElementsByTagName("footer"),
    code = "";


//Header

code =
    "    <img src=\"EZ_logo_white.png\" style=\"height: 75px\"/>" +
    "    EZPlanner" +
    "    <nav class=\"navbar navbar-expand-lg navbar-light\" >" +
    "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">" +
    "            <span class=\"navbar-toggler-icon\"></span>" +
    "        </button>" +
    "        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">" +
    "            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">";

if (title == "EZ Planner: Welcome!") {
    code = code +
        "<li class=\"nav-item active\">" +
        "    <a class=\"nav-link nav-current\" href = \"#\">Home<span class=\"sr-only\">(current)</span></a >" +
        "</li >";
} else {
    code = code +
        "<li class=\"nav-item\">" +
        "    <a class=\"nav-link\" href = \"#\" >Home</a >" +
        "</li >";
}
if (title == "Itinerary") {
    code = code +
        "<li class=\"nav-item active\">" +
        "    <a class=\"nav-link nav-current\" href = \"/~auchimar/CPS530/panel/groups/index.html\" >My Trips<span class=\"sr-only\">(current)</span></a > " +
        "</li >";
} else {
    code = code +
        "<li class=\"nav-item\">" +
        "    <a class=\"nav-link\" href = \"/~auchimar/CPS530/panel/groups/index.html\" >My Trips</a > " +
        "</li >";
}
if (title == "Homes for Rent") {
    code = code +
        "<li class=\"nav-item dropdown active\">" +
        "    <a class=\"nav-link dropdown-toggle nav-current\" href = \"#\" id = \"navbarDropdownMenuLink\" role = \"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">" +
        "        Lodging<span class=\"sr-only\">(current)</span>" +
        "    </a >" +
        "    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">" +
        "        <a class=\"dropdown-item\" href=\"#\">Hotels</a>" +
        "        <a class=\"dropdown-item\" href=\"/~auchimar/CPS530/panel/bnb/index.html\">Airbnb</a>" +
        "    </div>" +
        "</li >";
} else {
    code = code +
        "<li class=\"nav-item dropdown\">" +
        "    <a class=\"nav-link dropdown-toggle\" href = \"#\" id = \"navbarDropdownMenuLink\" role = \"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">" +
        "        Lodging" +
        "    </a >" +
        "    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">" +
        "        <a class=\"dropdown-item\" href=\"#\">Hotels</a>" +
        "        <a class=\"dropdown-item\" href=\"/~auchimar/CPS530/panel/bnb/index.html\">Airbnb</a>" +
        "    </div>" +
        "</li >";
}
if (title == "Book Flights" || title == "Vehicles for Rent") {
    code = code +
        "<li class=\"nav-item dropdown active\">" +
        "    <a class=\"nav-link dropdown-toggle nav-current\" href = \"#\" id = \"navbarDropdownMenuLink\" role = \"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" >" +
        "        Transportation<span class=\"sr-only\">(current)</span>" +
        "    </a >" +
        "    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">" +
    "        <a class=\"dropdown-item\" href=\"/~auchimar/CPS530/panel/flights/index.html\">Flights</a>" +
        "        <a class=\"dropdown-item\" href=\"/~auchimar/CPS530/panel/cars/index.html\">Car Rentals</a>" +
        "    </div>" +
        "</li >";
} else {
    code = code +
        "<li class=\"nav-item dropdown\">" +
        "    <a class=\"nav-link dropdown-toggle\" href = \"#\" id = \"navbarDropdownMenuLink\" role = \"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" >" +
        "        Transportation" +
        "    </a >" +
        "    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">" +
    "        <a class=\"dropdown-item\" href=\"/~auchimar/CPS530/panel/flights/index.html\">Flights</a>" +
        "        <a class=\"dropdown-item\" href=\"/~auchimar/CPS530/panel/cars/index.html\">Car Rentals</a>" +
        "    </div>" +
        "</li >";
}

code = code +
    "        </ul>" +
    "        <ul class=\"navbar-nav my-2 my-lg-0\" >" +
    "            <li class=\"nav-item active\">" +
    "                <a class=\"nav-link\" href=\"/~auchimar/CPS530/forms/login.php\">Login</a>" +
    "            </li>" +
    "        </ul >" +
    "    </div >" +
    "</nav >";

header[0].innerHTML = code;

//Footer

code =
    "<!-- Footer -->" +
    "<footer class=\"page-footer font-small special-color-dark pt-4\" >" +
    "        <!--Footer Links-- >" +
    "<div class=\"container-fluid text-center text-md-left\">" +
    "    <!-- Grid row -->" +
    "            <div class=\"row\">" +
    "        <!-- Grid column -->" +
    "                <div class=\"col-md-6 mt-md-0 mt-3\">" +
    "            <!-- Content -->" +
    "                </div>" +
    "        <!-- Grid column -->" +
    "                <hr class=\"clearfix w-100 d-md-none pb-3\">" +
    "            <!-- Grid column -->" +
    "                <div class=\"col-md-3 mb-md-0 mb-3\">" +
    "                <!-- Social Media -->" +
    "                    <h5>Social Media</h5>" +
    "                <ul class=\"list-unstyled\" style=\"font-size: 14px; color: #a0b2bc;\">" +
    "                    <li>" +
    "                        <img src=\"twitter.png\" style=\"width:25px\" /> @EZplanner" +
    "                        </li>" +
    "                    <li>" +
    "                        <img src=\"instagram.png\" style=\"width:25px\" /> ez_planner" +
    "                        </li>" +
    "                    <li>" +
    "                        <img src=\"facebook.png\" style=\"width:25px\" /> ezPlanner" +
    "                        </li>" +
    "                </ul>" +
    "            </div>" +
    "            <!-- Grid column -->" +
    "                <div class=\"col-md-3 mb-md-0 mb-3\">" +
    "                <!-- Links -->" +
    "                    <h5>Links</h5>" +
    "                <ul class=\"list-unstyled\" style=\"font-size: 14px; color: #a0b2bc; \">" +
    "                    <li>" +
    "                        <a href=\"#\">About Us</a>" +
    "                    </li>" +
    "                    <li>" +
    "                        <a href=\"#\">FAQ</a>" +
    "                    </li>" +
    "                    <li>" +
    "                        <a href=\"#\">Terms and Conditions</a>" +
    "                    </li>" +
    "                </ul>" +
    "            </div>" +
    "            <!-- Grid column -->" +
    "            </div>" +
    "        <!-- Grid row -->" +
    "        </div>" +
    "    <!-- Footer Links -->" +
    "        <!-- Copyright -->" +
    "        <div class=\"footer-copyright text-center py-3\">" +
    "        © 2020 Copyright: EZPlanner.com" +
    "        </div>" +
    "    <!-- Copyright -->";

footer[0].innerHTML = code;