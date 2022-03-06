<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="booking.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
</head>
<body>
<div class="background">
    <div class="main_container">
        <div class="form_container">
            <div class="form_heading">
                <h1>Book a <span>Room</span> to your <span>Destination.</span></h1>
            </div>
            <div class="form_with_heading">
                <p>Search Your Trip</p>
                <div class="main_form">
                    
                    <form action="">
                        <div class="left_side">
                            <label for="departure_name">Departure From</label>
                            <select name="departure_name" id="">
                                <option value="">Select Launch Terminal</option>
                                <option value="">Dhaka</option>
                                <option value="">Dhaka</option>

                            </select>

                            <label for="date">Departure Date</label>
                            <input type="date" id="date_picker" class="form-control" placeholder="Selcet Date">
                        </div>
                        <div class="right_side">
                            <label for="arrival_name">Arrival At</label>
                            <select name="departure_name" id="">
                                <option value="">Select Launch Terminal</option>
                                <option value="">Dhaka</option>
                                <option value="">Dhaka</option>

                            </select>

                            <input type="submit" id="form_submit" value="Get Journey">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    config = {
        dateFormat: "d-m-y",
        changeMonth: true,
        changeYear: true,
        altInput: true,
        altFormat:"j F, Y"
    }
    flatpickr("#date_picker", config);
</script>
    
</body>
</html>