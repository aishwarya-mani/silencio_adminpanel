<aside id="sidebar" class="sidebar c-overflow">
   
    <ul class="main-menu">
        <li class="<? if((isset ($current_page)) && ($current_page == "index.php")) echo "active"; ?>">
            <a href="index.php"><i class="zmdi zmdi-home"></i> Home</a>
        </li>
        <li class="<? if((isset ($current_page)) && ($current_page == "departures.php")) echo "active"; ?>">
            <a href="departures.php"><i class="material-icons">flight_takeoff</i> Departures</a>
        </li>
        <li class="<? if((isset ($current_page)) && ($current_page == "arrivals.php")) echo "active"; ?>">
            <a href="arrivals.php"><i class="material-icons">flight_land</i> Arrivals</a>
        </li>
        <li class="<? if((isset ($current_page)) && ($current_page == "offers.php")) echo "active"; ?>">
            <a href="offers.php"><i class="material-icons">card_gifcard</i> Offers</a>
        </li>
        <li class="<? if((isset ($current_page)) && ($current_page == "new_announcement.php")) echo "active"; ?>">
            <a href="new_announcement.php"><i class="material-icons">add_alert</i> New Announcement</a>
        </li>
       
    </ul>
</aside>
