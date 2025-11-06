<!DOCTYPE html> <!-- Tää pitää olla -->
<html lang ="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Tää on skaalautuvuudelle tärkeä -->
        <title>PHP harjoitus</title>

        <meta name="description" content="Tässä voi selittää mikä tämä on ja mitä siellä on SEO haluaa tän."> <!-- SEO juttuja -->

        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1>📅Course Calendar<br> PHP harjoitus</h1>
        </header>
        
        <!-- Kello: luokka ja uniikki id live kellolle -->
         <div class="clock-container">
            <div id="clock"></div>
            </div>

        <!-- Kalenteriosio -->
        <div class="calendar">
        <div class="nav-btn-container">
            <button class="nav-btn">–⏮️</button>  
            <h2 id="monthYear" style="margin: 0"></h2>
            <button class="nav-btn">⏭️</button>
        </div>

        <div class="calendar-grid" id="calendar"></div>
        </div>

        <!-- Moduuli jossa lisätään/poistetaan/muokataan tapahtumia -->
         <div class="modal" id="eventModal">
            <div class="modal-content">
                
         <div id="eventSelectorWrapper">
            <label for="eventSelector">
                <strong>Valitse tapahtuma:</strong>
</label>
<select name="" id="eventSelector">
    <option disabled selected>Choose Event...</option>
</select>
</div>

<!--Main Form-->

<form method="POST" id="eventForm">
    <input type="hidden" name="action" id="formAction" value="add">
    <input type="hidden" name="event_id" id="eventId">

    <label for="courseName">Kurssin Nimi:</label>
    <input type="text" name="course_name" id="courseName" required>

    <label for ="instructorName">Opettajan Nimi:</label>
    <input type="text" name="instructor_name" id="instructorName" required>

    <label for="startDate">Aloitus Päivämäärä:</label>
    <input type="date" name="start_date" id="startDate" required> <!-- pitää olla toi type date koska päivämäärä -->

    <label for="endDate">Lopetus Päivämäärä:</label>
    <input type="date" name="end_date" id="endDate" required> <!-- pitää matchata noi id ja nimet -->

    <button type="submit">Save Event</button>
    
    <!-- Delete lomake joka varmistaa ootko varma poistosta -->

    <form method="POST" onsubmit="return confirm('Oletko ihan varma että haluat poistaa tämän tapahtuman?')">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="event_id" id="deleteEventId">
        <button type="submit" class="submit-btn">🚮 Roskiin</button>
</form>

<!--Peruuta toiminto nappi jos et olekaan varma-->
    <button type="button" class="submit-btn">✋ Cancel</button>

    </div>
</div> <!-- tällä kääritään modalin sisältö, pitää laittaa tää ennen tota js tiedoston hakua -->

    <script src="calendar.js"></script>
</body> 

</html>    